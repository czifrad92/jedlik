<?php
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';
session_start();
fejlec_letrehozas("Partner iskolák");
?>
	<div class="static-container">
		<h1>Partner iskolák</h1>
		<ul>
			<?php
			# LEKÉRDEZÉS ÉS KILISTÁZÁS: ISKOLÁK NEVEINEK KIÍRATÁSA, HA AZ ILLETŐ FELHASZNÁLÓ JOGOSULTSÁGGAL (1) RENDELKEZIK

				$sql = "SELECT * FROM felhasznalok WHERE admin < 2 ORDER BY iskola";
				$res = mysqli_query($connect, $sql);
				while ($a = mysqli_fetch_assoc($res)) {
					echo "<li>" . $a["iskola"] . "</li>";
				}
			?>
		</ul>
	</div>
<?php
lablec_letrehozas();
?>