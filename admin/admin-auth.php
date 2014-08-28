<?php
session_start();
ob_start();
include "../core/connect.php";

		$username = mysqli_real_escape_string($connect,$_POST['adminuser']);
		$sql = "select * from felhasznalok WHERE felhasznalo='$username' AND admin > '0'";
		$lekeres=mysqli_query($connect, $sql);
			if(mysqli_num_rows($lekeres) == 1)
				{
				$user = mysqli_fetch_assoc($lekeres);
				if(md5(mysqli_real_escape_string($connect,$_POST['adminpassword'])) == $user['password'])
				{

						$_SESSION["currentuser"] = $user['felhasznalo'];
						$_SESSION["admin"] = $user['admin'];
						$_SESSION['belepve'] = 1;
						ob_end_clean();
						header("Location: kezdolap");
						die();
				}
				else
				{
					header("Location: login");
				}
				}
				else
				{
					header("Location: login");
				}
?>