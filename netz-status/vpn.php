<?php 

$out=shell_exec("/etc/init.d/openvpn status ffvpn"); 

$out = str_replace("* VPN 'ffvpn' is not running ... failed!", "<font color='#FF0000'>ist ausgefallen!</font>", $out);
$out = str_replace("* VPN 'ffvpn' is running", "<font color='#00C000'>l&auml;uft</font>", $out);  

echo $out; 

?>
