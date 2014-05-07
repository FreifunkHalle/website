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
<div class="teaser">

<h2> Zertifikatgenerator </h2>
<?php
function fehler($Fehlertext){
	echo "<h3> Fehler</h3>";
	echo "<p>";
	echo "$Fehlertext";
	echo "</p>";
	echo "<a href=\"/vpn\">Zurück zur Eingabe</a><p></p>";
}
if (isset($_POST) && isset($_POST["name"]) && $_POST["name"] != "" && isset($_POST["email"]) && $_POST["email"] != "") {

	$mail=$_POST["email"];
	$name=$_POST["name"];
if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
if (preg_match('/^[A-Za-z][A-Za-z0-9_-]*$/', $name)) {
$certname= shell_exec("sudo /etc/openvpn/ffvpn/make-cert-for-website.sh $name $mail");
?>
<h3> Erfolgreich </h3>
<p> Die Zertifikate wurden erfolgreich erstellt. Diese können nun hier heruntergeladen werden:<br><?php
echo "<a href=\"dl/$certname.tar\">$certname</a>";
?>
<br>
Das Archiv muss auf den Router kopiert werden und in "/etc/openvpn" entpackt werden. Nachdem der Router neugestartet wurde, sollten die VPN-Verbindungen zu den Freifunk-Servern bestehen.
</p>
<?php
}else{
fehler("Die Zertifikate konnten nicht generiert werden, da der Verbindungsname: $name nicht gültig ist. Dieser darf nur aus Buchstaben, Zahlen, einem Unterstich oder einem Bindestrich bestehen und muss mit einem Buchstaben beginnen.");
}
} else {
fehler("Die Zertifikate konnten nicht generiert werden, da die Email-Adresse: $mail nicht gültig ist.");
}

} else
{
fehler("Die Zertifikate konnten nicht generiert werden, da kein Verbindungsname oder keine Email-Adresse angegeben wurden.");
}	
?>

</div>
</div>
<?php require_once("../footer.html"); ?>
</body>
</html>
