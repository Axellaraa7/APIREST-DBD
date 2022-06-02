<?php 
require_once("header.php");

include_once $_SERVER["DOCUMENT_ROOT"]."/DBD-API/definitions.php";
include_once ROOT.SQL."/DB.php";

// $asesino = new Asesino();
// $asesino2 = new Asesino(1,"nurse","nurseLore",array(1,2,3),"urlNurse","nurseHability","nurseHabilityDescription",4,"nurseName");
// var_dump($asesino2);

// $asesinos = new Asesinos();
// $asesinos->getKillerByName("Trapper");

$db = new DB();
// $results = $db->pgPrepare("SELECT * FROM ASESINOS WHERE name = $1 limit 1;",array("Trapper"));
$results = $db->pgQuery("SELECT * FROM ASESINOS");
// foreach($results as $index=>$k){
//   if($k["name"] == "Hilbilly"){
//     var_dump($k);
//     break;
//   }
// }}
// array_walk($results,function($v,$k){
//   echo $k.": ".$v["name"];
//   echo "<br><br>";
// });


// echo "<br><br>";
// $index = array_search()





?>

<main id="main">
  <button class="btn btnMain"> Obtener dificultades </button>
</main>
