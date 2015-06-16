        <?php
	# setzen Zeitzohne
	date_default_timezone_set('Europe/Berlin'); 

        # Tage berechnen fuer naechste Termine

        $offset = -86400 ;
        for ($i = 2; $i > 0; $i--) {
        while (true) {
          $offset += 86400 ;
          $test_day = getdate(time() + $offset) ;

          # 1. Mittwoch im Monat
          if ($test_day["wday"] == 3 && $test_day["mday"] < 8) break ;

          # 3. Montag im Monat
          if ($test_day["wday"] == 1 && $test_day["mday"] > 14 && $test_day["mday"] < 22) break ;
        }
        $date=getdate(date(time()+$offset));
        $year=$date["year"];
        $month=$date["mon"];
        $day=$date["mday"];
		date_default_timezone_set('Europe/Berlin');
		setlocale(LC_TIME, "de_DE");
		$tage = array("Sonntag","Montag, &#8194;", "Dienstag", "Mittwoch,", "Donnerstag", "Freitag", "Samstag");
		$tag = date('w', time() + $offset);

# wo wir uns treffen
		$orte = array();
		$orte[] = "So.";
		$orte[] = file_get_contents('ort-montag.txt');
		$orte[] = "Di.";
		$orte[] = file_get_contents('ort-mittwoch.txt');
		$orte[] = "Do.";
		$orte[] = "Fr.";
		$orte[] = "Sa.";

# wann wir uns treffen
		$zeit = array();
		$zeit[] = "So.";
		$zeit[] = file_get_contents('zeit-montag.txt');
		$zeit[] = "Di.";
		$zeit[] = file_get_contents('zeit-mittwoch.txt');
		$zeit[] = "Do.";
		$zeit[] = "Fr.";
		$zeit[] = "Sa.";

# wo wir uns treffen für erzeugte Kalenderdatei
		$orte2 = array();
		$orte2[] = "So.";
		$orte2[] = file_get_contents('ort-montag.txt');
		$orte2[] = "Di.";
		$orte2[] = file_get_contents('ort-mittwoch-kalender.txt');
		$orte2[] = "Do.";
		$orte2[] = "Fr.";
		$orte2[] = "Sa.";

# wann wir uns treffen für erzeugte Kalenderdatei
		$zeit2 = array();
		$zeit2[] = "So.";
		$zeit2[] = file_get_contents('zeit-montag.txt');
		$zeit2[] = "Di.";
		$zeit2[] = file_get_contents('zeit-mittwoch.txt');
		$zeit2[] = "Do.";
		$zeit2[] = "Fr.";
		$zeit2[] = "Sa.";

	echo "<li>
		&#8226; $tage[$tag] den " . date('d.m.Y', time() + $offset) . " um $zeit[$tag] Uhr | Ort: $orte[$tag] | siehe 
			<a href=\"https://www.freifunk-halle.org/forum/viewforum.php?f=37\">Veranstaltungen</a> 
			<a href=\"ics.php?year=".$year."&amp;month=".$month."&amp;day=".$day."&amp;loc=". htmlentities($orte2[$tag])."\">
				<img src=\"media/calendar2.png\" alt=\"Kalenderdatei\" width=24 height=24 ></a>
		</li><br>\n" ; 
        }

        ?>
