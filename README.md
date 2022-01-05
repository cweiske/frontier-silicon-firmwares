# Frontier Silicon firmware binaries

Blog post: https://cweiske.de/tagebuch/frontier-firmware-dl.htm

## Known radios

- `FS2026-0200-0233`: Sansui WLD700L mini-hifi
- `FS2026-0200-0273`: Peaq PDR300
- `FS2026-0200-0328`: Sangean DDR-62

- `FS2026-0500-0015`: Pinell Supersound II
- `FS2026-0500-0020`: Renkforce IR-1600
- `FS2026-0500-0027`: Medion Life P85023 (MD 86891)
- `FS2026-0500-0034`: TechniSat DigitRadio 450
- `FS2026-0500-0037`: Roberts iStream Revival 2
- `FS2026-0500-0039`: Revo Super Connect
- `FS2026-0500-0041`: Roberts Stream 93i
- `FS2026-0500-0047`: Medion Life E85006 (MD 86185)
- `FS2026-0200-0048`: Roberts Stream 83i
- `FS2026-0500-0050`: Medion Life P85040 (MD 86988)
- `FS2026-0500-0052`: Technisat DigitRadio 580
- `FS2026-0500-0058`: Soundmaster IR3000DAB
- `FS2026-0200-0059`: Muvid IR 615
- `FS2026-0500-0067`: Hama DIR3100
- `FS2026-0500-0069`: ???
- `FS2026-0500-0072`: Noxon iRadio 410
- `FS2026-0500-0074`: Peaq PDR 210
- `FS2026-0500-0077`: Hama DIR3000 v2
- `FS2026-0500-0080`: Sangean WFR-28C
- `FS2026-0500-0082`: Sangean WFR-29C
- `FS2026-0500-0084`: Hama IR110
- `FS2026-0500-0092`: Grundig Cosmopolit 4
- `FS2026-0500-0094`: Ruack R2 Mk3
- `FS2026-0500-0095`: Dual Radiostation IR 6S
- `FS2026-0500-0097`: Medion Life P85035
- `FS2026-0500-0104`: Hama IR320
- `FS2026-0500-0106`: Silvercrest SIRD 14A2
- `FS2026-0500-0115`: Hama HiFi Tuner DIT2000
- `FS2026-0500-0127`: Noxon Nova M
- `FS2026-0500-0138`: Sangean WFR-28
- `FS2026-0500-0162`: Revo Pixis RX
- `FS2026-0500-0178`: Philips AE800
- `FS2026-0500-0214`: Denver IR100
- `FS2026-0500-0228`: Goodmans Heritage Connect
- `FS2026-0500-0234`: Peaq PDR350BT
- `FS2026-0500-0237`: Roberts Stream 104
- `FS2026-0500-0240`: TechniSat DigitRadio 520
- `FS2026-0500-0259`: Silvercrest SMRS30A1
- `FS2026-0500-0260`: Silvercrest SMRS35A1
- `FS2026-0500-0265`: Silvercrest SIRD 14C1
- `FS2026-0500-0277`: Medion P85111 (MD 87295) [2015]
- `FS2026-0500-0286`: Technisat DigitRadio 580
- `FS2026-0500-0308`: Pure Evoke C-F6
- `FS2026-0500-0373`: Hama DIR3100
- `FS2026-0500-0388`: Silvercrest SIRD 14C2
- `FS2026-0500-0461`: NUMAN One 2.1
- `FS2026-0500-0477`: Medion P85105 (MD 87505)
- `FS2026-0500-0485`: Silvercrest SMRS30A1
- `FS2026-0500-0487`: Silvercrest SMRS18A1
- `FS2026-0500-0499`: Albrecht DR 890 CD Internetradio
- `FS2026-0500-0517`: Silvercrest SIRD 14 C3
- `FS2026-0500-0528`: Hama IR350
- `FS2026-0500-0549`: Medion MD 87805
- `FS2026-0500-0577`: Medion MD 87990
- `FS2026-0500-0601`: Medion P85111 (MD 87295) [2017]
- `FS2026-0500-0643`: Ruark Audio MRx
- `FS2026-0500-0710`: Medion MD 87805
- `FS2026-0500-0783`: Teufel Radio 3sixty [2020]
- `FS2026-0500-0795`: Sonoro Prestige
- `FS2026-0500-0802`: Technisat DigitRadio 631
- `FS2026-0500-0805`: Medion P85289 (MD 88289)

