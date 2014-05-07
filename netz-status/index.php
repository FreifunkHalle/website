<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
     "http://www.w3.org/TR/html4/loose.dtd">

<HTML>
<HEAD>
  <TITLE>Freifunk Halle - netz-status</TITLE>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-15">
  <meta http-equiv="refresh" content="300; URL=../netz-status/">
  <?php require_once("../header-html.php"); ?>
</HEAD>
<BODY>

<?php require_once("../header.php"); ?>

<div id="content">

  <?php require_once("sidebar.php"); ?>
  <div class="teaser">

    <h2>
	IPv4-Nachbarn der VPN-Server 		
    <?php
		date_default_timezone_set('Europe/Berlin'); 
		$uhrzeit = date("H:i");
		echo " um ",$uhrzeit," Uhr";
    ?>
      <font size="-2"> Seite wird alle 5 Minuten aktualisert</font>
    </h2>

    <h3>
		VPN-Server(1): Nachbarn (alle / Halle):
		<span style="color:#00cc00">
		  <?php include('anzahl-nachbarn.php'); ?>
		</span>
		/  
		<span style="color:#00cc00">
		  <?php include('anzahl-nachbarn-halle.php'); ?>
		</span>
		; Internetzugang über Schweden: <?php include('gateway.php'); ?>
    </h3>
    <?php include('olsr.php'); ?>

    <h3>
		VPN-Server(2): Nachbarn (alle / Halle): 
		<span style="color:#00cc00">
		  <?php include('http://freifunk-kanal13.de/netz-status/anzahl-nachbarn.php'); ?>
		</span> 
		/
		<span style="color:#00cc00">
		  <?php include('http://freifunk-kanal13.de/netz-status/anzahl-nachbarn-halle.php'); ?>
		</span>
  		; Internetzugang über Rumänien: <?php include('http://freifunk-kanal13.de/netz-status/gateway.php'); ?>
    </h3>
				
    <?php include('http://freifunk-kanal13.de/netz-status/olsr.php'); ?>

    <h3>Legende:</h3>
      <ul>   
        <li><strong>LQ: </strong>Erfolgsquote vom Nachbarn empfangener Pakete</li>
        <li><strong>NLQ: </strong>Erfolgsquote zum Nachbarn gesendeter Pakete</li>
        <li><strong>ETX: </strong>Zu erwartende Sendeversuche pro Paket</li>
        <ul>   
          <li><strong><span style="color:#00cc00">Grün</span></strong>:Sehr gut (ETX &lt; 2) </li>
          <li><strong><span style="color:#ffcb05">Gelb</span></strong>:Gut (2 &lt; ETX &lt; 4)</li>
          <li><strong><span style="color:#ff6600">Orange</span></strong>:Noch nutzbar (4 &lt; ETX &lt; 10)</li>
          <li><strong><span style="color:#bb3333">Rot</span></strong>:Schlecht (ETX &gt; 10)</li>
          <li><strong><span style="color:#000000">Schwarz</span></strong>:Kaputt (ETX = 0)</li>
        </ul>
      </ul>

    </div class="teaser">

  </div id="content">

  <?php require_once("../footer.html"); ?>
</BODY>
</HTML>
