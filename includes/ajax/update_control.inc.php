<?php

require_once('../config/config.inc.php'); //import connector
require_once('../sql/update.inc.php'); //import connector

if( $_POST['key'] == "infocom" ) { //check validity
  $id = isset($_POST['id'])?$_POST['id']:null;
  $cpf = isset($_POST['a'])?$_POST['a']:null;
  $name = isset($_POST['b'])?$_POST['b']:null;
  $desig = isset($_POST['c'])?$_POST['c']:null;
  $location = isset($_POST['d'])?$_POST['d']:null;
  $epabx_0 = isset($_POST['g'])?$_POST['g']:null;
  $epabx_r = isset($_POST['h'])?$_POST['h']:null;
  $date1 = isset($_POST['e'])?$_POST['e']:null;
  $date2 = isset($_POST['f'])?$_POST['f']:null;
  $remrk = isset($_POST['i'])?$_POST['i']:null;
  $phone = isset($_POST['j'])?$_POST['j']:null; //create an unique token id



  $qry = new Sqlupdate();
  $sqli = $qry->data_channel_updt($id,$cpf,$name,$desig,$location,$date1,$date2,$epabx_0,$epabx_r,$remrk,$phone);


}

?>
