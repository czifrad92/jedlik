<?php
function fejlec_letrehozas($title) {
	// Fejléc,header
?>
<!DOCTYPE html>
<html>
<head>

	<!-- Title and Meta Tags Begins -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<title><?php if (!empty($title)) echo $title . ' - '; ?>Természettudományos Labor</title>    	
	<!-- Title and Meta Tags Ends -->
	
	<!-- Google Font Begins -->	
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700italic,700,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>
	<!-- Google Font Ends -->		
	
	<!-- CSS Begins-->	
	<link href='http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
	<link href="css/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/portfolio.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/YTPlayer.css" rel="stylesheet" type="text/css" />
	<link href="css/tweet-carousel.css" rel="stylesheet" type="text/css" />
	<!-- Main Style -->
	<link href="css/style.css" rel="stylesheet" type="text/css" />



	<link href="css/responsive.css" rel="stylesheet" type="text/css" />
	<!-- Color Panel -->
    <link href="css/color_panel.css" rel="stylesheet" type="text/css" /> 
	<!-- Skin Colors -->
	<link href="css/color-schemes/blue.css" id="changeable-colors" rel="stylesheet" type="text/css" /> 	
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>

	<!-- Page Loader -->
	<div id="pageloader">
		<div class="loader-item fa fa-spin colored-border"></div>
	</div>
	
	<!-- Header Begins -->
	<div id="header" class="header-section">
		<!-- Background Slider Begins -->
			
			<!-- Top Section Begins --> 
			<div class="sticky-navigation" style="position: fixed; top: 0;">
				<div class="top-container absolute container">
					<div class="row">
						<div class="col-md-12">
							<!-- Logo Begins -->
							<a href="index" class="logolink">
								<div id="logo" class="site-logo no-padding logo-main">
									<img src="images/logo.png" class="logoimg"><a title="Logo" href="index">Természettudományos Labor</a>
								</div><!-- Logo Ends -->
							</a>
							<!-- Navigation Menu Begins -->
							<div id="navigation" class="no-padding navbar top-navbar fomenuholder">	
							
								<!-- Mobile Nav Toggle Begins -->
								<div class="navbar-header nav-respons">
									<button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div><!-- Mobile Nav Toggle Ends -->
								
								<!-- Menu Begins -->
								<nav id="topnav" role="navigation" class="collapse navbar-collapse bs-navbar-collapse no-padding fomenu">
									<ul class="nav navbar-nav navbar-right uppercase">
										<li><a href="index" class="scroll">Főoldal</a></li>
										<li><a href="hirek" class="scroll">Hírek</a></li>

										<li class="dropdown">
											<a href="projektismerteto" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
												A projektről<i class="fa fa-angle-down"></i> 
											</a>
											<!-- DropDown Menu Begins -->
											<ul class="menulist dropdown-menu">
												<li><a href="projektismerteto">Projektismertető</a></li>
												<li><a href="partner-iskolak">Partner iskolák</a></li>
												<li><a href="rolunk-irtak">Rólunk írták</a></li>
												<li><a href="kapcsolat">Kapcsolat</a></li>
											</ul><!-- DropDown Menu Ends -->
										</li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
												Kísérletek<i class="fa fa-angle-down"></i> 
											</a>
											<!-- DropDown Menu Begins -->
											<ul class="menulist dropdown-menu">
												<li><a href="blog-left-sidebar.html">Biológia</a></li>
												<li><a href="blog-right-sidebar.html">Fizika</a></li>
												<li><a href="blog-single.html">Kémia</a></li>
												<li><a href="blog-grid.html">Videók</a></li>
											</ul><!-- DropDown Menu Ends -->
										</li>
										<li><a href="idopontfoglalas" class="scroll">Időpontfoglalás</a></li>
									</ul>
								</nav><!-- Menu Ends -->						
							</div><!-- Navigation Menu Ends -->
						</div>
					</div>			
				</div>
			</div><!-- Top Section Ends -->
		</div><!-- Background Slider Ends -->
	</div><!-- Header Ends -->







<?php 
}

