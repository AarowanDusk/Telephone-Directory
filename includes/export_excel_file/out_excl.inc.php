<?php
include '../config/config.inc.php';
include '../PHPExcel-1.8/Classes/PHPExcel.php';
include '../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';// Instantiate a new PHPExcel object
include 'export_excel.inc.php';// Instantiate a new PHPExcel object

if( $_POST['key'] == "infocom" ) { //check validity
  $name = isset($_POST['name'])?$_POST['name']:null;


  $ext = new extractExcel;
  $ext->out_excel($name);

}

?>
