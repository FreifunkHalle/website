<?php
session_set_cookie_params(10800);
session_start();


$datei = fopen("counter-wlan-nutzer.txt","r+");
$counterstand = fgets($datei, 10);

if($counterstand == "")
   {
   $counterstand = 0;
   }

if(!isset($_SESSION['counter_ip']))
   {
   $counterstand++;
   rewind($datei);
   fwrite($datei, $counterstand);
   $_SESSION['counter_ip'] = true;
   }

//echo $counterstand;
fclose($datei);
?>