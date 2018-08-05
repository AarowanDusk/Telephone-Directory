<?php

//sleep(2);
include("../config/config.inc.php"); //include config file

class feed{
  private $item_per_page;
  private $page_number;
  private $position;
  private $results;

  public function feed_get(){

    if(isset($_GET['phone'])) {
      $phonex = $_GET['phone'];
    }
   if($_GET['phone'] == NULL){
      $phonex = 'ONIX_CREATE_ERROR';
    }



    if(isset($_GET['cpf'])) {
      $cpfx = $_GET['cpf'];
    }
   if($_GET['cpf'] == NULL){
      $cpfx = 'ONIX_CREATE_ERROR';
    }



    if(isset($_GET['name'])) {
      $namex = str_replace("%20"," ",$_GET['name']);
    }
    if($_GET['name'] == NULL){
      $namex = 'ONIX_CREATE_ERROR';
    }



    if(isset($_GET['desig'])) {
      $desigx = $_GET['desig'];
    }
    if($_GET['desig'] == NULL){
      $desigx = 'ONIX_CREATE_ERROR';
    }



    if(isset($_GET['epabx_0'])) {
      $epabx_0x = $_GET['epabx_0'];
    }
    if($_GET['epabx_0'] == NULL){
      $epabx_0x = 'ONIX_CREATE_ERROR';
    }



    if(isset($_GET['epabx_r'])) {
      $epabx_rx = $_GET['epabx_r'];
    }
    if($_GET['epabx_r'] == NULL){
      $epabx_rx = 'ONIX_CREATE_ERROR';
    }



    if(isset($_GET['loc'])) {
      $locx = $_GET['loc'];
    }
    if($_GET['loc'] == NULL){
      $locx = 'ONIX_CREATE_ERROR';
    }

    $db = new Database();
    $this->item_per_page = 10;
    $this->page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
    if(!is_numeric($this->page_number)){
        header('HTTP/1.1 500 Invalid page number!');
        exit;
    }
    $this->position = (($this->page_number-1) * $this->item_per_page);;
    $get_2 = $db->db_num("SELECT token FROM teli_log WHERE actv IS NULL ORDER BY time_id DESC ");
    if($get_2){
      while($set_2 = $get_2->fetch_object()){
        $id_fy_2 = $set_2->token;
        $this->results = $db->db_prep("SELECT * FROM defenative_table_$id_fy_2
                                       WHERE
                                       active IS NULL AND
                                       (
                                         tel_no LIKE '%$phonex%' OR
                                         cpf LIKE '%$cpfx%' OR
                                         name LIKE '%$namex%' OR
                                         desig LIKE '%$desigx%' OR
                                         epabx_0 LIKE '%$epabx_0x%' OR
                                         epabx_r LIKE '%$epabx_rx%' OR
                                         loc LIKE '%$locx%'
                                       )
                                       ORDER BY id
                                       DESC LIMIT ?, ?;");
        //bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
        //for more info https://www.sanwebe.com/2013/03/basic-php-mysqli-usage
        $this->results->bind_param("dd", $this->position, $this->item_per_page);
        $this->results->execute(); //Execute prepared Query
        $this->results->bind_result($id,$tel_no,$cpf,$name,$desig,$epabx_0,$epabx_r,$loc,$remrk,$instl_date,$uninstl_date,$active); //bind variables to prepared statement
        while($this->results->fetch()){ //fetch values
          echo'
          <div class="col-md-4" style="margin-bottom:20px;">
            <div class="portlet-body">
                <div class="mt-element-list">
                    <div class="mt-list-head list-simple ext-1 font-white bg-green-sharp">
                        <div class="list-head-title-container">
                            <h3 class="list-title">Data List : '.$tel_no.'</h3>
                        </div>
                    </div>
                    <div class="mt-list-container list-simple ext-1">
                        <ul>
                          <li class="mt-list-item done">
                              <div class="list-icon-container">
                                  <i class="fa fa-circle-o-notch fa-spin"></i>
                              </div>
                              <div class="list-item-content">
                                  <h3 class="uppercase">
                                      <a href="javascript:;"><b>C.P.F. ID : '.$cpf.'</b></a>
                                  </h3>
                              </div>
                          </li>
                          <li class="mt-list-item done">
                              <div class="list-icon-container">
                                  <i class="fa fa-circle-o-notch fa-spin"></i>
                              </div>
                              <div class="list-item-content">
                                  <h3 class="uppercase">
                                      <a href="javascript:;"><b>NAME : '.$name.'</b></a>
                                  </h3>
                              </div>
                          </li>
                          <li class="mt-list-item done">
                              <div class="list-icon-container">
                                  <i class="fa fa-circle-o-notch fa-spin"></i>
                              </div>
                              <div class="list-item-content">
                                  <h3 class="uppercase">
                                      <a href="javascript:;"><b>DESIGNATION : '.$desig.'</b></a>
                                  </h3>
                              </div>
                          </li>
                          <li class="mt-list-item done">
                              <div class="list-icon-container">
                                  <i class="fa fa-circle-o-notch fa-spin"></i>
                              </div>
                              <div class="list-item-content">
                                  <h3 class="uppercase">
                                      <a href="javascript:;"><b>LOCATION : '.$loc.'</b></a>
                                  </h3>
                              </div>
                          </li>
                          <li class="mt-list-item done">
                              <div class="list-icon-container">
                                  <i class="fa fa-circle-o-notch fa-spin"></i>
                              </div>
                              <div class="list-item-content">
                                  <h3 class="uppercase">
                                      <a href="javascript:;"><b>EPABX 0 : '.$epabx_0.'</b></a>
                                  </h3>
                              </div>
                          </li>
                          <li class="mt-list-item done">
                              <div class="list-icon-container">
                                  <i class="fa fa-circle-o-notch fa-spin"></i>
                              </div>
                              <div class="list-item-content">
                                  <h3 class="uppercase">
                                      <a href="javascript:;"><b>EPABX R : '.$epabx_r.'</b></a>
                                  </h3>
                              </div>
                          </li>
                          <li class="mt-list-item done">
                              <div class="list-icon-container">
                                  <i class="fa fa-circle-o-notch fa-spin"></i>
                              </div>
                              <div class="list-item-content">
                                  <h3 class="uppercase">
                                      <a href="javascript:;"><b>INSTALL DATE : '.$instl_date.'</b></a>
                                  </h3>
                              </div>
                          </li>
                          <li class="mt-list-item done">
                              <div class="list-icon-container">
                                  <i class="fa fa-circle-o-notch fa-spin"></i>
                              </div>
                              <div class="list-item-content">
                                  <h3 class="uppercase">
                                      <a href="javascript:;"><b>UNINSTALL DATE : '.$uninstl_date.'</b></a>
                                  </h3>
                              </div>
                          </li>
                          <li class="mt-list-item done">
                              <div class="list-icon-container">
                                  <i class="fa fa-circle-o-notch fa-spin"></i>
                              </div>
                              <div class="list-item-content">
                                  <h3 class="uppercase">
                                      <a href="page.php?ctrl='.$tel_no.'"><button class="btn blue btn-block" id="sub_src">View Details</button></a>
                                  </h3>
                              </div>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
          ';
        }
      }
    }
  }
}


$feed = new feed();
$feed->feed_get();
