<?php
// require_once('../config/config.inc.php'); //import connector
// require_once('../sql/update.inc.php'); //import connector

class SqlReadProb{
  public function data_channel_prob($statement,$cause,$state,$d_found,$d_solved,$number){
    $db = new Database();
    $get = $db->db_num("SELECT token FROM teli_log where tel_no='$number' AND actv IS NULL ");
    if($get){
      while($row = $get->fetch_object()){
        $token = $row->token;
        $db->db_num("INSERT INTO problem_status_$token(statement,cause,state,d_found,d_solved)
                     VALUES('$statement','$cause','$state','$d_found','$d_solved')");
      }
    }
  }
}

// $p = new SqlReadProb();
//
// $p->data_channel_prob('1','1','1','1','1','12983');

?>
