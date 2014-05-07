<pre><?php date_default_timezone_set('Europe/Berlin'); $datum = date("d.m.Y"); $uhrzeit = date("H:i"); echo "Statusabfrage für ", $_SERVER['SERVER_NAME']," am ", $datum," um ",$uhrzeit," Uhr von " ,$_SERVER['REMOTE_ADDR']; ?></pre>

<hr>

<pre>Laufzeit: <?php $out=shell_exec("uptime"); echo $out; ?></pre>

<hr>

<pre><?php $out=shell_exec("/etc/init.d/cron status"); echo $out; ?></pre>

<hr>

<pre><?php $out=shell_exec("netstat -4nr"); echo $out; ?></pre>

<hr>

<pre><?php $out=shell_exec("/etc/init.d/openvpn status"); echo $out; ?></pre>

<hr>

<pre><?php $out=shell_exec("free -h"); echo $out; ?></pre>

<hr>

<pre><?php $out=shell_exec("df -h"); echo $out; ?></pre>

<hr>

<pre>Nachbarn: <?php $out=shell_exec("wget -q -O - http://127.0.0.1:2006/neighbors |grep 10 |wc -l") ; echo $out; ?></pre>

<hr>

<PRE><?php $out=shell_exec("wget -q -O - http://127.0.0.1:2006/neigh"); echo $out; ?></PRE>

<hr>

<pre><?php $out=shell_exec("vnstat"); echo $out; ?></pre>

<hr>

<pre><?php require_once("../counter.txt"); ?></pre>

<hr>

<pre><?php require_once("../counter-ip-sperrzeitliste.txt"); ?></pre>

<hr>

<pre><?php require_once("ausgabe-14.php"); ?></pre>


 