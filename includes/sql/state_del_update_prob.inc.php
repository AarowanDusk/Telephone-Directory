<?php
// require_once('../config/config.inc.php'); //import connector
// require_once('../sql/update.inc.php'); //import connector

class SqlStateDelUpdtProb{
  public function data_channel_prob_Del_st_updt($data,$id){
    $db = new Database();
    $get = $db->db_num("UPDATE defenative_table_$data SET active = 0 WHERE id='$id';");
  }
}

// $p = new SqlReadProb();
//
// $p->data_channel_prob('1','1','1','1','1','12983');

?>
