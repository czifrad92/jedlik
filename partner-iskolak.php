<?php
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';
session_start();
fejlec_letrehozas("Partner iskolák");
?>
	<section id="about-us" class="about-us" style="border-bottom:none;">
		<div class="container about-us-inner" style="padding-top:25px;">
			<!-- Title & Desc Row Begins -->
			<div class="row">
				<div class="col-md-12 header text-center" style="padding-top: 0px;">
					<h2 class="title capitalize">Partner iskolák</h2>
				</div>
			</div><!-- Title & Desc Row Ends -->
			<!-- About Us Row Begins -->
			<div class="row">
				<!-- Right Part Begins -->
				<div class="static-container">
					<div class="about-right text-left">
						<ul style="padding-left:15px; list-style-type: disc;">
						<?php
						# LEKÉRDEZÉS ÉS KILISTÁZÁS: ISKOLÁK NEVEINEK KIÍRATÁSA, HA AZ ILLETŐ FELHASZNÁLÓ JOGOSULTSÁGGAL (1) RENDELKEZIK

							$sql = "SELECT * FROM felhasznalok WHERE admin < 2 ORDER BY iskola";
							$res = mysqli_query($connect, $sql);
							while ($a = mysqli_fetch_assoc($res)) {
								echo "<li>" . $a["iskola"] . "</li>";
							}
						?>
			</ul>
				</div><!-- Right Part Ends -->				
			</div><!-- About Us Row Ends -->
		</div><!-- Container Ends -->
	</div>
	</section>
<?php
lablec_letrehozas();
?>