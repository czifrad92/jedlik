<?php

function statikus_oldal_letrehozas($page, $title) {
	include('core/connect.php');
	$sql = "SELECT cim,tartalom FROM `static` WHERE url='$page'";
	$res = mysqli_query($connect,$sql);
?>

<div class="static-container">
	<h1><?php echo $title; ?></h1>
	<?php
		while($a = mysqli_fetch_assoc($res)) {
			echo $a["tartalom"];
		}?>
</div>
<?php
	}
?>
