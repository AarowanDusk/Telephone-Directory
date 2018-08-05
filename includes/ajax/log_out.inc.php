<?php


if( $_POST['key'] == "infocom" ) { //check validity
  $id = isset($_POST['name'])?$_POST['name']:null;

  if($id == "del"){
    // empty value and expiration one hour before
    $cookie_name = 'cpf';
    unset($_COOKIE[$cookie_name]);
    // empty value and expiration one hour before
    setcookie($cookie_name, "", time()-3600, '/');
  }

}

?>
