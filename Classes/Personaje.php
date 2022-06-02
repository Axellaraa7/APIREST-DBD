<?php 
abstract class Personaje{
  private $id, $name, $loreDescription, $perks, $img;

  public function setId($setter){
    if(isset($setter)){
      $this->id = $setter;
      return true;
    }
    return false;
  }

  public function setName($setter){
    if(isset($setter)){
      $this->name = $setter;
      return true;
    }
    return false;
  }

  public function setLoreDescription($setter){
    if(isset($setter)){
      $this->loreDescription = $setter;
      return true;
    }
    return false;
  }

  public function setPerks($setter){
    if(isset($setter)){
      $this->perks = $setter;
      return true;
    }
    return false;
  }

  public function setImg($setter){
    if(isset($setter)){
      $this->img = $setter;
      return true;
    }
    return false;
  }
  
  public function getId(){ return $this->id; }

  public function getName(){ return $this->name; }

  public function getLoreDescription(){ return $this->loreDescription; }

  public function getPerks(){ return $this->perks; }

  public function getImg(){ return $this->img; }

  public function __construct($id,$name,$loreDescription,$perks,$img){
    $this->id = $id;
    $this->name = $name;
    $this->loreDescription = $loreDescription;
    $this->perks = $perks;
    $this->img = $img;    
  }

  public abstract function getInArray();

}

?>