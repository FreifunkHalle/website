<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
     "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-15">
  <title>Freifunk Halle :: Technik</title>
  <?php require_once("../header-html.php"); ?>
</head>
<body>
<?php require_once("../header.php"); ?>

<div id="content">

<?php require_once("technik-sidebar.php"); ?>

  	<div class="teaser">
    	<h2>Technik der Community Netzwerke</h2>

		<p>
			Wir nutzen Meshing, um eine selbst organisierende Infastruktur aufzubauen. 
			Jeder Nutzer stellt seinen Freifunk Router f�r den freien Datentransfer der anderen zur Verf�gung, 
			so enteht ein Gemeinschaftsnetz.
		</p>


		<h3>Was sind Mesh-Networks und wie funktionieren Meshing-Protokolle?</h3>

		<p>
			Jeder Freifunk-Router bildet einen Knoten in unserem Netzwerk. 
			Alle Knoten agieren dabei als Repeater, die die Daten von einem Knotenpunkt zum n�chsten weiter geben. 
			Stell Dir vor Du m�chtest ein Paket �ber Dein Netzwerk von Freunden verschicken. 
			Du gibts es einem Freund mit, der nur auf den Bestimmungsort guckt und es dem n�chsten Freund in der entsprechenden Richtung weiter gibt. 
			So lange bis das Paket angekommen ist. 
			Dabei berechnet ein Routenplaner entsprechend der Verf�gbarkeit der Freunde die optimale Route.
		</p>

		<p>
			Du k�nntest nat�rlich auch einen kommerziellen Paketdienst nutzen, der Geld kostet, 
			der in die Pakete hineinschaut und dann entscheidet, 
			welche er mit hoher Geschwindigkeit weiterleitet und welche nicht. 
			Wom�glich l��t sich dieser Betreiber auch von Institutionen beeinflussen, 
			die den Inhalt der Pakete in der Paketzentrale begutachten wollen oder ihn unter Druck setzen, 
			die Lieferungen von der Zentrale nicht mehr zu verteilen. 
			Auch Unf�lle oder Naturkatastrophen k�nnten diese Verteilstelle ausl�schen �
		</p>

		<p>
			In Mesh-Netzwerken gibt es keine solche Zentrale, jeder Knoten mit mehreren anderen Knoten verbunden. 
			Wenn ein Knoten aus dem Netzwerk ausf�llt, z.B. durch einen Hardwaredefekt oder irgendeinem anderen Grund, 
			suchen dessen Nachbarn automatisch eine andere Route.
		</p>

		<h3>Man kann Internet �ber das Netzwerk teilen</h3>

		<p>
			Wie Du nun wei�t, bildet das Freifunknetz eine eigene Infrastruktur unabh�ngig vom Internet in dem Menschen lokal kostenlos Webserver und 
			Dienste betreiben k�nnen, um Daten auszutauschen, zu telefonieren oder Radio zu machen. 
			Denk mal dar�ber nach, wieviel Deiner Suchanfragen lokalen Bezug haben, Kinoprogramm, 
			sich mit Leuten aus der Nachbarschaft verabreden u.s.w.
		</p>

		<p>
			Nun kann man an einer Stelle den Zugang zum Internet bezahlen, 
			das Modem per Kabel an einen Router anschliessen und es so den Nachbarn zur Verf�gung stellen. 
			Gleiches funktioniert auch mit einem Zugang zum Telefonie Festnetz. 
			Viele geben einen Teil Ihrer Bandbreite in das Netz, andere finanzieren gemeinsam den Zugang. 
			Um die privaten Anbieter des Internetzugangs in freien Netzen vor der unsinnigen St�rerhaftung zu sch�tzen, 
			b�ndeln Freifunk Router den Internet-Traffic und routen ihn �ber eigene Gateways.
		</p>

		<h3>Welche Hardware wird benutzt?</h3>

		<p>
			Zum Aufbau dieser Maschennetze nutzen wir neben normalen WLAN-Routern f�r den Innenbereich auch wetterfeste Au�eninstallationen, 
			auf denen die Freifunk-Firmware als Betriebssystem l�uft und optimieren die Verbindungen mit Richtantennen. 
			Mesh Networks k�nnen feste oder mobile, wlanf�hige Ger�te miteinbeziehen. 
			So lassen sich beispielsweise auch Laptops und Telefone als Knotenpunkte in Freifunk-Netzen konfigurieren. 
			Welche Hardware f�r Deine Zwecke am besten passt, erf�hrst du beim Stammtisch oder im Wiki.
		</p>

		<h3>Nat�rlich Free Software �</h3>

		<p>
			Die Hardware wird mit der Freifunk-Firmware bespielt, einer modifizierten Version von OpenWrt (Linux-Distribution). 
			Im Gegensatz zu den meisten, von den Herstellern mitgelieferten Betriebssystemen l�sst sich OpenWrt vom Anwender komplett selbst konfigurieren.
		</p>

		<p>
			Dazu verf�gt der �geflashte� Router �ber eine Benutzeroberfl�che, 
			in der man einfach Einstellungen vornehmen kann, 
			�hnlich wie man es von �normalen� WLAN-Routern kennt. 
			Das Webinterface ist in LuCI erstellt, 
			f�r die es vorkonfigurierte Freifunk-Plug-ins und Themes gibt.
		</p>

	
	</div class="teaser0">

</div id="content">
<?php require_once("../footer.html"); ?>
</body>
</html> 
