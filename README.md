# Seneye.me PHP API

Rough class to allow integration into Seneye.me public API

### TODO




### Below is sample code to hook into the PHP Class File

```
<?php
include "seneye.php";
//Initate Class
$seneye = new Seneye();
//Set Credential Variables for seneye.me
$seneye->username = "example";
$seneye->password = "password123";
$seneye->deviceid = "11111";

//Get stats from all devices on seneye.me
$stats = $seneye->listdevices();
//Echo current probe temperature
echo $stats->exps->temp->curr;


//Get stats for individual device
$stats = $seneye->getdevinfo();
//Echo Slide expiry time
echo $stats->status->slide_expires;
?>
```
