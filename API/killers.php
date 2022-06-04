<?php
  header("Content-Type: application/json");
  //header("Content-Type: text/plain");

  //BY Localhost
  // header("Access-Control-Allow-Origin: http://localhost");
  //General
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
  header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");  

  include $_SERVER["DOCUMENT_ROOT"]."/DBD-API/definitions.php";
  include_once ROOT.CONTROLLERS."/Asesinos.php";
  include_once ROOT.CLASES."/Autoloader.php";
  Autoloader::loader();

  function limpiarDatos($Post){

  }

  function limpiarDato($datoPost,$numeric = false){
    if($numeric) return (is_numeric($datoPost)) ? $datoPost : false;
    $dato = htmlspecialchars(pg_escape_string(trim(ucfirst($datoPost))),ENT_QUOTES);
    return $dato;
  }

  function setErrorMessage($error){
    return json_encode(array("msgError" => $error , "statusError" => 404));
  }

  switch($_SERVER["REQUEST_METHOD"]){
    case "GET":
      if(isset($_GET["name"])){
        $name = limpiarDato($_GET["name"]);
        $asesinos = new Asesinos();
        $banGet = $asesinos->getKillerByName($name);
        $asesino = ($banGet) ? $asesinos->getAsesinoInfo() : setErrorMessage("Ocurrió un error en el nombre");
        echo $asesino;
        return;
      }else if(isset($_GET["id"])){
        $id = limpiarDato($_GET["id"],true);
        if($id === false){
          echo setErrorMessage("Ocurrió un error con el ID");
          return;
        }
        $id = $_GET["id"];
        $asesinos = new Asesinos();
        $banGet = $asesinos->getKillerById($id);
        $asesino = ($banGet) ? $asesinos->getAsesinoInfo() : setErrorMessage("Ocurrió un error con el ID");
        echo $asesino;
        return;
      } 

      $asesinos = new Asesinos();
      $banGet = $asesinos->getKillers();
      $listaAsesino = ($banGet) ? $asesinos->getAsesinos() : "";
      echo $listaAsesino;  
      break;

    case "POST":
      //file_get_contents("php://input")->json_decode->json_encode
      $asesino = new Asesino();
      $asesinos = new Asesinos();
      $banSetters = array();

      $resultados["post"] = json_encode($_POST);
      $resultados["file"] = json_encode($_FILES);
      echo json_encode($resultados);

      //RECIBIMOS IMG
      /* if(isset($_FILES)){
        move_uploaded_file($_FILES["img"]["tmp_name"], ROOT.ASSETS.IMG."/".$_FILES["img"]["name"]);
        $resultado["img"] = json_encode($_POST);
        echo json_encode($resultado);
      } */
      //RECIBIR JSON

     /*  if(count($_POST) > 0){
        
      } */

      /* $_POST = json_decode(file_get_contents("php://input"),true); */

      
      /* $name = $_POST["name"];
      $hability = $_POST["hability"];
      $habilityD = $_POST["habilityDescription"];
      $loreName = $_POST["loreName"];
      $lore = $_POST["lore"];
      $difficulty = $_POST["difficulty"];
      $perks = $_POST["perks"];
      $img = $_FILES["img"]["name"]; */

      /* $resultado["mensaje"] = json_encode($_POST);
      echo json_encode($resultado); */

      /*  */
      
      //Crear objeto Asesino
      /* $banSetters [] = $asesino->setName($_POST["name"]);
      $banSetters [] = $asesino->setHability($_POST["hability"]);
      $banSetters [] = $asesino->setHabilityDescription($_POST["habilityDescription"]);
      $banSetters [] = $asesino->setDifficulty($_POST["difficulty"]);
      $banSetters [] = $asesino->setLoreName($_POST["loreName"]);
      $banSetters [] = $asesino->setLoreDescription($_POST["loreDescription"]);
      $banSetters [] = $asesino->setPerks($_POST["perks"]);
      $banSetters [] = $asesino->setImg($_POST["img"]); */

      //Seteamos el controlador
     /*  $banSetters [] = $asesinos->setAsesino($asesino);
      $banPost = (in_array(false,$banSetters)) ? false : $asesinos->postKiller(); */

      /* $resultado["mensaje"] = ($banPost) ? $asesino->getName()." uploaded." :  $asesino->getName()." no uploaded.";
      echo json_encode($resultado); */

     /*  $asesinos->closeConnection(); */

      //RECIBIR TEXTO PLANO
      /* $_POST["msj"] = file_get_contents("php://input");
      $resultado = $_SERVER["REQUEST_METHOD"]." MENSAJE ENVIADO ".$_POST["msj"];
      echo $resultado; */
    break;
  }
?>