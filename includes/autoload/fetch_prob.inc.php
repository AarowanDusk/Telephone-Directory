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
        $this->results = $db->db_prep(" SELECT
                                        prob_id AS a,
                                        statement AS b,
                                        cause AS c,
                                        state AS d,
                                        d_found AS e,
                                        d_solved AS f
                                        FROM problem_status_$id_fy_2
                                        WHERE state <> 'x'
                                        ORDER BY prob_id
                                        DESC LIMIT ?, ?");
        //bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
        //for more info https://www.sanwebe.com/2013/03/basic-php-mysqli-usage
        $this->results->bind_param("dd", $this->position, $this->item_per_page);
        $this->results->execute(); //Execute prepared Query
        $this->results->bind_result($a,$b,$c,$d,$e,$f); //bind variables to prepared statement
        while($this->results->fetch()){ //fetch values
            echo '
            <div id="data_'.$id_fy_2.$a.'">
              <table class="table table-hover table-bordered table-striped">
                  <tbody>
                      <tr>
                          <td>#</td>
                          <td>Problem Statement</td>
                          <td>Problem Root</td>
                          <td>Date Of Occurenc</td>
                          <td>Date of Solution</td>
                          <td>Status</td>
                      </tr>
                      <tr>
                          <td><a id="edt_'.$id_fy_2.$a.'">EDIT</a></td>
                          <td>'.$b.'</td>
                          <td>'.$c.'</td>
                          <td>'.$e.'</td>
                          <td>'.$f.'</td>
              ';

                if($d == 1){
                  echo '<td><input type="checkbox" name="optionsRadios" id="ns_1_'.$id_fy_2.$a.'" value="option1" checked></td>';
                }else{
                  echo '<td><input type="checkbox" name="optionsRadios" id="ns_1_'.$id_fy_2.$a.'" value="option1"></td>';
                }

                echo '
                      </tr>
                  </tbody>
              </table>
              <script>
              $("#ns_1_'.$id_fy_2.$a.'").on("click",function(){
                $.ajax({
                  type: "POST",
                  url: "includes/ajax/ptoblem_updt_stats.inc.php",
                  data: "&key=infocom&data='.$id_fy_2.'&id='.$a.'",
                  beforeSend: function() {
                    // $("#problem_sub").prop( "disabled", true );
                  },
                  success: function(data) {
                    //not in use currently
                  },
                  error: function(xhr) { // if error occured
                    $("#data").append(xhr.statusText + xhr.responseText);
                  },
                  complete: function() {
                    // location.reload();
                  },
                  dataType: "html"
                });
              })
              </script>
              <hr/>
            </div>
            <script>
            $("#edt_'.$id_fy_2.$a.'").on("click",function(){
              $("#data_'.$id_fy_2.$a.'").css("display","none");
              $("#data2_'.$id_fy_2.$a.'").css("display","");
            });
            $("#cncl_'.$id_fy_2.$a.'").on("click",function(){
              $("#data2_'.$id_fy_2.$a.'").css("display","none");
              $("#data_'.$id_fy_2.$a.'").css("display","");
            });
            </script>
            <div id="data2_'.$id_fy_2.$a.'" style="display:none">
              <table class="table table-hover table-bordered table-striped">
                  <tbody>
                      <tr>
                          <td>#</td>
                          <td>Problem Statement</td>
                          <td>Problem Root</td>
                          <td>Date Of Occurenc</td>
                          <td>Date of Solution</td>
                      </tr>
                      <tr>
                          <td><a id="cncl_'.$id_fy_2.$a.'">CANCEL</a></td>
                          <td><input id="a_'.$id_fy_2.$a.'" class="form-control" value="'.$b.'" type="text"></td>
                          <td><input id="b_'.$id_fy_2.$a.'" class="form-control" value="'.$c.'" type="text"></td>
                          <td><input id="c_'.$id_fy_2.$a.'" class="form-control" value="'.$e.'" type="text"></td>
                          <td><input id="d_'.$id_fy_2.$a.'" class="form-control" value="'.$f.'" type="text"></td>
                      </tr>
                  </tbody>
              </table>
              <div class="col-md-12 col-sm-9 col-xs-9">
                <button id="updt2_'.$id_fy_2.$a.'" type="button" class="btn green btn-block">confirm Updates</button>
                <button id="dlt2_'.$id_fy_2.$a.'" type="button" class="btn red btn-block">confirm Delete</button>
              </div>
              <br/><br/><br/><br/>
              <hr/>
              <script>
              $("#dlt2_'.$id_fy_2.$a.'").on("click",function(){
                $.ajax({
                  type: "POST",
                  url: "includes/ajax/delete_prob_updt.inc.php",
                  data: "&key=infocom&token='.$id_fy_2.'&id='.$a.'",
                  beforeSend: function() {
                    $("#del2_'.$id_fy_2.$a.'").prop( "disabled", true );
                  },
                  success: function(data) {
                    //not in use currently
                  },
                  error: function(xhr) { // if error occured
                    alert(xhr.statusText + xhr.responseText);
                  },
                  complete: function() {
                    window.location.href = "page.php?ctrl='.$ctrl.'";
                  },
                  dataType: "html"
                });
              });
              </script>
              <script>
              $("#updt2_'.$id_fy_2.$a.'").on("click",function(){
                  var a = $("#a_'.$id_fy_2.$a.'").val();
                  var b = $("#b_'.$id_fy_2.$a.'").val();
                  var c = $("#c_'.$id_fy_2.$a.'").val();
                  var d = $("#d_'.$id_fy_2.$a.'").val();

                  $.ajax({
                    type: "POST",
                    url: "includes/ajax/update_prob.inc.php",
                    data: "&key=infocom&id='.$a.'&token='.$id_fy_2.'&&a="+a+"&b="+b+"&c="+c+"&d="+d,
                    beforeSend: function() {
                      $("#updt2_'.$id_fy_2.$a.'").prop( "disabled", true );
                    },
                    success: function(data) {
                      //not in use currently
                    },
                    error: function(xhr) { // if error occured
                      alert(xhr.statusText + xhr.responseText);
                    },
                    complete: function() {
                      window.location.href = "page.php?ctrl='.$ctrl.'";
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
