<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';

fejlec_letrehozas("Galéria");

if (!isset($_GET['nev'])){ ?>
<div class="gallerybox-container">

<?php
$dir = "admin/style/plugins/jquery-file-upload/server/php/files/";
if ($handle = opendir($dir)) {

	while (false !== ($entry = readdir($handle))) {

		if ($entry != "." && $entry != "..") {
?>
<div class="col-md-3 col-sm-6 animated fadeInLeft visible gallerybox" data-animation="fadeInLeft" data-animation-delay="400">
	<div class="product-box">
		<div class="product-box-inner effects clearfix effect2">
			<div class="img" style="height: 130px;">

				<?php
					$h = opendir('admin/style/plugins/jquery-file-upload/server/php/files/' . $entry); //Open the current directory
					while (false !== ($ss = readdir($h))) {
						if($ss != '.' && $ss != '..') { //Skips over . and ..
							$src = 'admin/style/plugins/jquery-file-upload/server/php/files/' . $entry . "/" . $ss;
							//echo $src;
							break; //Exit the loop so no more files are read
						}
					}
				?>

				<img src="<?php if ($ss) {echo $src;} else {echo 'images/logo.png';}?>" width="314" height="225" class="img-responsive" style="<?php if (!$ss) echo 'width: 50%; margin: 0px auto;' ?>">
			</div>
			<h4 class="product-title"><?php echo "$entry"; ?></h4>
		</div>
		<div class="product-more"><a href="?nev=<?php echo "$entry";?>">Tovább >></i></a></div>
	</div>
</div>


<?php
			}
		}
	}

	closedir($handle);
}
?>

</div>
<?php
	if (isset($_GET['nev'])){
		?>

		<div class="gallerycontainer">
			<div class="gallerybacklink">
				<a href="/galeria">Vissza a galériákhoz</a>
			</div>
		<?php


		$dirname = "admin/style/plugins/jquery-file-upload/server/php/files/" . $_GET['nev'] . "/";
		//echo $dirname;
		$images = glob($dirname."*");

		$imagecount = count($images);
		//echo $imagecount;
			if ($imagecount > 0){
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

			}
		}
	lablec_letrehozas();
?>
