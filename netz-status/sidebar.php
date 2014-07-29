<div id="sidebar">

  <h2>OLSR-Abfrage von </h2>
  	<p>
	<b>IP-Adresse: <a target="_blank" href="http://<?php echo $_SERVER['REMOTE_ADDR']; ?>/cgi-bin-nodes.html"><?php echo $_SERVER['REMOTE_ADDR']; ?></a></b>
	</p>

  <h2>VPN-Server(1)</h2>
  <p>	
	Der <b>primäre</b> VPN-Server stellt das Hauptgateway ins Internet.  
  </p>
  <p>
	<b>Nachbarn: <span style="color:#00cc00"><?php include('anzahl-nachbarn.php'); ?></span> 
	   Halle: <span style="color:#00cc00"><?php include('anzahl-nachbarn-halle.php'); ?></span></b>
  </p>
	<p>  
	<b>Freifunk-VPN: <?php include('vpn.php'); ?></b>
	</p>
  <p>
	<b>Internetzugang: <?php include('gateway.php'); ?></b>
  </p>


  <h2>VPN-Server(2)</h2>
  <p>	
	Der <b>sekundäre</b> VPN-Server stellt das Backupgateway ins Internet. 
  </p>
  <p>
	<b>Nachbarn: <span style="color:#00cc00"><?php include('http://freifunk-kanal13.de/netz-status/anzahl-nachbarn.php'); ?></span> 
	   Halle: <span style="color:#00cc00"><?php include('http://freifunk-kanal13.de/netz-status/anzahl-nachbarn-halle.php'); ?></span></b>
  </p>
	<p>  
	<b>Freifunk-VPN: <?php include('http://freifunk-kanal13.de/netz-status/vpn.php'); ?></b>
	</p>
  <p>
	<b>Internetzugang: <?php include('http://freifunk-kanal13.de/netz-status/gateway.php'); ?></b>
  </p>


  <h2>Serverbrücke</h2>
	<p>  
	<b>Serverbrücke: <?php include('http://freifunk-kanal13.de/netz-status/serverbruecke.php'); ?></b>
	</p>

  <h2>VPN-Tunnel</h2>
  <p>	
	Wir benutzen im Halle'schen Freifunknetzwerk nur verschlüsselte VPN-Tunnel.
  </p>

  <h2>Störerhaftung</h2>
  <p>	
	Der Internetdatenverkehr wird über die Gatewayserver umgeleitet, um die Freifunker welche ihren Internetanschluss mit anderen teilen vor der Störerhaftung zu schützen. 
  </p>

</div>
