<?php
function fejlec_letrehozas() {
	session_start();
	ob_start();
	if($_SESSION["belepve"] != 1 || empty($_SESSION["admin"])) { 
		header("Location: login");
		die();
	}
?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.1.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Jedlik - Természettudományi Labor</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style/css/stylesheet.css">
 <link rel="stylesheet" href="http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css">
<link href="style/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="style/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="style/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="style/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet"/>
<link href="style/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
<link href="style/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
<link href="style/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="style/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="style/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="style/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="style/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="style/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="style/css/components.css" rel="stylesheet" type="text/css"/>
<link href="style/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="style/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="style/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="style/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="style/img/favicon.ico" type="image/vnd.microsoft.icon"/>
<script src="tinymce/tinymce.min.js"></script>
	<script>
	        tinymce.init({
	        	selector: "textarea#text-editor", 
				width: 730, 
				height: 300,
				language: 'hu_HU',
				entity_encoding : "raw",
				forced_root_block: false,
				subfolder:"",
				menubar: false,
				statusbar: false,
				plugins: [ 
				"fullpage advlist autolink link image lists charmap print preview hr anchor pagebreak", 
				"searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking", 
				"table contextmenu directionality emoticons paste textcolor filemanager" 
				], 
				image_advtab: true,
				fullpage_default_encoding: "UTF-8",
				toolbar: "fontsizeselect | bold italic underline | alignleft aligncenter alignright alignjustify | sizeselect | bullist numlist | forecolor backcolor | link | image  | code"

		        });
</script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	 <!-- BEGIN HEADER INNER -->
	 <div class="page-header-inner">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				 <a href="kezdolap">
				 <img src="style/img/jedlik_admin_home.png" alt="logo" class="logo-default"/>
				 </a>
				 <div class="menu-toggler sidebar-toggler hide">
						<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
				 </div>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
			</a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				 <ul class="nav navbar-nav pull-right">
						<li class="dropdown dropdown-user">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							 <span class="username username-hide-on-mobile">
							 <?php echo $_SESSION["currentuser"]; ?></span>
							 <i class="fa fa-angle-down"></i>
							 </a>
							 <ul class="dropdown-menu">
									<li>
										 <a href="kijelentkezes">
										 <i class="icon-key"></i> Kijelentkezés </a>
									</li>
							 </ul>
						</li>
				 </ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
	 </div>
	 <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	 <!-- BEGIN SIDEBAR -->
	 <div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse collapse">
				 <!-- BEGIN SIDEBAR MENU -->
				 <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
						<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
						<li class="sidebar-search-wrapper">
							 <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
							 <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
							 <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
							 <form class="sidebar-search " action="extra_search.html" method="POST">
									<a href="javascript:;" class="remove">
									<i class="icon-close"></i>
									</a>
							 </form>
							 <!-- END RESPONSIVE QUICK SEARCH FORM -->
						</li>
						<?php if ($_SESSION["admin"] > 1) { ?>
						<li>
							 <a href="hirek" style="border-top:0px;">
							 <i class="icon-speech"></i>
							 <span class="title" title="Hírek szerkesztése">Hírek szerkesztése</span>
							 </a>
						</li>

						<li>
							 <a href="rolunk-irtak">
							 <i class="icon-pencil"></i>
							 <span class="title" title="Rólunk írták szerkesztése">Rólunk írták szerkesztése</span>
							 </a>
						</li>
						<li>
							 <a href="galeria">
							 <i class="icon-folder"></i>
							 <span class="title" title="Galéria szerkesztése">Galéria szerkesztése</span>
							 </a>
						</li>
						<li>
							 <a href="statikus-oldalak">
							 <i class="icon-docs"></i>
							 <span class="title" title="Statikus oldalak">Statikus oldalak</span>
							 </a>
						</li>
						<li>
							 <a href="felhasznalok">
							 <i class="icon-user"></i>
							 <span class="title" title="Felhasználó létrehozás">Felhasználó hozzáadása</span>
							 </a>
						</li>
						<li>
							 <a href="video-feltoltes">
							 <i class="icon-link"></i> 
							 <span class="title" title="Videó feltöltés">Videó feltöltés</span>
							 </a>
						</li>
						<?php } ?>
						<li>
							 <a href="teremfoglalas">
							 <i class="icon-calendar"></i> 
							 <span class="title" title="Teremfoglalás">Teremfoglalás</span>
							 </a>
						</li>
						<?php if ($_SESSION["admin"] > 1) { ?>
						<li>
							 <a href="foglalasok">
							 <i class="icon-calendar"></i> 
							 <span class="title" title="Foglalások">Foglalások</span>
							 </a>
						</li>
						<?php } ?>
				 </ul>
				 <!-- END SIDEBAR MENU -->
			</div>
	 </div>
<?php
}
	 function lablec_letrehozas() {
?>

<div class="page-footer">
	 <div class="page-footer-tools">
	 </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
		<tr class="template-upload fade">
				<td>
						<span class="preview"></span>
				</td>
				<td>
						<p class="name">{%=file.name%}</p>
						<strong class="error text-danger label label-danger"></strong>
				</td>
				<td>
						<p class="size">Állapot...</p>
						<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
						<div class="progress-bar progress-bar-success" style="width:0%;"></div>
						</div>
				</td>
				<td>
						{% if (!i && !o.options.autoUpload) { %}
								<button class="btn blue start" disabled>
										<i class="fa fa-upload"></i>
										<span>Feltölt</span>
								</button>
						{% } %}
						{% if (!i) { %}
								<button class="btn red cancel">
										<i class="fa fa-ban"></i>
										<span>Mégse</span>
								</button>
						{% } %}
				</td>
		</tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
				{% for (var i=0, file; file=o.files[i]; i++) { %}

						<tr class="template-download fade">
								<td>
										<span class="preview">
												{% if (file.thumbnailUrl) { %}
														<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
												{% } %}
										</span>
								</td>
								<td>
										<p class="name">

												{% if (file.url) { %}
														{% console.log(file); %}<img src="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" style="width:70px; height:70px;">
												{% } else { %}

														<span>{%=file.name%}</span>
												{% } %}
										</p>
										{% if (file.error) { %}
												<div><span class="label label-danger">Error</span> {%=file.error%}</div>
										{% } %}
								</td>
								<td>
										<span class="size">{%=o.formatFileSize(file.size)%}</span>
								</td>
								<td>
										{% if (file.deleteUrl) { %}
												<button class="btn red delete btn-sm" onclick="window.location.href = 'galeria-torles?file={%=file.name%}'">
														<i class="fa fa-trash-o"></i>
														<span>Törlés</span>
												</button>
										{% } else { window.location.href = 'galeria'; %}
										{% } %}
								</td>
						</tr>
				{% } %}
</script>
<script src="style/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="style/plugins/advanced.js"></script>
<script src="style/plugins/wysihtml5-0.3.0.js"></script>
<script src="style/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="style/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="style/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="style/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="style/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="style/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="style/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="style/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="style/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="style/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="style/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="style/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="style/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="style/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="style/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="style/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="style/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="style/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="style/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="style/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="style/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="style/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="style/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="style/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="style/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="style/scripts/metronic.js" type="text/javascript"></script>
<script src="style/layout/scripts/layout.js" type="text/javascript"></script>
<script src="style/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="style/layout/scripts/demo.js" type="text/javascript"></script>
<script src="style/pages/scripts/index.js" type="text/javascript"></script>
<script src="style/scripts/tasks.js" type="text/javascript"></script>
<script src="style/scripts/form-fileupload.js"></script>
<script src="style/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="style/plugins/jquery-file-upload/js/vendor/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="style/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="style/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="style/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="style/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="style/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="style/plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="style/plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="style/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="style/plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="style/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="style/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
<script>
			var editor = new wysihtml5.Editor("wysihtml5-editor", {
				toolbar:     "wysihtml5-editor-toolbar",
				stylesheets: ["http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css", "style/css/editor.css"],
				parserRules: wysihtml5ParserRules
			});
			
			editor.on("load", function() {
				var composer = editor.composer;
				composer.selection.selectNode(editor.composer.element.querySelector("h1"));
			});
</script>
<script>
				jQuery(document).ready(function() {
				// initiate layout and plugins
				Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
				FormFileUpload.init();
				});

</script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
	 Metronic.init(); // init metronic core componets
	 Layout.init(); // init layout
	 QuickSidebar.init(); // init quick sidebar
	 Demo.init(); // init demo features 
	 Index.init();   
	 Index.initDashboardDaterange();
	 Index.initJQVMAP(); // init index page's custom scripts
	 Index.initCalendar(); // init index page's custom scripts
	 Index.initCharts(); // init index page's custom scripts
	 Index.initChat();
	 Index.initMiniCharts();
	 Index.initIntro();
	 Tasks.initDashboardWidget();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php
}
function statikus_megjelenites() {
include '../core/connect.php';
ob_start();

		if(isset($_POST["ujoldal"])) {
			$cim = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["oldalname"]));

			// URL FORMÁZÁSA

			$CHARMAP = array('ö' => 'o', 'Ö' => 'O', 'ó' => 'o','Ó' => 'O','ő' => 'o','Ő' => 'O','ú' => 'u','Ú' => 'U','ű' => 'u','Ű' => 'U',  
			'ü' => 'u','Ü' => 'U','á' => 'a','Á' => 'A','é' => 'e','É' => 'E','í' => 'i','Í' => 'I',);  
			$string = strtr($cim, $CHARMAP);     
			$string = preg_replace('/[^a-zA-Z0-9]/','-',$string); 
			$string = strtolower($string);
   			
   			// STATIKUS FÁJL LÉTREHOZÁSA
   			$file = fopen("../".$string.".php", "w");
			$txt = "<?php
			include 'kimeneti_fuggvenyek.php';
			include 'statikus_fuggvenyek.php';
			fejlec_letrehozas('".$cim."');
			statikus_oldal_letrehozas('".$string."', '".$cim."');
			lablec_letrehozas();
			?>";
			fwrite($file, $txt);
			fclose($file);


			$sql = "INSERT INTO  `static` (`id`,`url`,`cim`,`tartalom`)
					VALUES (NULL,'$string','$cim',' ')";
			mysqli_query($connect,$sql);

			ob_end_clean();
			header("Location: statikus-oldalak");
   			
		}
