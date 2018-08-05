<?php

require_once('../config/config.inc.php'); //import connector
require_once('../sql/prob_del_update_prob.inc.php'); //import connector

if( $_POST['key'] == "infocom" ) { //check validity
  $token = isset($_POST['token'])?$_POST['token']:null;
  $id = isset($_POST['id'])?$_POST['id']:null;


  $qry = new SqlProbDelUpdtProb();
  $sqli = $qry->data_channel_prob_Del_pb_updt($token,$id);


}

?>
