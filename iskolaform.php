<?php include 'core/connect.php'; ?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
<table>
	<tr>
		<td>Név:</td>
		<td><input type="text" name="nev" size="150" required></td>
	</tr>

	<tr>
		<td>
			<input type="submit" value="Felvisz" name="submit">
		</td>
	</tr>

</table>
</form>
<?php
	if(isset($_POST["submit"])) {
		$nev = $_POST["nev"];
		$sql = "INSERT INTO  `iskolak` (`id` ,`iskolanev`)
		VALUES (NULL ,'$nev')";
		mysqli_query($connect,$sql);
		echo 'sikeres feltöltés';
		echo $nev;
	}
?>
</body>
</html>
