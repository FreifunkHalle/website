<?php

require_once("netz-status/functions.php");
header('Content-Type: application/rss+xml; charset=utf-8');
echo shell_exec("wget -qO- --no-check-certificate  /dev/null https://www.freifunk-halle.net/forum/rss.php");
?>
