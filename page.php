<?php
if(!isset($_COOKIE['cpf'])) {
  header('Location: index.php');
}
?>

<?php
$ctrl = $_GET['ctrl'];
require_once('includes/config/config.inc.php'); //import connector
include("includes/sql/out_data_ctrl.inc.php");
include("includes/sql/chart.inc.php");
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
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="vendor/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="vendor/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="vendor/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="vendor/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="vendor/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link href="vendor/assets/global/plugins/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />
        <link href="includes/uploader-master/dist/css/jquery.dm-uploader.min.css" rel="stylesheet" type="text/css" />
        <link href="vendor/assets/global/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <style>
        .file {
          visibility: hidden;
          position: absolute;
        }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.php">
                            <img src="vendor/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <!-- BEGIN USER LOGIN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a href="javascript:;" class="dropdown-toggle" id="lg_ot">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>
                            <!-- END USER LOGIN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <li class="nav-item start active">
                                <a href="dash.php" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="selected"></span>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="update.php" class="nav-link nav-toggle">
                                    <i class="fa fa-database"></i>
                                    <span class="selected"></span>
                                    <span class="title">Update</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="search.php" class="nav-link nav-toggle">
                                    <i class="fa fa-search"></i>
                                    <span class="selected"></span>
                                    <span class="title">Search</span>
                                </a>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                          <div class="col-md-8">
                            <div class="mt-element-list">
                                <div class="mt-list-head list-simple ext-1 font-white bg-green-sharp">
                                    <div class="list-head-title-container">
                                        <h3 class="list-title">Data List : <?php echo $ctrl ?></h3>
                                    </div>
                                </div>
                                <div class="mt-list-container list-simple ext-1">
                                    <ul>
                                        <?php
                                        $sqli = $qry->ctrl_out($ctrl);
                                        ?>
                                        <li class="mt-list-item done">
                                            <div class="list-icon-container">
                                                <i class="fa fa-circle-o-notch fa-spin"></i>
                                            </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <button class="btn green btn-block" id="print">Print</button>
                                                </h3>
                                            </div>
                                        </li>
                                        <li class="mt-list-item done">
                                            <div class="list-icon-container">
                                                <i class="fa fa-circle-o-notch fa-spin"></i>
                                            </div>
                                            <div class="list-item-content">
                                                <h3 class="uppercase">
                                                    <button class="btn red btn-block" id="delete_p">Delete</button>
                                                </h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div id="donut" class="chart"> </div>
                          </div>
                          <div class="col-md-12" style="margin-top:15px;">
                            <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-paper-plane font-green-haze"></i>
                                        <span class="caption-subject bold font-green-haze uppercase"> Create Problem Statemnts </span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <form class="form-horizontal form-bordered">
                                        <div class="form-group">
                                          <div class="col-md-10">
                                              <input class="form-control" id="a" type="text" />
                                              <span class="help-block"> Problem Statemtnt</span>
                                          </div>
                                        </div>
                                      </form>
                                      <form class="form-horizontal form-bordered">
                                        <div class="form-group">
                                          <div class="col-md-10">
                                              <input class="form-control" id="b" type="text" />
                                              <span class="help-block"> Problem Cause</span>
                                          </div>
                                        </div>
                                      </form>
                                      <form class="form-horizontal form-bordered">
                                        <div class="form-group">
                                          <div class="col-md-10">
                                              <label class="mt-radio">
                                                  <input type="checkbox" name="optionsRadios" id="c" value="option1">SOLVED?
                                                  <span></span>
                                              </label>
                                              <span class="help-block"> Solution Status</span>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="col-md-6">
                                      <form class="form-horizontal form-bordered">
                                        <div class="form-group">
                                          <div class="col-md-10">
                                              <input class="form-control" id="d" type="text" />
                                              <span class="help-block"> Problem Date</span>
                                          </div>
                                        </div>
                                      </form>
                                      <form class="form-horizontal form-bordered">
                                        <div class="form-group">
                                          <div class="col-md-10">
                                              <input class="form-control" id="e" type="text" />
                                              <span class="help-block"> Solution Date</span>
                                          </div>
                                        </div>
                                      </form>
                                      <form class="form-horizontal form-bordered">
                                        <div class="form-group">
                                          <div class="col-md-10">
                                              <button class="btn green btn-block" id="problem_sub">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="tabbable-custom nav-justified">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active">
                                        <a href="#tab_1_1_1" data-toggle="tab"> Problem Statements </a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_1_2" data-toggle="tab"> History </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_1_1">
                                      <div class="wrapper">
                                          <ul id="results"><!-- results appear here as list --></ul>
                                      </div>
                                    </div>
                                    <div class="tab-pane" id="tab_1_1_2">
                                      <div class="wrapper">
                                          <ul id="results_2"><!-- results appear here as list --></ul>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner">
                  Telephone Management System  &copy; Infocom, ONGC
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <div class="modal fade" id="basic_response" tabindex="-1" role="basic" aria-hidden="true">
           <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                         <h4 class="modal-title">Response : </h4>
                     </div>
                     <div class="modal-body" id="data"> </div>
                     <div class="modal-footer">
                         <button id="reload" type="button" class="btn green">Reload</button>
                     </div>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
        </div>
        <div class="modal fade bs-modal-lg" id="docu" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Documentation : </h4>
                    </div>
                    <div class="modal-body">
                      Please download the format for the excel table :
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="vendor/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/jquery.input-ip-address-control-1.0.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/ladda/spin.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/ladda/ladda.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="vendor/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="vendor/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="vendor/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="vendor/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/bootstrap-table/bootstrap-table.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="vendor/assets/pages/scripts/ui-buttons-spinners.min.js" type="text/javascript"></script>
        <script src="vendor/assets/pages/scripts/form-input-mask.min.js" type="text/javascript"></script>
        <script src="vendor/assets/pages/scripts/ui-modals.js" type="text/javascript"></script>
        <script src="vendor/assets/pages/scripts/table-bootstrap.min.js" type="text/javascript"></script>
        <script src="includes/uploader-master/dist/js/jquery.dm-uploader.min.js" type="text/javascript"></script>
        <script src="includes/uploader-master/demo/demo-ui.js"></script>
        <script src="includes/uploader-master/demo/demo-config.js"></script>
        <script src="vendor/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/flot/jquery.flot.stack.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/flot/jquery.flot.crosshair.min.js" type="text/javascript"></script>
        <script src="vendor/assets/global/plugins/flot/jquery.flot.axislabels.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
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
      $("#problem_sub").on("click",function(){
        var a = $("#a").val();
        var b = $("#b").val();
        if($('#c').is(':checked')) {
          var c = 1;
        }else{
          var c = 0;
        }
        var d = $("#d").val();
        var e = $("#e").val();
        $.ajax({
          type: 'POST',
          url: 'includes/ajax/ptoblem_control.inc.php',
          data: '&key=infocom&data='+<?php echo $ctrl ?>+'&a='+a+'&b='+b+'&c='+c+'&d='+d+'&e='+e,
          beforeSend: function() {
            $("#problem_sub").prop( "disabled", true );
          },
          success: function(data) {
            //not in use currently
          },
          error: function(xhr) { // if error occured
            $("#data").append(xhr.statusText + xhr.responseText);
          },
          complete: function() {
            location.reload();
          },
          dataType: 'html'
      });
      })
      </script>
      <?php
        $qryc = new Sql_chart();
        $sqlic = $qryc->data_channel_chart($ctrl);
      ?>
      <script>
      var data = [{
          label: "Problems Solved",
          data: <?php echo $sqlic; ?>
      }, {
          label: "Problems Exists",
          data: <?php echo 100-$sqlic; ?>
      }];

      var options = {
          series: {
              pie: {
                  show: true,
                  innerRadius: 0.5,
                  radius: 1
              }
          },
          grid: {
              hoverable: true
          },
          tooltip: true,
          tooltipOpts: {
              cssClass: "flotTip",
              content: "%s: %p.0%",
              defaultTheme: false
          }
      };

      $.plot($("#donut"), data, options);
      </script>
      <script type="text/javascript">
      (function($){
        $.fn.loaddata = function(options) {// Settings
          var settings = $.extend({
            loading_gif_url	: "img/ajax-loader.gif", //url to loading gif
            end_record_text	: 'No more records found!', //no more records to load
            data_url 		: 'includes/autoload/fetch_prob.inc.php?ctrl=<?php echo $ctrl; ?>', //url to PHP page
            start_page 		: 1 //initial page
          }, options);

          var el = this;
          loading  = false;
          end_record = false;
          contents(el, settings); //initial data load

          $(window).scroll(function() { //detact scroll
            if($(window).scrollTop() + $(window).height() >= $(document).height()){ //scrolled to bottom of the page
              contents(el, settings); //load content chunk
            }
          });
        };
        //Ajax load function
        function contents(el, settings){
          var load_img = $('<img/>').attr('src',settings.loading_gif_url).addClass('loading-image'); //create load image
          var record_end_txt = $('<div/>').text(settings.end_record_text).addClass('end-record-info'); //end record text

          if(loading == false && end_record == false){
            loading = true; //set loading flag on
            el.append(load_img); //append loading image
            $.post( settings.data_url, {'page': settings.start_page}, function(data){ //jQuery Ajax post
              if(data.trim().length == 0){ //no more records
                el.append(record_end_txt); //show end record text
                load_img.remove(); //remove loading img
                end_record = true; //set end record flag on
                return; //exit
              }
              loading = false;  //set loading flag off
              load_img.remove(); //remove loading img
              el.append(data);  //append content
              settings.start_page ++; //page increment
            })
          }
        }

      })(jQuery);

      $("#results").loaddata();
      </script>
      <script type="text/javascript">
      (function($){
        $.fn.loaddata = function(options) {// Settings
          var settings = $.extend({
            loading_gif_url	: "img/ajax-loader.gif", //url to loading gif
            end_record_text	: 'No more records found!', //no more records to load
            data_url 		: 'includes/autoload/history_prob.inc.php?ctrl=<?php echo $ctrl; ?>', //url to PHP page
            start_page 		: 1 //initial page
          }, options);

          var el = this;
          loading  = false;
          end_record = false;
          contents(el, settings); //initial data load

          $(window).scroll(function() { //detact scroll
            if($(window).scrollTop() + $(window).height() >= $(document).height()){ //scrolled to bottom of the page
              contents(el, settings); //load content chunk
            }
          });
        };
        //Ajax load function
        function contents(el, settings){
          var load_img = $('<img/>').attr('src',settings.loading_gif_url).addClass('loading-image'); //create load image
          var record_end_txt = $('<div/>').text(settings.end_record_text).addClass('end-record-info'); //end record text

          if(loading == false && end_record == false){
            loading = true; //set loading flag on
            el.append(load_img); //append loading image
            $.post( settings.data_url, {'page': settings.start_page}, function(data){ //jQuery Ajax post
              if(data.trim().length == 0){ //no more records
                el.append(record_end_txt); //show end record text
                load_img.remove(); //remove loading img
                end_record = true; //set end record flag on
                return; //exit
              }
              loading = false;  //set loading flag off
              load_img.remove(); //remove loading img
              el.append(data);  //append content
              settings.start_page ++; //page increment
            })
          }
        }

      })(jQuery);

      $("#results_2").loaddata();
      </script>
      <script>
        $("#print").on("click", function(){
          window.print();
        })
      </script>
      <script>
      $("#delete_p").on("click", function(){
        $.ajax({
          type: 'POST',
          url: 'includes/ajax/del.inc.php',
          data: '&key=infocom&data=<?php echo $ctrl ?>',
          beforeSend: function() {
            $("#delete_p").prop( "disabled", true );
          },
          success: function(data) {
            //not in use currently
          },
          error: function(xhr) { // if error occured
            $("#data").append(xhr.statusText + xhr.responseText);
          },
          complete: function() {
            window.location.href = "dash.php";
          },
          dataType: 'html'
      });
      })
      </script>
      <script>
      $("#lg_ot").on("click", function(){
        $.ajax({
          type: 'POST',
          url: 'includes/ajax/log_out.inc.php',
          data: '&key=infocom&name=del',
          beforeSend: function() {

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
          dataType: 'html'
       });
      })
      </script>
    </body>
</html>
