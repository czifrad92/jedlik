<?php
function fejlec_letrehozas() {
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
<title>Jedlik - Természettudományos Labor</title>
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
               Teszt Jedlik </span>
               <i class="fa fa-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li>
                     <a href="extra_profile.html">
                     <i class="icon-user"></i> Profil </a>
                  </li>
                  <li>
                     <a href="login.html">
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
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler" title="Elrejt/Megjelenít">
               </div>
               <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
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
            <li>
               <a href="hirek">
               <i class="icon-speech"></i>
               <span class="title" title="Hírek szerkesztése">Hírek szerkesztése</span>
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
               <span class="title" title="Felhasználó létrehozás">Felhasználó létrehozás</span>
               </a>
            </li>
            <li>
               <a href="iskola">
               <i class="icon-pointer"></i>
               <span class="title" title="Iskola hozzáadása">Iskola hozzáadása</span>
               </a>
            </li>
            <li>
               <a href="teremfoglalas">
               <i class="icon-calendar"></i> 
               <span class="title" title="Teremfoglalás">Teremfoglalás</span>
               </a>
            </li>
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
            <p class="size">Processing...</p>
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
                            <img src="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" style="width:70px; height:70px;">
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
                        <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                            <i class="fa fa-trash-o"></i>
                            <span>Törlés</span>
                        </button>
                        <input type="checkbox" name="delete" value="1" class="toggle">
                    {% } else { %}
                        <button class="btn yellow cancel btn-sm">
                            <i class="fa fa-ban"></i>
                            <span>Vissza</span>
                        </button>
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
?>
   <div class="page-content-wrapper">
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                      Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler-close">
            </div>
            <div class="theme-options">
               <div class="theme-option theme-colors clearfix">
                  <span>
                  THEME COLOR </span>
                  <ul>
                     <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
                     </li>
                     <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
                     </li>
                     <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
                     </li>
                     <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
                     </li>
                     <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
                     </li>
                     <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
                     </li>
                  </ul>
               </div>
               <div class="theme-option">
                  <span>
                  Layout </span>
                  <select class="layout-option form-control input-small">
                     <option value="fluid" selected="selected">Fluid</option>
                     <option value="boxed">Boxed</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Header </span>
                  <select class="page-header-option form-control input-small">
                     <option value="fixed" selected="selected">Fixed</option>
                     <option value="default">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Mode</span>
                  <select class="sidebar-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Menu </span>
                  <select class="sidebar-menu-option form-control input-small">
                     <option value="accordion" selected="selected">Accordion</option>
                     <option value="hover">Hover</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Style </span>
                  <select class="sidebar-style-option form-control input-small">
                     <option value="default" selected="selected">Default</option>
                     <option value="light">Light</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Position </span>
                  <select class="sidebar-pos-option form-control input-small">
                     <option value="left" selected="selected">Left</option>
                     <option value="right">Right</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Footer </span>
                  <select class="page-footer-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
            </div>
         </div>
         <!-- END STYLE CUSTOMIZER -->
         <!-- BEGIN PAGE HEADER-->
         <h3 class="page-title">
         Statikus oldalak
         </h3>
         <?php statikus_oldal_listazas(); ?>
      </div>
   </div>
<?php
}
function statikus_oldal_listazas() {
include '../core/connect.php';
$sql = "SELECT id,cim FROM static";
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
                           <input type="submit" style="background: transparent;border:none; height: 25px;" name="staticsubmit" value="<?php echo $a["cim"]; ?>">
                           <input type="hidden" name="id" value="<?php echo $a["id"]; ?>">
                        </form>
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
      <div id="wysihtml5-editor-toolbar">
      <header>
        <ul class="commands">
          <li data-wysihtml5-command="bold" class="command"></li>
          <li data-wysihtml5-command="italic"  class="command"></li>
          <li data-wysihtml5-command="insertUnorderedList"  class="command"></li>
          <li data-wysihtml5-command="insertOrderedList"  class="command"></li>
          <li data-wysihtml5-command="createLink" class="command"></li>
          <li data-wysihtml5-command="insertImage" class="command"></li>
          <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" class="command"></li>
          <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" class="command"></li>
          <li data-wysihtml5-command-group="foreColor" class="fore-color" class="command">
            <ul>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue"></li>
            </ul>
          </li>
          <li data-wysihtml5-command="insertSpeech" class="command"></li>
          <li data-wysihtml5-action="change_view" class="action"></li>
        </ul>
      </header>
      <div data-wysihtml5-dialog="createLink" style="display: none;">
        <label>
          Link:
          <input data-wysihtml5-dialog-field="href" value="http://">
        </label>
        <a data-wysihtml5-dialog-action="save">Ok</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Vissza</a>
      </div>

      <div data-wysihtml5-dialog="insertImage" style="display: none;">
        <label>
          Kép:
          <input data-wysihtml5-dialog-field="src" value="http://">
        </label>
        <a data-wysihtml5-dialog-action="save">Ok</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Vissza</a>
      </div>
    </div>
    <section>
      <form action="" method="post">
      <textarea id="wysihtml5-editor" name="content" spellcheck="false" wrap="off">
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
ob_start();
?>
   <div class="page-content-wrapper">
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                      Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler-close">
            </div>
            <div class="theme-options">
               <div class="theme-option theme-colors clearfix">
                  <span>
                  THEME COLOR </span>
                  <ul>
                     <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
                     </li>
                     <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
                     </li>
                     <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
                     </li>
                     <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
                     </li>
                     <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
                     </li>
                     <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
                     </li>
                  </ul>
               </div>
               <div class="theme-option">
                  <span>
                  Layout </span>
                  <select class="layout-option form-control input-small">
                     <option value="fluid" selected="selected">Fluid</option>
                     <option value="boxed">Boxed</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Header </span>
                  <select class="page-header-option form-control input-small">
                     <option value="fixed" selected="selected">Fixed</option>
                     <option value="default">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Mode</span>
                  <select class="sidebar-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Menu </span>
                  <select class="sidebar-menu-option form-control input-small">
                     <option value="accordion" selected="selected">Accordion</option>
                     <option value="hover">Hover</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Style </span>
                  <select class="sidebar-style-option form-control input-small">
                     <option value="default" selected="selected">Default</option>
                     <option value="light">Light</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Position </span>
                  <select class="sidebar-pos-option form-control input-small">
                     <option value="left" selected="selected">Left</option>
                     <option value="right">Right</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Footer </span>
                  <select class="page-footer-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
            </div>
         </div>
         <!-- END STYLE CUSTOMIZER -->
         <!-- BEGIN PAGE HEADER-->
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
                                          <input type="text" name="cim" class="form-control input-circle" placeholder="Ide írjon...">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Leírás</label>
                                       <div class="col-md-4">
                                          <input type="text" name="leiras" class="form-control input-circle" placeholder="Ide írjon...">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tartalom:</label>
                                       <div class="col-md-8">
                                               <div id="wysihtml5-editor-toolbar">
                                                <header>
                                                  <ul class="commands">
                                                    <li data-wysihtml5-command="bold" class="command"></li>
                                                    <li data-wysihtml5-command="italic"  class="command"></li>
                                                    <li data-wysihtml5-command="insertUnorderedList"  class="command"></li>
                                                    <li data-wysihtml5-command="insertOrderedList"  class="command"></li>
                                                    <li data-wysihtml5-command="createLink" class="command"></li>
                                                    <li data-wysihtml5-command="insertImage" class="command"></li>
                                                    <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" class="command"></li>
                                                    <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" class="command"></li>
                                                    <li data-wysihtml5-command-group="foreColor" class="fore-color" class="command">
                                                      <ul>
                                                        <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver"></li>
                                                        <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray"></li>
                                                        <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon"></li>
                                                        <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red"></li>
                                                        <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple"></li>
                                                        <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green"></li>
                                                        <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive"></li>
                                                        <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy"></li>
                                                        <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue"></li>
                                                      </ul>
                                                    </li>
                                                    <li data-wysihtml5-command="insertSpeech" class="command"></li>
                                                    <li data-wysihtml5-action="change_view" style="display: none;"></li>
                                                  </ul>
                                                </header>
                                                <div data-wysihtml5-dialog="createLink" style="display: none;">
                                                  <label>
                                                    Link:
                                                    <input data-wysihtml5-dialog-field="href" value="http://">
                                                  </label>
                                                  <a data-wysihtml5-dialog-action="save">Ok</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Vissza</a>
                                                </div>

                                                <div data-wysihtml5-dialog="insertImage" style="display: none;">
                                                  <label>
                                                    Kép:
                                                    <input data-wysihtml5-dialog-field="src" value="http://">
                                                  </label>
                                                  <a data-wysihtml5-dialog-action="save">Ok</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Vissza</a>
                                                </div>
                                              </div>
                                              <section>
                                                <form action="" method="post">
                                                <textarea id="wysihtml5-editor" name="content" spellcheck="false" wrap="off">
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
      }
  }

}
function hirek_megjelenites() {
include '../core/connect.php';
$sql = "SELECT * FROM hirek";
$res = mysqli_query($connect,$sql);
?>
<div class="page-content-wrapper">
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                      Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler-close">
            </div>
            <div class="theme-options">
               <div class="theme-option theme-colors clearfix">
                  <span>
                  THEME COLOR </span>
                  <ul>
                     <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
                     </li>
                     <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
                     </li>
                     <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
                     </li>
                     <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
                     </li>
                     <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
                     </li>
                     <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
                     </li>
                  </ul>
               </div>
               <div class="theme-option">
                  <span>
                  Layout </span>
                  <select class="layout-option form-control input-small">
                     <option value="fluid" selected="selected">Fluid</option>
                     <option value="boxed">Boxed</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Header </span>
                  <select class="page-header-option form-control input-small">
                     <option value="fixed" selected="selected">Fixed</option>
                     <option value="default">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Mode</span>
                  <select class="sidebar-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Menu </span>
                  <select class="sidebar-menu-option form-control input-small">
                     <option value="accordion" selected="selected">Accordion</option>
                     <option value="hover">Hover</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Style </span>
                  <select class="sidebar-style-option form-control input-small">
                     <option value="default" selected="selected">Default</option>
                     <option value="light">Light</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Position </span>
                  <select class="sidebar-pos-option form-control input-small">
                     <option value="left" selected="selected">Left</option>
                     <option value="right">Right</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Footer </span>
                  <select class="page-footer-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
            </div>
         </div>
         <!-- END STYLE CUSTOMIZER -->
         <!-- BEGIN PAGE HEADER-->
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
                        <a href="#" class="btn btn-default btn-sm">
                        <i class="fa fa-pencil"></i> Szerkesztés </a>
                        <a href="#" class="btn btn-default btn-sm">
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
?>
   <div class="page-content-wrapper">
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                      Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler-close">
            </div>
            <div class="theme-options">
               <div class="theme-option theme-colors clearfix">
                  <span>
                  THEME COLOR </span>
                  <ul>
                     <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
                     </li>
                     <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
                     </li>
                     <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
                     </li>
                     <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
                     </li>
                     <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
                     </li>
                     <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
                     </li>
                  </ul>
               </div>
               <div class="theme-option">
                  <span>
                  Layout </span>
                  <select class="layout-option form-control input-small">
                     <option value="fluid" selected="selected">Fluid</option>
                     <option value="boxed">Boxed</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Header </span>
                  <select class="page-header-option form-control input-small">
                     <option value="fixed" selected="selected">Fixed</option>
                     <option value="default">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Mode</span>
                  <select class="sidebar-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Menu </span>
                  <select class="sidebar-menu-option form-control input-small">
                     <option value="accordion" selected="selected">Accordion</option>
                     <option value="hover">Hover</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Style </span>
                  <select class="sidebar-style-option form-control input-small">
                     <option value="default" selected="selected">Default</option>
                     <option value="light">Light</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Sidebar Position </span>
                  <select class="sidebar-pos-option form-control input-small">
                     <option value="left" selected="selected">Left</option>
                     <option value="right">Right</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>
                  Footer </span>
                  <select class="page-footer-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
            </div>
         </div>
         <!-- END STYLE CUSTOMIZER -->
         <!-- BEGIN PAGE HEADER-->
         <h3 class="page-title">
         Galéria
         </h3>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
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
                        <button type="submit" class="btn blue start">
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
?>

