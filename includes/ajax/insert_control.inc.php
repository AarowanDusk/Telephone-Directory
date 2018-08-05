<?php

require_once('../config/config.inc.php'); //import connector
require_once('../sql/insert.inc.php'); //import connector

if( $_POST['key'] == "infocom" ) { //check validity
  $cpf = isset($_POST['a'])?$_POST['a']:null;
  $name = isset($_POST['b'])?$_POST['b']:null;
  $desig = isset($_POST['c'])?$_POST['c']:null;
  $location = isset($_POST['d'])?$_POST['d']:null;
  $date1 = isset($_POST['e'])?$_POST['e']:null;
  $date2 = isset($_POST['f'])?$_POST['f']:null;
  $phone = isset($_POST['g'])?$_POST['g']:null;
  $epabx_0 = isset($_POST['h'])?$_POST['h']:null;
  $epabx_r = isset($_POST['i'])?$_POST['i']:null;
  $remrk = isset($_POST['j'])?$_POST['j']:null;
  $token = md5($phone.time()); //create an unique token id



  $qry = new SqlRead();
  $sqli = $qry->data_channel($cpf,$name,$desig,$location,$date1,$date2,$phone,$epabx_0,$epabx_r,$remrk,$token);


}

?>
