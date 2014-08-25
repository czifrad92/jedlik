<?php
function fejlec_letrehozas() {
	// Fejléc,header
?>
<!DOCTYPE html>
<html lang="hu">
	<head>
		<title>Természettudományos labor</title>
		<meta charset="utf-8">
		<meta http-equiv="Cache-control" content="public">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<header>
			<?php menu_letrehozas(); ?>
		</header>
<?php 
}

function lablec_letrehozas() {
	// Lábléc,footer
?>
<footer>
<!-- tartalom -->
</footer>
</body>
</html>

<?php
}
function menu_letrehozas() {
	// menu létrehozás
?>
<div class="header">			
				<div class="hleft">
					<div class="menu">
						<ul class="menu">
							<li class="menu"><a href="index.php">Főoldal</a></li>
						</ul>
					</div>
				</div>
				<?php
					if (!isset($_SESSION["currentuser"]))
						{ ?>
							<ul class="menu">
								<li class="menu2"><a href="">Menü</a></li>
							</ul>
						<?php }
					else
						{ ?>
							<ul class="menu">
								védett menüpontok
							</ul>
						<?php }
					login_letrehozas();
				?>
				
</div>
<?php
}
function login_letrehozas() {
?>
				<div class="mainlogin">
						<?php
						if (!isset($_SESSION["currentuser"]))
								{ ?>
										<form action="user-auth.php" name="login" id="login" method="post">
											<input class="loginuser" placeholder="Felhasználónév" size="13" type="text" name="nickname" id="nickname" required>
											<input class="loginpassword" size="13" placeholder="Jelszó" type="password" name="password" id="password" required>
											<input type="submit" class="loginbutton" name="loginbutton" id="loginbutton" value="Belépek!">
										</form>
								<?php }
						else {
									echo '<p class="loggedas">Üdv ' . $_SESSION["currentuser"] . '!</p>'; ?>
										<a href="kijelentkezes.php">Kijelentkezés</a>
						<?php }	?>
				</div>
<?php
}
?>
