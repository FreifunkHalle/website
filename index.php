<?php
  require_once "XML/RSS.php";
$blog_rss = "http://blog.freifunk.net/rss.xml" ;
  $forum_rss = "https://www.freifunk-halle.net/forum/rss.php" ;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
     "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta http-equiv="refresh" content="600; URL=../">
  <title>Freifunk Halle :: Startseite</title>
  <?php require_once("header-html.php"); ?>
</head>
<body>
<?php require_once("header.php"); ?>
<div id="content">
  		
  	<div id="sidebar">

    	<h2>Was ist Freifunk?</h2>
	<p>In 90 Sekunden erkl&auml;rt!</p>
	<p>
	<center>
	<video src="../media/freifunk-verbindet.webm" type="video/webm" width="100%" height="" title="Freifunk verbindet! Ein Film von Philipp Seefeldt" poster="../media/freifunk-verbindet.png" autobuffer controls></video>
	</center>
	</p>
	<p>
	<font size="-2">
	Film von: <a href="http://www.kosmonautensofa.de/" target=_blank>Philipp Seefeld</a>
	</font>
	</p>

    	<h2>Freifunk</h2>
    	<p>Freifunk ist ein technisches und soziales Projekt, welches mittels handels&uuml;blicher WLAN-Technologie Nachbarn verbindet und 
	Menschen n&auml;her bringt. Es lebt vom Mitmachen und Nachbarschaftshilfe. Freifunk bietet eine Plattform f&uuml;r freien Datenaustausch und 
	ist ein unzensiertes Kommunikationsnetz.</p>

    	<h2>Wiki</h2>
    	<p>Im Wiki findest du Informationen und Dokumentationen zu den Themen Technik und Community.</p>
    	<p><a href="http://www.freifunk-halle.net/mediawiki/wiki/Hauptseite">&gt;&gt; zum Wiki</a></p>

    	<h2>Forum</h2>
    	<p>Das Forum dient zum Austausch der Freifunker. Hier kannst du Kontakt zu anderen Freifunkern aufnehmen und Fragen stellen.</p>
    	<p><a href="http://freifunk-halle.net/forum">&gt;&gt; zum Forum</a></p>

    	<h2>Karte</h2>
    	<p>Auf der Karte kannst du dir das derzeitige Freifunk-Netz ansehen und herausfinden, ob es in deiner Nachbarschaft bereits andere Freifunkknoten gibt.</p>
    	<p><a href="/Map">&gt;&gt; zur Karte</a></p>

	<h2>Besucherz&aumlhler</h2>
	<p><b>Summe</b> / letzten 24 Stunden
	<p>Hauptserver : <b><?php include("counter.php"); require_once("counter.txt"); ?></b> / <?php include("counter-aktuell.php");?>
	<p>WLan-Nutzer : <b><?php require_once("counter-wlan-nutzer.txt"); ?></b>

    	<h2>tweets@freifunk</h2>
    	<p><a class="twitter-timeline"  href="https://twitter.com/freifunk"  data-widget-id="378700778258440192">Tweets von @freifunk</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</p>
    	<p></p>

 	</div id="sidebar">
	
	<div class="teaser0">
                <h2>
                Willkommen im Halle'schen Freifunknetz
                </h2>
                <p><img src="media/freifunk-logo.png" style="float: left; margin: 0 30px 20px 0;" alt="" >
                <p>
                Dies ist das <b>Internetportal des Freifunks in Halle und dem Umland</b>, sowie ein Ausgangspunkt f&uuml;r soziale, technische und
                allgemeine Informationen rund um das Thema Freifunk und die Freifunk-Community in Halle. 
		  <p><a href="http://freifunk-halle.org" target="_top"><font size="-1">Link zum Backupserver</font></a>
                </p>
        </div class="teaser0">

<!-- Anfang Eintrag Sommertreffen 
  	<div class="teaser">

	    	<h2>Freies Freifunktreffen 2014 am Hufeisensee<font size="-2"> (Sommerfest und Gr&uuml;ndungsversammlung Freifunk Halle e.V.)</font></h2></h2>
		<p> &#8226;  Samstag, den 19.07.2014 ab 15:00 Uhr | 
		Ort: <a target=_blank href="https://maps.google.de/maps?f=q&ll=51.462082,12.024686&output=embed&z=16&q=tauchclub+orca+halle+ev&hnear=Schkeuditzer+Stra%C3%9Fe+70,+06116+Halle+%28Saale%29&t=h">Schkeuditzer Str. 70</a> | 
		Details siehe <a href="https://www.freifunk-halle.net/forum/viewtopic.php?f=37&t=1792">Forum</a>  |
		Teilnehmer bitte <a href="http://wiki.freifunk.net/Freies_Freifunktreffen_Halle" target=_blank>hier</a> oder im Forum anmelden. 
		</p>

  	</div class="teaser">
 Ende Eintrag Sommertreffen -->

        <div class="teaser">
        <h2>N&auml;chste Treffen <font size="-2"> Kommt einfach vorbei. Jeder ist willkommen.</font></h2>
        <ul>
		<?php require_once("treffen-termin-fuer-index.php"); ?>
        </ul>
        </div class="teaser">
	<!--<div class="teaser">
        <h2>Wartungsarbeiten an der Karte</h2>
        <p>   
                Aufgrund von Änderungen an google's Maps-API, führen wir Wartungsarbeiten an der Karte druch. In dieser Zeit wird die Karte nicht verfügbar sein.
        </p>
        </div>-->

  	<div class="teaser">
    	<h2>Neue Foreneintr&auml;ge</h2>

	<?php
	# RSS-Feed Forum lesen

        $max_items = 4 ;

        $rss = new XML_RSS($forum_rss) ;
        $rss->parse() ;

        foreach ($rss->getItems() as $item) {
        echo "<h3>" . htmlentities($item['title'], ENT_COMPAT, "UTF-8") . "</h3>\n" ;
        echo "<div>" . $item['description'] . " <a href=\"" . htmlentities($item['link'], ENT_COMPAT, "UTF-8") . '"><nobr>&gt;&gt; weiterlesen</nobr></a></div>' ;

        if (--$max_items == 0) break ;
        }
	?>

  	</div class="teaser">

  	<div class="teaser">
    	<h2>Letzte Blogeintr&auml;ge</h2>	

	<?php
	# RSS-Feed Blog lesen

        $max_items = 3 ;

        $rss = new XML_RSS($blog_rss) ;
        $rss->parse() ;

        foreach ($rss->getItems() as $item) {
        echo "<h3>" . htmlentities($item['title'], ENT_COMPAT, "UTF-8") . "</h3>\n" ;
        echo "<p>" . $item['description'] . " <a href=\"" . htmlentities($item['link'], ENT_COMPAT, "UTF-8") . '"><nobr>&gt;&gt; weiterlesen</nobr></a></p>' ;

        if (--$max_items == 0) break ;
        }
	?>
  	</div class="teaser">
</div id="content">
<?php require_once("footer.html"); ?>
</body>
</html> 
