<?php

require_once('../config/config.inc.php'); //import connector
require_once('../sql/prob_update.inc.php'); //import connector

if( $_POST['key'] == "infocom" ) { //check validity
  $id = isset($_POST['id'])?$_POST['id']:null;
  $token = isset($_POST['token'])?$_POST['token']:null;
  $statement = isset($_POST['a'])?$_POST['a']:null;
  $root = isset($_POST['b'])?$_POST['b']:null;
  $date1 = isset($_POST['c'])?$_POST['c']:null;
  $date2 = isset($_POST['d'])?$_POST['d']:null;


  $qry = new Sqlupdate_prob();
  $sqli = $qry->data_channel_updt_prob($id,$token,$statement,$root,$date1,$date2);


}

?>
