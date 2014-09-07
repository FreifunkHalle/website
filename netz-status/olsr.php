<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
     "http://www.w3.org/TR/html4/loose.dtd">

<?php require_once("functions.php"); ?>

<HTML>
<BODY>

<?php 
  $response = get_web_page("http://127.0.0.1:9090/links/mid/neighbors");
  $data = json_decode($response,true);
  $links = $data["links"];
  $mid = $data["mid"];
  $neighbors = $data["neighbors"];
  for ( $i = 0; $i<count($neighbors); $i++) {
    $neighbors[$neighbors[$i]["ipv4Address"]] = $neighbors[$i];
    unset($neighbors[$i]);
  }
  uksort($neighbors, ipSortFunc);
?>
  <table  bgcolor="#E6E6E6">
    <tr bgcolor="#BDBDBD">
      <th> Nachbar-IP</th>
      <th> Rechnername</th>
      <th> Lokale Interface-IP</th>
      <th> LQ </th>
      <th> NLQ</th>
      <th> ETX </th>
    </tr>

<?php
  $color=false;
  foreach ( $neighbors as $neighbor)
  {
	$address = $neighbor["ipv4Address"];
	$midstate=array();
	foreach ($mid as $mida){
		if ($mida["ipAddress"] == $address){
			$midstate=$mida;
			break;
		}
	
	}
	$link=array();
	$aliases = $midstate["aliases"];
	$found=false;
	foreach ($links as $link1){
		if ($link1["remoteIP"] == $address){
                	$found = true;
                        $link = $link1;
			break;
                }
		foreach ($aliases as $alias){
			if ($link1["remoteIP"] == $alias["ipAddress"]){
				$link = $link1;
				$found=true;
				break;
			}
		}
		if ($found) break;
	}

	$lq=number_format($link["linkQuality"],3);
	$nlq=number_format($link["neighborLinkQuality"],3);
	$etx=etx($link["linkQuality"],$link["neighborLinkQuality"]);
	$name=shell_exec("dig  @104.62.28.35 -x ".$address." +short");
	$name=substr($name,0,strlen($name)-2);
	if ($color) $colorstr="class=\"rowstyle-1\"" ; else $colorstr="";
	
	echo "<tr ".$colorstr."><td><a href=\"http://".$address."/cgi-bin-nodes.html\">".$address."</a></td>"
	."<td><a href=\"http://".$name."/cgi-bin-nodes.html\">".$name."</a></td>"
	."<td>".$link["localIP"]."</td>"
	."<td>".$lq."</td>"
	."<td>".$nlq."</td>"
	."<td style=\"background-color:".etxColor($etx).";\">".$etx."</td></tr>";
	$color=!$color;
  }
?>

  </table>
</BODY>
</HTML>
