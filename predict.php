<?php
//GET Parameters



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


$lotsize = 0;
$bathrms = 0;
$stories = 0;
$driveway = 0;
$recroom = 0;
$fullbase = 0;
$gashw = 0;
$airco =0;
$garagepl = 0;
$prefarea =0; 
//Execute the model
system("/usr/anaconda/bin/python3 home.py ".$lotsize." ".$bathrms." ".$stories." ".$driveway." ".$recroom." ".$fullbase." ".$gashw." ".$airco." ".$garagepl." ".$prefarea." 2>&1");



?>
