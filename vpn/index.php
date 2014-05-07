<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
     "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Freifunk Halle :: Zertifikatgenerator</title>
  <?php require_once("../header-html.php"); ?>
</head>
<body>
<?php require_once("../header.php"); ?>
<div id="content">

  	<div id="sidebar">

    	<h2>Zertifikatgenerator </h2>
	<p>Mit dem Zertifikatgenerator kannst du dir die Dateien 
	   <b>halle.crt</b> und <b>halle.key</b> selbst erstellen. </p>

	<p>Im Ergebnis erscheint ein Link, wo du dir die Dateien runterladen kannst. 
	   Diese sind in einem TAR-Archiv gepackt. Neben dem Zertifikat und dem Schl&uuml;ssel 
	   ist noch eine Textdatei dabei. Diese gibt Auskunft &uuml;ber die Nummer des Zertifikats 
	   und des Schl&uuml;ssels. Alle drei Dateien m&uuml;ssen auf dem Freifunkrouter in das Verzeichnis 
	   <b>/etc/openvpn/</b> entpackt werden. </p>
	<p>Diese Dateien werden gebraucht, 
	   damit dein Freifunkrouter einen VPN-Tunnel zu unseren VPN-Servern aufbauen kann. </p>

	<h2>Bitte Beachten!</h2>
	<p>Der Verbindungsname muss ein Name sein, 
	   der auf diesen Servern kein zweites mal verwendet wird, 
	   z.B. der Name deines Routers mit IP-Adresse. 
	   Dabei sind Punkte durch Minus bei der Schreibweise zu ersetzen.  
	   Erlaubt sind nur die Zeichen a-z, A-Z, 0-9, Minus und Unterstrich 
	   aber z.B kein Leerzeichen. An erster Stelle muss ein Buchstabe stehen. </p>

	<h2>Email-Adresse</h2>
	<p>Die E-Mail-Adresse kann mehrfach verwendet werden. </p>	 

 	</div id="sidebar">

<div class="teaser">
	<h2> Zertifikatgenerator </h2>
	<form method="POST" action="generate.php">
	<table>
	<tr> 
		<td>Verbindungsname</td>
		<td><input size="40" name="name"></td>
	</tr>
	<tr> 
		<td>Email-Adresse</td>
		<td><input name="email" size="40"></td>
	</tr>
	<tr> <td></td>
	<td colspan="1">
	<input type="submit" value="Schlüssel erzeugen" title="Startet die Schlüsselerzeugung." name="post_keygen">
	</td></tr>
	</table>
	</form>
</div>
</div>
<?php require_once("../footer.html"); ?>
</body>
</html>
