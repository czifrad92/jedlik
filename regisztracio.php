<?php
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';
fejlec_letrehozas();
?>

<div class="container">
<?php if ($_SESSION["admin"] > '2') { ?>
		<div class="left">
		<div class="registerdiv">
			<h1>ÚJ FELHASZNÁLÓ LÉTREHOZÁSA</h1>
			<form action="newuser.php" name="register" id="register" method="post">
			<div class="regleft">
				<label class="register" for="regnickname">Fehasználónév</label><br>
				<label class="register" for="regpassword">Jelszó</label><br>			
				<label class="register" for="password2">Jelszó megerősítése</label><br>
				<label class="register" for="email">E-mail cím</label><br>
				<label class="register" for="admin">Felhasználó jogosultsága</label>
			</div>
			
			<div class="regright">
				<input class="registerform" type="text" name="regnickname" id="regnickname" value="">
				<br>
				<input class="registerform" type="password" name="regpassword" id="regpassword">			
				<br>
				<input class="registerform" type="password" name="password2" id="password2">
				<br>
				<input class="registerform" type="text" name="email" id="email">
				<select name="admin" class="registerform">
					<option value="0">Kérem válasszon jogosultságot!</option>
					<option value="1">Laboráns</option>
					<option value="2">Laborvezető</option>
				</select>
				<input class="registerbutton" type="submit" name="registerbutton" id="registerbutton" value="Felhasználó létrehozása">
			</div>
			</form>
			

		<div class="error">
			<?php
			if (isset($_POST["registerbutton"]))
			{
				//INPUT VÁLTOZÓK
				$nickname = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["regnickname"]));
				$password = mysqli_real_escape_string($_POST["regpassword"]);
				$password2 = mysqli_real_escape_string($_POST["password2"]);
				$email = mysqli_real_escape_string($connect,$_POST["email"]);
				$admin = mysqli_real_escape_string($connect,$_POST["admin"]);
				$userused = false;
				$emailused = false;
				$error = false;

				//VÁLTOZÓ REGEXEK
				$nickname_regex = '/^[áéíóöőúüű\w\.()!-]+$/usi';
				$password_regex = '/^[áéíóöőúüű\w\.()!-]+$/usi';
				$email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
				
				$result = mysqli_query($connect,"SELECT felhasznalo, email FROM felhasznalok");
				while($row = mysqli_fetch_array($result))
				{
					if ($row['felhasznalo'] == $nickname)
					{
						$userused = true;
					}
					
					if ($row['email'] == $email)
					{
						$emailused = true;
					}
				}
				
				//FORM VIZSGÁLATOK
				if ($userused == true)
				{
					echo '<p class="regerror">Már létezik ilyen felhasználó!</p>';
					$error = true;
				}
					elseif ($emailused == true)
					{
						echo '<p class="regerror">Ezen az e-mail címen már valaki beregisztrált!</p>';
						$error = true;
					}
						elseif ((!$nickname) || ( (!preg_match($nickname_regex, $nickname )) ) )
						{
							echo '<p class="regerror">Nem adtál meg nicknevet, vagy a nicknév nem megengedett karaktert tartalmaz!</p>';
							$error = true;
						}
						
							elseif ((!$password) || ( (!preg_match($password_regex, $password )) ) )
							{
								echo '<p class="regerror">Nem adtál meg jelszót, vagy a jelszó nem megengedett karaktert tartalmaz!</p>';
								$error = true;
							}
							
								elseif ((!$password2) || ( ($password != $password2) ) )
								{
								echo '<p class="regerror">A két jelszó nem egyezik!</p>';
								$error = true;
								}
									
									elseif ((!$email) || ( (!preg_match($email_regex, $email )) ) )
									{
										echo '<p class="regerror">Nem adtál meg e-mail címet, vagy nem jó formátumban adtad meg!</p>';
										$error = true;
									}
										elseif ($admin == 0){
											echo '<p class="regerror">Nem választott jogosultságot!</p>';
										}
				//HA MINDEN FORM JÓ
				elseif ($error == false)
				{

					//REGISZTRÁCIÓ DÁTUMA
					$today = date("Y.m.d.");
					//JELSZÓ MD5
					$hashedpassword = md5($password);
					
					//QUERY
					mysqli_query($connect , "INSERT INTO felhasznalok (felhasznalo, password, email, regdate, admin) VALUES ('$nickname', '$hashedpassword', '$email', '$today', '$admin'); ");
					
					//EMAIL KIKÜLDÉSE
					include 'mailer/regemail.php';
				}
			}
			?>
		</div>
		</div>
		</div>



<?php }
include 'footer.php';
?>