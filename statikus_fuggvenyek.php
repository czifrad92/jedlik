<?php
session_start();
function statikus_oldal_letrehozas($page, $title) {
	include('core/connect.php');
	$sql = "SELECT cim,tartalom FROM `static` WHERE url='$page'";
	$res = mysqli_query($connect,$sql);
?>
	<section id="about-us" class="about-us" style="border-bottom:none;">
		<div class="container about-us-inner" style="padding-top:25px;">
			<!-- Title & Desc Row Begins -->
			<div class="row">
				<div class="col-md-12 header text-center" style="padding-top: 0px;">
					<h2 class="title capitalize"><?php echo $title; ?></h2>
				</div>
			</div><!-- Title & Desc Row Ends -->
			<!-- About Us Row Begins -->
			<div class="row">
				<!-- Right Part Begins -->
				<div class="static-container">
					<div class="about-right text-left">
	<?php
		while($a = mysqli_fetch_assoc($res)) {
			echo "<p>".$a["tartalom"]."</p>";
		}?>
			</div><!-- Right Part Ends -->				
			</div><!-- About Us Row Ends -->
		</div><!-- Container Ends -->
	</section>
<?php
	}
?>
