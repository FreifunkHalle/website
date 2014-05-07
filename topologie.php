<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-15">
	<title>Freifunk Halle Saale - Topologie</title>
	<link rel="stylesheet" type="text/css" href="/css/topo.css">
	<link rel="stylesheet" type="text/css" href="/css/ffhtopo.css">
	<script type="text/javascript" src="topologie.js"></script> 
	<?php require_once("header-html.php"); ?>
  </head>

  <body onload="lade()">
<?php require_once("header.php"); ?>
<div id="content">
	  <div id="sidebar" style="margin-left:5px;">
	    <form name="f1">
		  <table class="options" >
			<tr>
			  <td class="tdl" onmouseover="showToolTip('tt_format')" onmouseout="hideToolTip()">
			    Anzeigeformat:
			  </td>
			  <td class="tdr">
			     <select name="format" size="1" class="biginput">
				   <option selected value="png">png</option>
				   <option value="svg">svg</option>
				   <option value="pdf">pdf</option>
				   <option value="dot">dot</option>
				   <option value="input">input</option>
				 </select>
			  </td>
			</tr>
			<tr>
			  <td class="tdl" onmouseover="showToolTip('tt_groesse')" onmouseout="hideToolTip()">
			    Größe in Zoll:
			  </td>
			  <td class="tdr">
			     <input type="text" name="groesse" class="biginput" id="groesse">
			  </td>
			</tr>
			<tr>
			  <td class="tdl" onmouseover="showToolTip('tt_maxetx')" onmouseout="hideToolTip()">
			    MaxETX:
			  </td>
			  <td class="tdr">
			     <input type="text" name="maxetx" class="biginput" id="maxetx">
			  </td>
			</tr>
			<tr>
			  <td class="tdl" onmouseover="showToolTip('tt_nachkomma')" onmouseout="hideToolTip()">
			    Nachkomma:
			  </td>
			  <td class="tdr">
			     <input type="text" name="nachkomma" id="nachkomma" class="biginput">
			  </td>
			</tr>
			<tr>
			  <td class="tdl" onmouseover="showToolTip('tt_hvip')" onmouseout="hideToolTip()">
			    Hervorzuhebende IP-Adressen:
			  </td>
			  <td class="tdr">
			     <input type="text" name="hvip" class="biginput" id="hvip">
			  </td>
			</tr>
			<tr>
			  <td class="tdl" onmouseover="showToolTip('tt_erreichbar')" onmouseout="hideToolTip()">
			    Erreichbar:
			  </td>
			  <td class="tdr">
			     <input type="text" name="erreichbarkeit" id="erreich" class="biginput">
			  </td>
			</tr>
			<tr>
			  <td class="tdl" onmouseover="showToolTip('tt_zeig')" onmouseout="hideToolTip()">
			    Zeig:
			  </td>
			  <td class="tdr">
			     <select name="zeig" size="1" id="zeig">
				   <option selected value="0">0</option>
				   <option value="1">1</option>
				   <option value="2">2</option>
				 </select>
			  </td>
			</tr>
			<tr>
                         <td class="tdl" onmouseover="showToolTip('tt_db')" onmouseout="hideToolTip()">
                           Zusatzinformationen einblenden:
                         </td>
                         <td class="tdr">
                            <input type="checkbox" name="db" checked id="db" >
                         </td>
                       </tr>
                       <tr>
                         <td class="tdl" onmouseover="showToolTip('tt_gesehen')" onmouseout="hideToolTip()">
                           Gesehen:
                         </td>
                         <td class="tdr">
                            <input type="text" name="gesehen" class="biginput" id="gesehen">
                         </td>
                       </tr>
			<tr>
			  <td class="tdl" onmouseover="showToolTip('tt_zeigip')" onmouseout="hideToolTip()">
			    ZeigIP:
			  </td>
			  <td class="tdr" style="" rowspan="2">
			     <input type="text" name="zeigiptxt" style="display:none;float:right;" id="zeigiptxtid" class="biginput">
				 <select name="zeigip" size="1" id="zeigipid" class="biginput" style="float:right;">
				   <option selected value="Halle">Halle</option>
				   <option value="Wels">Wels</option>
				   <option value="HalleWels">Halle & Wels</option>
				   <option value="Alles">Alles</option>
				 </select>
			  </td>
			</tr>
			<tr>
			  <td class="tdl" style="padding:0px;padding-bottom:2px;"onmouseover="showToolTip('tt_zeigip_e')" onmouseout="hideToolTip()">
			     erweitert:<input type="checkbox" name="ezeigip" onclick="wechsel()" id="ezeigipid">
			  </td>
			</tr>
			<tr>
			  <td class="tdl">
			   <a id="vollansicht" href="" onfocus="vollfocus()" target="_blank" onmouseover="showToolTip('tt_vollansicht')" onmouseout="hideToolTip()">Vollansicht</a>
			  </td>
			  <td class="tdr">
			      <input type="button" onclick="updateifr()" value="Update" class="biginput">
			  </td>
			</tr>
		   </table>
	    </form>
	  </div>
<div id="map">
	    <iframe src="/Tools/Topology.ashx" name="ifr" id="frame" style="z-index:2; width:100%;border:0 ;"></iframe>
</div>
</div>
<?php require_once("footer.html"); ?>
<?php require_once("topologie-tooltips.html"); ?>
  </body>
</html>
