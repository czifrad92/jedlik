<?php
$title = " | Elfelejtett jelszó";
include 'header.php';
?>
<div class="container">
	<div class="bigleft">
	<div class="containerheaderleft"><p class="containerheader">ELFELEJTETT JELSZÓ</p></div>
				<div class="left">
			<div class="elfelejtett">
					<p class="aktivalas">Elfelejtett jelszó esetén írd be az e-mail címed az alábbi mezőbe, majd kövesd a kiküldött email-ben levő utasításokat!</p>
					<form action="elfelejtettjelszo.php" name="elfelejtett" id="elfelejtett" method="post">
						<input class="elfelejtett" type="text" name="email" id="email" placeholder="E-mail cím">
						<input class="elfelejtettbutton" type="submit" name="elfelejtett" id="elfelejtett" value="Küldés!">
					</form>
					
					<?php
					
					
					if (isset($_POST["elfelejtett"]))
					{
					$email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
					$email = $_POST["email"];
					$emailused = false;
					$result = mysqli_query($connect,"SELECT felhasznalo, email FROM felhasznalok");
					while($row = mysqli_fetch_array($result))
					{	
						if ($row['email'] == $email)
						{
							$emailused = true;
						}
					}
					
					

					if ((!$email) || ( (!preg_match($email_regex, $email )) ) )
						{
							echo '<p class="regerror">Nem adtál meg e-mail címet, vagy nem jó formátumban adtad meg!</p>';
						}
							elseif ($emailused == false)
								{
									echo '<p class="regerror">A megadott e-mail címmel még nem regisztráltak!</p>';
								}
						//HA JÓ AZ EMAIL
						else
						{
							function generateRandomString($length = 8) 
								{
								$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
								$randomString = '';
								for ($i = 0; $i < $length; $i++) 
									{
										$randomString .= $characters[rand(0, strlen($characters) - 1)];
									}
								return $randomString;
								}
								$code = generateRandomString();
							
							
						
							mysqli_query($connect,"UPDATE felhasznalok SET code='$code' WHERE email='$email';");
							include 'mailer/forgottenemail.php';
							header("location: jelszoreset.php");
						}
					}
					?>

			</div>
		</div>
	</div>

	
	
	
	<?php
	include 'footer.php';
	?>