<?php

require_once('../config/config.inc.php'); //import connector
require_once('../sql/insert_prob.inc.php'); //import connector

if( $_POST['key'] == "infocom" ) { //check validity
  $phone = isset($_POST['data'])?$_POST['data']:null;
  $statement = isset($_POST['a'])?$_POST['a']:null;
  $cause = isset($_POST['b'])?$_POST['b']:null;
  $qstn = isset($_POST['c'])?$_POST['c']:null;
  $date1 = isset($_POST['d'])?$_POST['d']:null;
  $date2 = isset($_POST['e'])?$_POST['e']:null;



  $qry = new SqlReadProb();
  $sqli = $qry->data_channel_prob($statement,$cause,$qstn,$date1,$date2,$phone);


}

?>
