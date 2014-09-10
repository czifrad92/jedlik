<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';

fejlec_letrehozas("");
?>

<h1 style="text-align: center;">Videók</h1>
<div class="videokereses-container">
	<h3>Keresés</h3>

	<form action="" method="POST" >
		<input type="text" name="kereses">
		<select name="iskola">
			<option value="0">Iskola</option>
			<?php  
				$sql = "SELECT * FROM felhasznalok WHERE admin < 4 ORDER BY iskola";
				$res = mysqli_query($connect, $sql);
				while ($a = mysqli_fetch_assoc($res)) {
				?>
					<option value="<?php echo $a['iskola']; ?>"><?php echo $a['iskola']; ?></option>
					<?php
				}
			?>
		</select>

		<input type="submit" name="button" value="OK">
	</form>

</div>



<?php

$sql = "SELECT * FROM videok order by id DESC";

if (isset($_POST['button'])){
	$kulcsszo = $_POST['kereses'];
	$iskola = $_POST['iskola'];
	//echo $iskola;
	//echo $kulcsszo;

	$felt1 = "";

	if ($iskola != '0'){
		$felt1 = "AND iskola LIKE '$iskola'";
		//echo $felt1;
	}

	$sql = "SELECT * FROM videok WHERE 
			(cim LIKE '%$kulcsszo%' OR tag LIKE '%$kulcsszo%')
			$felt1 order by id DESC";

			//echo $sql;
}


$res = mysqli_query($connect,$sql);
			while ($a = mysqli_fetch_assoc($res)) {

			$code = str_replace('watch?v=', 'embed/', $a['link']);
			$keywords = str_replace(',', '&nbsp;&nbsp;&nbsp;', $a['tag']);
			$kiserlet = str_replace(', ', '<br>', $a['kiserlet']);
			
?>


<div class="videocontainer">
	<div class="videoleft"><iframe width="520" height="315" src="<?php echo $code; ?>"></iframe></div>
	<div class="videoright">
		<div class="videotitle"><?php echo $a['cim']; ?></div>
		<b><?php echo $a['iskola']; ?></b><br><br>
		

		<?php echo $kiserlet; ?>

		<div class="videotags"><?php echo $keywords; ?></div>
	</div>
</div>


	
<?php
	}

	lablec_letrehozas();
 ?>
