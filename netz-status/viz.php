<html>
<head>
<title>OLSR-viz</title>
<style type="text/css">
.bold {
font-weight: bold;
}
#debug {
visibility:hidden;
}
#RSIFrame {
border:0px;
width:0px;
height:0px;
visibility:hidden;
}
div#main {
width: 100%;
height: 93%;
border: 1px solid #ccc;
margin-left:auto;
margin-right:auto;
text-align:center;
overflow: scroll;
}
div#edges {
width: 1px;
height: 1px;
position: relative;
z-index:2;
}
div#nodes {
width: 1px;
height: 1px;
position: relative;
z-index:4;
}
</style>
</head>
<script language="JavaScript" type="text/javascript">
var css=document.styleSheets[0];
if (null!=css.insertRule) {
css.insertRule(".label {color:black;background-color:white}", css.cssRules.length);
}
else {
css.addRule(".label", "color:black");
css.addRule(".label", "background-color:white");
}
</script>
<script src="viz-olsr.js" language="JavaScript1.2" type="text/javascript"></script>
<div ID="main">
<div id="edges"></div>
<div id="nodes"></div>
</div>
<center>
<div style="z-index:99">
<form action="">
<p>
<span class="bold" title="zoom description">Zoom</span >
<a CLASS="plugin" style="color: black; text-decoration: none" href="javascript:set_scale(scale+0.1)">
<input type="button" name="button" value="+" style="width: auto;"></a> 
<a CLASS="plugin" style="color: black; text-decoration: none" href="javascript:set_scale(scale-0.1)S">
<input type="button" name="button" value="-" style="width: auto;"></a> 
<input id="zoom" name="zoom" type="text" value="2.0" size="5" onchange="set_scale()">

<span class="bold" title="metric description">Metric</span>
<a CLASS="plugin" style="color: black; text-decoration: none" href="javascript:if(0<maxmetric)set_maxmetric(maxmetric+1)">
<input type="button" name="button" value="+" style="width: auto;"></a> 
<a CLASS="plugin" style="color: black; text-decoration: none" href="javascript:if(0<maxmetric)set_maxmetric(maxmetric-1)">
<input type="button" name="button" value="-" style="width: auto;"></a> 
<input id="maxmetric" name="maxmetric" type="text" value="3" size="4" onchange="set_maxmetric(this.value)">

<span class="bold" title="optimize diagram layout">Optimize</span>
<input id="auto_declump" name="auto_declump" type="checkbox" onchange="set_autodeclump(this.checked)" checked="checked">

<!-- <span class="bold" title="hostnames of neighbors">Hostnames</span>
<input id="show_hostnames" name="show_hostnames" type="checkbox" onchange="set_showdesc(this.checked)" checked="checked"> -->

<a CLASS="plugin" style="color: black; text-decoration: none" href="javascript:viz_save()">
<input type="button" name="button" value="Speichern" style="width: auto;"></a>
<a CLASS="plugin" style="color: black; text-decoration: none" href="javascript:viz_reset()">
<input type="button" name="button" value="Reset" style="width: auto;"></a>

</p>
</form>
</div>
</center>
<span id="debug"></span>
<iframe id="RSIFrame" name="RSIFrame">
</iframe>
<script language="JavaScript1.2" type="text/javascript">
viz_setup("RSIFrame","main","nodes","edges");
viz_update();
</script>
</html>
