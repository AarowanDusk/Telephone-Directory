<?php
// require_once('../config/config.inc.php'); //import connector
// require_once('../sql/update.inc.php'); //import connector

class SqlProbDelUpdtProb{
  public function data_channel_prob_Del_pb_updt($data,$id){
    $db = new Database();
    $get = $db->db_num("UPDATE problem_status_$data SET state = 'x' WHERE prob_id='$id';");
  }
}

// $p = new SqlReadProb();
//
// $p->data_channel_prob('1','1','1','1','1','12983');

?>
