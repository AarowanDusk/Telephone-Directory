<?php

require_once('../config/config.inc.php'); //import connector
require_once('../sql/log_ctrl.inc.php'); //import connector

if( $_POST['key'] == "infocom" ) { //check validity
  $id = isset($_POST['id'])?$_POST['id']:null;
  $pass = isset($_POST['pass'])?$_POST['pass']:null;


  $qry = new log();
  $sqli = $qry->lod_ct($id,$pass);


}

?>
