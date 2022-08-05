<?php
//GET Parameters
// instance ip address 18.222.253.208

$lotsize = $_GET["lotsize"];
$bathrms = $_GET["bathrms"];
$stories = $_GET["stories"];
$driveway = $_GET["driveway"];
$recroom = $_GET["recroom"];
$fullbase = $_GET["fullbase"];
$gashw = $_GET["gashw"];
$airco = $_GET["airco"];
$garagepl = $_GET["garagepl"];
$prefarea = $_GET["prefarea"];


//this is way to pass argument in php through which model will get execute.


//http://here is instance ip address which is now(18.222.253.208)/predict.php?lotsize=2000&driveway=1&recroom=1&fullbase=1&gashw=1&airco=1&garagepl=1&prefarea=1


//Execute the model
system("/usr/anaconda/bin/python3 home.py ".$lotsize." ".$bathrms." ".$stories." ".$driveway." ".$recroom." ".$fullbase." ".$gashw." ".$airco." ".$garagepl." ".$prefarea." 2>&1");



?>

