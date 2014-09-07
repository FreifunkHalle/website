<?php

date_default_timezone_set('Europe/Berlin');
setlocale(LC_TIME, "de_DE");
require_once "classes/iCalcreator.class.php";

function addToIcs($cal, $syear, $smonth, $sday, $stime, $loc, $duration = 3, $remember = true, $remembertime = 2, $repeat = true) {
    $tz = "Europe/Berlin";
    $vevent = & $cal->newComponent("vevent");
    // create an event calendar component
    $start = array("year" => $syear, "month" => $smonth, "day" => $sday, "hour" => $stime, "min" => 0, "sec" => 0);
    iCalUtilityFunctions::transformDateTime($start, $tz, "UTC", "Ymd\THis\Z");
    $vevent->setProperty("dtstart", $start);
    $end = array("year" => $syear, "month" => $smonth, "day" => $sday, "hour" => $stime + $duration, "min" => 0, "sec" => 0);
    iCalUtilityFunctions::transformDateTime($end, $tz, "UTC", "Ymd\THis\Z");
    $vevent->setProperty("dtend", $end);
    $vevent->setProperty("LOCATION", $loc);
    // property name - case independent
    $vevent->setProperty("summary", "@HAL Freifunktreffen");
    $desc = 'Einladung zum halleschen Freifunktreffen.\nDetails siehe: <a href="https://www.freifunk-halle.net/forum/viewforum.php?f=37" >https://www.freifunk-halle.net/forum/viewforum.php?f=37';
    $vevent->setProperty("description", $desc);
#$vevent->setProperty( "comment", "This is a comment" );
#$vevent->setProperty( "attendee", "attendee1@icaldomain.net" );
    if ($repeat) {
        $wwday = getdate(mktime(0,0,0, $smonth, $sday, $syear))["wday"];
        $wday = array();
        $wday[] = "SU";
        $wday[] = "3MO";
        $wday[] = "TU";
        $wday[] = "1WE";
        $wwwday = $wday[$wwday];
        $vevent->setProperty("RRULE", array (FREQ => "MONTHLY", BYDAY=>array($wwwday)));
    }
    if ($remember) {
        $valarm = & $vevent->newComponent("valarm");
        // create an event alarm
        $valarm->setProperty("action", "DISPLAY");
        $valarm->setProperty("description", $vevent->getProperty("description"));

        // reuse the event description
        $d = sprintf("%04d%02d%02d %02d%02d%02d", $syear, $smonth, $sday, ($stime - $remembertime - 1), 0, 0);
        iCalUtilityFunctions::transformDateTime($d, $tz, "UTC", "Ymd\THis\Z");
        $valarm->setProperty("trigger", $d);
    }
    
}

function createICS() {
    $tz = "Europe/Berlin";
    $config = array("unique_id" => "freifunk-halle.net", "TZID" => $tz);
    $vcalendar = new vcalendar($config);
    $vcalendar->setProperty("method", "PUBLISH");
    $vcalendar->setProperty("x-wr-calname", "Freifunk Halle Kalender");
    $vcalendar->setProperty("X-WR-CALDESC", "Termine des Freifunk in Halle");
    $vcalendar->setProperty("X-WR-TIMEZONE", $tz);
    $xprops = array("X-LIC-LOCATION" => $tz);
    iCalUtilityFunctions::createTimezone($vcalendar, $tz, $xprops);

#$vevent->setProperty( "resources", "COMPUTER PROJECTOR" );
    return $vcalendar;
}

$cal = createIcs();

# setzen Zeitzohne
date_default_timezone_set('Europe/Berlin');
# wo wir uns treffen für erzeugte Kalenderdatei
$orte2 = array();
$orte2[] = "So.";
$orte2[] = file_get_contents('ort-montag.txt');
$orte2[] = "Di.";
$orte2[] = file_get_contents('ort-mittwoch.txt');

# Tage berechnen fuer naechste Termine

$offset = -86400;
for ($i = 2; $i > 0; $i--) {
    while (true) {
        $offset += 86400;
        $test_day = getdate(time() + $offset);

        # 1. Mittwoch im Monat
        if ($test_day["wday"] == 3 && $test_day["mday"] < 8)
            break;

        # 3. Montag im Monat
        if ($test_day["wday"] == 1 && $test_day["mday"] > 14 && $test_day["mday"] < 22)
            break;
    }
    $date = getdate(date(time() + $offset));
    $year = $date["year"];
    $month = $date["mon"];
    $day = $date["mday"];
    date_default_timezone_set('Europe/Berlin');
    setlocale(LC_TIME, "de_DE");
    $tage = array("Sonntag", "Montag, &#8194;", "Dienstag", "Mittwoch,", "Donnerstag", "Freitag", "Samstag");
    $tag = date('w', time() + $offset);

    addToIcs($cal, $year, $month, $day, 19, ($orte2[$tag]));
}

// Freies Freifunktreffen
addToIcs($cal, 2014, 7, 19, 15, '<a href="ihttps://maps.google.de/maps?f=q&ll=51.462082,12.024686&output=embed&z=16&q=tauchclub+orca+halle+ev&hnear=Schkeuditzer+Stra%C3%9Fe+70,+06116+Halle+%28Saale%29&t=h" >Schkeuditzer Str. 70</a>', 9, true, 48, false);

$cal->returnCalendar();
exit;
?>
