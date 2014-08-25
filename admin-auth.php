<?php
include 'core/connect.php';
session_start();
ob_start();

	if (isset($_POST["adminlogin"]))
	{
		$myusername = $_POST['adminuser']; 
		$mypassword = $_POST['adminpassword']; 
		$mypassword = md5($mypassword);
		
		//INJECT PROTECTION
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
		
		$myusername = mysqli_real_escape_string($connect, $myusername);
		$mypassword = mysqli_real_escape_string($connect, $mypassword);
		
		$result = mysqli_query($connect, "SELECT * FROM felhasznalok WHERE felhasznalo='$myusername' AND password='$mypassword' AND admin NOT LIKE '0'");
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		
		if($count == 1)
		{
								//BELÉPVE
								$_SESSION["admin"] = $row["admin"];
								$_SESSION["id"] = $row["felhasznaloid"];
								$_SESSION["currentuser"] = $myusername;
								header("location: admin.php");
		}
		else
		{
			header("location: admin.php");
		}
	}
	?> 