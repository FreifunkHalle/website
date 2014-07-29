<?php 

$out=shell_exec("/etc/init.d/openvpn status berlin-uplink"); 

$out = str_replace("* VPN 'berlin-uplink' is not running", "<font color='#FF0000'>ist ausgefallen!</font>", $out);
$out = str_replace("* VPN 'berlin-uplink' is running", "<font color='#00C000'>l&auml;uft</font>", $out);  

echo $out; 

?>
