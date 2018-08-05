<?php
require_once('../config/config.inc.php'); //import connector
require_once('../sql/update.inc.php'); //import connector

class log_in{
  public function lod_in_ct($id,$pass){
    $db = new Database();
    $get = $db->db_num("SELECT*FROM log WHERE cpf = '$id' AND pass = '$pass'");
    if($get){
      while($set = $get->fetch_object()){
        $cookie_name = 'cpf';
        $cookie_value = $set->cpf;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
      }
    }
  }
}

// $p = new SqlReadProb();
//
// $p->data_channel_prob('1','1','1','1','1','12983');

?>
