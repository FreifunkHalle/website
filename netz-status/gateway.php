<?php 

$out=shell_exec("/etc/init.d/openvpn status openvpn-Swe"); 

$out = str_replace("* VPN 'openvpn-Swe' is not running ... failed!", "<font color='#FF0000'>ist ausgefallen!</font>", $out);
$out = str_replace("* VPN 'openvpn-Swe' is running", "<font color='#00C000'>l&auml;uft</font>", $out);  

echo $out; 

?>
