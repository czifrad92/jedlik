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
<link rel="shortcut icon" href="favicon.ico"/>
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
         <a href="/admin">
         <img src="style/layout/img/logo.png" alt="logo" class="logo-default"/>
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
function hirek_megjelenites() {
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
         Dashboard <small>dashboard & statistics</small>
         </h3>
         <div class="page-bar">
            <ul class="page-breadcrumb">
               <li>
                  <i class="fa fa-home"></i>
                  <a href="index.html">Home</a>
                  <i class="fa fa-angle-right"></i>
               </li>
               <li>
                  <a href="#">Dashboard</a>
                  <i class="fa fa-angle-right"></i>
               </li>
               <li>
                  <a href="#">Dashboard</a>
               </li>
            </ul>
            <div class="page-toolbar">
               <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
                  <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
               </div>
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN DASHBOARD STATS -->
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat blue-madison">
                  <div class="visual">
                     <i class="fa fa-comments"></i>
                  </div>
                  <div class="details">
                     <div class="number">
                         1349
                     </div>
                     <div class="desc">
                         New Feedbacks
                     </div>
                  </div>
                  <a class="more" href="#">
                  View more <i class="m-icon-swapright m-icon-white"></i>
                  </a>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat red-intense">
                  <div class="visual">
                     <i class="fa fa-bar-chart-o"></i>
                  </div>
                  <div class="details">
                     <div class="number">
                         12,5M$
                     </div>
                     <div class="desc">
                         Total Profit
                     </div>
                  </div>
                  <a class="more" href="#">
                  View more <i class="m-icon-swapright m-icon-white"></i>
                  </a>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat green-haze">
                  <div class="visual">
                     <i class="fa fa-shopping-cart"></i>
                  </div>
                  <div class="details">
                     <div class="number">
                         549
                     </div>
                     <div class="desc">
                         New Orders
                     </div>
                  </div>
                  <a class="more" href="#">
                  View more <i class="m-icon-swapright m-icon-white"></i>
                  </a>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat purple-plum">
                  <div class="visual">
                     <i class="fa fa-globe"></i>
                  </div>
                  <div class="details">
                     <div class="number">
                         +89%
                     </div>
                     <div class="desc">
                         Brand Popularity
                     </div>
                  </div>
                  <a class="more" href="#">
                  View more <i class="m-icon-swapright m-icon-white"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- END DASHBOARD STATS -->
         <div class="clearfix">
         </div>
         <div class="row">
            <div class="col-md-6 col-sm-6">
               <!-- BEGIN PORTLET-->
               <div class="portlet solid bordered grey-cararra">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="fa fa-bar-chart-o"></i>Site Visits
                     </div>
                     <div class="actions">
                        <div class="btn-group" data-toggle="buttons">
                           <label class="btn grey-steel btn-sm active">
                           <input type="radio" name="options" class="toggle" id="option1">New</label>
                           <label class="btn grey-steel btn-sm">
                           <input type="radio" name="options" class="toggle" id="option2">Returning</label>
                        </div>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div id="site_statistics_loading">
                        <img src="style/layout/img/loading.gif" alt="loading"/>
                     </div>
                     <div id="site_statistics_content" class="display-none">
                        <div id="site_statistics" class="chart">
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END PORTLET-->
            </div>
            <div class="col-md-6 col-sm-6">
               <!-- BEGIN PORTLET-->
               <div class="portlet solid grey-cararra bordered">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="fa fa-bullhorn"></i>Revenue
                     </div>
                     <div class="actions">
                        <div class="btn-group pull-right">
                           <a href="" class="btn grey-steel btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           Filter <span class="fa fa-angle-down">
                           </span>
                           </a>
                           <ul class="dropdown-menu pull-right">
                              <li>
                                 <a href="javascript:;">
                                 Q1 2014 <span class="label label-sm label-default">
                                 past </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="javascript:;">
                                 Q2 2014 <span class="label label-sm label-default">
                                 past </span>
                                 </a>
                              </li>
                              <li class="active">
                                 <a href="javascript:;">
                                 Q3 2014 <span class="label label-sm label-success">
                                 current </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="javascript:;">
                                 Q4 2014 <span class="label label-sm label-warning">
                                 upcoming </span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div id="site_activities_loading">
                        <img src="style/layout/img/loading.gif" alt="loading"/>
                     </div>
                     <div id="site_activities_content" class="display-none">
                        <div id="site_activities" style="height: 228px;">
                        </div>
                     </div>
                     <div style="margin: 20px 0 10px 30px">
                        <div class="row">
                           <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                              <span class="label label-sm label-success">
                              Revenue: </span>
                              <h3>$13,234</h3>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                              <span class="label label-sm label-info">
                              Tax: </span>
                              <h3>$134,900</h3>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                              <span class="label label-sm label-danger">
                              Shipment: </span>
                              <h3>$1,134</h3>
                           </div>
                           <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                              <span class="label label-sm label-warning">
                              Orders: </span>
                              <h3>235090</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END PORTLET-->
            </div>
         </div>
         <div class="clearfix">
         </div>
         <div class="row ">
            <div class="col-md-6 col-sm-6">
               <div class="portlet box blue-steel">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="fa fa-bell-o"></i>Recent Activities
                     </div>
                     <div class="actions">
                        <div class="btn-group">
                           <a class="btn btn-sm btn-default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           Filter By <i class="fa fa-angle-down"></i>
                           </a>
                           <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                              <label><input type="checkbox"/> Finance</label>
                              <label><input type="checkbox" checked=""/> Membership</label>
                              <label><input type="checkbox"/> Customer Support</label>
                              <label><input type="checkbox" checked=""/> HR</label>
                              <label><input type="checkbox"/> System</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                        <ul class="feeds">
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">
                                          <i class="fa fa-check"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           You have 4 pending tasks. <span class="label label-sm label-warning ">
                                          Take action <i class="fa fa-share"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     Just now
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="#">
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-success">
                                          <i class="fa fa-bar-chart-o"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           Finance Report for year 2013 has been released.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     20 mins
                                 </div>
                              </div>
                              </a>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-danger">
                                          <i class="fa fa-user"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           You have 5 pending membership that requires a quick review.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     24 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">
                                          <i class="fa fa-shopping-cart"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           New order received with <span class="label label-sm label-success">
                                          Reference Number: DR23923 </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     30 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-success">
                                          <i class="fa fa-user"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           You have 5 pending membership that requires a quick review.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     24 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-default">
                                          <i class="fa fa-bell-o"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
                                          Overdue </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     2 hours
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="#">
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-default">
                                          <i class="fa fa-briefcase"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           IPO Report for year 2013 has been released.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     20 mins
                                 </div>
                              </div>
                              </a>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">
                                          <i class="fa fa-check"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           You have 4 pending tasks. <span class="label label-sm label-warning ">
                                          Take action <i class="fa fa-share"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     Just now
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="#">
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-danger">
                                          <i class="fa fa-bar-chart-o"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           Finance Report for year 2013 has been released.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     20 mins
                                 </div>
                              </div>
                              </a>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-default">
                                          <i class="fa fa-user"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           You have 5 pending membership that requires a quick review.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     24 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">
                                          <i class="fa fa-shopping-cart"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           New order received with <span class="label label-sm label-success">
                                          Reference Number: DR23923 </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     30 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-success">
                                          <i class="fa fa-user"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           You have 5 pending membership that requires a quick review.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     24 mins
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-warning">
                                          <i class="fa fa-bell-o"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
                                          Overdue </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     2 hours
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="#">
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">
                                          <i class="fa fa-briefcase"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                           IPO Report for year 2013 has been released.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                     20 mins
                                 </div>
                              </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="scroller-footer">
                        <div class="btn-arrow-link pull-right">
                           <a href="#">See All Records</a>
                           <i class="icon-arrow-right"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <div class="portlet box green-haze tasks-widget">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="fa fa-check"></i>Tasks
                     </div>
                     <div class="tools">

                     </div>
                     <div class="actions">
                        <div class="btn-group">
                           <a class="btn btn-default btn-sm" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           More <i class="fa fa-angle-down"></i>
                           </a>
                           <ul class="dropdown-menu pull-right">
                              <li>
                                 <a href="#">
                                 <i class="i"></i> All Project </a>
                              </li>
                              <li class="divider">
                              </li>
                              <li>
                                 <a href="#">
                                 AirAsia </a>
                              </li>
                              <li>
                                 <a href="#">
                                 Cruise </a>
                              </li>
                              <li>
                                 <a href="#">
                                 HSBC </a>
                              </li>
                              <li class="divider">
                              </li>
                              <li>
                                 <a href="#">
                                 Pending <span class="badge badge-danger">
                                 4 </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 Completed <span class="badge badge-success">
                                 12 </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 Overdue <span class="badge badge-warning">
                                 9 </span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="task-content">
                        <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="1">
                           <!-- START TASK LIST -->
                           <ul class="task-list">
                              <li>
                                 <div class="task-checkbox">
                                    <input type="hidden" value="1" name="test"/>
                                    <input type="checkbox" class="liChild" value="2" name="test"/>
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">
                                    Present 2013 Year IPO Statistics at Board Meeting </span>
                                    <span class="label label-sm label-success">Company</span>
                                    <span class="task-bell">
                                    <i class="fa fa-bell-o"></i>
                                    </span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                       </a>
                                       <ul class="dropdown-menu pull-right">
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-check"></i> Complete </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-pencil"></i> Edit </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-trash-o"></i> Cancel </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""/>
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">
                                    Hold An Interview for Marketing Manager Position </span>
                                    <span class="label label-sm label-danger">Marketing</span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                       </a>
                                       <ul class="dropdown-menu pull-right">
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-check"></i> Complete </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-pencil"></i> Edit </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-trash-o"></i> Cancel </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""/>
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">
                                    AirAsia Intranet System Project Internal Meeting </span>
                                    <span class="label label-sm label-success">AirAsia</span>
                                    <span class="task-bell">
                                    <i class="fa fa-bell-o"></i>
                                    </span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                       </a>
                                       <ul class="dropdown-menu pull-right">
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-check"></i> Complete </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-pencil"></i> Edit </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-trash-o"></i> Cancel </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""/>
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">
                                    Technical Management Meeting </span>
                                    <span class="label label-sm label-warning">Company</span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                       </a>
                                       <ul class="dropdown-menu pull-right">
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-check"></i> Complete </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-pencil"></i> Edit </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-trash-o"></i> Cancel </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""/>
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">
                                    Kick-off Company CRM Mobile App Development </span>
                                    <span class="label label-sm label-info">Internal Products</span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                       </a>
                                       <ul class="dropdown-menu pull-right">
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-check"></i> Complete </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-pencil"></i> Edit </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-trash-o"></i> Cancel </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""/>
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">
                                    Prepare Commercial Offer For SmartVision Website Rewamp </span>
                                    <span class="label label-sm label-danger">SmartVision</span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                       </a>
                                       <ul class="dropdown-menu pull-right">
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-check"></i> Complete </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-pencil"></i> Edit </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-trash-o"></i> Cancel </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""/>
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">
                                    Sign-Off The Comercial Agreement With AutoSmart </span>
                                    <span class="label label-sm label-default">AutoSmart</span>
                                    <span class="task-bell">
                                    <i class="fa fa-bell-o"></i>
                                    </span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                       </a>
                                       <ul class="dropdown-menu pull-right">
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-check"></i> Complete </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-pencil"></i> Edit </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-trash-o"></i> Cancel </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""/>
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">
                                    Company Staff Meeting </span>
                                    <span class="label label-sm label-success">Cruise</span>
                                    <span class="task-bell">
                                    <i class="fa fa-bell-o"></i>
                                    </span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                       </a>
                                       <ul class="dropdown-menu pull-right">
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-check"></i> Complete </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-pencil"></i> Edit </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-trash-o"></i> Cancel </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                              <li class="last-line">
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""/>
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">
                                    KeenThemes Investment Discussion </span>
                                    <span class="label label-sm label-warning">KeenThemes </span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                       </a>
                                       <ul class="dropdown-menu pull-right">
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-check"></i> Complete </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-pencil"></i> Edit </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-trash-o"></i> Cancel </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <!-- END START TASK LIST -->
                        </div>
                     </div>
                     <div class="task-footer">
                        <div class="btn-arrow-link pull-right">
                           <a href="#">See All Records</a>
                           <i class="icon-arrow-right"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix">
         </div>
         <div class="row ">
            <div class="col-md-6 col-sm-6">
               <div class="portlet box purple-wisteria">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="fa fa-calendar"></i>General Stats
                     </div>
                     <div class="actions">
                        <a href="javascript:;" class="btn btn-sm btn-default easy-pie-chart-reload">
                        <i class="fa fa-repeat"></i> Reload </a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="easy-pie-chart">
                              <div class="number transactions" data-percent="55">
                                 <span>
                                 +55 </span>
                                 %
                              </div>
                              <a class="title" href="#">
                              Transactions <i class="icon-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm">
                        </div>
                        <div class="col-md-4">
                           <div class="easy-pie-chart">
                              <div class="number visits" data-percent="85">
                                 <span>
                                 +85 </span>
                                 %
                              </div>
                              <a class="title" href="#">
                              New Visits <i class="icon-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm">
                        </div>
                        <div class="col-md-4">
                           <div class="easy-pie-chart">
                              <div class="number bounce" data-percent="46">
                                 <span>
                                 -46 </span>
                                 %
                              </div>
                              <a class="title" href="#">
                              Bounce <i class="icon-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <div class="portlet box red-sunglo">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="fa fa-calendar"></i>Server Stats
                     </div>
                     <div class="tools">
                        <a href="" class="collapse">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config">
                        </a>
                        <a href="" class="reload">
                        </a>
                        <a href="" class="remove">
                        </a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="sparkline-chart">
                              <div class="number" id="sparkline_bar">
                              </div>
                              <a class="title" href="#">
                              Network <i class="icon-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm">
                        </div>
                        <div class="col-md-4">
                           <div class="sparkline-chart">
                              <div class="number" id="sparkline_bar2">
                              </div>
                              <a class="title" href="#">
                              CPU Load <i class="icon-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                        <div class="margin-bottom-10 visible-sm">
                        </div>
                        <div class="col-md-4">
                           <div class="sparkline-chart">
                              <div class="number" id="sparkline_line">
                              </div>
                              <a class="title" href="#">
                              Load Rate <i class="icon-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix">
         </div>
         <div class="row ">
            <div class="col-md-6 col-sm-6">
               <!-- BEGIN REGIONAL STATS PORTLET-->
               <div class="portlet">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="fa fa-globe"></i>Regional Stats
                     </div>
                     <div class="tools">
                        <a href="" class="collapse">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config">
                        </a>
                        <a href="" class="reload">
                        </a>
                        <a href="" class="remove">
                        </a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div id="region_statistics_loading">
                        <img src="style/layout/img/loading.gif" alt="loading"/>
                     </div>
                     <div id="region_statistics_content" class="display-none">
                        <div class="btn-toolbar margin-bottom-10">
                           <div class="btn-group" data-toggle="buttons">
                              <a href="" class="btn default btn-sm active">
                              Users </a>
                              <a href="" class="btn default btn-sm">
                              Orders </a>
                           </div>
                           <div class="btn-group pull-right">
                              <a href="" class="btn default btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                              Select Region <span class="fa fa-angle-down">
                              </span>
                              </a>
                              <ul class="dropdown-menu pull-right">
                                 <li>
                                    <a href="javascript:;" id="regional_stat_world">
                                    World </a>
                                 </li>
                                 <li>
                                    <a href="javascript:;" id="regional_stat_usa">
                                    USA </a>
                                 </li>
                                 <li>
                                    <a href="javascript:;" id="regional_stat_europe">
                                    Europe </a>
                                 </li>
                                 <li>
                                    <a href="javascript:;" id="regional_stat_russia">
                                    Russia </a>
                                 </li>
                                 <li>
                                    <a href="javascript:;" id="regional_stat_germany">
                                    Germany </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div id="vmap_world" class="vmaps display-none">
                        </div>
                        <div id="vmap_usa" class="vmaps display-none">
                        </div>
                        <div id="vmap_europe" class="vmaps display-none">
                        </div>
                        <div id="vmap_russia" class="vmaps display-none">
                        </div>
                        <div id="vmap_germany" class="vmaps display-none">
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END REGIONAL STATS PORTLET-->
            </div>
            <div class="col-md-6 col-sm-6">
               <!-- BEGIN PORTLET-->
               <div class="portlet paddingless">
                  <div class="portlet-title line">
                     <div class="caption">
                        <i class="fa fa-bell-o"></i>Feeds
                     </div>
                     <div class="tools">
                        <a href="" class="collapse">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config">
                        </a>
                        <a href="" class="reload">
                        </a>
                        <a href="" class="remove">
                        </a>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <!--BEGIN TABS-->
                     <div class="tabbable tabbable-custom">
                        <ul class="nav nav-tabs">
                           <li class="active">
                              <a href="#tab_1_1" data-toggle="tab">
                              System </a>
                           </li>
                           <li>
                              <a href="#tab_1_2" data-toggle="tab">
                              Activities </a>
                           </li>
                           <li>
                              <a href="#tab_1_3" data-toggle="tab">
                              Recent Users </a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane active" id="tab_1_1">
                              <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible="0">
                                 <ul class="feeds">
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    You have 4 pending tasks. <span class="label label-sm label-danger ">
                                                   Take action <i class="fa fa-share"></i>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              Just now
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New version v1.4 just lunched!
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              20 mins
                                          </div>
                                       </div>
                                       </a>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                   <i class="fa fa-bolt"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    Database server #12 overloaded. Please fix the issue.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              24 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              30 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              40 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                   <i class="fa fa-plus"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New user registered.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              1.5 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
                                                   Overdue </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              2 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              3 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              5 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              18 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              22 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              22 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              22 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              21 hours
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                   <i class="fa fa-bullhorn"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received. Please take care of it.
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              22 hours
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab_1_2">
                              <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                 <ul class="feeds">
                                    <li>
                                       <a href="#">
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New user registered
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              Just now
                                          </div>
                                       </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New order received
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              10 mins
                                          </div>
                                       </div>
                                       </a>
                                    </li>
                                    <li>
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                   <i class="fa fa-bolt"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    Order #24DOP4 has been rejected. <span class="label label-sm label-danger ">
                                                   Take action <i class="fa fa-share"></i>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              24 mins
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New user registered
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              Just now
                                          </div>
                                       </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New user registered
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              Just now
                                          </div>
                                       </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New user registered
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              Just now
                                          </div>
                                       </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New user registered
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              Just now
                                          </div>
                                       </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New user registered
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              Just now
                                          </div>
                                       </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New user registered
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              Just now
                                          </div>
                                       </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                       <div class="col1">
                                          <div class="cont">
                                             <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                   <i class="fa fa-bell-o"></i>
                                                </div>
                                             </div>
                                             <div class="cont-col2">
                                                <div class="desc">
                                                    New user registered
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col2">
                                          <div class="date">
                                              Just now
                                          </div>
                                       </div>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab_1_3">
                              <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Robert Nilson </a>
                                             <span class="label label-sm label-success label-mini">
                                             Approved </span>
                                          </div>
                                          <div>
                                              29 Jan 2013 10:45AM
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Lisa Miller </a>
                                             <span class="label label-sm label-info">
                                             Pending </span>
                                          </div>
                                          <div>
                                              19 Jan 2013 10:45AM
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Eric Kim </a>
                                             <span class="label label-sm label-info">
                                             Pending </span>
                                          </div>
                                          <div>
                                              19 Jan 2013 12:45PM
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Lisa Miller </a>
                                             <span class="label label-sm label-danger">
                                             In progress </span>
                                          </div>
                                          <div>
                                              19 Jan 2013 11:55PM
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Eric Kim </a>
                                             <span class="label label-sm label-info">
                                             Pending </span>
                                          </div>
                                          <div>
                                              19 Jan 2013 12:45PM
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Lisa Miller </a>
                                             <span class="label label-sm label-danger">
                                             In progress </span>
                                          </div>
                                          <div>
                                              19 Jan 2013 11:55PM
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Eric Kim </a>
                                             <span class="label label-sm label-info">
                                             Pending </span>
                                          </div>
                                          <div>
                                              19 Jan 2013 12:45PM
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Lisa Miller </a>
                                             <span class="label label-sm label-danger">
                                             In progress </span>
                                          </div>
                                          <div>
                                              19 Jan 2013 11:55PM
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Eric Kim </a>
                                             <span class="label label-sm label-info">
                                             Pending </span>
                                          </div>
                                          <div>
                                              19 Jan 2013 12:45PM
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Lisa Miller </a>
                                             <span class="label label-sm label-danger">
                                             In progress </span>
                                          </div>
                                          <div>
                                              19 Jan 2013 11:55PM
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Eric Kim </a>
                                             <span class="label label-sm label-info">
                                             Pending </span>
                                          </div>
                                          <div>
                                              19 Jan 2013 12:45PM
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 user-info">
                                       <img alt="" src="style/layout/img/avatar.png" class="img-responsive"/>
                                       <div class="details">
                                          <div>
                                             <a href="#">
                                             Lisa Miller </a>
                                             <span class="label label-sm label-danger">
                                             In progress </span>
                                          </div>
                                          <div>
                                              19 Jan 2013 11:55PM
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--END TABS-->
                  </div>
               </div>
               <!-- END PORTLET-->
            </div>
         </div>
         <div class="clearfix">
         </div>
         <div class="row ">
            <div class="col-md-6 col-sm-6">
               <!-- BEGIN PORTLET-->
               <div class="portlet box blue-madison calendar">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="fa fa-calendar"></i>Calendar
                     </div>
                  </div>
                  <div class="portlet-body light-grey">
                     <div id="calendar">
                     </div>
                  </div>
               </div>
               <!-- END PORTLET-->
            </div>
            <div class="col-md-6 col-sm-6">
               <!-- BEGIN PORTLET-->
               <div class="portlet">
                  <div class="portlet-title line">
                     <div class="caption">
                        <i class="fa fa-comments"></i>Chats
                     </div>
                     <div class="tools">
                        <a href="" class="collapse">
                        </a>
                     </div>
                  </div>
                  <div class="portlet-body" id="chats">
                     <div class="scroller" style="height: 435px;" data-always-visible="1" data-rail-visible1="1">
                        <ul class="chats">
                           <li class="in">
                              <img class="avatar" alt="" src="style/layout/img/avatar1.jpg"/>
                              <div class="message">
                                 <span class="arrow">
                                 </span>
                                 <a href="#" class="name">
                                 Bob Nilson </a>
                                 <span class="datetime">
                                 at 20:09 </span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                              </div>
                           </li>
                           <li class="out">
                              <img class="avatar" alt="" src="style/layout/img/avatar2.jpg"/>
                              <div class="message">
                                 <span class="arrow">
                                 </span>
                                 <a href="#" class="name">
                                 Lisa Wong </a>
                                 <span class="datetime">
                                 at 20:11 </span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                              </div>
                           </li>
                           <li class="in">
                              <img class="avatar" alt="" src="style/layout/img/avatar1.jpg"/>
                              <div class="message">
                                 <span class="arrow">
                                 </span>
                                 <a href="#" class="name">
                                 Bob Nilson </a>
                                 <span class="datetime">
                                 at 20:30 </span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                              </div>
                           </li>
                           <li class="out">
                              <img class="avatar" alt="" src="style/layout/img/avatar3.jpg"/>
                              <div class="message">
                                 <span class="arrow">
                                 </span>
                                 <a href="#" class="name">
                                 Richard Doe </a>
                                 <span class="datetime">
                                 at 20:33 </span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                              </div>
                           </li>
                           <li class="in">
                              <img class="avatar" alt="" src="style/layout/img/avatar3.jpg"/>
                              <div class="message">
                                 <span class="arrow">
                                 </span>
                                 <a href="#" class="name">
                                 Richard Doe </a>
                                 <span class="datetime">
                                 at 20:35 </span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                              </div>
                           </li>
                           <li class="out">
                              <img class="avatar" alt="" src="style/layout/img/avatar1.jpg"/>
                              <div class="message">
                                 <span class="arrow">
                                 </span>
                                 <a href="#" class="name">
                                 Bob Nilson </a>
                                 <span class="datetime">
                                 at 20:40 </span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                              </div>
                           </li>
                           <li class="in">
                              <img class="avatar" alt="" src="style/layout/img/avatar3.jpg"/>
                              <div class="message">
                                 <span class="arrow">
                                 </span>
                                 <a href="#" class="name">
                                 Richard Doe </a>
                                 <span class="datetime">
                                 at 20:40 </span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
                              </div>
                           </li>
                           <li class="out">
                              <img class="avatar" alt="" src="style/layout/img/avatar1.jpg"/>
                              <div class="message">
                                 <span class="arrow">
                                 </span>
                                 <a href="#" class="name">
                                 Bob Nilson </a>
                                 <span class="datetime">
                                 at 20:54 </span>
                                 <span class="body">
                                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet. </span>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="chat-form">
                        <div class="input-cont">
                           <input class="form-control" type="text" placeholder="Type a message here..."/>
                        </div>
                        <div class="btn-cont">
                           <span class="arrow">
                           </span>
                           <a href="" class="btn blue icn-only">
                           <i class="fa fa-check icon-white"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END PORTLET-->
            </div>
         </div>
      </div>
   </div>
</div>
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
?>



