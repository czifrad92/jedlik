<?php
function admin_menu() {
?>
			<div class="adminlogin">
				<form action="admin-auth.php" name="adminlogin" method="post">
					<input placeholder="Felhasználónév" class="adminuser" type="text" name="adminuser">
					<input placeholder="Jelszó" class="adminpassword" type="password" name="adminpassword">
					<input type="submit" name="adminlogin" value="Belépek!" class="adminbutton">
				</form>
			</div>	
					<div class="menu">
						<ul class="menu">
							<li class="menu"><a href="admin.php">Admin</a></li>
	
							<?php if ($_SESSION["admin"] > '2') { ?>

							<li class="menu"><a href="regisztracio.php">Új felhasználó létrehozása</a></li>

							<?php } ?>
							<li class="menu"><a href="teremfoglalas.php">Teremfoglalás</a></li>
						</ul>
					<div class="mainlogin">

							<a href="kijelentkezes.php">Kijelentkezés</a>

					</div>
					</div>
<?php
}
?>