<?php
session_start();
include 'core/connect.php';
header('Content-Type: application/rss+xml; charset=utf-8');
echo '<?xml version="1.0" encoding="utf-8" ?><rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">';
?>

<channel>
	<atom:link href="http://ujlabor.jedlik.hu/rss" rel="self" type="application/rss+xml" />
<?php
$hirsql = "SELECT * FROM hirek ORDER BY date DESC";
$res = mysqli_query($connect, $hirsql);
while ($a = mysqli_fetch_assoc($res)) { ?>
			<title><?php echo $a['cim']; ?></title>
			<link >http://ujlabor.jedlik.hu/hirek?cim=<?php echo $a['id']; ?></link>
			<description><?php echo $a['leiras']; ?></description>
			<language>hu</language>
<?php } ?>
		</channel>
	</rss>