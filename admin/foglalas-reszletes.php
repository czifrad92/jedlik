<?php 
	include 'kimeneti_fuggvenyek.php';
	include '../core/connect.php';
	fejlec_letrehozas();
?>

<div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">
				 Foglalások (részletes infoért kattintson a foglalás számára!)
				 </h3>
				 <div class="tab-content">
				 	<table>
				 		<thead>
				 			<th style="width: 20px; text-align: center;">#</th>
				 			<th style="width: 100px; text-align: center;">Foglalás napja</th>
				 			<th style="width: 190px; text-align: center;">Foglalás időpontja</th>
				 			<th style="width: 100px; text-align: center;">Terem</th>
				 			<th style="width: 150px; text-align: center;">Elfogadás</th>
				 		</thead>
				 		<?php 
				 			$sql = "SELECT * FROM jelentkezesek WHERE elfogadva = '0'";
				 			$res = mysqli_query($connect,$sql);
				 			while ($a = mysqli_fetch_assoc($res)) {
				 		?>
				 			<tr>
				 				<td style="text-align: center;"><?php echo $a['id']; ?></td>
				 				<td style="text-align: center;"><?php echo $a['y'] . ". " . $a['m'] . ". " . $a['d'] . "."; ?></td>
				 				<td style="text-align: center;"><?php echo $a['start_time'] . " - " . $a['end_time']; ?></td>
				 				<td style="text-align: center;"><?php echo $a['terem'] ?></td>
				 				<td style="text-align: center;"><a href="elfogadas.php?id=<?php echo $a['id']; ?>">Foglalás elfogadása!</a></td>
				 			</tr>
				 		<?php
							}
				 		?>
				 	</table>
				</div>
			</div>
				 <!-- END PAGE CONTENT-->
</div>

<?php
	lablec_letrehozas();
?>