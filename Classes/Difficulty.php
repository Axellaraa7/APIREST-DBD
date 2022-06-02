<?php
  class Difficulty{
    private $id;
    private $difficulty;

    public function setId($setter){
      if(isset($setter)){
        $this->id = $setter;
        return true;
      }else return false;
    }

    public function setDifficulty($setter){
      if(isset($setter)){
        $this->difficulty = $setter;
        return true;
      }else return false;
    }

    public function getId(){
      return $this->id;
    }

    public function getDifficulty(){
      return $this->difficulty;
    }
  }
?>
