<?php
  header("Content-Type: application/json");
  //header("Content-Type: text/plain");

  //BY Localhost
  // header("Access-Control-Allow-Origin: http://localhost");
  //General
  header("Access-Control-Allow-Origin: *");

  $file = $_SERVER["DOCUMENT_ROOT"];
  $file = str_replace("\\","/",$file);

  include (count(explode("/",$file)) < 4) ? 
  $file."/DBD-API/definitions.php" :  
  $file."/definitions.php";
  
  include_once ROOT.CONTROLLERS."/Difficulties.php";
  include_once ROOT.CLASES."/Difficulty.php";

  $difficulties = new Difficulties;
  $banDifficulties = $difficulties->getDifficultiesDB();
  $listDifficulties = ($banDifficulties) ? $difficulties->getDifficulties() : "";
  echo $listDifficulties;
  $difficulties->closeConnection();
  
  
  
 
?>