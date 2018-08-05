<?php
require_once('../config/config.inc.php'); //import connector
require_once('../sql/update.inc.php'); //import connector

class Sqlupdate{
  public function data_channel_updt($id,$cpf,$name,$desig,$location,$epabx_0,$epabx_r,$date1,$date2,$remrk,$phone){
    $db = new Database();
    $get = $db->db_num("SELECT*FROM teli_log WHERE tel_no = '$phone' AND actv IS NULL ;");
    if($get){
      while($set = $get->fetch_object()){
        $token = $set->token;
        $db->db_num("UPDATE defenative_table_$token set tel_no='$phone',cpf='$cpf',name='$name',desig='$desig',loc='$location',epabx_0='$epabx_0',epabx_r='$epabx_r',instl_date='$date1',uninstl_date='$date2',remrk='$remrk' where id='$id'");
      }
    }
  }
}



  // $qry = new Sqlupdate();
  // $sqli = $qry->data_channel_updt('1','1','1','1','1','1','1','1','1','1','120');
?>
