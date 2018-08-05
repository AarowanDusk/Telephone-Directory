<?php
//sleep(2);

include("../config/config.inc.php"); //include config file

class feed_prob{
  private $item_per_page;
  private $page_number;
  private $position;
  private $results;

  public function feed_get_prob(){
    $ctrl = $_GET['ctrl'];
    $db = new Database();
    $this->item_per_page = 10;
    $this->page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
    if(!is_numeric($this->page_number)){
        header('HTTP/1.1 500 Invalid page number!');
        exit;
    }
    $this->position = (($this->page_number-1) * $this->item_per_page);
    $get_2 = $db->db_num("SELECT token FROM teli_log WHERE tel_no=$ctrl AND actv IS NULL ORDER BY time_id DESC");
    if($get_2){
      while($set_2 = $get_2->fetch_object()){
        $id_fy_2 = $set_2->token;
        $this->results = $db->db_prep(" SELECT*FROM
                                        defenative_table_$id_fy_2
                                        WHERE active is null OR active = 1 OR active <> 0
                                        ORDER BY tel_no
                                        DESC LIMIT ?, ?");
        //bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
        //for more info https://www.sanwebe.com/2013/03/basic-php-mysqli-usage
        $this->results->bind_param("dd", $this->position, $this->item_per_page);
        $this->results->execute(); //Execute prepared Query
        $this->results->bind_result($id,$tel_no,$cpf,$name,$desig,$epabx_0,$epabx_r,$loc,$remrk,$instl_date,$uninstl_date,$active); //bind variables to prepared statement
        while($this->results->fetch()){ //fetch values
            echo '
            <div id="data_'.$id_fy_2.$id.'">
              <table class="table table-hover table-bordered table-striped">
                  <tbody>
                      <tr>
                          <td>#</td>
                          <td>Telephone Number</td>
                          <td>CPF ID</td>
                          <td>Name</td>
                          <td>Designation</td>
                          <td>EPABX 0</td>
                          <td>EPABX R</td>
                          <td>Location</td>
                          <td>Installation Date</td>
                          <td>Uninstallation Date</td>
                      </tr>
                      <tr>
                          <td><a id="edt_'.$id_fy_2.$id.'">EDIT</a></td>
                          <td>'.$tel_no.'</td>
                          <td>'.$cpf.'</td>
                          <td>'.$name.'</td>
                          <td>'.$desig.'</td>
                          <td>'.$epabx_0.'</td>
                          <td>'.$epabx_r.'</td>
                          <td>'.$loc.'</td>
                          <td>'.$instl_date.'</td>
                          <td>'.$uninstl_date.'</td>
                      </tr>
                  </tbody>
              </table>
              <div class="col-md-12 col-sm-9 col-xs-9">
                <blockquote>
                    <small>REMARKS:
                        <cite title="Source Title">'.$remrk.'</cite>
                    </small>
                </blockquote>
              </div>
              <br/>
              <hr/><hr/>
            </div>
            <script>
            $("#edt_'.$id_fy_2.$id.'").on("click",function(){
              $("#data_'.$id_fy_2.$id.'").css("display","none");
              $("#data2_'.$id_fy_2.$id.'").css("display","");
            });
            $("#cncl_'.$id_fy_2.$id.'").on("click",function(){
              $("#data2_'.$id_fy_2.$id.'").css("display","none");
              $("#data_'.$id_fy_2.$id.'").css("display","");
            });
            </script>
            <div id="data2_'.$id_fy_2.$id.'" style="display:none;">
              <table class="table table-hover table-bordered table-striped">
                  <tbody>
                      <tr>
                          <td>#</td>
                          <td>Telephone Number</td>
                          <td>CPF ID</td>
                          <td>Name</td>
                          <td>Designation</td>
                          <td>EPABX 0</td>
                          <td>EPABX R</td>
                          <td>Location</td>
                          <td>Installation Date</td>
                          <td>Uninstallation Date</td>
                      </tr>
                      <tr>
                          <td><a id="cncl_'.$id_fy_2.$id.'">CANCEL</a></td>
                          <td>'.$tel_no.'</td>
                          <td><input id="cpf_'.$id_fy_2.$id.'" class="form-control" value="'.$cpf.'" type="text"></td>
                          <td><input id="name_'.$id_fy_2.$id.'" class="form-control" value="'.$name.'" type="text"></td>
                          <td><input id="dsg_'.$id_fy_2.$id.'" class="form-control" value="'.$desig.'" type="text"></td>
                          <td><input id="ep_0_'.$id_fy_2.$id.'" class="form-control" value="'.$epabx_0.'" type="text"></td>
                          <td><input id="ep_r_'.$id_fy_2.$id.'" class="form-control" value="'.$epabx_r.'" type="text"></td>
                          <td><input id="loc_'.$id_fy_2.$id.'" class="form-control" value="'.$loc.'" type="text"></td>
                          <td><input id="ins_'.$id_fy_2.$id.'" class="form-control" value="'.$instl_date.'" type="text"></td>
                          <td><input id="unins_'.$id_fy_2.$id.'" class="form-control" value="'.$uninstl_date.'" type="text"></td>
                      </tr>
                  </tbody>
              </table>
              <div class="col-md-12 col-sm-9 col-xs-9">
                <div class="form-group">
                  <textarea class="form-control" id="remrk_'.$id_fy_2.$id.'" style="width:100%;height:100px;">'.$remrk.'</textarea>
                  <span class="help-block"></span>
                </div>
              </div>
              <div class="col-md-12 col-sm-9 col-xs-9">
                <button id="updt_'.$id_fy_2.$id.'" type="button" class="btn green btn-block">confirm Updates</button>
                <button id="dlt_'.$id_fy_2.$id.'" type="button" class="btn red btn-block">confirm Delete</button>
              </div>
              <br/><br/><br/><br/><br/><br/><br/><br/>
              <hr/><hr/>
              <script>
              $("#dlt_'.$id_fy_2.$id.'").on("click",function(){
                $.ajax({
                  type: "POST",
                  url: "includes/ajax/delete_ctrl_updt.inc.php",
                  data: "&key=infocom&token='.$id_fy_2.'&id='.$id.'",
                  beforeSend: function() {
                    $("#dlt_'.$id_fy_2.$id.'").prop( "disabled", true );
                  },
                  success: function(data) {
                    //not in use currently
                  },
                  error: function(xhr) { // if error occured
                    alert(xhr.statusText + xhr.responseText);
                  },
                  complete: function() {
                    window.location.href = "page.php?ctrl='.$tel_no.'";
                  },
                  dataType: "html"
                });
              });
              </script>
              <script>
              $("#updt_'.$id_fy_2.$id.'").on("click",function(){
                  var a = $("#cpf_'.$id_fy_2.$id.'").val();
                  var b = $("#name_'.$id_fy_2.$id.'").val();
                  var c = $("#dsg_'.$id_fy_2.$id.'").val();
                  var d = $("#loc_'.$id_fy_2.$id.'").val();
                  var e = $("#ep_0_'.$id_fy_2.$id.'").val();
                  var f = $("#ep_r_'.$id_fy_2.$id.'").val();
                  var g = $("#ins_'.$id_fy_2.$id.'").val();
                  var h = $("#unins_'.$id_fy_2.$id.'").val();
                  var i = $("#remrk_'.$id_fy_2.$id.'").val();
                  var j = '.$tel_no.';
                  $.ajax({
                    type: "POST",
                    url: "includes/ajax/update_control.inc.php",
                    data: "&key=infocom&id='.$id.'&a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&g="+g+"&h="+h+"&i="+i+"&j="+j,
                    beforeSend: function() {
                      $("#updt_'.$id_fy_2.$id.'").prop( "disabled", true );
                    },
                    success: function(data) {
                      //not in use currently
                    },
                    error: function(xhr) { // if error occured
                      alert(xhr.statusText + xhr.responseText);
                    },
                    complete: function() {
                      window.location.href = "page.php?ctrl='.$tel_no.'";
                    },
                    dataType: "html"
                });
              })
              </script>
            </div>
            ';
        }
      }
    }
  }
}


$feed = new feed_prob();
$feed->feed_get_prob();
