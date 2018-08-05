<?php

require_once('../config/config.inc.php'); //import connector
require_once('../sql/state_update_prob.inc.php'); //import connector

if( $_POST['key'] == "infocom" ) { //check validity
  $data = isset($_POST['data'])?$_POST['data']:null;
  $id = isset($_POST['id'])?$_POST['id']:null;


  $qry = new SqlStateUpdtProb();
  $sqli = $qry->data_channel_prob_st_updt($data,$id);


}

?>
