<?php 
require_once("header.php");

include_once $_SERVER["DOCUMENT_ROOT"]."/DBD-API/definitions.php";
include_once ROOT.SQL."/DB.php";
include_once ROOT.CLASES."/Asesino.php";
include_once ROOT.CONTROLLERS."/Asesinos.php";

// $asesino = new Asesino();
//HTMLESPCIAL
//$nurse = htmlspecialchars(trim(ucfirst("nurseL'ore")),ENT_QUOTES);
//PG_ESCAPE
// $nurse = pg_escape_string(trim(ucfirst("nurseL',m,m,m,m,''5'',m);\$this->getInArray();'")));
// $asesino2 = new Asesino("nurse",$nurse,"1,2,3","urlNurse","nurseHability","nurseHabilityDescription","4","nurseName");
// print_r($asesino2->getInArray());
// echo "<br><br>";
// $array = (true) ? json_encode($asesino2->getInAssociativeArray()) : json_encode(array("Hola" => 1));
// print_r($array);
// var_dump($asesino2);

// $asesinos = new Asesinos();
// $asesinos->setAsesino($asesino2);
// $asesinos->getKillerByName("Trapper");
// $asesinos->getKillerById(4);
// $banInsert = $asesinos->postKiller();
// echo "<div style='font-size:2rem;'>";
// var_dump($banInsert);
// echo "</div>";

// $db = new DB();
// // $results = $db->pgPrepare("SELECT * FROM ASESINOS WHERE name = $1 limit 1;",array("Trapper"));
// $results = $db->pgQuery("SELECT * FROM ASESINOS");
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

<main id="main" style="font-size: 2rem;">
  <button class="btn btnMain"> Obtener dificultades </button>
</main>
