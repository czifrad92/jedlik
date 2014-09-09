<?php
	include 'kimeneti_fuggvenyek.php';
	session_start();
	fejlec_letrehozas("Kísérletek");
?>

<div class="tantargyholder-big">

	<a href="biologia">
		<div class="tantargyholder">
			<h3>Biológia</h3>
			<img src="images/biologia.jpg">
		</div>
	</a>

	<a href="fizika">
		<div class="tantargyholder">
			<h3>Fizika</h3>
			<img src="images/fizika.jpg">
		</div>
	</a>


	<a href="kemia">
		<div class="tantargyholder">
			<h3>Kémia</h3>
			<img src="images/kemia.jpg">
		</div>
	</a>

</div>

<?php
	lablec_letrehozas();
?>