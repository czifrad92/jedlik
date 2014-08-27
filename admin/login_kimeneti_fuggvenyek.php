<?php
function login_fejlec() {
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
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Admin - Természettudományos Labor</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="style/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="style/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="style/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="style/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="style/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="style/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="style/pages/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="style/css/components.css" rel="stylesheet" type="text/css"/>
<link href="style/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="style/ayout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="style/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="style/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="style/img/favicon.ico" type="image/vnd.microsoft.icon"/>
<!-- END THEME STYLES -->
</head>
<?php
}
function login_lablec() {
?>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="style/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="style/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
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
<script src="style/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="style/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="style/scripts/metronic.js" type="text/javascript"></script>
<script src="style/layout/scripts/layout.js" type="text/javascript"></script>
<script src="style/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="style/layout/scripts/demo.js" type="text/javascript"></script>
<script src="style/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
  Login.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php
}
function login_content() {
?>
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
   <img src="style/img/jedlik_admin.png" alt=""/>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
   <!-- BEGIN LOGIN FORM -->
   <form class="login-form" action="kezdolap" method="post">
      <h3 class="form-title">Bejelentkezés</h3>
      <div class="form-group">
         <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
         <label class="control-label visible-ie8 visible-ie9">Felhasználónév</label>
         <div class="input-icon">
            <i class="fa fa-user"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Felhasználónév" name="username" required>
         </div>
      </div>
      <div class="form-group">
         <label class="control-label visible-ie8 visible-ie9">Jelszó</label>
         <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Jelszó" name="password" required>
         </div>
      </div>
      <div class="form-actions">
         <button type="submit" class="btn green pull-right">
         Bejelentkezés <i class="m-icon-swapright m-icon-white"></i>
         </button>
      </div>
      <div class="forget-password">
         <h4>Elfelejtette a jelszavát ?</h4>
         <p>
            kattintson <a href="javascript:;" id="forget-password">
            ide </a>
            új jelszó kéréséhez.
         </p>
      </div>
   </form>
   <!-- END LOGIN FORM -->
   <!-- BEGIN FORGOT PASSWORD FORM -->
   <form class="forget-form" action="kezdolap" method="post">
      <h3>Elfelejtett jelszó</h3>
      <div class="form-group">
         <div class="input-icon">
            <i class="fa fa-envelope"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" required>
         </div>
      </div>
      <div class="form-actions">
         <button type="button" id="back-btn" class="btn">
         <i class="m-icon-swapleft"></i> Vissza </button>
         <button type="submit" class="btn green pull-right">
         Küldés <i class="m-icon-swapright m-icon-white"></i>
         </button>
      </div>
   </form>
</div>
<?php
}
?>