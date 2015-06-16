
<?php 
$out=shell_exec("if (test -e /sys/class/net/tap0 ) ; then echo up; else echo down; fi");

$out = str_replace("down", "<font color='#FF0000'>ist ausgefallen!</font>", $out);
$out = str_replace("up", "<font color='#00C000'>läuft</font>", $out);  
echo $out; 

?>
