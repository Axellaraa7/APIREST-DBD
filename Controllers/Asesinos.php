<?php
include_once "../definitions.php";
include_once ROOT.CLASES."/Asesino.php";
include_once ROOT.SQL."/DB.php";


class Asesinos{
  private $asesino;
  private $asesinoInfo;
  private $dbObject;
  private $asesinos;
  private $message;

  private $sqlSelect = "SELECT * FROM ".ASESINOS;
  private $sqlInsert = "INSERT INTO ".ASESINOS." (name,hability,hability_description,difficulty,lore_name,lore_description,perks,date_register,img) VALUES ($1,$2,$3,$4,$5,$6,$7,LOCALTIMESTAMP,$8);";
  /* private $sqlDelete = "DELETE FROM ".ASESINOS." WHERE ";
  private $sqlUpdate = "UPDATE ".ASESINOS; */

  /*----------------SETTERS GETTERS-------------------------*/
  
  public function setAsesino($setter){
    if(isset($setter)){
      $this->asesino = $setter;
      return true;
    }else return false;
  }

  public function setAsesinoInfo($setter){
    if(!isset($setter)) return false;
    $this->asesino = $setter;
    return true;
  }

  public function setAsesinos($setter){
    if(isset($setter)){
      $this->asesinos = $setter;
      return true;
    }else return false;
  }

  public function setMessage($settet){
    if(isset($setter)){
      $this->message = $setter;
      return true;
    }else return false;
  }

  public function getAsesino(){ return $this->asesino; }

  public function getAsesinoInfo(){ return $this->asesinoInfo; }

  public function getAsesinos(){ return $this->asesinos;}

  public function getMessage(){ return $this->message; }
  
  public function __construct(){
    $this->asesino = new Asesino();
    $this->asesinos = array();
    $this->dbObject = new DB();
  }

  //GET
  public function getKillers(){
    $this->asesinos = $this->dbObject->pgQuery($this->sqlSelect);
    if(empty($this->asesinos)) return false;
    foreach($this->asesinos as $index=>$asesino){
      $rootImg = "http://localhost/DBD-API".ASSETS.IMG."/".$asesino["img"];
      $this->asesinos[$index]["img"] = $rootImg;
    }
    /* for($i = 0; $i< count($this->asesinos) ; $i++){
      $rootImg = ROOT.ASSETS.IMG."/".$this->asesinos[$i]["img"];
      $this->asesinos[$i]["img"] = $rootImg;
    } */
    $this->asesinos = json_encode($this->asesinos);
    return true;
  }

  //GET BY ID
  public function getKillerByName(String $name){
    $this->asesinos = $this->dbObject->pgQuery($this->sqlSelect);
    foreach($this->asesinos as $value){
      if($value["name"] === $name){
        $this->asesinoInfo = json_encode($value);
        break;
      }
    }
    return (isset($this->asesinoInfo)) ? true : false;
  }

  public function getKillerById(int $id){
    $this->asesinos = $this->dbObject->pgQuery($this->sqlSelect);
    $this->asesinoInfo = (array_key_exists($id,$this->asesinos)) ? 
      json_encode($this->asesinos[$id]) : 
      null;
    return (isset($this->asesinoInfo)) ? true : false;
  }

  //POST
  public function postKiller(){
    // try{
    //   $prepare = pg_prepare($this->db,"post_query",$this->sqlInsert);
    //   $result = pg_execute($this->db,"post_query",$this->asesino->getInArray());
    //   return ($result) ? true : false;
    // }catch(Exception $e){
    //   echo "Excepcion: ".$e->getMessage()."<br>";
    //   return false;
    // }
  }

  
}
?>