tooltip = null;
 
document.onmousemove = updateToolTip;
 
function updateToolTip(e) {
  if (tooltip != null) {
    x = (document.all) ? window.event.x + tooltip.offsetParent.scrollLeft : e.pageX;
    y = (document.all) ? window.event.y + tooltip.offsetParent.scrollTop  : e.pageY;
    tooltip.style.left = (x + 15) + "px";
    tooltip.style.top  = (y + 15) + "px";
  }
}
 
function showToolTip(id) {
  tooltip = document.getElementById(id);
  tooltip.style.display = "block"
}
 
function hideToolTip() {
  tooltip.style.display = "none";
}
function lade()
                {
                        var tmp2 = hoehe();
                        document.getElementById("frame").setAttribute("height" , tmp2);
                }
                function hoehe()
                {
                        return  document.documentElement.clientHeight-137;

                }
                function wechsel()
                {
                        if (document.getElementById("ezeigipid").checked)
                        {
                                document.getElementById("zeigipid").style.display = "none";
                                document.getElementById("zeigiptxtid").style.display = "block";
                        }
                        else
                        {
                                document.getElementById("zeigipid").style.display = "block";
                                document.getElementById("zeigiptxtid").style.display = "none";
                        }
                }
function newurl()
                {
                        var tmp = "/Tools/Topology.ashx?format=";
                        tmp = tmp.concat(window.document.f1.format.value);
                        if ( window.document.getElementById("maxetx").value != "" )
                        {
                                tmp = tmp.concat("&maxetx=");
                                tmp = tmp.concat(window.document.getElementById("maxetx").value);
                        }
                        if ( window.document.getElementById("hvip").value != "" )
                        {
                                tmp = tmp.concat("&hvip=");
                                tmp = tmp.concat(window.document.getElementById("hvip").value);
                        }
                        tmp = tmp.concat("&zeig=");
                        tmp = tmp.concat(window.document.getElementById("zeig").value);
                        if ( !window.document.getElementById("db").checked )
                        {
                                tmp = tmp.concat("&db=-1");
                        }
                        if ( window.document.getElementById("groesse").value != "" )
                        {
                                tmp = tmp.concat("&groesse=");
                                tmp = tmp.concat(window.document.getElementById("groesse").value);
                        }
                        if ( window.document.getElementById("gesehen").value != "" )
                        {
                                tmp = tmp.concat("&gesehen=");
                                tmp = tmp.concat(window.document.getElementById("gesehen").value);
                        }
                        if ( window.document.getElementById("erreich").value != "" )
                        {
                                tmp = tmp.concat("&erreichbar=");
                                tmp = tmp.concat(window.document.getElementById("erreich").value);
                        }
                        if ( window.document.getElementById("nachkomma").value != "" )
                        {
                                tmp = tmp.concat("&nachkomma=");
                                tmp = tmp.concat(window.document.getElementById("nachkomma").value);
                        }
                        tmp = tmp.concat("&zeigip=");
                        if (document.getElementById("ezeigipid").checked)
                        {
                                tmp = tmp.concat(document.getElementById("zeigiptxtid").value);
                        }
                        else
                        {
                                switch (document.getElementById("zeigipid").value)
                                {
                                        case "Halle" :
                                                tmp = tmp.concat("10.62.1.1|10.62.4.1|10.62.7|10.62.8|10.62.9|10.62.10|10.62.11|10.62.12|10.62.13|10.62.14|10.62.15|10.62.16|10.62.17|10.62.18|10.62.19|10.62.20|10.62.21|10.62.22|10.62.23|10.62.24|10.62.25|10.62.26|10.62.27|10.62.28|10.62.29|10.62.30|10.62.31|10.62.32|10.62.33");
                                                break;
                                        case "Dessau" :
                                                tmp = tmp.concat("10.62.41|10.62.40|10.62.1.1|10.62.4.1");
                                                break;
                                        case "Halberstadt" :
                                                tmp = tmp.concat("10.62.45|10.62.1.1|10.62.4.1");
                                                break;
                                        case "Wittenberg" :
                                                tmp = tmp.concat("10.62.46|10.62.1.1|10.62.4.1");
                                                break;
                                        case "Eisleben" :
                                                tmp = tmp.concat("10.62.37|10.62.1.1|10.62.4.1");
                                                break;
                                        case "Alles" :
                                                tmp = tmp.concat("");
                                                break;
                                        case "Verein" :
                                                tmp = tmp.concat("10.62.1.1|10.62.4.1|10.62.60");
                                                break;
                                }
                        }  
                        return tmp;
                }
                function updateifr()
                {
                        ifr.location.href= newurl();
                }
                function vollfocus()
                {
                        document.getElementById("vollansicht").href=newurl();
                }
                function fullscreen()
                {
                        MeinFenster = window.open(newurl(), "Zweitfenster", "resizable=yes,status=no,toolbar=no,menubar=no");
                        MeinFenster.focus();

                }

