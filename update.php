<?php
if(!isset($_COOKIE['cpf'])) {
  header('Location: index.php');
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
                            <li class="nav-item start ">
                                <a href="dash.php" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="selected"></span>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item start active">
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
                          <div class="col-md-12">
                              <div class="portlet light">
                                  <div class="portlet-title">
                                      <div class="caption">
                                          <i class="fa fa-database"></i>Import/Export Data : </div>
                                      <div class="tools">
                                          <a href="javascript:;" class="collapse"> </a>
                                          <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                      </div>
                                  </div>
                                  <div class="portlet-body">
                                      <div class="row">
                                          <div class="col-md-9 col-sm-9 col-xs-9">
                                              <div class="tab-content">
                                                  <div class="tab-pane active" id="tab_7_1">
                                                    <form class="form-horizontal form-bordered">
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3">CPF ID.</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" id="a" type="text" />
                                                            <span class="help-block"> CPF ID. of the employee </span>
                                                        </div>
                                                      </div>
                                                    </form>
                                                    <form class="form-horizontal form-bordered">
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3">Name</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" id="b" type="text" />
                                                            <span class="help-block"> Name of the employee</span>
                                                        </div>
                                                      </div>
                                                    </form>
                                                    <form class="form-horizontal form-bordered">
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3">Designation</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" id="c" type="text" />
                                                            <span class="help-block"> Designation of the employee </span>
                                                        </div>
                                                      </div>
                                                    </form>
                                                    <form class="form-horizontal form-bordered">
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3">Phone</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" id="maske_phone" type="text" />
                                                            <span class="help-block"> (CCC)MMM-MMMM </span>
                                                        </div>
                                                      </div>
                                                    </form>
                                                    <form class="form-horizontal form-bordered">
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3">EPABX (O)</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" id="epabx_0" type="text" />
                                                            <span class="help-block"> EPABX (O) Code </span>
                                                        </div>
                                                      </div>
                                                    </form>
                                                    <form class="form-horizontal form-bordered">
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3">EPABX (R)</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" id="epabx_r" type="text" />
                                                            <span class="help-block"> EPABX (R) Code </span>
                                                        </div>
                                                      </div>
                                                    </form>
                                                    <form class="form-horizontal form-bordered">
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3">Location</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" id="d" type="text" />
                                                            <span class="help-block"> System location </span>
                                                        </div>
                                                      </div>
                                                    </form>
                                                    <form class="form-horizontal form-bordered">
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3">Installation Date</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" id="mask_date1" type="text" />
                                                            <span class="help-block"> DD/MM/YYYY </span>
                                                        </div>
                                                      </div>
                                                    </form>
                                                    <form class="form-horizontal form-bordered">
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3">Uninstallation Date</label>
                                                        <div class="col-md-6">
                                                            <input class="form-control" id="mask_date2" type="text" />
                                                            <span class="help-block"> DD/MM/YYYY </span>
                                                        </div>
                                                      </div>
                                                    </form>
                                                    <form class="form-horizontal form-bordered">
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3">Remark</label>
                                                        <div class="col-md-6">
                                                            <textarea class="form-control" id="remrk" style="width:100%;height:100px;"></textarea>
                                                            <span class="help-block"> Remarks </span>
                                                        </div>
                                                      </div>
                                                    </form>
                                                    <form class="form-horizontal form-bordered">
                                                      <div class="form-group">
                                                        <button type="button" data-toggle="modal" id="ajax_response" class="btn btn-lg green mt-ladda-btn ladda-button btn-outline" data-style="slide-right" data-spinner-color="#333" style="width:100%;">
                                                          <span class="ladda-label">
                                                            Submit input <i class="icon-login"></i>
                                                          </span>
                                                          <span class="ladda-spinner"></span>
                                                       </button>
                                                      </div>
                                                    </form>
                                                  </div>
                                                  <div class="tab-pane" id="tab_7_2">
                                                    <main role="main" class="container">
                                                      <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                          <!-- Our markup, the important part here! -->
                                                          <div id="drag-and-drop-zone" class="dm-uploader p-5">
                                                            <div class="btn btn-primary btn-block mb-5 text-center">
                                                                <h3 class="mb-5 mt-5">Drag &amp; drop files here</h3>
                                                                <br/>
                                                                <span>Open the file Browser</span>
                                                                <br/>
                                                                <br/>
                                                                <input type="file" title='Click to add Files' />
                                                            </div>
                                                          </div><!-- /uploader -->
                                                        </div>
                                                        <div class="col-md-12 col-sm-12">
                                                          <div class="alert alert-block alert-success fade in" style="cursor:pointer;" data-toggle="modal" href="#docu">
                                                              <center><p> Click here to read the upload documentation!! </p></center>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <br/>
                                                      <div class="row">
                                                        <div class="col-lg-6 col-xs-12 col-sm-12">
                                                          <div class="portlet light bordered">
                                                              <div class="portlet-title">
                                                                  <div class="caption">
                                                                      <i class="icon-share font-dark hide"></i>
                                                                      <span class="caption-subject font-dark bold uppercase">File Log : </span>
                                                                  </div>
                                                              </div>
                                                              <div class="portlet-body">
                                                                  <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                                                                    <ul class="feeds" id="files">
                                                                        <li>
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-danger">
                                                                                            <i class="fa fa-file-excel-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> Loading Plugins ......
                                                                                            <span class="label label-sm label-warning "> Taking actions ......
                                                                                                <i class="fa fa-share"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                  </div>
                                                                  <div class="scroller-footer">
                                                                      <div class="btn-arrow-link pull-right">

                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-lg-6 col-xs-12 col-sm-12">
                                                          <div class="portlet light bordered">
                                                              <div class="portlet-title">
                                                                  <div class="caption">
                                                                      <i class="icon-share font-dark hide"></i>
                                                                      <span class="caption-subject font-dark bold uppercase">Debug Log : </span>
                                                                  </div>
                                                              </div>
                                                              <div class="portlet-body">
                                                                  <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                                                                    <ul class="feeds" id="debug">
                                                                        <li>
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-sm label-info">
                                                                                            <i class="fa fa-check"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> Loading Plugins ......
                                                                                            <span class="label label-sm label-warning "> Taking actions ......
                                                                                                <i class="fa fa-share"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                  </div>
                                                                  <div class="scroller-footer">
                                                                      <div class="btn-arrow-link pull-right">

                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        </div>
                                                      </div> <!-- /debug -->
                                                    </main> <!-- /container -->
                                                  </div>
                                                  <div class="tab-pane" id="tab_7_3">
                                                    <center>
                                                      <button id="dwnld" href="javascript:;" class="btn btn-lg green">
                                                          Download
                                                          <br/>
                                                          <i class="fa fa-download"></i>
                                                      </button>
                                                    </center>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-3">
                                              <ul class="nav nav-tabs tabs-right">
                                                  <li class="active">
                                                      <a href="#tab_7_1" data-toggle="tab"> Insert records </a>
                                                  </li>
                                                  <li class="">
                                                      <a href="#tab_7_2" data-toggle="tab"> Import from Excel </a>
                                                  </li>
                                                  <li class="">
                                                      <a href="#tab_7_3" data-toggle="tab"> Export to Excel </a>
                                                  </li>
                                              </ul>
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
                      Please download the format for the excel table : <a href="includes/export_excel_file/download.php?&file=Book1.xlsx">Example.Xlsx</a>
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
        $("#ajax_response").on("click", function(){
          $("#data").empty();
          var a = $("#a").val();
          var b = $("#b").val();
          var c = $("#c").val();
          var d = $("#d").val();
          var e = $("#mask_date1").val();
          var f = $("#mask_date2").val();
          var g = $("#maske_phone").val();
          var h = $("#epabx_0").val();
          var i = $("#epabx_r").val();
          var j = $("#remrk").val();

          $.ajax({
            type: 'POST',
            url: 'includes/ajax/insert_control.inc.php',
            data: '&key=infocom&a='+a+'&b='+b+'&c='+c+'&d='+d+'&e='+e+'&f='+f+'&g='+g+'&h='+h+'&i='+i+'&j='+j,
            beforeSend: function() {
              $("#sub").prop( "disabled", true );
              $("#basic_response").modal('show');
            },
            success: function(data) {
              //not in use currently
            },
            error: function(xhr) { // if error occured
              $("#data").append(xhr.statusText + xhr.responseText);
            },
            complete: function() {
              $("#data").append("<br/><br/>CPF ID :" + a);
              $("#data").append("<br/><br/>Name :" + b);
              $("#data").append("<br/><br/>Designation :" + c);
              $("#data").append("<br/><br/>Phone No. :" + g);
              $("#data").append("<br/><br/>EPABX (O) :" + h);
              $("#data").append("<br/><br/>EPABX (R) :" + i);
              $("#data").append("<br/><br/>Location :" + d);
              $("#data").append("<br/><br/>Installation Date :" + e);
              $("#data").append("<br/><br/>Uninstallation Date :" + f);
              $("#data").append("<br/><br/>Remark :" + j);
            },
            dataType: 'html'
        });
      });
      $("#reload").on("click", function(){
        setTimeout(function(){
            location.reload();
        }, 000);
      })
      </script>
      <!-- File item template -->
      <script type="text/html" id="files-template">
        <li>
          <div class="progress mb-2">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
              role="progressbar"
              style="width: 0%"
              aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
            <div class="col1">
                <div class="cont">
                    <div class="cont-col1">
                        <div class="label label-sm label-danger">
                            <i class="fa fa-file-excel-o"></i>
                        </div>
                    </div>
                    <div class="cont-col2">
                        <div class="desc">
                            %%filename%%
                            <span class="label label-sm label-warning "> - Status: <span class="text-muted">Waiting</span>
                                <i class="fa fa-share"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
      </script>
      <!-- Debug item template -->
      <script type="text/html" id="debug-template">
        <li>
          <div class="col1">
              <div class="cont">
                  <div class="cont-col1">
                      <div class="label label-sm label-danger">
                          <i class="fa fa-file-excel-o"></i>
                      </div>
                  </div>
                  <div class="cont-col2">
                      <div class="desc"> %%message%%
                          <span class="label label-sm label-warning "> %%date%%
                              <i class="fa fa-check"></i>
                          </span>
                      </div>
                  </div>
              </div>
          </div>
        </li>
      </script>
      <script>
      function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for (var i = 0; i < 5; i++){
          text += possible.charAt(Math.floor(Math.random() * possible.length));
        }
        return text;
      }


      function mk_tim() {
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
      }


      $("#dwnld").on("click", function(){
          var fname = btoa(makeid()+mk_tim());
          $.ajax({
            type: 'POST',
            url: 'includes/export_excel_file/out_excl.inc.php',
            data: '&key=infocom&name='+fname,
            beforeSend: function() {

            },
            success: function(data) {
              //not in use currently
            },
            error: function(xhr) { // if error occured
              alert(xhr.statusText + xhr.responseText);
            },
            complete: function() {
              window.location.href = "includes/export_excel_file/download.php?&file="+fname+".xlsx";
            },
            dataType: 'html'
        });
      });
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
