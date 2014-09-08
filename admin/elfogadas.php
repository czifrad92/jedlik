<?php
include "../core/connect.php";
if(isset($_GET["id"])) {
	$id = intval($_GET["id"]);
	mysqli_query($connect,"UPDATE jelentkezesek SET elfogadva='1' WHERE id='$id'");
	header("Location: foglalasok");
}
?>