?>
	 <div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">
				 Statikus oldalak
				 </h3>
				 <div class="note note-success">
						<div class="actions">
							<form action="" method="post">
								<div class="col-md-3">
									<input type="text" class="form-control" style="height:30px;" name="oldalname" placeholder="A menü neve..." required>
								</div>
									<a href="#" class="btn btn-default btn-sm">
									<i class="fa fa-plus"></i> <button type="submit" name="ujoldal" style="background:none; border:none;">Új oldal hozzáadása</button></a>
							</form>
						</div>
				 </div>
				 <?php statikus_oldal_listazas(); ?>
			</div>
	 </div>
<?php
}
function statikus_oldal_listazas() {
include '../core/connect.php';
$sql = "SELECT id,cim,url FROM static";
$res = mysqli_query($connect,$sql);
while ($a = mysqli_fetch_assoc($res)) {
?>
	 <div class="row">
						<div class="col-md-12">
							 <!-- BEGIN Portlet PORTLET-->
							 <div class="portlet box red-sunglo">
							 
									<div class="portlet-title">
										 <div class="caption">
												<form action="" method="post">
													 <input type="submit" style="background: transparent;border:none; height: auto;
													 padding-bottom: 3px;" name="staticsubmit" value="<?php echo $a["cim"]; ?>">
													 <input type="hidden" name="id" value="<?php echo $a["id"]; ?>">
												</form>
										 </div>
										 <div class="actions">
												<a href="statikus-modositas?id=<?php echo $a['id']; ?>" class="btn btn-default btn-sm">
												<i class="fa fa-pencil"></i> Szerkesztés </a>
												<a onclick="if(confirm('Biztosan törli az oldalt?')) window.location.href='statikus-torles?id=<?php echo $a['id']; ?>&url=<?php echo $a['url']; ?>'" href="#" class="btn btn-default btn-sm">
												<i class="fa fa-times"></i> Törlés </a>
										 </div>
									</div>
							 </div>
							 <!-- END Portlet PORTLET-->
						</div>
	 </div>
<?php
}
?>
<?php if(isset(
			$_POST["staticsubmit"])) { 
?>
		<section>
			<form action="" method="post">
			<textarea id="text-editor" name="content" spellcheck="false" wrap="off">
				 <?php 
						$id = intval($_POST["id"]);
						$res2 = mysqli_query($connect,"SELECT tartalom FROM static WHERE id='$id' limit 1");
						$eredmeny = mysqli_fetch_array($res2);
						echo $eredmeny["tartalom"];
				 ?>
				 </textarea>
	 </section>
				 <input type="hidden" name="id" value="<?php echo $id; ?>">
				 <input type="submit" class="btn blue" name="save" value="Mentés">

			</form>
<?php
	 }
if(isset($_POST["save"])) {
	 $content = mysqli_real_escape_string($connect,$_POST["content"]);
	 $id = intval($_POST["id"]);
	 mysqli_query($connect,"UPDATE static SET tartalom='$content' WHERE id='$id'");
}
}
function uj_hirek_megjelenites() {
include '../core/connect.php';
?>
	 <div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">
				 Új hír beküldése
				 </h3>
									 <div class="tab-content">
										 <div class="tab-pane active" id="tab_0">
												<div class="portlet box green">
													 <div class="portlet-body form">
															<!-- BEGIN FORM-->
															<form action="" method="post" class="form-horizontal">
																 <div class="form-body" style="border-top:1px solid #4bc75e;">
																		<div class="form-group">
																			 <label class="col-md-3 control-label">Cím</label>
																			 <div class="col-md-4">
																					<input type="text" name="cim" class="form-control input-circle" placeholder="Ide írjon..." required>
																			 </div>
																		</div>
																		<div class="form-group">
																				<label class="col-md-3 control-label">Leírás</label>
																			 <div class="col-md-4">
																					<input type="text" name="leiras" class="form-control input-circle" placeholder="Ide írjon..." required>
																			 </div>
																		</div>
																		<div class="form-group">
																				<label class="col-md-3 control-label">Tartalom:</label>
																			 <div class="col-md-8">
																						 <section>
																								<form action="" method="post">
																								<textarea id="text-editor" name="content" spellcheck="false" wrap="off">
																								</textarea>
																						 </section>
																			 </div>
																		</div>
																 </div>
																 <div class="form-actions">
																		<div class="row">
																			 <div class="col-md-offset-3 col-md-9">
																					<button type="submit" name="hireksubmit" class="btn btn-circle blue">Küldés</button>
																					<a href="hirek"><button type="button" class="btn btn-circle default">Vissza</button></a>
																			 </div>
																		</div>
																 </div>
															</form>
															<!-- END FORM-->
													 </div>
												</div>
										 </div>
									</div>
				 <!-- END PAGE CONTENT-->
			</div>
	 </div>
<?php
	 if(isset($_POST["hireksubmit"])) {
			if(!empty($_POST["cim"]) && !empty($_POST["leiras"]) && !empty($_POST["content"])) {
				 $cim = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["cim"]));
				 $leiras = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["leiras"]));
				 $content = mysqli_real_escape_string($connect,$_POST["content"]);
				 $sql = "INSERT INTO  `hirek` (`id` ,`cim` ,`leiras`,`tartalom`)
						VALUES (NULL ,'$cim', '$leiras','$content')";
				 mysqli_query($connect,$sql);
				 header("Location: hirek");
			}
	}

}
function hirek_megjelenites() {
include '../core/connect.php';
$sql = "SELECT * FROM hirek ORDER BY id DESC";
$res = mysqli_query($connect,$sql);
?>
<div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">
				 Hírek szerkesztése
				 </h3>
				 <div class="note note-success">
						<div class="actions">
												<a href="uj-hir" class="btn btn-default btn-sm">
												<i class="fa fa-plus"></i> Új hír hozzáadása </a>
						</div>
				 </div>
				 <?php 
						while($a = mysqli_fetch_assoc($res)) {
				 ?>
							 <!-- BEGIN Portlet PORTLET-->
							 <div class="portlet box blue-hoki">
									<div class="portlet-title">
										 <div class="caption">
												<?php echo $a["cim"]; ?>
										 </div>
										 <div class="actions">
												<a href="hirek-modositas?id=<?php echo $a['id']; ?>" class="btn btn-default btn-sm">
												<i class="fa fa-pencil"></i> Szerkesztés </a>
												<a onclick="if(confirm('Biztosan törli a hírt?')) window.location.href='hirek-torles?id=<?php echo $a['id']; ?>'" href="#" class="btn btn-default btn-sm">
												<i class="fa fa-times"></i> Törlés </a>
										 </div>
									</div>
									<div class="portlet-body">
										 <div class="scroller" style="height:200px" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
												<?php echo $a["tartalom"]; ?>
										 </div>
									</div>
							 </div>
							 <!-- END Portlet PORTLET-->
				 <?php } ?>
				 <!-- END PAGE CONTENT-->
			</div>
</div>
<?php
}
function feltoltes_megjelenites() {
include '../core/connect.php';
		if(isset($_POST["albumsubmit"])) {
			$_SESSION["album"] = $_POST["albumnev"];
		}
		if(isset($_POST["ujalbum"])) {
			$albumname = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["albumname"]));
   				mkdir('style/plugins/jquery-file-upload/server/php/files/'.$albumname, 0777, true);
   			header("Location: galeria");
		}
