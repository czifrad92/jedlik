<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';

fejlec_letrehozas("");

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$hirreszletes = "SELECT * FROM hirek where id = '$id'";
	$res = mysqli_query($connect, $hirreszletes);
?>
<section id="blog-outer" class="blog-outer blog-single">
	 	<div class="container">			
			
			<!-- Title & Desc Row Begins -->
			<div class="row title-row">
				<div class="col-md-12 header text-center">
					<!-- Title --> 
					<h2 class="title capitalize">Hírek</h2>
				</div>
			</div><!-- Title & Desc Row Ends -->
			
			<div class="row">
				<!-- Blog Left Part -->
<?php
	while ($i = mysqli_fetch_assoc($res)) {
?>

<div class="hircontainer">
	<div class="blog-inner animated hirclear" data-animation="fadeInUp" data-animation-delay="300">
		<div class="container blog-status">
							<!-- Blog Date and Title -->
			<div class="row blog-date">
				<div class="hirdatum text-center">
					<span class="bold span-inner"><?php echo $i['date']; ?></span>
				</div>
				<div class="hirtitle blog-title">
					<a href="?id=<?php echo $i['id']; ?>"><?php echo $i['cim']; ?> </a>					
				</div>
			</div>							
							<!-- Blog Description -->
			<p style="border-top: 1px solid #CCCCCC;"><b><?php echo $i['leiras']; ?></b></p>
			<?php echo $i['tartalom'] ?>			
		</div>											
	</div>												
</div><!-- Blog Left Part Ends -->


<?php
	}//HIRBLOKK VEGE





}//RESZLETES NÉZET VÉGE	
else 
{

?>
<section id="blog-outer" class="blog-outer blog-single hirhatter" >
	 	<div class="container">			
						
			<!-- Title & Desc Row Begins -->
			<div class="row title-row">
				<div class="col-md-12 header text-center">
					<!-- Title --> 
					<h2 class="title capitalize">Hírek</h2>
				</div>
			</div><!-- Title & Desc Row Ends -->


			<?php 
				$hirsql = "SELECT * FROM hirek ORDER BY date DESC";
				$res = mysqli_query($connect, $hirsql);
				while ($a = mysqli_fetch_assoc($res)) {
			?>


					<div class="blog-box effects clearfix effect6 hirbox">
							<div class="blog-content">
								<a href="?id=<?php echo $a['id']; ?>"><h2><?php echo $a['cim']; ?></h2></a>
								<p class="hirleiras"><?php echo $a['leiras']; ?></p>
								<a href="?id=<?php echo $a['id']; ?>" class="btn slide-btn">Tovább</a>
							</div>
					</div>


				<?php 
					}
				?>

				
				

		</div><!-- Blog Container Ends -->
	 </section><!-- Blog Ends -->
	

</div>
<?php 
}
	lablec_letrehozas();
 ?>
