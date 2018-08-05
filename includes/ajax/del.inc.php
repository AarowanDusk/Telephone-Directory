<?php

require_once('../config/config.inc.php'); //import connector
require_once('../sql/del_p.inc.php'); //import connector

if( $_POST['key'] == "infocom" ) { //check validity
  $id = isset($_POST['data'])?$_POST['data']:null;


  $qry = new del_p();
  $sqli = $qry->del_p_c($id);


}

?>
