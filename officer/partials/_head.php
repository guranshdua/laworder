<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Law and Order</title>
<link rel="icon" type="image" href="../../images/ISTE.ico" />
<!-- plugins:css -->
<link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
<link rel="stylesheet" href="../../vendors/iconfonts/font-awesome/css/font-awesome.css">

<!-- endinject -->
<!-- plugin css for this page -->
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="../../css/style.css">

<!-- endinject -->
<?php
require("../auth/auth.php");
require("../auth/db.php");
$startTime = date("Y-m-d H:i:s");
$cenvertedTime = date('Y-m-d H:i:s',strtotime('+5 hour +30 minutes',strtotime($startTime)));
$unixTimestamp = strtotime($cenvertedTime);
$dayOfWeek = date("l", $unixTimestamp);
$datetime = explode(" ",$cenvertedTime);
$date=$datetime[0];
$time=$datetime[1];
$month=date('m',strtotime($date));
$day=date('d',strtotime($date));
 ?>
