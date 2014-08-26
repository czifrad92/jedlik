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
		<td>Tantárgy:</td>
		<td><select name="tantargy">
				<option value="Kémia">Kémia</option>
			</select></td>
	</tr>
	<tr>
		<td>Évfolyam:</td>
		<td><select name="evfolyam">
				<option value="7-8">7-8</option>
				<option value="11-12">11-12</option>
				<option value="9-10">9-10</option>
			</select></td>
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
		$nev = str_replace("\t", ' ', $_POST["nev"]);
		$evfolyam = $_POST["evfolyam"];
		$tantargy = $_POST["tantargy"];
		$sql = "INSERT INTO  `kiserletek` (`id` ,`nev` ,`evfolyam`,`tantargy`)
		VALUES (NULL ,'$nev', '$evfolyam','$tantargy')";
		mysqli_query($connect,$sql);
	}
$sql2 = "SELECT * FROM `kiserletek` ORDER BY id desc";
$res = mysqli_query($connect,$sql2);
while ($a = mysqli_fetch_assoc($res)) {
	echo $a["nev"]."   ".$a["evfolyam"]."<br/>";
}
?>
</body>
</html>
