<?php 

require_once("functions.php");
$out=shell_exec("expr $(wget -q -O - http://127.0.0.1:2006/neighbors |wc -l) - 3 ") ;

if (startsWith($out,"0")) {
  $out = "<font color='#FF0000'>".$out."</font>";
}
echo $out;


?>
