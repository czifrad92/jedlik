<?php
function admin_menu() {
?>
			<div class="adminlogin">
				<form action="admin-auth" name="adminlogin" method="post">
					<input placeholder="Felhasználónév" class="adminuser" type="text" name="adminuser">
					<input placeholder="Jelszó" class="adminpassword" type="password" name="adminpassword">
					<input type="submit" name="adminlogin" value="Belépek!" class="adminbutton">
				</form>
			</div>	
					<div class="menu">
						<ul class="menu">
							<li class="menu"><a href="admin">Admin</a></li>
	
							<?php if ($_SESSION["admin"] > '2') { ?>

							<li class="menu"><a href="regisztracio">Új felhasználó létrehozása</a></li>

							<?php } ?>
							<li class="menu"><a href="teremfoglalas">Teremfoglalás</a></li>
						</ul>
					<div class="mainlogin">

							<a href="kijelentkezes">Kijelentkezés</a>

					</div>
					</div>
<?php
}
?>