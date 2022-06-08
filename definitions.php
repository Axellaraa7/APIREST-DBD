<?php 
//PATHS
$file = $_SERVER["DOCUMENT_ROOT"];
$file = str_replace("\\","/",$file);

// define("ROOT",$_SERVER["DOCUMENT_ROOT"]."/DBD-API");
define("ROOT", (count(explode("/",$file)) < 4) ? 
  $file."/DBD-API" : $file);
define("LOCALHOST","http://localhost/DBD-API");
define("CLASES","/Classes");
define("CONTROLLERS","/Controllers");
define("API","/API");
define("SQL","/SQL");
define("ASSETS","/Assets");
define("IMG","/IMG");
  
//BD
include_once ROOT.SQL."/definitions.php";
?>