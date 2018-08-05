<?php

// require_once('../config/config.inc.php'); //import connector

class Sql_chart{
  public function data_channel_chart($ctrl){
    $db = new Database();
    $get = $db->db_num("SELECT*FROM teli_log WHERE tel_no = $ctrl AND actv IS NULL ORDER BY time_id DESC");
    if($get){
      while($set = $get->fetch_object()){
        $token = $set->token;
        $cnt = 0;
        $count;
        $get = $db->db_num("SELECT state FROM problem_status_$token");
        if($get){
          while($set = $get->fetch_object()){
            $cnt = $cnt + $set->state;
          }
        }
        $get = $db->db_num("SELECT COUNT(state) AS cnt FROM problem_status_$token;");
        while($row = mysqli_fetch_assoc($get)){
          $count = $row['cnt'];
        }
        if($count == 0){
          return 100;
        }else{
          return ($cnt/$count)*100;
        }
      }
    }
  }
}




// $qry = new Sql_chart();
// $sqli = $qry->data_channel_chart("12983");
// echo $sqli;
?>
