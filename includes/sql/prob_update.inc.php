<?php
require_once('../config/config.inc.php'); //import connector

class Sqlupdate_prob{
  public function data_channel_updt_prob($id,$token,$statement,$root,$date1,$date2){
    $db = new Database();
    $get = $db->db_num("SELECT*FROM teli_log WHERE tel_no = '$phone' AND actv IS NULL ;");

        $db->db_num("UPDATE problem_status_$token SET statement='$statement', cause='$root', d_found='$date1', d_solved='$date2' WHERE prob_id = '$id'");


  }
}



  // $qry = new Sqlupdate();
  // $sqli = $qry->data_channel_updt('1','1','1','1','1','1','1','1','1','1','120');
?>
