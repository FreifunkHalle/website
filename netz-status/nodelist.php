<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
     "http://www.w3.org/TR/html4/loose.dtd">

<?php require_once("functions.php"); ?>

<HTML>
<HEAD>
  <TITLE>Freifunk Halle - Netzknotenliste</TITLE>
  <meta http-equiv="refresh" content="900; URL=/netz-status/nodelist.php">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <?php include("../header-html.php"); ?>
</HEAD>
<BODY>
<?php include_once("../header.php"); ?>
<?php 
  $response = str_replace("\)",")", str_replace("\(","(", str_replace("\ "," ", str_replace("\.",".", get_web_page("http://www.freifunk-halle.net/Tools/WikiJSON.ashx")))));
  $data = json_decode($response, true);
  $topo = $data["topo"];
  uksort($topo, ipSortFunc);
  $online=0;
  $tun=0;
  $time = time();
  foreach ( $topo as $node)
  {
    if ($time-$node["stime"]< 7200) $online++;
    if ($node["hastunnellink"]) $tun++;
  }
?>

  <div id="content">
<div id="sidebar">

        <h2>Listen-Abfrage von </h2>
        <p><b>IP-Adresse: <a target="_blank" href="http://<?php echo $_SERVER['REMOTE_ADDR']; ?>/cgi-bin-nodes.html"><?php echo $_SERVER['REMOTE_ADDR']; ?></a></b></p>

	<h2>Z&aumlhler Wlan-Nutzer</h2>
	<p>Summe: <b><?php require_once("http://104.62.1.1/counter-wlan-nutzer.txt"); ?></b>

        <h2>Bitte beachten!</h2>
        <p>Die Listendaten werden einmal pro Stunde aktuallisiert.</p>
	 <p>In der Liste erscheinen nur die Netzknoten, auf denen Botinfo installiert ist.

	<h2>Netzknoten</h2>
	<p>bekannt: <b><?php echo count($topo); ?></b></p>
	<p>online: <b><font color='#00C000'><?php echo $online; ?></font></b></p>
	<p>Tunnel: <b><font color='#2ECCFA'><?php echo $tun; ?></font></b></p>
	<p>offline: <b><font color='#FF0000'><?php echo count($topo)-$online; ?></font></b></p>

        <h2>Tunnellink</h2>
        <p><b><font color='#2ECCFA'>Ja</font></b> bedeutet das dieser Netzknoten &uuml;ber VPN mit den Freifunkservern verbnunden ist.</p>
        <p><b><font color='#FFCB05'>Nein</font></b> bedeutet das dieser Netzknoten nicht &uuml;ber VPN mit den Freifunkservern verbnunden ist.</p>

        <h2>Status</h2>
        <p><b><font color='#00C000'>online</font></b> bedeutet das der Netzknoten aktiv ist.</p>
        <p><b><font color='#FF0000'>offline</font></b> bedeutet das der Netzknoten nicht erreichbar ist.</p>

</div>

<div class="teaser">
<h2> Knotenliste <font size="-2"> Seite wird alle 15 Minuten aktualisert</font></h2>
  <table border="0" cellpadding="1" cellspacing="1" width="100%"  bgcolor="#E6E6E6">
    <tr bgcolor="#BDBDBD">
      <th> IP-Adresse </th>
      <th> Standort </th>
      <th> VPN </th>
      <th> Status </th>
    </tr>

<?php
  $color=false;

  foreach ( $topo as $node)
  {
	$ip = $node["ipv4"];
        $address = $node["addr"];
	$online=false;
	if ($time-$node["stime"]< 7200) $online=true;
        if ($color) $colorstr="class=\"rowstyle-1\"" ; else $colorstr="";

        echo "<tr ".$colorstr.">
	
	   <td bgcolor=\"".($online?"":"#000000")."\">".($online?"<a href=\"http://".$ip."/cgi-bin-nodes.html\" target='_blank'>".$ip."</a>":"<font color='#ffffff'>$ip</font>")."</td>"
        ."<td bgcolor=\"".($online?"":"#000000")."\"><font color=\"".($online?"":"#ffffff")."\">".$address."</font></td>"
        ."<td bgcolor=\"".($node["hastunnellink"]?"#2ECCFA":($online?"#FFCB05":"#000000"))."\"><font color=\"".($online?"":"#ffffff")."\">".($node["hastunnellink"]?"Ja":"Nein")."</font></td>"
        ."<td bgcolor=\"".($online?"#00cc00":"#FF0000")."\">".($online?"online":"<font color='#ffffff'>offline</font>")."</td>";
        $color=!$color;
  }
?>
  </table>
</div class="teaser">


  </div id="content">

  <?php require_once("../footer.html"); ?>
</BODY>
</HTML>
