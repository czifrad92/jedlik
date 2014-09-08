<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';

fejlec_letrehozas("Galéria");

?>
<div class="gallerycontainer">
<?php

$dirname = "admin/style/plugins/jquery-file-upload/server/php/files/";
$images = glob($dirname."*");

$imagecount = count($images);

$keptomb = array();
$i = 0;
foreach($images as $image) {
	$keptomb[$i] = '<div class="imageholder"><img class="galleryimg" src="' . $image . '" /></div>';
	$i++;
}

$start = 0;
$darab = 10;

if (isset($_GET["page"])) {
	$start = $_GET["page"] * $darab;
	//echo $start;
}


$pages = $imagecount / $darab;

//echo $pages;

for ($i = $start; $i < $start+$darab; $i++)
	if (isset($keptomb[$i])) {
		echo $keptomb[$i];
	}
	
?>

<div class="oldalszamok">
	<?php for ($i = 1; $i <= $pages; $i++){ ?>
		<a href="<?php echo "?page=" . $i; ?>"><?php echo $i; ?> </a>
	<?php } ?>
</div>
</div>
<?php
	lablec_letrehozas();
?>
