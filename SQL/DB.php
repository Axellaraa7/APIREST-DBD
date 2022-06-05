<?php

include_once "../definitions.php";

class DB{
/*   private $host = "host = 127.0.0.1";
  private $port = "port = 5432";
  private $credentials = "user = postgres password = 180598";
  private $dbname = "dbname = DeadByDaylight"; */
  private $db;

  public function getDB(){
    return $this->db;
  }

  public function __construct(){
    try{
      $this->db = pg_connect(HOST." ".PORT." ".DBNAME." ".CREDENTIALS);
      // if($this->db) echo "CONEXION EXITOSA <br>";
    }catch(Exception $e){
      echo "Excepcion: ".$e->getMessage()."<br>";
    }
  }

  //ARMAR PATRON SINGLETON
  // public static function getInstanceDB(){
  //   return new DB();
  // }

  public function pgQuery($query){
    try{
      $results = pg_query($this->db,$query);
      return (isset($results)) ? pg_fetch_all($results) : false;
      //return $results;
    }catch(Exception $e){
      echo $e->getMessage();
      return false;
    }finally{
      $this->closeConnection();
    }
  }

  public function pgPrepare($query,$array,$crud){
    try{
      $prepare = pg_prepare($this->db,"pg_prepare",$query);
      $results = pg_execute($this->db,"pg_prepare",$array);
      switch($crud){
        case 0:
          $data = ($results) ? pg_fetch_all($results) : array();
          break;
        case 1:
          $data = $results;
          break;
        case 2:
          $data = $results;
          break;
        case 3:
          $data = $results;
          break;
        default:
          $data = true;
          break;
      }
      return $data;
    }catch(Exception $e){
      echo $e->getMessage();
      return false;
    }finally{
      $this->closeConnection();
    }
  }

  public function closeConnection(){
    pg_close($this->db);
  }
}


?>