#!/usr/bin/env php
<?php
/**
 * Check if an update exists for a frontier smart radio
 *
 * Radio ID:
 * ./find-update.php FS2026-0500-0612
 * ./find-update.php FS2340-0000-0095
 * ./find-update.php ir-mmi-FS2026-0500-0612
 * ./find-update.php ir-cui-FS2340-0000-0095
 *
 * Radio ID + version:
 * ./download.php FS2026-0500-0612 2.12.21c.EX70178-1A27
 */

list($module, $subModule, $device, $version) = handleCliArgs();
if ($version === null) {
    error('No known version for this radio in known-versions.txt');
}

echo sprintf(
    "Device: %s-%s-%s version %s\n\n",
    $module, $subModule, $device, $version
);

$downloadUrl = getVersionDownloadUrl($module, $subModule, $device, $version);
echo "Current version download URL:\n"
    . $downloadUrl . "\n\n";

$updateInfoUrl = getUpdateInfoUrl($module, $subModule, $device, $version);
echo "Update info URL:\n" . $updateInfoUrl . "\n\n";

$updateDownloadUrl = getUpdateDownloadUrl($updateInfoUrl);
if ($updateDownloadUrl !== null) {
    echo "Update available!\n";
    echo "Update download URL:\n" . $updateDownloadUrl . "\n";
    exit(0);
}

echo "No update available\n";
exit(0);

/**
 *
 */
function getUpdateDownloadUrl($updateInfoUrl)
{
    $context = stream_context_create(
        [
            'http' => [
                'ignore_errors' => true
            ]
        ]
    );
    $body = file_get_contents($updateInfoUrl, false, $context);
    $firstHeader = $http_response_header[0] ?? null;
    if ($firstHeader === null) {
        error('Download failed');
    }

    $parts = explode(' ', $firstHeader);
    $statusCode = $parts[1] ?? null;
    if ($statusCode == 404) {
        error('No update available');
    }
    if (intval($statusCode / 100) != 2) {
        error('Status code is not 200 but ' . $statusCode);
    }

    //we cannot check for MIME type; it's always text/plain
    $sx = simplexml_load_string(trim($body));
    if ($sx === false) {
        error(
            "Unexpected response: Cannot parse XML\n\n"
            . var_export($http_response_header, true)
            .  $body
        );
    }

    $url = $sx->software?->download ?? null;
    if ($url !== null) {
        return (string) $url;
    } else {
        return null;
    }
}

/**
 * @param $module    "FS2026"
 * @param $subModule "0500", "0000"
 * @param $device    "0061"
 * @param $version   "V4.5.11.0d97db-1A21"
 */
function getUpdateInfoUrl($module, $subModule, $device, $version)
{
    if ($module == 'FS2026' && $subModule == '0500') {
        return 'https://update.wifiradiofrontier.com/FindUpdate.aspx'
            . '?mac=0022616C4223'
            . '&customisation=ir-mmi-' . $module . '-' . $subModule . '-' . $device
            . '&version=' . urlencode($version);

    } elseif ($module == 'FS2340' && $subModule == '0000') {
        return 'https://update.wifiradiofrontier.com/sr/FindUpdate.aspx'
            . '?mac=0022616C4223'
            . '&customisation=ir-cui-' . $module . '-' . $subModule . '-' . $device
            . '&version=' . urlencode($version);
    }

    error('Download script cannot handle that device: ' . $module . '-' . $subModule);
}

/**
 * @param $module    "FS2026"
 * @param $subModule "0500", "0000"
 * @param $device    "0061"
 * @param $version   "V4.5.11.0d97db-1A21"
 */
function getVersionDownloadUrl($module, $subModule, $device, $version)
{
    $versionNoV = ltrim($version, 'V');

    if ($module == 'FS2026' && $subModule == '0500') {
        return 'http://update.wifiradiofrontier.com/Update.aspx'
            . '?f='
            . '/updates'
            . '/ir-mmi-FS2026-0500-' . $device . '.' . $versionNoV . '.isu.bin';

    } elseif ($module == 'FS2340' && $subModule == '0000') {
        return 'http://update.wifiradiofrontier.com/sr/Update.aspx'
            . '?f='
            . '/srupdates'
            . '/ir-cui-FS2340-0000-' . $device
            . '/ir-cui-FS2340-0000-' . $device . '_' . $version . '.isu.bin';
    }

    error('Download script cannot handle that device: ' . $module . '-' . $subModule);
}

/**
 * @return "V4.5.6.9526d3-2A1"
 */
function findVersion($module, $subModule, $device)
{
    $needle = $module . '-' . $subModule . '-' . $device;

    $lines = array_reverse(file(__DIR__ . '/known-versions.txt', FILE_IGNORE_NEW_LINES));
    $last = null;
    foreach ($lines as $line) {
        if (strpos($line, $needle) !== false) {
            $last = $line;
            break;
        }
    }
    if ($last === null) {
        return null;
    }

    $parts = explode('_', $last);
    if (!isset($parts[1])) {
        error("Invalid known version:\n" . $last);
    }
    return $parts[1];
}

function handleCliArgs()
{
    $customization = $GLOBALS['argv'][1] ?? null;
    $version       = $GLOBALS['argv'][2] ?? null;

    if ($customization === null) {
        fwrite(STDERR, "customization parameter missing ('FS2026-0200-0048')\n");
        exit(1);
    }

    $module = $subModule = $device = null;
    $custParts = explode('-', $customization);
    foreach ($custParts as $num => $val) {
        if (substr($val, 0, 2) == 'FS') {
            $module = $val;
            $subModule = $custParts[$num + 1] ?? null;
            $device    = $custParts[$num + 2] ?? null;
            break;
        }
    }
    if ($module === null) {
        fwrite(STDERR, "Customization misses 'FS' part\n");
        exit(1);
    }
    if ($subModule === null || $device === null) {
        fwrite(STDERR, "Customization incomplete\n");
        exit(1);
    }

    if ($version === null) {
        $version = findVersion($module, $subModule, $device);
    }

    return [$module, $subModule, $device, $version];
}

function error($msg)
{
    fwrite(STDERR, $msg . "\n");
    exit(1);
}
