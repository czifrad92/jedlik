<?php
include "../core/connect.php";
if(isset($_GET["id"])) {
	$id = intval($_GET["id"]);
	$url = mysqli_real_escape_string($connect,$_GET["url"]);
	mysqli_query($connect,"DELETE FROM static WHERE id='$id'");

	$file = "../".$url.".php";
	if (!unlink($file))
 	{
 	 	die();
  	}
	else
  	{
  	}

	header("Location: statikus-oldalak");
}
?>