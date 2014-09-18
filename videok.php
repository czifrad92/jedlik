<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';

fejlec_letrehozas("Videók");

?>
	<h1 style="text-align: center;">Videók</h1>
<?php if (!isset($_GET['nev'])) { ?>
	<div class="videokereses-container">
		<h3>Keresés</h3>

		<form action="" method="GET" >
			<input type="text" name="kereses">
			<select name="iskola">
				<option value="0">Iskola</option>
				<?php  
					$sql = "SELECT * FROM felhasznalok WHERE admin < 4 ORDER BY iskola";
					$res = mysqli_query($connect, $sql);
					while ($a = mysqli_fetch_assoc($res)) {
					?>
						<option value="<?php echo $a['iskola']; ?>"><?php echo $a['iskola']; ?></option>
						<?php
					}
				?>
			</select>

			<input type="submit" name="button" class="btn slide-btn keresogomb" value="OK">
		</form>

		<div style="min-height: 100px; width: 100%; margin-top: 20px;">
	<?php 

$array = array();

$cloud[] = array();
$tagek = "";
# CÍMKEFELHŐ 
	$cimkefelho = "SELECT tag, cim FROM videok";
		$cloudres = mysqli_query($connect, $cimkefelho);
			while ($b = mysqli_fetch_assoc($cloudres)) {
				$tagek = $tagek . " " . $b['tag'] . " " . $b['cim'];
			}
			$tagek = str_replace(",", " ", $tagek);
			
			$tagek = mb_strtolower($tagek, 'UTF-8');
			//echo $tagek;
			$tags = explode(' ', $tagek);

			# cloud többdimenziós tömb feltöltése a szavakkal
			$h = 0;
			
			$cloud[0][0] = "";
			$cloud[0][1] = 0;
			for ($i = 0; $i < count($tags); $i++) {
				if (strlen($tags[$i]) > 3){
						# ha 2-nél több betűből áll, megnézi van e már ilyen a tömbben
						$same = false;
							# megnézi van-e már ilyen tömbkezdés
							for ($x = 0; $x < count($cloud); $x++){
								if ($cloud[$x][0] == $tags[$i]){
									$same = true;
									break;
								}
							}

							if ($same == false) {
							$cloud[$h][0] = $tags[$i];
							$cloud[$h][1] = substr_count($tagek, $tags[$i]);
							$h++;
						}
				}
			}

$all = count($tags);
$alldiv = $all/100;
//echo $alldiv;

			for ($i = 0; $i < count($cloud); $i++){
				if ($cloud[$i][1] > 2){

					$link = ' href="videok?kereses=' . $cloud[$i][0] . '&iskola=0&button=OK" ';

					switch ($cloud[$i][1]) {
						case $cloud[$i][1] > 8*$alldiv:
							$class = 'style="font-size: 24px; display:block; float: left; margin-right: 13px;"';
							break;

						case $cloud[$i][1] > 6*$alldiv:
							$class = 'style="font-size: 18px; display:block; float: left; margin-right: 13px;"';
							break;

						case $cloud[$i][1] > 4*$alldiv:
							$class = 'style="font-size: 14px; display:block; float: left; margin-right: 13px;"';
							break;

						case $cloud[$i][1] > 2*$alldiv:
							$class = 'style="font-size: 11px; display:block; float: left; margin-right: 13px;"';
							break;
						
						default:
							$class = 'style="font-size: 11px; display:block; float: left; margin-right: 13px;"';
							break;
					}
					echo "<a " . $class . $link . "> " . $cloud[$i][0] . " </a>";
				}
				
			}
	?>
	</div>
</div>

	<?php
	if (isset($_GET['button'])){
		$kulcsszo = $_GET['kereses'];
		$iskola = $_GET['iskola'];
		//echo $iskola;
		//echo $kulcsszo;

		$felt1 = "";

		if ($iskola != '0'){
			$felt1 = "AND iskola LIKE '$iskola'";
			//echo $felt1;
		}

		$sql = "SELECT * FROM videok WHERE 
				(cim LIKE '%$kulcsszo%' OR tag LIKE '%$kulcsszo%')
				$felt1 order by id DESC";

				//echo $sql;


	$res = mysqli_query($connect,$sql);
		while ($a = mysqli_fetch_assoc($res)) {
			$code = str_replace('watch?v=', 'embed/', $a['link']);
			$keywords = str_replace(',', '&nbsp;&nbsp;&nbsp;', $a['tag']);
			$kiserlet = str_replace(', ', '<br>', $a['kiserlet']);

	?>
		<div class="videocontainer">
			<div class="videoleft"><iframe width="520" height="315" src="<?php echo $code; ?>"></iframe></div>
			<div class="videoright">
				<div class="videotitle"><?php echo $a['cim']; ?></div>
				<b><?php echo $a['iskola']; ?></b><br><br>
				

				<?php echo $kiserlet; ?>

				<div class="videotags"><?php echo $keywords; ?></div>
			</div>
		</div>
	<?php
		}
	} # BUTTON LENYOMÁS VÉGE





//echo "<pre>";
//echo print_r($cloud);
//echo "</pre>";

		?>




<div class="gallerybox-container">
<?php

			$albumsql = "SELECT * FROM videok_album";
			$albums = mysqli_query($connect,$albumsql);
			while ($a = mysqli_fetch_assoc($albums)) {
				?>
				<div class="col-md-3 col-sm-6 animated fadeInLeft visible gallerybox" data-animation="fadeInLeft" data-animation-delay="400">
					<div class="product-box">
						<div class="product-box-inner effects clearfix effect2">
							<div class="img" style="height: 130px;">

								<img src="images/logo.png" width="314" height="225" class="img-responsive" style="width: 42%; margin: 0px auto;">
							</div>
							<h4 class="product-title"><?php echo $a['cim'];?></h4>
						</div>
						<div class="product-more"><a href="?nev=<?php echo $a['cim'];?>">Tovább >></i></a></div>
					</div>
				</div>
			


			<?php } ?>
</div>

<?php
} ###### ALAP NÉZET VÉGE
if (isset($_GET['nev'])) { 
	$albumnev = $_GET['nev'];
	//echo $albumnev;
	$albumok = "SELECT * FROM videok_album WHERE cim = '$albumnev'";

	$res = mysqli_query($connect,$albumok);
				while ($a = mysqli_fetch_assoc($res)) {
					$albumid = $a['id'];
			}


	//echo $albumid;

	$reszletes = "SELECT * FROM videok WHERE album_id = '$albumid' order by id DESC";
	$res2 = mysqli_query($connect,$reszletes);
				while ($a = mysqli_fetch_assoc($res2)) {

				$code = str_replace('watch?v=', 'embed/', $a['link']);
				$keywords = str_replace(',', '&nbsp;&nbsp;&nbsp;', $a['tag']);
				$kiserlet = str_replace(', ', '<br>', $a['kiserlet']);
	?>

	<div class="videocontainer">
		<div class="videoleft"><iframe width="520" height="315" src="<?php echo $code; ?>"></iframe></div>
		<div class="videoright">
			<div class="videotitle"><?php echo $a['cim']; ?></div>
			<b><?php echo $a['iskola']; ?></b><br><br>
			

			<?php echo $kiserlet; ?>

			<div class="videotags"><?php echo $keywords; ?></div>
		</div>
	</div>



	<?php
	}
}
	lablec_letrehozas();
 ?>
