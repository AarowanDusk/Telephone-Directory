
<?php
  /// <summary>
  /// This class is the connecting class and also the class that
  /// generates objects for fatching information from mysqli quries.
  /// </summary>
  class Database{
    private $host;
    private $user;
    private $pass;
    private $db;
    public $mysqli;

    public function __construct() {
      //constructor invocation
      $this->db_connect();
    }

    private function db_connect(){
      //database connection
      $this->host = 'localhost';
      $this->user = 'ongc';
      $this->pass = 'password';
      $this->db = 'telecom';

      $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
      return $this->mysqli;
    }

    public function db_num($sql){
      //sql injection for data
      $result = $this->mysqli->query($sql);
      return $result;
    }


    public function db_prep($sql){
      //sql injection for data
      $result = $this->mysqli->prepare($sql);
      return $result;
    }

    public function __destruct(){
      //destructor invocation
      $this->mysqli->close();
    }
  }

  $db = new Database();
  //$r = $db->db_num("SELECT * FROM x");
