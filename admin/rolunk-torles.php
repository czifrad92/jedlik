<?php
include "../core/connect.php";
if(isset($_GET["id"])) {
	$id = intval($_GET["id"]);
	mysqli_query($connect,"DELETE FROM rolunk WHERE id='$id'");
	header("Location: rolunk-irtak");
}
?>