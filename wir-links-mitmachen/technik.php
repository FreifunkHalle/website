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
			Jeder Nutzer stellt seinen Freifunk Router für den freien Datentransfer der anderen zur Verfügung, 
			so enteht ein Gemeinschaftsnetz.
		</p>


		<h3>Was sind Mesh-Networks und wie funktionieren Meshing-Protokolle?</h3>

		<p>
			Jeder Freifunk-Router bildet einen Knoten in unserem Netzwerk. 
			Alle Knoten agieren dabei als Repeater, die die Daten von einem Knotenpunkt zum nächsten weiter geben. 
			Stell Dir vor Du möchtest ein Paket über Dein Netzwerk von Freunden verschicken. 
			Du gibts es einem Freund mit, der nur auf den Bestimmungsort guckt und es dem nächsten Freund in der entsprechenden Richtung weiter gibt. 
			So lange bis das Paket angekommen ist. 
			Dabei berechnet ein Routenplaner entsprechend der Verfügbarkeit der Freunde die optimale Route.
		</p>

		<p>
			Du könntest natürlich auch einen kommerziellen Paketdienst nutzen, der Geld kostet, 
			der in die Pakete hineinschaut und dann entscheidet, 
			welche er mit hoher Geschwindigkeit weiterleitet und welche nicht. 
			Womöglich läßt sich dieser Betreiber auch von Institutionen beeinflussen, 
			die den Inhalt der Pakete in der Paketzentrale begutachten wollen oder ihn unter Druck setzen, 
			die Lieferungen von der Zentrale nicht mehr zu verteilen. 
			Auch Unfälle oder Naturkatastrophen könnten diese Verteilstelle auslöschen 
		</p>

		<p>
			In Mesh-Netzwerken gibt es keine solche Zentrale, jeder Knoten mit mehreren anderen Knoten verbunden. 
			Wenn ein Knoten aus dem Netzwerk ausfällt, z.B. durch einen Hardwaredefekt oder irgendeinem anderen Grund, 
			suchen dessen Nachbarn automatisch eine andere Route.
		</p>

		<h3>Man kann Internet über das Netzwerk teilen</h3>

		<p>
			Wie Du nun weißt, bildet das Freifunknetz eine eigene Infrastruktur unabhängig vom Internet in dem Menschen lokal kostenlos Webserver und 
			Dienste betreiben können, um Daten auszutauschen, zu telefonieren oder Radio zu machen. 
			Denk mal darüber nach, wieviel Deiner Suchanfragen lokalen Bezug haben, Kinoprogramm, 
			sich mit Leuten aus der Nachbarschaft verabreden u.s.w.
		</p>

		<p>
			Nun kann man an einer Stelle den Zugang zum Internet bezahlen, 
			das Modem per Kabel an einen Router anschliessen und es so den Nachbarn zur Verfügung stellen. 
			Gleiches funktioniert auch mit einem Zugang zum Telefonie Festnetz. 
			Viele geben einen Teil Ihrer Bandbreite in das Netz, andere finanzieren gemeinsam den Zugang. 
			Um die privaten Anbieter des Internetzugangs in freien Netzen vor der unsinnigen Störerhaftung zu schützen, 
			bündeln Freifunk Router den Internet-Traffic und routen ihn über eigene Gateways.
		</p>

		<h3>Welche Hardware wird benutzt?</h3>

		<p>
			Zum Aufbau dieser Maschennetze nutzen wir neben normalen WLAN-Routern für den Innenbereich auch wetterfeste Außeninstallationen, 
			auf denen die Freifunk-Firmware als Betriebssystem läuft und optimieren die Verbindungen mit Richtantennen. 
			Mesh Networks können feste oder mobile, wlanfähige Geräte miteinbeziehen. 
			So lassen sich beispielsweise auch Laptops und Telefone als Knotenpunkte in Freifunk-Netzen konfigurieren. 
			Welche Hardware für Deine Zwecke am besten passt, erfährst du beim Stammtisch oder im Wiki.
		</p>

		<h3>Natürlich Free Software </h3>

		<p>
			Die Hardware wird mit der Freifunk-Firmware bespielt, einer modifizierten Version von OpenWrt (Linux-Distribution). 
			Im Gegensatz zu den meisten, von den Herstellern mitgelieferten Betriebssystemen lässt sich OpenWrt vom Anwender komplett selbst konfigurieren.
		</p>

		<p>
			Dazu verfügt der geflashte Router über eine Benutzeroberfläche, 
			in der man einfach Einstellungen vornehmen kann, 
			ähnlich wie man es von normalen WLAN-Routern kennt. 
			Das Webinterface ist in LuCI erstellt, 
			für die es vorkonfigurierte Freifunk-Plug-ins und Themes gibt.
		</p>

	
	</div class="teaser0">

</div id="content">
<?php require_once("../footer.html"); ?>
</body>
</html> 
