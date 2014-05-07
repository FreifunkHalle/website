<?php
date_default_timezone_set('Europe/Berlin');
                setlocale(LC_TIME, "de_DE");
require_once "classes/iCalcreator.class.php";
function createICS($syear,$smonth,$sday,$stime,$loc,$duration=3,$remember=true, $remembertime =2){
$tz= "Europe/Berlin";
$config = array( "unique_id" => "freifunk-halle.net", "TZID" => $tz );
$vcalendar = new vcalendar( $config );
$vcalendar->setProperty( "method", "PUBLISH" );
$vcalendar->setProperty( "x-wr-calname", "Calendar Sample" ); 
$vcalendar->setProperty( "X-WR-CALDESC", "Calendar Description" );
$vcalendar->setProperty( "X-WR-TIMEZONE", $tz );
$xprops = array( "X-LIC-LOCATION" => $tz );
iCalUtilityFunctions::createTimezone( $vcalendar, $tz, $xprops );
$vevent = & $vcalendar->newComponent( "vevent" );
  // create an event calendar component

$start = array("year"=>$syear,"month"=>$smonth,"day"=>$sday,"hour"=>$stime,"min"=>0, "sec"=>0);
iCalUtilityFunctions::transformDateTime( $start, $tz, "UTC", "Ymd\THis\Z");
$vevent->setProperty( "dtstart", $start );
$end   = array("year"=>$syear,"month"=>$smonth,"day"=>$sday,"hour"=>$stime+$duration,"min"=>0,"sec"=>0);
iCalUtilityFunctions::transformDateTime( $end, $tz, "UTC", "Ymd\THis\Z");
$vevent->setProperty( "dtend",   $end );
$vevent->setProperty( "LOCATION", $loc );
  // property name - case independent
$vevent->setProperty( "summary", "Freifunktreffen" );
$desc = "Einladung zum Freifunktreffen am " . $sday . "." . $smonth . "." . $syear . " um " . $stime . " Uhr.\nDetails siehe: https://www.freifunk-halle.net/forum/viewforum.php?f=37";
$vevent->setProperty( "description", $desc );
#$vevent->setProperty( "comment", "This is a comment" );
#$vevent->setProperty( "attendee", "attendee1@icaldomain.net" );
if ($remember){
$valarm = & $vevent->newComponent( "valarm" );
  // create an event alarm
$valarm->setProperty("action", "DISPLAY" );
$valarm->setProperty("description", $vevent->getProperty( "description" ));

  // reuse the event description
$d = sprintf( "%04d%02d%02d %02d%02d%02d", $syear, $smonth, $sday, ($stime-$remember-1), 0, 0 );
iCalUtilityFunctions::transformDateTime( $d, $tz, "UTC", "Ymd\THis\Z");
$valarm->setProperty( "trigger", $d );
  // create alarm trigger (in UTC datetime)
$vevent = & $vcalendar->newComponent( "vevent" );
  // create next event calendar component
}
#$vevent->setProperty( "resources", "COMPUTER PROJECTOR" );
return $vcalendar;}

//isset()
#header('Content-type: text/calendar; charset=utf-8');
#header('Content-Disposition: inline; filename=calendar.ics');
$year      = intval($_GET['year']);
$day      = intval($_GET['day']);
$month      = intval($_GET['month']);
$loc 	= $_GET['loc'];
$cal = createICS($year,$month,$day,19, $loc);
$cal->returnCalendar();
exit;

?>