?>
	 <div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">
				 Galéria
				 </h3>
				 <div class="note note-success">
						<div class="actions">
							<form action="" method="post">
								<div class="col-md-2">
									<input type="text" class="form-control" style="height:30px;" name="albumname" placeholder="Album neve..." required>
								</div>
									<a href="#" class="btn btn-default btn-sm">
									<i class="fa fa-plus"></i> <button type="submit" name="ujalbum" style="background:none; border:none;">Új album hozzáadása</button></a>
							</form>
						</div>
				 </div>
				 <!-- END PAGE HEADER-->
				 <!-- BEGIN PAGE CONTENT-->
				 <div class="row">
				 	 <?php
							$dir = "style/plugins/jquery-file-upload/server/php/files/";

								if ($dh = opendir($dir)){
									$blacklist = array('.', '..');
									while (false !== ($file = readdir($dh))) { 
										if (!in_array($file, $blacklist)) { ?>
											<div class="portlet box blue-hoki">
												<div class="portlet-title">
													<div class="caption">
													<form action="" method="post">
														<input type="hidden" name="albumnev" value="<?php echo $file; ?>">
														<i class="fa fa-folder" style="margin-right:7px;"></i><button type="submit" name="albumsubmit" style="border:none; background: none; height: auto; padding-bottom: 3px;"><?php echo $file; ?></button>
													</form>
												
													</div>
													<div class="actions">
														<a href="album-szerkesztes?name=<?php echo $file; ?>" class="btn btn-default btn-sm">
														<i class="fa fa-pencil"></i> Szerkesztés </a>
														<a onclick="if(confirm('Biztosan törli az albumot?')) window.location.href='album-torles?name=<?php echo $file; ?>'" href="#" class="btn btn-default btn-sm">
														<i class="fa fa-times"></i> Törlés </a>
													</div>
													<!--<div class="actions">
														<a href="" class="btn btn-default btn-sm">
														<i class="fa fa-pencil"></i> Szerkesztés </a>
													</div> -->
												</div>
										 	</div>
								<?php }
									}
									closedir($dh);
							}
					?>
						<div class="col-md-12">
							 <?php if(isset($_SESSION["album"])) echo "<h4 class='page-title' style='margin-top:20px;'>".$_SESSION['album']."</h4>"; ?>
							 <form id="fileupload" action="style/plugins/jquery-file-upload/server/php/index.php" method="POST" enctype="multipart/form-data">
									<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
									<div class="row fileupload-buttonbar">
										 <div class="col-lg-7">
												<!-- The fileinput-button span is used to style the file input field as button -->
												<span class="btn green fileinput-button">
												<i class="fa fa-plus"></i>
												<span>
												Fájl tallózás... </span>
												<input type="file" name="files[]" multiple="">
												</span>
												<button type="submit"  class="btn blue start">
												<i class="fa fa-upload"></i>
												<span>
												Feltöltés indítása</span>
												</button>
												<button type="reset" class="btn warning cancel">
												<i class="fa fa-ban-circle"></i>
												<span>
												Mégse </span>
												</button>
												<span class="fileupload-process">
												</span>
										 </div>
										 <div style="clear:both;"></div>
										 <!-- The global progress information -->
										 <div class="col-lg-5 fileupload-progress fade">
												<!-- The global progress bar -->
												<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
													 <div class="progress-bar progress-bar-success" style="width:0%;">
													 </div>
												</div>
												<!-- The extended global progress information -->
												<div class="progress-extended">
														&nbsp;
												</div>
										 </div>
									</div>
									<!-- The table listing the files available for upload/download -->
									<table role="presentation" class="table table-striped clearfix">
									<tbody class="files">
									</tbody>
									</table>
							 </form>
						</div>
				 </div>
				 <!-- END PAGE CONTENT-->
			</div>
	 </div>
