<?php
include 'core/connect.php';
session_start();
ob_start();

	if (isset($_POST["loginbutton"]))
	{

		$myusername = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['nickname'])); 
		$mypassword = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['password'])); 
		$mypassword = md5($mypassword);

		$result = mysqli_query($connect, "SELECT * FROM felhasznalok WHERE felhasznalo='$myusername' and password='$mypassword'");
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		
		if($count == 1)
		{
								//BELÉPVE
								$_SESSION["logged"] = 1;
								$_SESSION["id"] = $row["felhasznaloid"];
								$_SESSION["currentuser"] = $myusername;
								header("Location: ../index.php");
		}
		else
		{
			header("location: ../error.php");
			$_SESSION["logged"] = 0;
		}
	}
	?> 