<?php
  header("Content-Type: application/json");
  //header("Content-Type: text/plain");

  //BY Localhost
  header("Access-Control-Allow-Origin: http://localhost");
  //General

  include $_SERVER["DOCUMENT_ROOT"]."/DBD-API/definitions.php";
  include_once ROOT.CONTROLLERS."/Difficulties.php";
  include_once ROOT.CLASES."/Difficulty.php";

  $difficulties = new Difficulties;
  $banDifficulties = $difficulties->getDifficultiesDB();
  $listDifficulties = ($banDifficulties) ? $difficulties->getDifficulties() : "";
  echo $listDifficulties;
  $difficulties->closeConnection();
  
  
  
 
?>