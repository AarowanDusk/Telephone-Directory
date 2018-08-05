<?php
// require_once('../config/config.inc.php'); //import connector
// require_once('../sql/update.inc.php'); //import connector

class SqlStateUpdtProb{
  public function data_channel_prob_st_updt($data,$id){
    $db = new Database();
    $get = $db->db_num("SELECT state FROM problem_status_$data WHERE prob_id = '$id'");
    if($get){
      while($set = $get->fetch_object()){
        if($set->state == 1){
          $db->db_num("UPDATE problem_status_$data SET state = 0 WHERE prob_id = '$id';");
        }else{
          $db->db_num("UPDATE problem_status_$data SET state = 1 WHERE prob_id = '$id';");
        }
      }
    }
  }
}

// $p = new SqlReadProb();
//
// $p->data_channel_prob('1','1','1','1','1','12983');

?>
