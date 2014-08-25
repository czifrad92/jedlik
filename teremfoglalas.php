<?php
include 'header.php';
?>

<div class="container">
<?php 
	include 'adminmenu.php';
?>

		<div class="left">
			<div class="registerdiv">
				<h1>ÚJ FELHASZNÁLÓ LÉTREHOZÁSA</h1>
				<form action="newuser.php" name="register" id="register" method="post">
				<div class="regleft">
					<label class="register" for="regnickname">Iskola</label><br>
					<label class="register" for="regpassword">Tantárgy</label><br>			
					<label class="register" for="password2">Kísérlet neve</label><br>
					<label class="register" for="email">Eszközök</label><br>
					<label class="register" for="admin">Időpont</label><br>
					<label class="register" for="admin">Terem</label>
				</div>
				
				<div class="regright">
					<select name="admin" class="registerform"><br>
						<option value="0">Iskola</option>
						<option value="1">Iskola2</option>
					</select>
					<select name="admin" class="registerform"><br><br>
						<option value="0">Iskola</option>
						<option value="1">Iskola2</option>
					</select>
					<select name="admin" class="registerform"><br>
						<option value="0">Iskola</option>
						<option value="1">Iskola2</option>
					</select>
					<textarea></textarea>
					<br>
					<input class="registerform" type="text" name="email" id="email">	
					<br>
					<select name="admin" class="registerform"><br>
						<option value="0">Iskola</option>
						<option value="1">Iskola2</option>
					</select>

					<input class="registerbutton" type="submit" name="registerbutton" id="registerbutton" value="Felhasználó létrehozása">
				</div>
				</form>

			</div>
		</div>



<?php 
include 'footer.php';
?>