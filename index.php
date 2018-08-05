<?php
if(isset($_COOKIE['cpf'])) {
  header('Location: dash.php');
}
?>


<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Telephone Management System  &copy; Infocom, ONGC</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Telephone Management System  &copy; Infocom, ONGC" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="vendor/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="vendor/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="vendor/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="vendor/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="vendor/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="vendor/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="vendor/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="vendor/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="vendor/assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.php">
                <img src="vendor/assets/layouts/layout/img/logo.png" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <div class="login-form" id="f1">
                <h3 class="form-title font-green">Sign In</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input id="id" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input id="unq" class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                <div class="form-actions">
                    <button id="log" class="btn green uppercase">Login</button>
                </div>
                <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
                    </p>
                </div>
            </div>
            <!-- END LOGIN FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <div class="register-form" id="f1">
                <h3 class="font-green">Sign Up</h3>
                <p class="hint"> Enter your account details below: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">C.P.F. ID</label>
                    <input id="uname" class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input id="pass" class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" />
                </div>
                <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn green btn-outline">Back</button>
                    <button id="reg" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </div>
            <!-- END REGISTRATION FORM -->
        </div>
        <div class="copyright">
          <div class="page-footer-inner">
            Telephone Management System  &copy; Infocom, ONGC
          </div>
       </div>
        <!--[if lt IE 9]>
<script src="vendor/assets/global/plugins/respond.min.js"></script>
<script src="vendor/assets/global/plugins/excanvas.min.js"></script>
<script src="vendor/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="vendor/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="vendor/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="vendor/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="vendor/assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
        <script>
        //option A

        $(document).ready(function() {
            //option A
            $("form").submit(function(e){
                e.preventDefault(e);
            });
        });


        $("#reg").on("click", function(){
          var uname = $("#uname").val();
          var pass = $("#pass").val();
          $.ajax({
            type: "POST",
            url: "includes/ajax/log.inc.php",
            data: "&key=infocom&id="+uname+"&pass="+pass,
            beforeSend: function() {
              $("#reg").prop( "disabled", true );
            },
            success: function(data) {
              //not in use currently
            },
            error: function(xhr) { // if error occured
              alert(xhr.statusText + xhr.responseText);
            },
            complete: function() {
              location.reload();
            },
            dataType: "html"
          });
        })
        </script>
        <script>
        $("#log").on("click", function(){
          var id = $("#id").val();
          var pass = $("#unq").val();
          $.ajax({
            type: "POST",
            url: "includes/ajax/log_in.inc.php",
            data: "&key=infocom&id="+id+"&pass="+pass,
            beforeSend: function() {
              //$("#reg").prop( "disabled", true );
            },
            success: function(data) {
              //not in use currently
            },
            error: function(xhr) { // if error occured
              alert(xhr.statusText + xhr.responseText);
            },
            complete: function() {
              location.reload();
            },
            dataType: "html"
          });
        })
        </script>
    </body>

</html>
