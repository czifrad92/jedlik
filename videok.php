<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';

fejlec_letrehozas("");

$sql = "SELECT * FROM videok order by id DESC";

$res = mysqli_query($connect,$sql);
			while ($a = mysqli_fetch_assoc($res)) {

			$code = str_replace('watch?v=', 'embed/', $a['link']);
			$keywords = str_replace(',', '&nbsp;&nbsp;&nbsp;', $a['tag']);
			$kiserlet = str_replace(', ', '<br>', $a['kiserlet']);
			
?>
<h1>Videók</h1>

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

	lablec_letrehozas();
 ?>