<?php
}
function rolunk_megjelenites() {
include '../core/connect.php';
$sql = "SELECT * FROM rolunk ORDER BY id DESC";
$res = mysqli_query($connect,$sql);
?>
<div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">
				 Rólunk írták szerkesztése
				 </h3>
				 <div class="note note-success">
						<div class="actions">
												<a href="uj-rolunk" class="btn btn-default btn-sm">
												<i class="fa fa-plus"></i> Rólunk hozzáadása </a>
						</div>
				 </div>
				 <?php 
						while($a = mysqli_fetch_assoc($res)) {
				 ?>
							 <!-- BEGIN Portlet PORTLET-->
							 <div class="portlet box blue-hoki">
									<div class="portlet-title">
										 <div class="caption">
												<?php echo $a["cim"]; ?>
										 </div>
										 <div class="actions">
												<a href="rolunk-modositas?id=<?php echo $a['id']; ?>" class="btn btn-default btn-sm">
												<i class="fa fa-pencil"></i> Szerkesztés </a>
												<a onclick="if(confirm('Biztosan törli a bejegyzést?')) window.location.href='rolunk-torles?id=<?php echo $a['id']; ?>'" href="#" class="btn btn-default btn-sm">
												<i class="fa fa-times"></i> Törlés </a>
										 </div>
									</div>
									<div class="portlet-body">
										 <div class="scroller" style="height:200px" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
												<?php echo $a["tartalom"]; ?>
										 </div>
									</div>
							 </div>
							 <!-- END Portlet PORTLET-->
				 <?php } ?>
				 <!-- END PAGE CONTENT-->
			</div>
</div>
<?php
}
function uj_rolunk_megjelenites() {
include '../core/connect.php';
?>
	 <div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">
				 Új rólunk beküldése
				 </h3>
									 <div class="tab-content">
										 <div class="tab-pane active" id="tab_0">
												<div class="portlet box green">
													 <div class="portlet-body form">
															<!-- BEGIN FORM-->
															<form action="" method="post" class="form-horizontal">
																 <div class="form-body" style="border-top:1px solid #4bc75e;">
																		<div class="form-group">
																			 <label class="col-md-3 control-label">Cím</label>
																			 <div class="col-md-4">
																					<input type="text" name="cim" class="form-control input-circle" placeholder="Ide írjon..." required>
																			 </div>
																		</div>
																		<div class="form-group">
																				<label class="col-md-3 control-label">Leírás</label>
																			 <div class="col-md-4">
																					<input type="text" name="leiras" class="form-control input-circle" placeholder="Ide írjon..." required>
																			 </div>
																		</div>
																		<div class="form-group">
																				<label class="col-md-3 control-label">Tartalom:</label>
																			 <div class="col-md-8">
																							<section>
																								<form action="" method="post">
																								<textarea id="text-editor" name="content" spellcheck="false" wrap="off">
																								</textarea>
																						 </section>
																			 </div>
																		</div>
																 </div>
																 <div class="form-actions">
																		<div class="row">
																			 <div class="col-md-offset-3 col-md-9">
																					<button type="submit" name="hireksubmit" class="btn btn-circle blue">Küldés</button>
																					<a href="rolunk-irtak"><button type="button" class="btn btn-circle default">Vissza</button></a>
																			 </div>
																		</div>
																 </div>
															</form>
															<!-- END FORM-->
													 </div>
												</div>
										 </div>
									</div>
				 <!-- END PAGE CONTENT-->
			</div>
	 </div>
<?php
	 if(isset($_POST["hireksubmit"])) {
			if(!empty($_POST["cim"]) && !empty($_POST["leiras"]) && !empty($_POST["content"])) {
				 $cim = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["cim"]));
				 $leiras = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["leiras"]));
				 $content = mysqli_real_escape_string($connect,$_POST["content"]);
				 $sql = "INSERT INTO  `rolunk` (`id` ,`cim` ,`leiras`,`tartalom`)
						VALUES (NULL ,'$cim', '$leiras','$content')";
				 mysqli_query($connect,$sql);
				 header("Location: rolunk-irtak");
			}
	}

}
function felhasznalok_megjelenites() {
include '../core/connect.php';
$res = mysqli_query($connect,"SELECT * FROM felhasznalok ORDER BY felhasznalo");
?>
	 <div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">Felhasználó,iskola hozzáadása</h3>
									 <div class="tab-content">
								<div class="tab-pane active" id="tab_0">
								<div class="portlet light bordered">
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="" class="horizontal-form" method="post">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Felhasználónév</label>
															<input type="text" id="felasznalonev" name="felhasznalonev" class="form-control" required>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Jelszó</label>
															<input type="password" id="password" name="password" class="form-control" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Iskola</label>
															<input type="text" id="iskola" name="iskola" class="form-control" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Email cím</label>
															<input type="email" name="email" class="form-control" required>
														</div>
													</div>
												</div>
													<!--/span-->
												
												<!--/row-->
													<!--/span-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Jogosultság</label>
															<select class="form-control" name="jogosultsag">
																<option value="1">Felhasználó</option>
																<option value="2">Laboráns</option>
																<option value="3">Laborvezető</option>
																<option value="4">Admin</option>
															</select>
														</div>
													</div>
												</div>
													<!--/span-->
											</div>
											<div class="form-actions right">
												<button type="submit" name="regsubmit" class="btn blue"><i class="fa fa-check"></i> Felvitel</button>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
					<?php while($a = mysqli_fetch_assoc($res)) { ?>
					<div class="row thumbnails">
				
						<div class="col-md-5">
							<div class="meet-our-team">
								<h3><?php echo $a["felhasznalo"]; ?></h3>
								 <div class="actions">
												<a href="felhasznalo-modositas?id=<?php echo $a['id']; ?>" class="btn btn-default btn-sm">
												<i class="fa fa-pencil"></i> Szerkesztés </a>
												<a onclick="if(confirm('Biztosan törli a felhasznalót?')) window.location.href='felhasznalo-torles?id=<?php echo $a['id']; ?>'" href="#" class="btn btn-default btn-sm">
												<i class="fa fa-times"></i> Törlés </a>
								</div>
								<div class="team-info">
									<p>
										 Iskola: <?php echo $a["iskola"]; ?>
									</p>
									<p>
										 Email: <?php echo $a["email"]; ?>
									</p>
								</div>
							</div>
						</div>
					
					</div>
					<?php } ?>	

			</div>
		</div>
				 <!-- END PAGE CONTENT-->
			</div>
	 </div>
<?php
	 if(isset($_POST["regsubmit"])) {
			if(!empty($_POST["felhasznalonev"]) && !empty($_POST["password"]) && !empty($_POST["email"]) && !empty($_POST["jogosultsag"])) {
				 $username = mysqli_real_escape_string($connect, $_POST["felhasznalonev"]);
				 $pass = mysqli_real_escape_string($connect, md5($_POST["password"]));
				 $email = mysqli_real_escape_string($connect, $_POST["email"]);
				 $jogosultsag = mysqli_real_escape_string($connect, $_POST["jogosultsag"]);
				 $iskola = mysqli_real_escape_string($connect, $_POST["iskola"]);



				 $sql = "INSERT INTO  felhasznalok (id, felhasznalo, password, email, admin, iskola)
						VALUES (NULL ,'$username', '$pass','$email','$jogosultsag', '$iskola')";
				 if(mysqli_query($connect,$sql)) {
				 	header("Location: felhasznalok");
				 }
			}
	}
}

