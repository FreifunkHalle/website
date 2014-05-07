<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
     "http://www.w3.org/TR/html4/loose.dtd">

<?php require_once("functions.php"); ?>
<HTML>
<BODY>

<?php 
  $zeilen = file ('/var/run/services_olsr');
  $count = count($zeilen);
  for ($i= 0; $i< $count;$i++)
  {
	if (startsWith($zeilen[$i],'#') || $zeilen[$i]==="\n") unset($zeilen[$i]);
  }
?>
  <table  bgcolor="#E6E6E6">
    <tr bgcolor="#BDBDBD">
      <th> URL</th>
      <th> Protokoll</th>
      <th> Quelle</th>
    </tr>
<?php
  $color=false;
  foreach ( $zeilen as $service)
  {
	
	$data=explode('|',$service);
	$url=$data[0];
	$protokoll=$data[1];
	$data=explode("#", $data[2]);
	$name=trim($data[0]);
	$from=trim($data[1]);

	if ($color) $colorstr="class=\"rowstyle-1\"" ; else $colorstr="";
	
	echo "<tr ".$colorstr."><td><a target='_blank' href=\"".$url."\">".$name."</a></td>"
	."<td>".$protokoll."</td>"
	."<td>".$from."</td>"
	."</tr>\n";
	$color=!$color;
  }
?>

  </table>

</BODY>
</HTML>
