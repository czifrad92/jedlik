<?php
	$db_host = "localhost";
	$db_user = "piarso01_jedlik";
	$db_pass = "gd4Hq)f=@Ps{";
	$db = "piarso01_jedlik";

$connect = mysqli_connect("$db_host","$db_user","$db_pass") or die ("could not connect to mysql");
mysqli_select_db($connect, $db) or die ("no database");
mysqli_query($connect, 'set names utf8');
?>