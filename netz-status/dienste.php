<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
     "http://www.w3.org/TR/html4/loose.dtd">

<HTML>
<HEAD>
  <TITLE>Freifunk Halle - IPv4-Nachbarn</TITLE>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-15">
  <meta http-equiv="refresh" content="600; URL=/netz-status/dienste.php">
  <?php include("../header-html.php"); ?>
</HEAD>
<BODY>

<?php include_once("../header.php"); ?>

  <div id="content">
    <!--Sidebar-->
    <?php require_once("sidebar-dienste.php"); ?>

    <div class="teaser">
      <h2>	Dienste sind nur im Freifunknetz erreichbar! 
		<font size="-2"> Seite wird alle 10 Minuten aktualisert</font>		
      </h2>

      <h3>Die Liste wurde dynamisch erzeugt 

<?php
// Beginn Einfügung Zeitzohne auf Europa Berlin setzen
date_default_timezone_set('Europe/Berlin'); 
$datum = date("d.m.Y");
$uhrzeit = date("H:i");
echo "am ", $datum," um ",$uhrzeit," Uhr.";
?>
      </h3>
        <?php include('services.php'); ?>
    </div class="teaser">
  </div id="content">

  <?php require_once("../footer.html"); ?>

</BODY>
</HTML>
