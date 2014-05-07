<?php

require_once("netz-status/functions.php");
echo shell_exec("wget -qO- --no-check-certificate  /dev/null https://www.freifunk-halle.net/forum/rss.php");
?>
