<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';

fejlec_letrehozas("Időpontfoglalás küldése");


	####################################################################


	require("core/calendar/config.php");
	require("core/calendar/lang/lang." . LANGUAGE_CODE . ".php");
	require("core/calendar/functions.php");


	$month = 
		(isset($_GET['month'])) ? (int) $_GET['month'] : null;
	$year =
		(isset($_GET['year'])) ? (int) $_GET['year'] : null;

	$m = (!$month) ? date("n") : $month;
	$y = (!$year)  ? date("Y") : $year;

	require("core/calendar/templates/" . TEMPLATE_NAME . ".php");

	####################################################################

?>


		
				
		


<form method="POST" action="">
	<select name="iskola">
<?php 
			$lekerdezes = "SELECT * FROM iskolak";
			$res = mysqli_query($connect, $lekerdezes);
			while ($i = mysqli_fetch_assoc($res)) { ?>
				<option><?php echo $i["iskolanev"]; ?></option>
			<?php } ?>


	</select>
</form>



<?php

lablec_letrehozas();	

?>