<?php
// require_once('../config/config.inc.php'); //import connector
// require_once('../sql/update.inc.php'); //import connector

class del_p{
  public function del_p_c($id){
    $db = new Database();
    $get = $db->db_num("UPDATE teli_log SET actv = '0' WHERE tel_no='$id';");
  }
}

// $p = new SqlReadProb();
//
// $p->data_channel_prob('1','1','1','1','1','12983');

?>
