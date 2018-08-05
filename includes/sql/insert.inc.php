<?php
class SqlRead{
  public function data_channel($cpf,$name,$desig,$location,$date1,$date2,$phone,$epabx_0,$epabx_r,$remrk,$token){
    $db = new Database();
    $get = $db->db_num("SELECT count(tel_no) as cnt from teli_log where tel_no='$phone' AND actv IS NULL ;");
    if($get){
      while($row = mysqli_fetch_assoc($get)){
        if($row['cnt'] == 0){
          //create & input data to the log table
          $db->db_num("INSERT INTO teli_log(tel_no,token)
                        Values('$phone','$token');");
          //extract data from log table for tokens
          $get = $db->db_num("SELECT*FROM teli_log WHERE token = '$token' AND actv IS NULL ;");
          if($get){
            while($set = $get->fetch_object()){
              $id_fy = $set->token;
              $phone = $set->tel_no;
              // create a dynamic table to store details of the user
              $db->db_num("CREATE TABLE IF NOT EXISTS defenative_table_$id_fy(
                              id INT AUTO_INCREMENT,
                              tel_no VARBINARY(255) not null,
                              cpf VARBINARY(255) not null,
                              name VARBINARY(255) not null,
                              desig VARBINARY(255) not null,
                              epabx_0 VARBINARY(255),
                              epabx_r VARBINARY(255),
                              loc VARBINARY(255) not null,
                              remrk VARBINARY(255) not null,
                              instl_date VARBINARY(255) not null,
                              uninstl_date VARBINARY(255),
                              active INT NULL,
                                PRIMARY KEY(id),
                                FOREIGN KEY defenative_table_$id_fy(tel_no) REFERENCES teli_log(tel_no)
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
              $db->db_num("INSERT INTO defenative_table_$id_fy(tel_no,cpf,name,desig,epabx_0,epabx_r,loc,remrk,instl_date,uninstl_date)
                            Values('$phone','$cpf','$name','$desig','$epabx_0','$epabx_0','$location','$remrk','$date1','$date2');");
              //dynamic table for problem status
              $db->db_num("CREATE TABLE IF NOT EXISTS problem_status_$id_fy(
                              prob_id INT AUTO_INCREMENT,
                              statement VARBINARY(255) NOT NULL,
                              cause VARBINARY(255) NOT NULL,
                              state VARBINARY(255) NOT NULL,
                              d_found VARBINARY(255) NOT NULL,
                              d_solved VARBINARY(255) NOT NULL,
                                PRIMARY KEY(prob_id)
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
            }
          }
        }else{
          $get_2 = $db->db_num("SELECT*FROM teli_log WHERE tel_no = '$phone' AND actv IS NULL ;");
          if($get_2){
            while($set_2 = $get_2->fetch_object()){
              $id_fy_2 = $set_2->token;
              $phone_2 = $set_2->tel_no;
              $db->db_num("UPDATE defenative_table_$id_fy_2 set active = '1' WHERE active IS NULL;");
              $db->db_num("INSERT INTO defenative_table_$id_fy_2(tel_no,cpf,name,desig,epabx_0,epabx_r,loc,remrk,instl_date,uninstl_date)
                            Values('$phone_2','$cpf','$name','$desig','$epabx_0','$epabx_0','$location','$remrk','$date1','$date2');");
            }
          }
        }
      }
    }
  }
}
?>
