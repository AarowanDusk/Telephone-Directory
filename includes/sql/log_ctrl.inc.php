<?php
// require_once('../config/config.inc.php'); //import connector
// require_once('../sql/update.inc.php'); //import connector

class log{
  public function lod_ct($id,$pass){
    $db = new Database();
    $get = $db->db_num("
                        INSERT INTO log (cpf,pass)
                        VALUES('$id','$pass');
                      ");
  }
}

// $p = new SqlReadProb();
//
// $p->data_channel_prob('1','1','1','1','1','12983');

?>
