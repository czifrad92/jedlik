<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';

fejlec_letrehozas("");

$sql = "SELECT * FROM videok";

$res = mysqli_query($connect,$sql);
			while ($a = mysqli_fetch_assoc($res)) {

			$code = str_replace('watch?v=', 'embed/', $a['link']);
			
?>


<div class="videocontainer">
	<div class="videoleft"><iframe width="520" height="315" src="<?php echo $code; ?>"></iframe></div>
	<div class="videoright">
		<?php echo $a['cim']; ?>
		<?php echo $a['tag']; ?>
		<?php echo $a['iskola']; ?>
		<?php echo $a['kiserlet']; ?>
	</div>
</div>


	
<?php
	}

	lablec_letrehozas();
 ?>
