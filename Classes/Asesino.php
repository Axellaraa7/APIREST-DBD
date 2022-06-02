<?php
include_once ROOT.CLASES."/Personaje.php";

class Asesino extends Personaje{

  private $hability, $habilityDescription, $difficulty, $loreName;

  public function setHability($setter){
    if(isset($setter)){
      $this->hability = $setter;
      return true;
    }
    return false;
  }

  public function setHabilityDescription($setter){
    if(isset($setter)){
      $this->habilityDescription = $setter;
      return true;
    }
    return false;
  }

  public function setDifficulty($setter){
    if(isset($setter)){
      $this->difficulty = $setter;
      return true;
    }
    return false;
  }

  public function setLoreName($setter){
    if(isset($setter)){
      $this->loreName = $setter;
      return true;
    }
    return false;
  }

  public function getHability(){ return $this->hability; }

  public function getHabilityDescription(){ return $this->habilityDescription; }

  public function getDifficulty(){ return $this->difficulty; }

  public function getLoreName(){ return $this->loreName; }
  
  public function __construct(){
    $params = func_get_args();
    $num_params = func_num_args();

    $constructor = "__construct".$num_params;

    if(method_exists($this,$constructor)){
      call_user_func_array(array($this,$constructor),$params);
    }
  }

  public function __construct0(){  }

  public function __construct9($id,$name,$loreDescription,$perks,$img,$hability,$habilityDescription,$difficulty,$loreName){
    parent::__construct($id,$name,$loreDescription,$perks,$img);
    $this->hability = $hability;
    $this->habilityDescription = $habilityDescription;
    $this->difficulty = $difficulty;
    $this->loreName = $loreName;
  }

  public function getInArray(){
    return array($this->name,$this->hability,$this->habilityDescription,$this->difficulty,$this->loreName,$this->loreDescription,$this->perks,$this->img);
  }
}

?>