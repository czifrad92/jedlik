<?php
	$db_host = "localhost";
	$db_user = "labor";
	$db_pass = "4Ag1b^943S";
	$db = "laborjedlikhu";

$connect = mysqli_connect("$db_host","$db_user","$db_pass") or die ("could not connect to mysql");
mysqli_select_db($connect, $db) or die ("no database");
mysqli_query($connect, 'set names utf8');
?>