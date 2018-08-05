<?php
class SqlCTRL_out{
  public function ctrl_out($ctrl){
    $db = new Database();
    $get = $db->db_num("SELECT*FROM teli_log WHERE tel_no = '$ctrl' AND actv IS NULL ;");
    if($get){
      while($set = $get->fetch_object()){
        $token = $set->token;
        $phone = $set->tel_no;
        $get_2 = $db->db_num("SELECT*FROM defenative_table_$token WHERE active IS NULL");
        if($get_2){
          while($set_2 = $get_2->fetch_object()){
            echo '

            <li class="mt-list-item done">
                <div class="list-icon-container">
                    <i class="fa fa-circle-o-notch fa-spin"></i>
                </div>
                <div class="list-item-content">
                    <h3 class="uppercase">
                        <a href="javascript:;"><b>C.P.F. ID : '.$set_2->cpf.'</b></a>
                    </h3>
                </div>
            </li>
            <li class="mt-list-item done">
                <div class="list-icon-container">
                    <i class="fa fa-circle-o-notch fa-spin"></i>
                </div>
                <div class="list-item-content">
                    <h3 class="uppercase">
                        <a href="javascript:;"><b>NAME : '.$set_2->name.'</b></a>
                    </h3>
                </div>
            </li>
            <li class="mt-list-item done">
                <div class="list-icon-container">
                    <i class="fa fa-circle-o-notch fa-spin"></i>
                </div>
                <div class="list-item-content">
                    <h3 class="uppercase">
                        <a href="javascript:;"><b>DESIGNATION : '.$set_2->desig.'</b></a>
                    </h3>
                </div>
            </li>
            <li class="mt-list-item done">
                <div class="list-icon-container">
                    <i class="fa fa-circle-o-notch fa-spin"></i>
                </div>
                <div class="list-item-content">
                    <h3 class="uppercase">
                        <a href="javascript:;"><b>LOCATION : '.$set_2->loc.'</b></a>
                    </h3>
                </div>
            </li>
            <li class="mt-list-item done">
                <div class="list-icon-container">
                    <i class="fa fa-circle-o-notch fa-spin"></i>
                </div>
                <div class="list-item-content">
                    <h3 class="uppercase">
                        <a href="javascript:;"><b>EPABX 0 : '.$set_2->epabx_0.'</b></a>
                    </h3>
                </div>
            </li>
            <li class="mt-list-item done">
                <div class="list-icon-container">
                    <i class="fa fa-circle-o-notch fa-spin"></i>
                </div>
                <div class="list-item-content">
                    <h3 class="uppercase">
                        <a href="javascript:;"><b>EPABX R : '.$set_2->epabx_r.'</b></a>
                    </h3>
                </div>
            </li>
            <li class="mt-list-item done">
                <div class="list-icon-container">
                    <i class="fa fa-circle-o-notch fa-spin"></i>
                </div>
                <div class="list-item-content">
                    <h3 class="uppercase">
                        <a href="javascript:;"><b>INSTALL DATE : '.$set_2->instl_date.'</b></a>
                    </h3>
                </div>
            </li>
            <li class="mt-list-item done">
                <div class="list-icon-container">
                    <i class="fa fa-circle-o-notch fa-spin"></i>
                </div>
                <div class="list-item-content">
                    <h3 class="uppercase">
                        <a href="javascript:;"><b>UNINSTALL DATE : '.$set_2->uninstl_date.'</b></a>
                    </h3>
                </div>
            </li>
            <li class="mt-list-item done">
                <div class="list-icon-container">
                    <i class="fa fa-circle-o-notch fa-spin"></i>
                </div>
                <div class="list-item-content">
                    <h3 class="uppercase">
                        <a href="javascript:;">'.$set_2->remrk.'</a>
                    </h3>
                </div>
            </li>

            ';
          }
        }
      }
    }
  }
}



   $qry = new SqlCTRL_out();
?>
