<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';
include '../core/connect.php';

fejlec_letrehozas("Időpontfoglalás küldése");


	####################################################################


	require("../core/calendar/config.php");
	require("../core/calendar/lang/lang." . LANGUAGE_CODE . ".php");
	require("../core/calendar/functions.php");


	$month = 
		(isset($_GET['month'])) ? (int) $_GET['month'] : null;
	$year =
		(isset($_GET['year'])) ? (int) $_GET['year'] : null;

	$m = (!$month) ? date("n") : $month;
	$y = (!$year)  ? date("Y") : $year;

	require("../core/calendar/templates/" . TEMPLATE_NAME . ".php");

	####################################################################

?>


		
				
		

<div class="idopontfoglalas-container">
	<form method="POST" action="">
		<div class="idopontfoglalas-container-label">
			<label for="tantargy">Tantárgy</label><br>
			<label for="evfolyam">Évfolyam</label><br>
			<label for="kiserletek">Kísérletek</label><br>
			<label for="eszkozok">Eszközök</label><br>
			<label for="ido">Előadás napja</label>
			<label for="terem">Terem</label>
		</div>


		<div class="idopontfoglalas-container-form">

			<select name="tantargy" class="idopontfoglalas-tantargy" id="tantargy">
				<option value="Biológia">Biológia</option>
				<option value="Fizika">Fizika</option>
				<option value="Kémia">Kémia</option>
			</select><br>


			<select name="evfolyam" class="idopontfoglalas-evfolyam" id="evfolyam">
				<option value="8-9">8-9</option>
				<option value="9-10">9-10</option>
				<option value="10-11-12">10-11-12</option>
				<option value="11-12">11-12</option>
			</select><br>

			<select name="kiserletek" class="idopontfoglalas-kiserletek" id="kiserletek">
					<?php 
					$lekerdezes2 = "SELECT * FROM kiserletek ORDER BY kiserletek.nev";
					$res2 = mysqli_query($connect, $lekerdezes2);
					while ($i = mysqli_fetch_assoc($res2)) { ?>
						<option value="<?php echo $i["id"] ?>"><?php echo $i["nev"]; ?></option>
					<?php } ?>


			</select><br>
			<textarea name="eszkozok" class="idopontfoglalas-eszkozok" id="eszkozok"></textarea><br>

			<select name="ev" id="ido">
				<option value="<?php echo date("Y"); ?>"><?php echo date("Y"); ?></option>
				<option value="<?php echo date("Y") + 1; ?>"><?php echo date("Y") + 1; ?></option>
			</select>

			<select name="honap">
				<option value="1">Január</option>
				<option value="2">Február</option>
				<option value="3">Március</option>
				<option value="4">Április</option>
				<option value="5">Május</option>
				<option value="6">Június</option>
				<option value="7">Július</option>
				<option value="8">Augusztus</option>
				<option value="9">Szeptember</option>
				<option value="10">Október</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>

			<select name="nap">
				<?php for ($i = 1; $i < 32; $i++)
					echo '<option value="' . $i . '">' . $i . '</option>';
				?>
			</select>

			<label for="mettol1">Mettől:</label>
			<select id="mettol1" name="mettol1">
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
			</select>
			<select id="mettol2" name="mettol2">
				<option value=":00:00">00</option>
				<option value=":15:00">15</option>
				<option value=":30:00">30</option>
				<option value=":45:00">45</option>
			</select>

			<label for="meddig1">Meddig:</label>
			<select id="meddig1" name="meddig1">
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
			</select>
			<select id="meddig2" name="meddig2">
				<option value=":00:00">00</option>
				<option value=":15:00">15</option>
				<option value=":30:00">30</option>
				<option value=":45:00">45</option>
			</select>
			<br>
			<select name="terem" class="idopontfoglalas-terem" id="terem">
				<option value="Labor I.">Labor I.</option>
				<option value="Labor II.">Labor II.</option>
			</select>
		</div>

		<input type="submit" name="bekuld"><br><br>
		<?php 
			
		#formból küldött változók elmentése
			if (isset($_POST["bekuld"])) {
				$meddig = $_POST["meddig1"] . $_POST["meddig2"];
				$mettol = $_POST["mettol1"] . $_POST["mettol2"];
				$iskola = $_SESSION["iskola"];
				$tantargy = $_POST["tantargy"];
				$evfolyam = $_POST["evfolyam"];
				$kiserlet = $_POST["kiserletek"];
				$eszkozok = $_POST["eszkozok"];
				$terem = $_POST["terem"];
				$ev = $_POST["ev"];
				$honap = $_POST["honap"];
				$nap = $_POST["nap"];
				$felhasznaloid = "0";
				$elfogadva = "0";



				# a kiválasztott nap elmentése tömbbe (időrend szerint növekvő, azaz a tömb 0. eleme a legkorábbi esemény)


				$check = "SELECT * FROM jelentkezesek WHERE y = '$ev' AND m = '$honap' AND d = '$nap' AND elfogadva = '1' AND terem = '$terem' 
				ORDER BY start_time ";

				$foglalasok = array();

				$res = mysqli_query($connect, $check);
						while ($a = mysqli_fetch_assoc($res)){
						$foglalasok[] = $a;
					}
					
				#foglalások tömb hosszának deklarálása
				$count = count($foglalasok);

				
				$done = false;

			/*if ($count > 0){
				for ($i = 0; $i <= $count; $i++){
				echo $foglalasok[$i]['start_time'] . " " . $foglalasok[$i]['end_time'] . "<br";
				echo $i . "<br>";
				echo $count;
			}*/
		}



			#legelső foglalás a rendszerben

			if (($done == false) && ($count == 0)){
					$sql = "INSERT INTO  jelentkezesek (id, m, d, y, start_time, end_time, felhasznaloid, kiserletid, eszkozok, iskola, title, terem, tantargy, elfogadva)
					VALUES (NULL ,'$honap', '$nap', '$ev', '$mettol', '$meddig', '$felhasznaloid', '$kiserlet', '$eszkozok', '$iskola', 'title', '$terem', '$tantargy' , '0')";
					mysqli_query($connect,$sql);
					$done = true;
					//echo "done0";
			}


			#első foglalás a napon

			if ($done == false){
				//echo "1. ciklus";
				if ( (strtotime($meddig) < strtotime($foglalasok[0]['start_time'])) || (!$foglalasok[0]['start_time']) ) {
					$sql = "INSERT INTO  jelentkezesek (id, m, d, y, start_time, end_time, felhasznaloid, kiserletid, eszkozok, iskola, title, terem, tantargy, elfogadva)
					VALUES (NULL ,'$honap', '$nap', '$ev', '$mettol', '$meddig', '$felhasznaloid', '$kiserlet', '$eszkozok', '$iskola', 'title', '$terem', '$tantargy' , '0')";
					mysqli_query($connect,$sql);
					$done = true;
					echo "done1";
				}
			}

			#olyan helyet keres, aminek a vége korábban van mint a felvitt esemény eleje + a felvitt esemény vége korábban van mint a következő esemény eleje

			if ($done == false){
				$foglalasok[$count]['start_time'] = "24:00:00";
				for ($i = 0; $i <= $count; $i++){
					if (($foglalasok[$i]['end_time'] < $mettol) && ($foglalasok[$i+1]['start_time'] > $meddig)){
					$sql = "INSERT INTO  jelentkezesek (id, m, d, y, start_time, end_time, felhasznaloid, kiserletid, eszkozok, iskola, title, terem, tantargy, elfogadva)
					VALUES (NULL ,'$honap', '$nap', '$ev', '$mettol', '$meddig', '$felhasznaloid', '$kiserlet', '$eszkozok', '$iskola', NULL, '$terem', '$tantargy' , '0')";
					mysqli_query($connect,$sql);
						$done = true;
						echo "done2";
						break;
					}
				}
			}



				
			} #gomblenyomás vége
?>

	</form>
</div>

<?php

lablec_letrehozas();	

?>