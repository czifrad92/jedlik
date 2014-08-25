<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';

fejlec_letrehozas();

require("core/calendar/config.php");
require("core/calendar/lang/lang." . LANGUAGE_CODE . ".php");
require("core/calendar/functions.php");

# testing whether var set necessary to suppress notices when E_NOTICES on
$month = 
	(isset($_GET['month'])) ? (int) $_GET['month'] : null;
$year =
	(isset($_GET['year'])) ? (int) $_GET['year'] : null;

$m = (!$month) ? date("n") : $month;
$y = (!$year)  ? date("Y") : $year;

$scrollarrows = scrollArrows($m, $y);

require("core/calendar/templates/" . TEMPLATE_NAME . ".php");




lablec_letrehozas();	

?>