function video_feltoltes_megjelenites() {
include '../core/connect.php';

	if(isset($_POST["ujvideoalbum"])) {

		$cim = mysqli_real_escape_string($connect, $_POST["videoalbumname"]);
		$sql = "INSERT INTO  `videok_album` (`id` ,`cim`)
						VALUES (NULL ,'$cim')";
		mysqli_query($connect,$sql);
		header("Location: video-feltoltes");
	}

$sqlbiosz =   mysqli_query($connect,"SELECT nev FROM kiserletek WHERE tantargy='Biológia' order by id ASC");
$sqlfizika =  mysqli_query($connect,"SELECT nev FROM kiserletek WHERE tantargy='Fizika' order by id ASC");
$sqlkemia =   mysqli_query($connect,"SELECT nev FROM kiserletek WHERE tantargy='Kémia' order by id ASC");
$iskola =     mysqli_query($connect,"SELECT iskola FROM felhasznalok ORDER BY iskola ASC");
$res =		  mysqli_query($connect,"SELECT * FROM videok ORDER BY cim");
$res2 =		  mysqli_query($connect,"SELECT * FROM videok_album ORDER BY cim");
$data_biosz = array();
  while ($row = mysqli_fetch_assoc($sqlbiosz)) {
    $data_biosz[] = $row["nev"];
  }

$data_fizika = array();
  while ($row = mysqli_fetch_assoc($sqlfizika)) {
    $data_fizika[] = $row["nev"];
  }

$data_kemia = array();
  while ($row = mysqli_fetch_assoc($sqlkemia)) {
    $data_kemia[] = $row["nev"];
  }

?>
   <div class="page-content-wrapper">
      <div class="page-content">
         <h3 class="page-title">
         Videó feltöltése
         </h3>
         <div class="note note-success">
						<div class="actions">
							<form action="" method="post">
								<div class="col-md-2">
									<input type="text" class="form-control" style="height:30px;" name="videoalbumname" placeholder="Album neve..." required>
								</div>
									<a href="#" class="btn btn-default btn-sm">
									<i class="fa fa-plus"></i> <button type="submit" name="ujvideoalbum" style="background:none; border:none;">Új videó album hozzáadása</button></a>
							</form>
						</div>
		 </div>
         <div class="tab-content">
              <div class="tab-pane active" id="tab_0">
               <div class="portlet light bordered">
                  <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="" class="horizontal-form" method="POST">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Youtube link</label>
                              <input type="text" name="link" class="form-control" required>
                            </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Cím</label>
                              <input type="text" name="cim" class="form-control" required>
                            </div>
                          </div>
                          <!--/span-->
                        </div>
                        <div class="row">
                          <!--/span-->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Címke</label>
                              <input type="text" name="cimke" class="form-control" placeholder="címke 1,címke 2, ..." required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Album</label>
                               <select class="form-control" name="album">  
	                                <?php while($c = mysqli_fetch_assoc($res2)) {  ?>
	                                  <option value="<?php echo $c["id"];?>"><?php echo $c["cim"];?></option>
	                                <?php } ?>
	                           </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-actions right"></div>
                        <?php for($i=1; $i<=10; $i++) { ?>
	                         <div class="row">
	                          <div class="col-md-4">
	                            <div class="form-group">
	                              <label class="control-label"><b>Kisérlet - Biológia</b></label>
	                               <select class="form-control" name="kiserletek[]">
	                                <option value="">Kérjük válasszon kísérletet</option>
	                                <?php foreach($data_biosz as $row) {  ?>
	                                  <option value="<?php echo $row;?>"><?php echo $row;?></option>
	                                <?php } ?>
	                              </select>
	                            </div>
	                          </div>
	                          <!--/span-->
	                          <div class="col-md-4">
	                            <div class="form-group">
	                              <label class="control-label"><b>Kisérlet - Fizika</b></label>
	                               <select class="form-control" name="kiserletek[]">  
	                                 <option value="">Kérjük válasszon kísérletet</option>
	                                <?php foreach($data_fizika as $row) {  ?>
	                                  <option value="<?php echo $row;?>"><?php echo $row;?></option>
	                                <?php } ?>
	                              </select>
	                            </div>
	                          </div>
	                           <div class="col-md-4">
	                            <div class="form-group">
	                              <label class="control-label"><b>Kisérlet - Kémia</b></label>
	                              <select class="form-control" name="kiserletek[]">
	                               <option value="">Kérjük válasszon kísérletet</option>
	                                <?php foreach($data_kemia as $row) {  ?>
	                                  <option value="<?php echo $row;?>"><?php echo $row;?></option>
	                                <?php } ?>
	                              </select>
	                            </div>
	                          </div>
	                          <!--/span-->
	                        </div>
	                    <?php } ?>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Iskola</label>
                              <select class="form-control" name="iskola">
                               <?php while($a = mysqli_fetch_assoc($iskola)) {  ?>
                                <option value="<?php echo $a["iskola"]; ?>"><?php echo $a["iskola"]; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Terem</label>
                              <select class="form-control" name="terem">
                                <option value="Labor I.">Labor I.</option>
                                <option value="Labor II.">Labor II.</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-8">
                          	<div class="form-group">
                          		<label class="control-label">Egyéb tartalom</label>
                          		<textarea id="text-editor" name="content" spellcheck="false" wrap="off">
                          		</textarea>
                            </div>
                          </div>
                          <!--/span-->
                        </div>
                      <div class="form-actions right">
                        <button type="submit" name="videosubmit" class="btn blue"><i class="fa fa-check"></i> Felvitel</button>
                      </div>
                    </form>
                    <!-- END FORM-->
                  </div>
                </div>
                	<?php while($b = mysqli_fetch_assoc($res)) { ?>
					<div class="row thumbnails">
				
						<div class="col-md-7">
							<div class="meet-our-team">
								<h3><?php echo $b["cim"]; ?></h3>
								 <div class="actions">
												<a href="video-modositas?id=<?php echo $b['id']; ?>" class="btn btn-default btn-sm">
												<i class="fa fa-pencil"></i> Szerkesztés </a>
												<a onclick="if(confirm('Biztosan törli a videót?')) window.location.href='video-torles?id=<?php echo $b['id']; ?>'" href="#" class="btn btn-default btn-sm">
												<i class="fa fa-times"></i> Törlés </a>
								</div>
								<div class="team-info">
									<p>
										 Link: <a target="_blank" href="<?php echo $b['link']; ?>"><?php echo $b["link"]; ?></a>
									</p>
									<p>
										 Címke: <?php echo $b["tag"]; ?>
									</p>
									<p>
										 Kísérlet: <?php echo $b["kiserlet"]; ?>
									</p>
								</div>
							</div>
						</div>
					
					</div>
					<?php } ?>	
                     </div>
                  </div>
         <!-- END PAGE CONTENT-->
      </div>
   </div>
<?php
   if(isset($_POST["videosubmit"])) {

      if(!empty($_POST["link"]) && !empty($_POST["cim"]) && !empty($_POST["cimke"])) {

         $link = mysqli_real_escape_string($connect,$_POST["link"]);
         $cim = mysqli_real_escape_string($connect,$_POST["cim"]);
         $cimke = mysqli_real_escape_string($connect,$_POST["cimke"]);
         $iskola = mysqli_real_escape_string($connect,$_POST["iskola"]);
         $tanterem = mysqli_real_escape_string($connect,$_POST["terem"]);
         $album = mysqli_real_escape_string($connect,$_POST["album"]);
         $content = mysqli_real_escape_string($connect,$_POST["content"]);

         $kiserlettomb = array();
				$string = "";
					foreach ($_POST['kiserletek'] as $kiserlet) {
						if ($kiserlet){
						$kiserlet = $kiserlet . ", ";
						$string = $string . $kiserlet;
					}
				}
		$string = rtrim($string, ', ');

		$sql = "INSERT INTO  `videok` (`id`,`album_id`,`link` ,`cim`,`tag`,`iskola`,`tanterem`,`kiserlet`,`egyeb`)
						VALUES (NULL,'$album','$link', '$cim','$cimke','$iskola','$tanterem','$string','$content')";
        mysqli_query($connect,$sql);
        header("Location: video-feltoltes");
      }
  }
}
function hirek_szerkesztese($id) {
include '../core/connect.php';
$sql = "SELECT * FROM hirek WHERE id='$id' limit 1";
$res = mysqli_query($connect,$sql) or die();

	 if(isset($_POST["hirekmodositsubmit"])) {
			if(!empty($_POST["cim"]) && !empty($_POST["leiras"]) && !empty($_POST["content"])) {
				 $cim = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["cim"]));
				 $leiras = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["leiras"]));
				 $content = mysqli_real_escape_string($connect,$_POST["content"]);
				 $sql = "UPDATE  `hirek` SET `cim` = '$cim',`leiras` = '$leiras',`tartalom`='$content'
						WHERE id='$id'";
				 mysqli_query($connect,$sql);
				 header('location: hirek');
			}

	}

