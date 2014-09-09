<?php
	include 'core/connect.php';
	session_start();
	ob_start();
	$_SESSION['akadaly'] = 0;
	header("location: index");
?> 