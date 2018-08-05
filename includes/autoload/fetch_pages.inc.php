<?php
//sleep(2);
include("../config/config.inc.php"); //include config file

class feed{
  private $item_per_page;
  private $page_number;
  private $position;
  private $results;

  public function feed_get(){
    $db = new Database();
    $this->item_per_page = 10;
    $this->page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
    if(!is_numeric($this->page_number)){
        header('HTTP/1.1 500 Invalid page number!');
        exit;
    }
    $this->position = (($this->page_number-1) * $this->item_per_page);;
    $get_2 = $db->db_num("SELECT token FROM teli_log WHERE actv IS NULL ORDER BY time_id DESC");
    if($get_2){
      while($set_2 = $get_2->fetch_object()){
        $id_fy_2 = $set_2->token;
        $this->results = $db->db_prep(" SELECT
                                        teli_log.tel_no AS tel_no,
                                        teli_log.token AS token,
                                        defenative_table_$id_fy_2.id AS id,
                                        defenative_table_$id_fy_2.cpf AS cpf,
                                        defenative_table_$id_fy_2.name AS name,
                                        defenative_table_$id_fy_2.desig AS desig,
                                        defenative_table_$id_fy_2.epabx_0 AS epabx_0,
                                        defenative_table_$id_fy_2.epabx_r AS epabx_r,
                                        defenative_table_$id_fy_2.loc AS loc,
                                        defenative_table_$id_fy_2.remrk AS remrk,
                                        defenative_table_$id_fy_2.instl_date AS instl_date,
                                        defenative_table_$id_fy_2.uninstl_date AS uninstl_date,
                                        defenative_table_$id_fy_2.active AS active
                                        FROM defenative_table_$id_fy_2
                                        INNER JOIN teli_log ON defenative_table_$id_fy_2.tel_no=teli_log.tel_no
                                        WHERE
                                        teli_log.token ='$id_fy_2' AND
                                        teli_log.actv IS NULL AND
                                        defenative_table_$id_fy_2.active IS NULL
                                        ORDER BY teli_log.time_id
                                        DESC LIMIT ?, ?
                                      ");
        //bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
        //for more info https://www.sanwebe.com/2013/03/basic-php-mysqli-usage
        $this->results->bind_param("dd", $this->position, $this->item_per_page);
        $this->results->execute(); //Execute prepared Query
        $this->results->bind_result($tel_no,$token,$id,$cpf,$name,$desig,$epabx_0,$epabx_r,$loc,$remrk,$instl_date,$uninstl_date,$active); //bind variables to prepared statement
        while($this->results->fetch()){ //fetch values
            echo'
            <div class="m-heading-1 border-warning m-bordered">
              <div class="mt-element-ribbon">
                <div class="ribbon ribbon-border-dash ribbon-shadow ribbon-color-shadow uppercase" style="font-size:15px;"><b><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$tel_no.'</b></div>
              </div>
              <br/>
              <br/>
              <div class="btn-group">
                  <button id="edt_'.$tel_no.'" type="button" class="btn btn-default">
                      <i class="fa fa-pencil"></i> EDIT
                  </button>
                  <button id="cncl_'.$tel_no.'" type="button" class="btn btn-default" style="display:none">
                      <i class="fa fa-pencil"></i> CANCLE
                  </button>
                  <button type="button" class="btn btn-default">
                    <a  href="page.php?ctrl='.$tel_no.'">
                        <i class="fa fa-clone"></i> Documentation
                    </a>
                  </button>
              </div>
              <br/>
              <p>
                <h5>
                  <div id="hid_'.$tel_no.'" class="row">
                    <div class="col-md-4 col-sm-9 col-xs-9">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                              <tbody>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">C.P.F. ID.</span></td>
                                      <td><b> '.$cpf.' </b></td>
                                  </tr>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">NAME</span></td>
                                      <td><b> '.$name.' </b></td>
                                  </tr>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">DESIGNATION</span></td>
                                      <td><b> '.$desig.' </b></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-9 col-xs-9">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                              <tbody>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">LOCATION</span></td>
                                      <td><b> '.$loc.' </b></td>
                                  </tr>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">EPABX 0</span></td>
                                      <td><b> '.$epabx_0.' </b></td>
                                  </tr>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">EPABX R</span></td>
                                      <td><b> '.$epabx_r.' </b></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-9 col-xs-9">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                              <tbody>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">INSTALLATION DATE</span></td>
                                      <td><b> '.$instl_date.' </b></td>
                                  </tr>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">UNINSTALLATION DATE</span></td>
                                      <td><b> '.$uninstl_date.' </b></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-9 col-xs-9">
                      <blockquote>
                          <small>REMARKS:
                              <cite title="Source Title">'.$remrk.'</cite>
                          </small>
                      </blockquote>
                    </div>
                  </div>

                  <div id="shw_'.$tel_no.'" class="row" style="display:none">
                    <div class="col-md-4 col-sm-9 col-xs-9">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                              <tbody>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">C.P.F. ID.</span></td>
                                      <td><b> <div class="form-group"><input id="a_'.$tel_no.'" class="form-control" value="'.$cpf.'" type="text"></div> </b></td>
                                  </tr>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">NAME</span></td>
                                      <td><b> <div class="form-group"><input id="b_'.$tel_no.'" class="form-control" value="'.$name.'" type="text"></div> </b></td>
                                  </tr>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">DESIGNATION</span></td>
                                      <td><b> <div class="form-group"><input id="c_'.$tel_no.'" class="form-control" value="'.$desig.'" type="text"></div> </b></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-9 col-xs-9">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                              <tbody>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">LOCATION</span></td>
                                      <td><b> <div class="form-group"><input id="d_'.$tel_no.'" class="form-control" value="'.$loc.'" type="text"></div> </b></td>
                                  </tr>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">EPABX 0</span></td>
                                      <td><b> <div class="form-group"><input id="e_'.$tel_no.'" class="form-control" value="'.$epabx_0.'" type="text"></div> </b></td>
                                  </tr>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">EPABX R</span></td>
                                      <td><b> <div class="form-group"><input id="f_'.$tel_no.'" class="form-control" value="'.$epabx_r.'" type="text"></div> </b></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-9 col-xs-9">
                      <div class="table-responsive">
                          <table class="table table-hover table-bordered table-striped">
                              <tbody>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">INSTALLATION DATE</span></td>
                                      <td><b> <div class="form-group"><input id="g_'.$tel_no.'" class="form-control" value="'.$instl_date.'" type="text"></div> </b></td>
                                  </tr>
                                  <tr>
                                      <td><span class="label label-sm label-primary" style="font-size:12px;">UNINSTALLATION DATE</span></td>
                                      <td><b> <div class="form-group"><input id="h_'.$tel_no.'" class="form-control" value="'.$uninstl_date.'" type="text"></div> </b></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-9 col-xs-9">
                      <div class="form-group">
                        <textarea class="form-control" id="remrk_'.$tel_no.'" style="width:100%;height:100px;">'.$remrk.'</textarea>
                        <span class="help-block"></span>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-9 col-xs-9">
                      <button id="updt_'.$tel_no.'" type="button" class="btn green btn-block">confirm Updates</button>
                    </div>
                  </div>
                </h5>
              </p>
            </div>
            <script>
            $("#updt_'.$tel_no.'").on("click",function(){
                $.ajax({
                  type: "POST",
                  url: "includes/ajax/update_control.inc.php",
                  data: "&key=infocom&id='.$id.'&a="+$("#a_'.$tel_no.'").val()+"&b="+$("#b_'.$tel_no.'").val()+"&c="+$("#c_'.$tel_no.'").val()+"&d="+$("#d_'.$tel_no.'").val()+"&e="+$("#e_'.$tel_no.'").val()+"&f="+$("#f_'.$tel_no.'").val()+"&g="+$("#g_'.$tel_no.'").val()+"&h="+$("#h_'.$tel_no.'").val()+"&i="+$("#remrk_'.$tel_no.'").val()+"&j='.$tel_no.'",
                  beforeSend: function() {
                    $("#updt_'.$tel_no.'").prop( "disabled", true );
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
            $("#edt_'.$tel_no.'").on("click", function(){
              $("#hid_'.$tel_no.'").css("display","none");
              $("#edt_'.$tel_no.'").css("display","none");
              $("#shw_'.$tel_no.'").css("display","");
              $("#cncl_'.$tel_no.'").css("display","");
            });
            </script>
            <script>
            $("#cncl_'.$tel_no.'").on("click", function(){
              $("#hid_'.$tel_no.'").css("display","");
              $("#edt_'.$tel_no.'").css("display","");
              $("#shw_'.$tel_no.'").css("display","none");
              $("#cncl_'.$tel_no.'").css("display","none");
            });
            </script>
            ';
        }
      }
    }
  }
}


$feed = new feed();
$feed->feed_get();