while($a = mysqli_fetch_assoc($res)) {
?>
	 <div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">
				 Hír szerkesztése
				 </h3>
									 <div class="tab-content">
										 <div class="tab-pane active" id="tab_0">
												<div class="portlet box green">
													 <div class="portlet-body form">
															<!-- BEGIN FORM-->
															<form action="" method="post" class="form-horizontal">
																 <div class="form-body" style="border-top:1px solid #4bc75e;">
																		<div class="form-group">
																			 <label class="col-md-3 control-label">Cím</label>
																			 <div class="col-md-4">
																					<input type="text" name="cim" class="form-control input-circle" value="<?php echo $a['cim']; ?>" placeholder="Ide írjon..." required>
																			 </div>
																		</div>
																		<div class="form-group">
																				<label class="col-md-3 control-label">Leírás</label>
																			 <div class="col-md-4">
																					<input type="text" name="leiras" class="form-control input-circle" value="<?php echo $a['leiras']; ?>" placeholder="Ide írjon..." required>
																			 </div>
																		</div>
																		<div class="form-group">
																				<label class="col-md-3 control-label">Tartalom:</label>
																			 <div class="col-md-8">
																							 
																							<section>
																								<form action="" method="post">
																								<textarea id="text-editor" name="content" spellcheck="false" wrap="off">
																								<?php echo $a['tartalom']; ?>
																								</textarea>
																						 </section>
																			 </div>
																		</div>
																 </div>
																 <div class="form-actions">
																		<div class="row">
																			 <div class="col-md-offset-3 col-md-9">
																					<button type="submit" name="hirekmodositsubmit" class="btn btn-circle blue">Módosítás</button>
																					<a href="hirek"><button type="button" class="btn btn-circle default">Vissza</button></a>
																			 </div>
																		</div>
																 </div>
															</form>
															<!-- END FORM-->
													 </div>
												</div>
										 </div>
									</div>
				 <!-- END PAGE CONTENT-->
			</div>
	 </div>
<?php
	}
}
function rolunk_szerkesztese($id) {
include '../core/connect.php';
$sql = "SELECT * FROM rolunk WHERE id='$id' limit 1";
$res = mysqli_query($connect,$sql) or die();
while ($a = mysqli_fetch_assoc($res)) {
?>
	 <div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">
				 Rólunk szerkesztése
				 </h3>
									 <div class="tab-content">
										 <div class="tab-pane active" id="tab_0">
												<div class="portlet box green">
													 <div class="portlet-body form">
															<!-- BEGIN FORM-->
															<form action="" method="post" class="form-horizontal">
																 <div class="form-body" style="border-top:1px solid #4bc75e;">
																		<div class="form-group">
																			 <label class="col-md-3 control-label">Cím</label>
																			 <div class="col-md-4">
																					<input type="text" name="cim" value="<?php echo $a['cim']; ?>" class="form-control input-circle" placeholder="Ide írjon..." required>
																			 </div>
																		</div>
																		<div class="form-group">
																				<label class="col-md-3 control-label">Leírás</label>
																			 <div class="col-md-4">
																					<input type="text" name="leiras" value="<?php echo $a['leiras']; ?>" class="form-control input-circle" placeholder="Ide írjon..." required>
																			 </div>
																		</div>
																		<div class="form-group">
																				<label class="col-md-3 control-label">Tartalom:</label>
																			 <div class="col-md-8">
																							<section>
																								<form action="" method="post">
																								<textarea id="text-editor" name="content" spellcheck="false" wrap="off">
																									<?php echo $a['tartalom']; ?>
																								</textarea>
																						 </section>
																			 </div>
																		</div>
																 </div>
																 <div class="form-actions">
																		<div class="row">
																			 <div class="col-md-offset-3 col-md-9">
																					<button type="submit" name="rolunkszerkesztes" class="btn btn-circle blue">Módosítás</button>
																					<a href="rolunk-irtak"><button type="button" class="btn btn-circle default">Vissza</button></a>
																			 </div>
																		</div>
																 </div>
															</form>
															<!-- END FORM-->
													 </div>
												</div>
										 </div>
									</div>
				 <!-- END PAGE CONTENT-->
			</div>
	 </div>
<?php
}
	 if(isset($_POST["rolunkszerkesztes"])) {
			if(!empty($_POST["cim"]) && !empty($_POST["leiras"]) && !empty($_POST["content"])) {
				 $cim = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["cim"]));
				 $leiras = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["leiras"]));
				 $content = mysqli_real_escape_string($connect,$_POST["content"]);
				 $sql = "UPDATE  `rolunk` SET `cim` = '$cim',`leiras` = '$leiras',`tartalom`='$content'
						WHERE id='$id'";
				 mysqli_query($connect,$sql);
				 header('location: rolunk-irtak');
			}
	}

}
function felhasznalo_szerkesztese($id) {
include '../core/connect.php';
$sql = "SELECT * FROM felhasznalok WHERE id='$id' limit 1";
$res = mysqli_query($connect,$sql) or die();
while ($a = mysqli_fetch_assoc($res)) {
?>
	<div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">Felhasználó,iskola módosítása</h3>
									 <div class="tab-content">
								<div class="tab-pane active" id="tab_0">
								<div class="portlet light bordered">
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="" class="horizontal-form" method="post">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Felhasználónév</label>
															<input type="text" id="felasznalonev" value="<?php echo $a["felhasznalo"]; ?>" name="felhasznalonev" class="form-control" required>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Új jelszó</label>
															<input type="password" id="password" name="password" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Iskola</label>
															<input type="text" id="iskola" name="iskola" value="<?php echo $a["iskola"]; ?>" class="form-control" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Email cím</label>
															<input type="email" name="email" value="<?php echo $a["email"]; ?>" class="form-control" required>
														</div>
													</div>
												</div>
											</div>
											<div class="form-actions right">
												<div class="col-md-offset-3 col-md-9">
													<button type="submit" name="felhasznaloszerkesztes" class="btn btn-circle blue">Módosítás</button>
													<a href="felhasznalok"><button type="button" class="btn btn-circle default">Vissza</button></a>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
				 </div>
		        </div>
				 <!-- END PAGE CONTENT-->
			</div>
	</div>
<?php
}
	 if(isset($_POST["felhasznaloszerkesztes"])) {
			if(!empty($_POST["felhasznalonev"]) && !empty($_POST["iskola"]) && !empty($_POST["email"])) {

				 $felhasznalonev = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["felhasznalonev"]));
				 $iskola = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["iskola"]));
				 $email = mysqli_real_escape_string($connect,$_POST["email"]);

				if(!empty($_POST["password"])) {
					$password = mysqli_real_escape_string($connect,md5($_POST["password"]));

					$sql = "UPDATE  `felhasznalok` SET `felhasznalo` = '$felhasznalonev',`password` = '$password',`iskola` = '$iskola',`email`='$email'
							WHERE id='$id'";
					mysqli_query($connect,$sql);
					header('location: felhasznalok');
				} else {
					$sql = "UPDATE  `felhasznalok` SET `felhasznalo` = '$felhasznalonev',`iskola` = '$iskola',`email`='$email'
							WHERE id='$id'";
					mysqli_query($connect,$sql);
					header('location: felhasznalok');
				}
				 
			}
	}

}
function video_szerkesztese($id) {
include '../core/connect.php';
$sql = "SELECT * FROM videok WHERE id='$id' limit 1";
$res = mysqli_query($connect,$sql) or die();
while ($a = mysqli_fetch_assoc($res)) {
?>
   <div class="page-content-wrapper">
      <div class="page-content">
         <h3 class="page-title">
         Videó szerkesztése
         </h3>
         <div class="tab-content">
              <div class="tab-pane active" id="tab_0">
               <div class="portlet light bordered">
                  <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="" class="horizontal-form" method="POST">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Youtube link</label>
                              <input type="text" name="link" value="<?php echo $a['link']; ?>" class="form-control" required>
                            </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Cím</label>
                              <input type="text" name="cim" value="<?php echo $a['cim']; ?>" class="form-control" required>
                            </div>
                          </div>
                          <!--/span-->
                        </div>
                        <div class="row">
                          <!--/span-->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="control-label">Címke</label>
                              <input type="text" name="cimke" value="<?php echo $a['tag']; ?>" class="form-control" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-actions right"></div>
                      </div>
                      <div class="form-actions right">
                        <div class="col-md-offset-3 col-md-9">
								<button type="submit" name="videoszerkesztes" class="btn btn-circle blue">Módosítás</button>
								<a href="video-feltoltes"><button type="button" class="btn btn-circle default">Vissza</button></a>
						</div>
                      </div>
                    </form>
                    <!-- END FORM-->
                  </div>
                </div>	
                     </div>
                  </div>
         <!-- END PAGE CONTENT-->
      </div>
   </div>	
<?php
}
	 if(isset($_POST["videoszerkesztes"])) {
			if(!empty($_POST["link"]) && !empty($_POST["cim"]) && !empty($_POST["cimke"])) {

				$link = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["link"]));
				$cim = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["cim"]));
				$cimke = mysqli_real_escape_string($connect,$_POST["cimke"]);

				$sql = "UPDATE  `videok` SET `link` = '$link',`cim` = '$cim',`tag` = '$cimke'
							WHERE id='$id'";
				mysqli_query($connect,$sql);
				header('location: video-feltoltes');

				 
			}
	}

}

