Frontier Silicon firmware binaries

https://cweiske.de/tagebuch/frontier-firmware-dl.htm

## Example to check for available update
https://update.wifiradiofrontier.com/FindUpdate.aspx?mac=0022616C4223&customisation=ir-mmi-FS2026-0500-0084&version=2.11.16.EX69632-2A9
Answer:
'''
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
'''

## Example for Download URL
All parameters except f are optional
http://update.wifiradiofrontier.com/Update.aspx?f=/updates/ir-mmi-FS2026-0500-0084.2.11.16.EX69632-2A10.isu.bin
