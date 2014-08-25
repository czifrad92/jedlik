<?php

function statikus_oldal_letrehozas($page) {
	include('core/connect.php');
	$sql = "SELECT cim,tartalom FROM `static` WHERE url='$page'";
	$res = mysqli_query($connect,$sql);

	while($a = mysqli_fetch_assoc($res)) {
		echo $a["tartalom"];
	}
}

?>