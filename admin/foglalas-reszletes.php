<?php 
	include 'kimeneti_fuggvenyek.php';
	include '../core/connect.php';
	fejlec_letrehozas();
	$id = $_GET['foglalasid'];
?>

<div class="page-content-wrapper">
			<div class="page-content">
				 <div class="tab-content">

				 		<?php 
				 			$sql = "SELECT * FROM jelentkezesek WHERE elfogadva = '0' AND id = $id";
				 			$res = mysqli_query($connect,$sql);
				 			while ($a = mysqli_fetch_assoc($res)) {
				 		?>

				 				<b>Foglalás napja:</b> <?php echo $a['y'] . ". " . $a['m'] . ". " . $a['d'] . "."; ?><br>
				 				<b>Foglalás időpontja:</b> <?php echo $a['start_time'] . " - " . $a['end_time']; ?><br>
				 				<b>Terem:</b> <?php echo $a['terem'] ?><br>
				 				<b>Eszközök:</b> <?php echo $a['eszkozok'] ?><br>
				 				<b>Kísérletek:</b> <?php echo $a['kiserletek'] ?><br>
				 				<b>Megjegyzés:</b> <?php echo $a['megjegyzes'] ?><br>
				 				<b>Elfogadás:</b> <a href="elfogadas.php?id=<?php echo $a['id']; ?>">Foglalás elfogadása</a>

				 		<?php
							}
				 		?>

				</div>
			</div>
				 <!-- END PAGE CONTENT-->
</div>

<?php
	lablec_letrehozas();
?>