function lablec_letrehozas() {
	// Lábléc,footer
?>
	<!-- Footer Section Begins -->
	<section class="szechenyikepek">
		<img src="images/szechenyi.png"><img src="images/eu.png">
	</section>


	<section id="footer" class="footer">
		<!-- Footer Inner Begins -->
		<div class="container footer-inner">
			<div class="footerbox">
				<p>Jedlik Ányos Gimnázium</p>
				<p><i>1212 Budapest, Táncsics Mihály u. 92-96.</i></p><br>
				<p>Telefon: +36 1 276-11-33</p>
				<p>Fax: +36 1 276-01-61</p>
				<p>Központi e-mail: jedlik@jedlik.hu</p><br>
				<p>OM azonosító: 035255</p>
				<p>KIK azonosító: 206004</p>
			</div>

			<div class="footerbox">
				<p>Külső szervezetek</p>
				<a href="http://csepel.hu/">Budapest XXI. kerület Csepel Önkormányzata</a><br>
				<a href="http://palyazat.gov.hu/">Új Széchenyi Terv</a><br>
				<a href="http://palyazat.gov.hu/">Európai Szociális Alap</a>
				<img src="images/piarsoft-logo.png" style="width: 220px; margin: 77px 0px 0px 203px;">
			</div>
		</div><!-- Footer Inner Ends -->


	</section><!-- Footer Section Ends -->

	
		
	<!-- Script Begins -->
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>	   	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
	<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>	
	<script type="text/javascript" src="js/jquery.sticky.js"></script>	
	<!-- Slider and Features Canvas -->	
	<script type="text/javascript" src="js/jquery.superslides.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/kinetic.js"></script>
	<script type="text/javascript" src="js/kinetic-load.js"></script>
	<!-- Overlay -->
	<script type="text/javascript" src="js/overlay/modernizr.js"></script>
	<!-- Portfolio -->
	<script type="text/javascript" src="js/jquery.prettyPhoto.js" ></script>   
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- Video -->
	<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>		
	<!-- Counting Section -->
	<script type="text/javascript" src="js/jquery.appear.js"></script>	
	<!-- Expertise Circular Progress Bar -->
	<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
	<script type="text/javascript" src="js/effect.js"></script>
	<!-- Twitter -->
	<script type="text/javascript" src="js/tweet/carousel.js"></script>
	<script type="text/javascript" src="js/tweet/scripts.js"></script>
	<script type="text/javascript" src="js/tweet/tweetie.min.js"></script>
	<!-- Custom -->	
	<script type="text/javascript" src="js/custom.js"></script>	
	<!-- Color -->
	<script type="text/javascript" src="js/color-panel.js"></script>
	<!-- Script Ends -->
	<script src="core/datetimepicker-master/jquery.datetimepicker.js"></script>
</body>
</html>

<?php
}
function menu_letrehozas() {
	// menu létrehozás
?>
<div class="header">			
				<div class="hleft">
					<div class="menu">
						<ul class="menu">
							<li class="menu"><a href="">Főoldal</a></li>
						</ul>
					</div>
				</div>
				<?php
					if (!isset($_SESSION["currentuser"]))
						{ ?>
							<ul class="menu">
								<li class="menu2"><a href="">Menü</a></li>
							</ul>
						<?php }
					else
						{ ?>
							<ul class="menu">
								védett menüpontok
							</ul>
						<?php }
					login_letrehozas();
				?>
				
</div>
<?php
}
function login_letrehozas() {
?>
				<div class="mainlogin">
						<?php
						if (!isset($_SESSION["currentuser"]))
								{ ?>
										<form action="user-auth" name="login" id="login" method="post">
											<input class="loginuser" placeholder="Felhasználónév" size="13" type="text" name="nickname" id="nickname" required>
											<input class="loginpassword" size="13" placeholder="Jelszó" type="password" name="password" id="password" required>
											<input type="submit" class="loginbutton" name="loginbutton" id="loginbutton" value="Belépek!">
										</form>
								<?php }
						else {
									echo '<p class="loggedas">Üdv ' . $_SESSION["currentuser"] . '!</p>'; ?>
										<a href="kijelentkezes">Kijelentkezés</a>
						<?php }	?>
				</div>
<?php
}
?>
