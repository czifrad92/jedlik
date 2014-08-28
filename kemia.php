<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';

fejlec_letrehozas("");
?>
	<div class="static-container">

		<div class="kiserletlista">
			<h3>7-8. Évfolyam</h3>
			<?php

			$sql2 = "SELECT * FROM kiserletek WHERE tantargy = 'Kémia' AND evfolyam = '7-8' ORDER BY id";
			$res = mysqli_query($connect,$sql2);
			while ($a = mysqli_fetch_assoc($res)) {
				echo "<div class='kiserlet'>" . $a["nev"]. "</div>";
			}
			?>
		</div>
		<div class="kiserletlista">
			<h3>9-10. Évfolyam</h3>
			<?php

			$sql2 = "SELECT * FROM kiserletek WHERE tantargy = 'Kémia' AND evfolyam = '9-10' ORDER BY id";
			$res = mysqli_query($connect,$sql2);
			while ($a = mysqli_fetch_assoc($res)) {
				echo "<div class='kiserlet'>" . $a["nev"]. "</div>";
			}
			?>
		</div>
		<div class="kiserletlista">
			<h3>11-12. Évfolyam</h3>
			<?php

			$sql2 = "SELECT * FROM kiserletek WHERE tantargy = 'Kémia' AND evfolyam = '11-12' ORDER BY id";
			$res = mysqli_query($connect,$sql2);
			while ($a = mysqli_fetch_assoc($res)) {
				echo "<div class='kiserlet'>" . $a["nev"]. "</div>";
			}
			?>
		</div>
	</div>
<?php 
	lablec_letrehozas();
 ?>
