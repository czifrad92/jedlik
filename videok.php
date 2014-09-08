<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';
include 'core/connect.php';

fejlec_letrehozas("");

?>
<section id="blog-outer" class="blog-outer blog-single">
	 	<div class="container">			
			
			<!-- Title & Desc Row Begins -->
			<div class="row title-row">
				<div class="col-md-12 header text-center">
					<!-- Title --> 
					<h2 class="title capitalize">Videók</h2>
				</div>
			</div><!-- Title & Desc Row Ends -->
			
			<div class="row">
				<!-- Blog Left Part -->



				<div class="hircontainer">
					<div class="blog-inner animated" data-animation="fadeInUp" data-animation-delay="300">
						<div class="container blog-status">
							<!-- Blog Date and Title -->
							<div class="row blog-date">
								<div class="hirdatum text-center">
									<span class="bold span-inner"><?php echo $a['date']; ?></span>
								</div>
								<div class="hirtitle blog-title">
									<a href="?id=<?php echo $a['id']; ?>"><?php echo $a['cim']; ?> </a>					
								</div>
							</div>							
							<!-- Blog Description -->
							<p><?php echo $a['leiras']; ?> </p>					
						</div>											
					</div>												
				</div><!-- Blog Left Part Ends -->


				
				
	   		</div><!-- Blog Row Ends -->
		</div><!-- Blog Container Ends -->
	 </section><!-- Blog Ends -->
	
<?php 
	lablec_letrehozas();
 ?>
