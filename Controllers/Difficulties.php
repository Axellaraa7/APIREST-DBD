<?php

include_once "../definitions.php";
include_once ROOT.CLASES."/Difficulty.php";
include_once ROOT.SQL."/DB.php";

class Difficulties{
  private $difficulty;
  private $difficulties;

  private $dbObject;
  private $db;

  private $sqlSelect = "SELECT * FROM ".DIFFICULTIES." order by id;";

  public function setDifficulty($setter){
    if(isset($setter)){
      $this->difficulty = $setter;
      return true;
    }else return false;
  }

  public function setDifficulties($setter){
    if(isset($setter)){
      $this->difficulties = $setter;
      return true;
    }else return false;
  }

  public function getDifficulty(){
    return $this->difficulty;
  }

  public function getDifficulties(){
    return $this->difficulties;
  }

  public function __construct(){
    $this->difficulty = new Difficulty();
    $this->difficulties = array();
    $this->dbObject = new DB();
    $this->db = $this->dbObject->getDB();
  }

  public function getDifficultiesDB(){
    try{
      $results = pg_query($this->db,$this->sqlSelect);
      $this->difficulties = pg_fetch_all($results);

      $this->difficulties = json_encode($this->difficulties);
      return true;
    }catch(Exception $e){
      echo "Exception: ".$e->getMessage()."<br>";
      return false;
    }
  }

  public function closeConnection(){
    pg_close($this->db);
  }
}
?>