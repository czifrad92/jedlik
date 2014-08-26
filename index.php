<?php

session_start();
// munkamenet indítása
include 'kimeneti_fuggvenyek.php';

fejlec_letrehozas("");
?>
	<!-- Features Section Begins -->
	<section id="features" class="features-section">
		<div class="container features-inner">
		
			<!-- Title & Desc Row Begins -->
			<div class="row">
				<div class="col-md-12 header text-center">
					<!-- Title --> 
					<h2 class="title capitalize">Szolgáltatások</h2>
					<!-- Description --> 
					<p class="desc white">We ensure quality & support. People love us & we love them. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div><!-- Title & Desc Row Ends -->
			
			<!-- First Row Begins -->
			<div class="row">
				<!-- Feature Box 1 Begins -->
				<div class="col-md-4 col-sm-4 animated" data-animation="fadeInLeft" data-animation-delay="500">
					<div class="feature-box feature-icon1">
						<!-- Feature icon -->
						<i class="icon-beaker fooldal-icon"></i>
						<!-- Title -->
						<h4 class="title-inner">Kísérletek</h4>
						<!-- Description -->
						<p class="desc-inner">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
						<div class="read-more"><a href="#">Learn More <i class="flaticon-arrow209"></i></a></div>
					</div>
					<hr class="features-border">
				</div>
				<!-- Feature Box 1 Ends -->
				
				<!-- Feature Box 2 Begins --> 
				<div class="col-md-4 col-sm-4 animated" data-animation="fadeInUp" data-animation-delay="500">
					<div class="feature-box feature-icon2 middle-border">
						<!-- Feature icon -->
						<i class="icon-calendar fooldal-icon"></i>
						<!-- Title -->
						<h4 class="title-inner">Időpontfoglalás</h4>
						<!-- Description -->
						<p class="desc-inner">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
						<div class="read-more"><a href="#">Learn More <i class="flaticon-arrow209"></i></a></div>
					</div>
					<hr class="features-border">
				</div>
				<!-- Feature Box 2 Ends -->
				
				<!-- Feature Box 3 Begins --> 
				<div class="col-md-4 col-sm-4 animated" data-animation="fadeInRight" data-animation-delay="500">
					<div class="feature-box feature-icon3">
						<!-- Feature icon -->
						<i class="icon-youtube-play fooldal-icon"></i>
						<!-- Title -->
						<h4 class="title-inner">Videók</h4>
						<!-- Description -->
						<p class="desc-inner">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
						<div class="read-more"><a href="#">Learn More <i class="flaticon-arrow209"></i></a></div>
					</div>
					<hr class="features-border">
				</div>
				<!-- Feature Box 3 Ends -->
			</div>
			<!-- First Row Ends -->
		</div>
	</section><!-- Features Section Ends -->
	
	<!-- Product Gallery Begins -->
	<section id="portfolio" class="work">
		<div class="portfolio"></div>
		<div class="container work-inner">
			<!-- Title & Desc Row Begins -->
			<div class="row">
				<div class="col-md-12 header text-center">
					<!-- Title --> 
					<h2 class="title capitalize">Product Gallery</h2>
					<!-- Description --> 
					<p class="desc">We ensure quality & support. People love us & we love them. Here goes some simple dummy text.</p>
				</div>
			</div><!-- Title & Desc Row Ends -->
		</div>
		
		<!-- Expander -->
		<div class="item-expander relative">
			<div id="item-expander">
				<p class="cls-btn"><a class="close">X</a></p>
				<div class="expander-inner"></div>
			</div>
		</div>
		
		<!-- Filters -->
		<div id="options" class="filter-menu fullwidth">
			<ul class="option-set relative normal filter-tabs">
				<li data-filter="all" class="filter active">View All</li>
				<li data-filter=".design" class="filter">Web Design</li>
				<li data-filter=".illustration" class="filter">Illustration and Art</li>
				<li data-filter=".photography" class="filter">Photography</li>
			</ul>
		</div>
			
		<!-- Portfolio Item Begins -->
		<div id="portfolio-wrapper" class="portfolio-items">
			
				<!-- Work 1 -->
				<div class="mix work five all photography illustration">
					<div class="work-inner effects clearfix effect5">
						<!-- Image -->
						<div class="work-image img">
							<img src="images/Business_Portfolio/1.jpg" alt="Portfolio" />						
							<!-- Overlay Gallery -->										
							<div class="overlay">
								<a href="images/Business_Portfolio/1-m.jpg" data-rel="prettyPhoto[gallery2]" class="expand"><i class="fa fa-arrows-alt"></i></a>
								<a href="projects/project-1.html" class="close-overlay expander"><i class="fa fa-arrow-up"></i></a>							</div>
						</div>						
					</div><!-- Work Inner Ends -->
				</div><!-- Work Ends -->
			
				<!-- Work 2 -->
				<div class="mix work five-big all photography">
					<div class="work-inner-big effects clearfix effect5">
						<!-- Image -->
						<div class="work-image img">
							<img src="images/Business_Portfolio/2.jpg" alt="Portfolio" />						
							<!-- Overlay Gallery -->										
							<div class="overlay">
								<a href="images/Business_Portfolio/2-m.jpg" data-rel="prettyPhoto[gallery2]" class="expand"><i class="fa fa-arrows-alt"></i></a>
								<a href="projects/project-2.html" class="close-overlay expander"><i class="fa fa-arrow-up"></i></a>							</div>
						</div>	
					</div><!-- Work Inner Ends -->
				</div><!-- End Work 2 -->
			
				<!-- Work 3 -->
				<div class="mix work five all design photography">
					<div class="work-inner effects clearfix effect5">
						<!-- Image -->
						<div class="work-image img">
							<img src="images/Business_Portfolio/3.jpg" alt="Portfolio" />						
							<!-- Overlay Gallery -->										
							<div class="overlay">
								<a href="images/Business_Portfolio/3-m.jpg" data-rel="prettyPhoto[gallery2]" class="expand"><i class="fa fa-arrows-alt"></i></a>
								<a href="projects/project-3.html" class="close-overlay expander"><i class="fa fa-arrow-up"></i></a>							</div>
						</div>						
					</div><!-- Work Inner Ends -->
				</div><!-- End Work -->
			
				<!-- Work 4 -->
				<div class="mix work five all design photography illustration">
					<div class="work-inner effects clearfix effect5">
						<!-- Image -->
						<div class="work-image img">
							<img src="images/Business_Portfolio/4.jpg" alt="Portfolio" />						
							<!-- Overlay Gallery -->										
							<div class="overlay">
								<a href="images/Business_Portfolio/4-m.jpg" data-rel="prettyPhoto[gallery2]" class="expand"><i class="fa fa-arrows-alt"></i></a>
								<a href="projects/project-4.html" class="close-overlay expander"><i class="fa fa-arrow-up"></i></a>							</div>
						</div>						
					</div><!-- Work Inner Ends -->
				</div><!-- End Work -->
			
				<!-- Work 5 -->
				<div class="mix work five all design photography">
					<div class="work-inner effects clearfix effect5">
						<!-- Image -->
						<div class="work-image img">
							<img src="images/Business_Portfolio/5.jpg" alt="Portfolio" />						
							<!-- Overlay Gallery -->										
							<div class="overlay">
								<a href="images/Business_Portfolio/5-m.jpg" data-rel="prettyPhoto[gallery2]" class="expand"><i class="fa fa-arrows-alt"></i></a>
								<a href="projects/project-5.html" class="close-overlay expander"><i class="fa fa-arrow-up"></i></a>							</div>
						</div>						
					</div><!-- Work Inner Ends -->
				</div><!-- End Work -->
			
				<!-- Work 6 -->
				<div class="mix work five all design">
					<div class="work-inner effects clearfix effect5">
						<!-- Image -->
						<div class="work-image img">
							<img src="images/Business_Portfolio/6.jpg" alt="Portfolio" />						
							<!-- Overlay Gallery -->										
							<div class="overlay">
								<a href="images/Business_Portfolio/6-m.jpg" data-rel="prettyPhoto[gallery2]" class="expand"><i class="fa fa-arrows-alt"></i></a>
								<a href="projects/project-6.html" class="close-overlay expander"><i class="fa fa-arrow-up"></i></a>							</div>
						</div>						
					</div><!-- Work Inner Ends -->
				</div><!-- End Work -->
				
				<!-- Work 7 -->
				<div class="mix work five all art photography illustration">
					<div class="work-inner effects clearfix effect5">
						<!-- Image -->
						<div class="work-image img">
							<img src="images/Business_Portfolio/7.jpg" alt="Portfolio" />						
							<!-- Overlay Gallery -->										
							<div class="overlay">
								<a href="images/Business_Portfolio/7-m.jpg" data-rel="prettyPhoto[gallery2]" class="expand"><i class="fa fa-arrows-alt"></i></a>
								<a href="projects/project-2.html" class="close-overlay expander"><i class="fa fa-arrow-up"></i></a>							</div>
						</div>						
					</div><!-- Work Inner Ends -->
				</div><!-- End Work -->
				
				<!-- Work 8 -->
				<div class="mix work five-big all art design">
					<div class="work-inner-big effects clearfix effect5">
						<!-- Image -->
						<div class="work-image img">
							<img src="images/Business_Portfolio/8.jpg" alt="Portfolio" />						
							<!-- Overlay Gallery -->										
							<div class="overlay">
								<a href="images/Business_Portfolio/8-m.jpg" data-rel="prettyPhoto[gallery2]" class="expand"><i class="fa fa-arrows-alt"></i></a>
								<a href="projects/project-4.html" class="close-overlay expander"><i class="fa fa-arrow-up"></i></a>							</div>
						</div>						
					</div><!-- Work Inner Ends -->
				</div><!-- End Work -->
			
				<!-- Clear -->
				<div class="clear"></div>
			</div>				
	</section><!-- Product Gallery Ends -->

	
	
	<!-- About Our Company Begins -->	
	<section id="about-us" class="about-us">
		<div class="container about-us-inner">
			<!-- Title & Desc Row Begins -->
			<div class="row">
				<div class="col-md-12 header text-center">
					<!-- Title --> 
					<h2 class="title capitalize">About Our Company</h2>
					<!-- Description --> 
					<p class="desc">We ensure quality & support. People love us & we love them. Here goes some simple dummy text.</p>
				</div>
			</div><!-- Title & Desc Row Ends -->
			
			<!-- About Us Row Begins -->
			<div class="row">
			
				<!-- Left Part Begins -->
				<div class="col-md-6 text-center animated" data-animation="fadeInLeft" data-animation-delay="500">
					<img src="images/about.png" width="650" height="550" alt="" class="img-responsive">
				</div><!-- Left Part Ends -->
				
				<!-- Right Part Begins -->
				<div class="col-md-6">
					<div class="about-right text-left">
						<!-- Title -->
						<h3>Most Popular Management System</h3>
						<!-- Desc -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<!-- Lists -->
						<ul>
							<li><i class="fa fa-2x fa-comment-o"></i><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p></li>
							<li><i class="flaticon-users2"></i><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p></li>
							<li><i class="flaticon-share26"></i><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p></li>
							<li><i class="flaticon-pencil84"></i><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p></li>
						</ul>
					</div>
				</div><!-- Right Part Ends -->				
			</div><!-- About Us Row Ends -->
		</div><!-- Container Ends -->
	</section><!-- About Our Company Ends -->
	
	
	<!-- Team Section Begins -->
	<section id="team" class="team">
		<div class="container team-inner">
			<!-- Title & Desc Row Begins -->
			<div class="row">
				<div class="col-md-12 header text-center">
					<!-- Title --> 
					<h2 class="title capitalize">Team Member</h2>
					<!-- Description --> 
					<p class="desc">We ensure quality & support. People love us & we love them. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div><!-- Title & Desc Row Ends -->
			
			<!-- Team Row Begins -->
			<div class="row">
				<!-- Team 1 Begins -->
				<div class="col-md-3 col-sm-6 animated" data-animation="fadeInLeft" data-animation-delay="400">
					<div class="team-box">
						<!-- Team Box Inner Begins --> 
						<div class="team-box-inner">
							<!-- Thumbnail -->
							<div class="team-thumbnail">
								<img src="images/team/1.jpg" width="715" height="515" alt="team" class="img-responsive" />
							</div>
							<!-- Title -->
							<h3 class="team-title text-center normal">Masum Rana</h3>
							<h4 class="role1 text-center">UI/UX Expert</h4>
							<!-- Description -->
							<p class="text-center">Ut enim ad minim veniam, quis nos-trud exercitation ullamco laboris</p>
						</div><!-- Team Box Inner Ends -->
						<!-- Social Icons -->
						<div class="social-icon">
							<a href="#"><i class="fa fa-flickr"></i></a>
							<a href="#"><i class="fa fa-vimeo-square"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div><!-- Team 1 Ends -->
				
				<!-- Team 2 Begins --> 
				<div class="col-md-3 col-sm-6 animated" data-animation="fadeInUp" data-animation-delay="400">
					<div class="team-box">
						<!-- Team Box Inner Begins --> 
						<div class="team-box-inner">
							<!-- Thumbnail -->
							<div class="team-thumbnail">
								<img src="images/team/2.jpg" width="715" height="515" alt="team" class="img-responsive" />
							</div>							
							<!-- Title -->
							<h3 class="team-title text-center normal">Mahfuz Riad</h3>
							<h4 class="role2 text-center">PHP Developer</h4>
							<!-- Description -->
							<p class="text-center">Ut enim ad minim veniam, quis nos-trud exercitation ullamco laboris</p>							
						</div><!-- Team Box Inner Ends -->
						<!-- Social Icons -->
						<div class="social-icon">
							<a href="#"><i class="fa fa-flickr"></i></a>
							<a href="#"><i class="fa fa-vimeo-square"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div><!-- Team 2 Ends -->
				
				<!-- Team 3 Begins --> 
				<div class="col-md-3 col-sm-6 animated" data-animation="fadeInUp" data-animation-delay="400">
					<div class="team-box">
						<!-- Team Box Inner Begins --> 
						<div class="team-box-inner">
							<!-- Thumbnail -->
							<div class="team-thumbnail">
								<img src="images/team/3.jpg" width="715" height="515" alt="team" class="img-responsive" />
							</div>							
							<!-- Title -->
							<h3 class="team-title text-center normal">Nasir Ovodro</h3>
							<h4 class="role3 text-center">Frontend Dev</h4>
							<!-- Description -->
							<p class="text-center">Ut enim ad minim veniam, quis nos-trud exercitation ullamco laboris</p>							
						</div><!-- Team Box Inner Ends -->
						<!-- Social Icons -->
						<div class="social-icon">
							<a href="#"><i class="fa fa-flickr"></i></a>
							<a href="#"><i class="fa fa-vimeo-square"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div><!-- Product 3 Ends -->
				
				<!-- Team 4 Begins --> 
				<div class="col-md-3 col-sm-6 animated" data-animation="fadeInRight" data-animation-delay="400">
					<div class="team-box">
						<!-- Team Box Inner Begins --> 
						<div class="team-box-inner">
							<!-- Thumbnail -->
							<div class="team-thumbnail">
								<img src="images/team/4.jpg" width="715" height="515" alt="team" class="img-responsive" />
							</div>							
							<!-- Title -->
							<h3 class="team-title text-center normal">Rashed Chotta</h3>
							<h4 class="role4 text-center">SEO Marketer</h4>
							<!-- Description -->
							<p class="text-center">Ut enim ad minim veniam, quis nos-trud exercitation ullamco laboris</p>							
						</div><!-- Team Box Inner Ends -->
						<!-- Social Icons -->
						<div class="social-icon">
							<a href="#"><i class="fa fa-flickr"></i></a>
							<a href="#"><i class="fa fa-vimeo-square"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div><!-- Team 4 Ends -->
				
			</div><!-- Team Row Ends -->
		</div>	
	</section><!-- Team Section Ends -->
	
	
	<!-- Recent Blog Begins -->
	<section id="blog" class="blog">
		<div class="container blog-inner">
		
			<!-- Title & Desc Row Begins -->
			<div class="row title-top">
				<div class="col-md-12 header text-center">
					<!-- Title --> 
					<h2 class="title capitalize">Hírek</h2>
					<!-- Description --> 
					<p class="desc">We ensure quality & support. People love us & we love them. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div><!-- Title & Desc Row Ends -->
		
			<!-- Blog Inner Begins -->
			<div class="blog-scroll-section">
			
				<!-- Row 1 Begins -->						
				<div class="row load-more active title-top">
				
					<!-- Blog 1 Begins -->							
					<div class="col-md-6 col-sm-6 animated" data-animation="fadeInLeft" data-animation-delay="400">					
						<!-- Blog 1 Box -->
						<div class="blog-box effects clearfix effect6">
							<!-- Blog 1 image -->
							<div class="blog-image img">
								<img src="images/blog/1.jpg" width="260" height="350" alt="blog" class="img-responsive" />
								<!-- Overlay Gallery -->										
								<div class="overlay">
									<a href="images/blog/1.jpg" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
								</div>	
							</div>
							<!-- Blog 1 content -->
							<div class="blog-content">
								<h2>A Sample Blog Heading Goes Here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</p>
								<a href="#" class="btn slide-btn">Read More <i class="flaticon-arrow209"></i></a>
							</div>
						</div><!-- Blog 1 Box Ends -->					
					</div><!-- Blog 1 Ends -->		
					
					<!-- Blog 2 Begins -->
					<div class="col-md-6 col-sm-6 animated" data-animation="fadeInRight" data-animation-delay="400">
						<!-- Blog 2 Box Begins -->
						<div class="blog-box effects clearfix effect6">
							<!-- Blog 2 image -->
							<div class="blog-image img">
								<img src="images/blog/2.jpg" width="260" height="350" alt="blog" class="img-responsive" />
								<!-- Overlay Gallery -->										
								<div class="overlay">
									<a href="images/blog/2.jpg" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
								</div>
							</div>
							<!-- Blog 2 content -->
							<div class="blog-content">
								<h2>A Sample Blog Heading Goes Here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute </p>
								<a href="#" class="btn slide-btn">Read More <i class="flaticon-arrow209"></i></a>
							</div>
						</div><!-- Blog 2 Box Ends -->
					</div><!-- Blog 2 Begins -->
					
				</div><!-- Row 1 Ends -->
				
				<!-- Row 2 Begins -->
				<div class="row load-more active title-top">
								
					<!-- Blog 3 Begins -->
					<div class="col-md-6 col-sm-6 animated" data-animation="fadeInLeft" data-animation-delay="400">
						<!-- Blog 3 Box Begins -->
						<div class="blog-box effects clearfix effect6">
							<!-- Blog 3 image -->
							<div class="blog-image img">
								<img src="images/blog/3.jpg" width="260" height="350" alt="blog" class="img-responsive" />
								<!-- Overlay Gallery -->										
								<div class="overlay">
									<a href="images/blog/3.jpg" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
								</div>
							</div>
							<!-- Blog 3 content -->
							<div class="blog-content">
								<h2>A Sample Blog Heading Goes Here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute </p>
								<a href="#" class="btn slide-btn">Read More <i class="flaticon-arrow209"></i></a>
							</div>
						</div><!-- Blog 3 Box Ends -->
					</div><!-- Blog 3 Ends -->
					
					<!-- Blog 4 Begins -->
					<div class="col-md-6 col-sm-6 animated" data-animation="fadeInRight" data-animation-delay="400">
						<!-- Blog 4 Box Begins -->
						<div class="blog-box effects clearfix effect6">
							<!-- Blog 4 image -->
							<div class="blog-image img">
								<img src="images/blog/4.jpg" width="260" height="350" alt="blog" class="img-responsive" />
								<!-- Overlay Gallery -->										
								<div class="overlay">
									<a href="images/blog/4.jpg" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
								</div>
							</div>
							<!-- Blog 4 content -->
							<div class="blog-content">
								<h2>A Sample Blog Heading Goes Here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute </p>
								<a href="#" class="btn slide-btn">Read More <i class="flaticon-arrow209"></i></a>
							</div>
						</div><!-- Blog 4 Box Ends -->
					</div><!-- Blog 4 Ends -->
					
				</div><!-- Row 2 Ends -->
				
				
				<!-- Row 3 Begins/ Hidden Blogs -->
				<div class="row load-more title-top">
				
					<!-- Blog 5 Begins -->
					<div class="col-md-6 col-sm-6">
						<!-- Blog 5 Box Begins -->
						<div class="blog-box effects clearfix effect6">
							<!-- Blog 5 image -->
							<div class="blog-image img">
								<img src="images/blog/1.jpg" width="260" height="350" alt="blog" class="img-responsive" />
								<!-- Overlay Gallery -->										
								<div class="overlay">
									<a href="images/blog/1.jpg" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
								</div>
							</div>
							<!-- Blog 5 content -->
							<div class="blog-content">
								<h2>A Sample Blog Heading Goes Here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute </p>
								<a href="#" class="btn slide-btn">Read More <i class="flaticon-arrow209"></i></a>
							</div>
						</div><!-- Blog 5 Box Ends -->
					</div><!-- Blog 5 Ends -->
					
					<!-- Blog 6 Begins -->
					<div class="col-md-6 col-sm-6">
						<!-- Blog 6 Box Begins -->
						<div class="blog-box effects clearfix effect6">
							<!-- Blog 6 image -->
							<div class="blog-image img">
								<img src="images/blog/2.jpg" width="260" height="350" alt="blog" class="img-responsive" />
								<!-- Overlay Gallery -->										
								<div class="overlay">
									<a href="images/blog/3.jpg" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
								</div>
							</div>
							<!-- Blog 6 content -->
							<div class="blog-content">
								<h2>A Sample Blog Heading Goes Here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute </p>
								<a href="#" class="btn slide-btn">Read More <i class="flaticon-arrow209"></i></a>
							</div>
						</div><!-- Blog 6 Box Ends -->
					</div><!-- Blog 6 Ends -->
				</div><!-- Row 3 Ends / Hidden Blog Ends -->
				
		
				<!-- Row 4 Begins/ Hidden Blogs -->
				<div class="row load-more title-top">
								
					<!-- Blog 5 Begins -->
					<div class="col-md-6 col-sm-6">
						<!-- Blog 5 Box Begins -->
						<div class="blog-box effects clearfix effect6">
							<!-- Blog 5 image -->
							<div class="blog-image img">
								<img src="images/blog/3.jpg" width="260" height="350" alt="blog" class="img-responsive" />
								<!-- Overlay Gallery -->										
								<div class="overlay">
									<a href="images/blog/1.jpg" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
								</div>
							</div>
							<!-- Blog 5 content -->
							<div class="blog-content">
								<h2>A Sample Blog Heading Goes Here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute </p>
								<a href="#" class="btn slide-btn">Read More <i class="flaticon-arrow209"></i></a>
							</div>
						</div><!-- Blog 5 Box Ends -->
					</div><!-- Blog 5 Ends -->
					
					<!-- Blog 6 Begins -->
					<div class="col-md-6 col-sm-6">
						<!-- Blog 6 Box Begins -->
						<div class="blog-box effects clearfix effect6">
							<!-- Blog 6 image -->
							<div class="blog-image img">
								<img src="images/blog/4.jpg" width="260" height="350" alt="blog" class="img-responsive" />
								<!-- Overlay Gallery -->										
								<div class="overlay">
									<a href="images/blog/3.jpg" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
								</div>
							</div>
							<!-- Blog 6 content -->
							<div class="blog-content">
								<h2>A Sample Blog Heading Goes Here</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute </p>
								<a href="#" class="btn slide-btn">Read More <i class="flaticon-arrow209"></i></a>
							</div>
						</div><!-- Blog 6 Box Ends -->
					</div><!-- Blog 6 Ends -->
				</div><!-- Row 4 Ends / Hidden Blog Ends -->
				
				<!-- Load More Post Button -->
				<div class="col-md-12 load-post text-center">
					<button class="btn slide-btn load-posts" type="button">Load More Post <i class="flaticon-arrow209"></i></button>
				</div><!-- Load More Button Ends -->					
			</div><!-- Blog Inner Ends -->		
		</div><!-- Container Ends -->
	</section><!-- Recent Blog Ends -->
	
	
	<!-- Client Section Begins -->
	<section id="clients" class="clients">
		<div class="container client-inner">
			<div class="row">
				<!-- Left Part -->
				<div class="col-md-4">
					<h3>Customers Feedback</h3>
					<!-- Feedback 1 -->
					<div class="client1">
						<p>"Simply Dummy Text dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim."</p>
						<h5 class="italic"> - Masum Rana <span>of BiriOala.</span></h5>
					</div>
					<!-- Feedback 2 -->
					<div class="client2">
						<p>"Simply Dummy Text dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor"</p>
						<h5 class="italic">- Tanveer Junayed<span> of Boideshi.</span></h5>
					</div>
				</div>
				<!-- Right Part -->
				<div class="col-md-8">
					<!-- Client Logos -->
					<div class="client-logo">
						<div class="divider">
							<img src="images/client/divider.png" width="30" height="360" alt="">
						</div>
						<!-- Title -->
						<h3>Some Of Our Best Clients</h3>
						<div class="logo-top animated" data-animation="fadeInDown" data-animation-delay="400">
							<img src="images/client/1.png" width="100" height="100" alt="">
							<img src="images/client/2.png" width="100" height="100" alt="">
							<img src="images/client/3.png" width="100" height="100" alt="">
							<img src="images/client/4.png" width="100" height="100" alt="">
						</div>
						<div class="logo-bottom animated" data-animation="fadeInDown" data-animation-delay="600">
							<img src="images/client/5.png" width="100" height="100" alt="">
							<img src="images/client/6.png" width="100" height="100" alt="">
							<img src="images/client/7.png" width="100" height="100" alt="">					
						</div>
					</div>
				</div><!-- Right Part Ends -->
			</div><!-- Row Ends -->
		</div><!-- Container Ends -->
	</section><!-- Client Section Ends -->
	
	
	<!-- Contact Section Begins -->
	<section id="contact" class="contact">
		<div class="container contact-inner">
			<!-- Title & Desc Row Begins -->
			<div class="row">
				<div class="col-md-12 header text-center">
					<!-- Title --> 
					<h2 class="title capitalize">Contact Us</h2>
					<!-- Description --> 
					<p class="desc">We ensure quality & support. People love us & we love them. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div><!-- Title & Desc Row Ends -->
			
			<!-- Contact Row Begins -->
			<div class="row">
				<div class="col-md-6 col-md-offset-3 animated" data-animation="fadeInUp" data-animation-delay="300">
				<p class="form-message" style="display: none;"></p>	
					<div class="contact-form">
						<!-- Form Begins -->
						<form role="form" name="contactform" class="form-horizontal" id="contactform" method="post" action="process.php">						
							<!-- Field 1 -->		
							<div class="input-text form-group">
								<input type="text" name="contact_name" class="input-name form-control" placeholder="Full Name" />
							</div>	
							<!-- Field 2 -->
							<div class="input-email form-group">
								<input type="email" name="contact_email" class="input-email form-control" placeholder="Email"/>
							</div>				
							<!-- Field 3 -->
							<div class="textarea-message form-group">
								<textarea name="contact_message" class="textarea-message form-control" placeholder="Message" rows="4" ></textarea>
							</div>	
							<!-- Button -->
							<button class="btn btn-default" type="submit">Send Now<i class="flaticon-arrow209"></i></button>			
						</form><!-- Form Ends -->
					</div>
				</div>
			</div><!-- Contact Row Ends -->
		</div>	
	</section><!-- Contact Section Ends -->
<?php
lablec_letrehozas();	

?>