- `FS2340-0000-0025`: Hama DIT2006BT
- `FS2340-0000-0061`: Blaupunkt Napoli (IRD 400)
- `FS2340-0000-0158`: Karcher DAB 7000i


Name Parts:

- `FS2026`: Venice 6 module
  - `0200`: Venice 6.2
  - `0500`: Venice 6.5
- `FS2340`: Venice X module [brochure](https://frontiersmart.com/sites/default/files/Venice-X_PB.pdf)

Most names taken from
http://iradioforum.net/forum/index.php?topic=2099.msg18986#msg18986



## FS2026 updates
### FS2026 Update check
Example URL:

```
https://update.wifiradiofrontier.com/FindUpdate.aspx?mac=0022616C4223&customisation=ir-mmi-FS2026-0500-0084&version=2.11.16.EX69632-2A9
```

Answer:

```xml
<?xml version="1.0" encoding="UTF-8" ?>
<updates>
  <software customisation="ir-mmi-FS2026-0500-0084"
            version="2.11.16.EX69632-2A10">
    <copyright>Copyright 2018 Frontier Silicon Ltd</copyright>
    <download>http://update.wifiradiofrontier.com/Update.aspx?c=ir-mmi-FS2026-0500-0084&amp;m=0022616C4223&amp;v=2.11.16.EX69632-2A9&amp;t=Cust-File&amp;n=2.11.16.EX69632-2A10&amp;f=/updates/ir-mmi-FS2026-0500-0084.2.11.16.EX69632-2A10.isu.bin</download>
    <mandatory>false</mandatory>
    <md5>849c5926e51a1e8cc651606f45a6ff3f</md5>
    <product>Internet Radio</product>
    <size>2428339</size>
    <summary>MP Candidate</summary>
    <vendor>Frontier Silicon</vendor>
  </software>
</updates>
```


### FS2026: Download URL

All parameters except `f` are optional
http://update.wifiradiofrontier.com/Update.aspx?f=/updates/ir-mmi-FS2026-0500-0084.2.11.16.EX69632-2A10.isu.bin


### FS2026: Update script
Run `update.py` to automatically check for updates of existing firmware files.


## FS2340

It seems that Frontier Silicon changed download URI and firmware format for FS2340 devices.

Another difference is that the firmware is encrypted.
After the `enco` line some unknown binary content is following.
Most likely the key to decrypt the firmware is placed inside the device during production.


### FS2340: Update check
New update URL:

```
https://update.wifiradiofrontier.com/sr/FindUpdate.aspx?mac=123&customisation=ir-cui-FS2340-0000-0061&version=V4.2.10.4ad838-1B18
```

and reply is

```xml
<?xml version="1.0" encoding="UTF-8" ?>
<updates>
  <software customisation="ir-cui-FS2340-0000-0061"
            version="V4.5.6.9526d3-2A1">
    <copyright>Copyright 2020 Frontier Silicon Ltd</copyright>
    <download>https://update.wifiradiofrontier.com/sr/Update.aspx?c=ir-cui-FS2340-0000-0061&amp;m=123&amp;v=V4.2.10.4ad838-1B18&amp;t=Cust-Dir&amp;n=V4.5.6.9526d3-2A1&amp;f=/srupdates/ir-cui-FS2340-0000-0061/ir-cui-FS2340-0000-0061_V4.5.6.9526d3-2A1.isu.bin</download>
    <mandatory>false</mandatory>
    <md5>d47c2e61efcef905ec8bb1c258e4fb9a</md5>
    <product>Internet Radio</product>
    <size>3244413</size>
    <summary>Copyright 2007,2008,2009 Frontier Silicon Ltd</summary>
    <vendor>Frontier Silicon</vendor>
  </software>
</updates>
```

### FS2340: Download URL
All parameters except `f` seem to be optional:

```
https://update.wifiradiofrontier.com/sr/Update.aspx?f=/srupdates/ir-cui-FS2340-0000-0061/ir-cui-FS2340-0000-0061_V4.5.6.9526d3-2A1.isu.bin
```

This way its also possible to construct url for devices without actual update, e.g. for the Hama DIT2006BT Radio:

```
https://update.wifiradiofrontier.com/sr/Update.aspx?f=/srupdates/ir-cui-FS2340-0000-0025/ir-cui-FS2340-0000-0025_V4.5.10.46f70b-1A13.isu.bin
```