function statikus_szerkesztese($id) {
include '../core/connect.php';
$sql = "SELECT * FROM static WHERE id='$id' limit 1";
$res = mysqli_query($connect,$sql) or die();
while ($a = mysqli_fetch_assoc($res)) {
?>
	<div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">Statikus oldal módosítása</h3>
									 <div class="tab-content">
								<div class="tab-pane active" id="tab_0">
								<div class="portlet light bordered">
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="" class="horizontal-form" method="post">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Az oldal neve:</label>
															<input type="hidden" name="url" value="<?php echo $a["url"]; ?>">
															<input type="text" id="cim" value="<?php echo $a["cim"]; ?>" name="cim" class="form-control" required>
														</div>
													</div>
													<!--/span-->
													
												</div>
											</div>
											<div class="form-actions right">
												<div class="col-md-offset-3 col-md-9">
													<button type="submit" name="statikusszerkesztes" class="btn btn-circle blue">Módosítás</button>
													<a href="statikus-oldalak"><button type="button" class="btn btn-circle default">Vissza</button></a>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
				 </div>
		        </div>
				 <!-- END PAGE CONTENT-->
			</div>
	</div>
<?php
}
	 if(isset($_POST["statikusszerkesztes"])) {
			if(!empty($_POST["cim"])) {

				$cim = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["cim"]));
				$url = htmlspecialchars(mysqli_real_escape_string($connect,$_POST["url"]));

				$CHARMAP = array('ö' => 'o', 'Ö' => 'O', 'ó' => 'o','Ó' => 'O','ő' => 'o','Ő' => 'O','ú' => 'u','Ú' => 'U','ű' => 'u','Ű' => 'U',  
				'ü' => 'u','Ü' => 'U','á' => 'a','Á' => 'A','é' => 'e','É' => 'E','í' => 'i','Í' => 'I',);  
				$string = strtr($cim, $CHARMAP);     
				$string = preg_replace('/[^a-zA-Z0-9]/','-',$string); 
				$string = strtolower($string);

				rename('../'.$url.'.php' , '../'.$string.'.php');

				$file = fopen("../".$string.".php", "w");
				$txt = "<?php
				include 'kimeneti_fuggvenyek.php';
				include 'statikus_fuggvenyek.php';
				fejlec_letrehozas('".$cim."');
				statikus_oldal_letrehozas('".$string."', '".$cim."');
				lablec_letrehozas();
				?>";
				fwrite($file, $txt);
				fclose($file);
			
				$sql = "UPDATE  `static` SET `url` = '$string',`cim` = '$cim'
						WHERE id='$id'";
				mysqli_query($connect,$sql);
				header('location: statikus-oldalak');	
			}

	}
}
function album_szerkesztese($nev) {
?>
	<div class="page-content-wrapper">
			<div class="page-content">
				 <h3 class="page-title">Galéria album szerkesztés</h3>
									 <div class="tab-content">
								<div class="tab-pane active" id="tab_0">
								<div class="portlet light bordered">
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="" class="horizontal-form" method="post">
											<div class="form-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Az album neve:</label>
															<input type="hidden" name="oldaalbumnev" value="<?php echo $nev; ?>">
															<input type="text" id="cim" value="<?php echo $nev; ?>" name="albumnev" class="form-control" required>
														</div>
													</div>
													<!--/span-->
													
												</div>
											</div>
											<div class="form-actions right">
												<div class="col-md-offset-3 col-md-9">
													<button type="submit" name="galeriaszerkesztes" class="btn btn-circle blue">Módosítás</button>
													<a href="galeria"><button type="button" class="btn btn-circle default">Vissza</button></a>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
				 </div>
		        </div>
				 <!-- END PAGE CONTENT-->
			</div>
	</div>
<?php

	 if(isset($_POST["galeriaszerkesztes"])) {
			if(!empty($_POST["albumnev"])) {

				$albumnev = htmlspecialchars($_POST["albumnev"]);
				$regialbum = htmlspecialchars($_POST["oldaalbumnev"]);
				
				rename('style/plugins/jquery-file-upload/server/php/files/'.$regialbum.'' , 'style/plugins/jquery-file-upload/server/php/files/'.$albumnev.'');

				header('location: galeria');	
			}

	}
}
?>