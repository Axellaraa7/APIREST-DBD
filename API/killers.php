<?php
  header("Content-Type: application/json");
  //header("Content-Type: text/plain");

  //BY Localhost
  // header("Access-Control-Allow-Origin: http://localhost");
  //General
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
  header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");  

  $file = $_SERVER["DOCUMENT_ROOT"];
  $file = str_replace("\\","/",$file);

  include (count(explode("/",$file)) < 4) ? 
  $file."/DBD-API/definitions.php" :  
  $file."/definitions.php";

  include_once ROOT.CONTROLLERS."/Asesinos.php";
  include_once ROOT.CLASES."/Autoloader.php";
  Autoloader::loader();

  function limpiarDatos($array){
    foreach($array as $key => $value){
      $datos[$key] = limpiarDato($value);
    }
    return $datos;
  }

  function limpiarDato($datoPost,$numeric = false){
    if($numeric) return (is_numeric($datoPost)) ? $datoPost : false;
    //$dato = htmlspecialchars(pg_escape_string(trim(ucfirst($datoPost))),ENT_QUOTES);
    $dato = pg_escape_string(trim(ucfirst($datoPost)));
    return $dato;
  }

  function setMessageResponse($message,$status){
    return json_encode(array("msg" => $message , "status" => $status));
  }

  switch($_SERVER["REQUEST_METHOD"]){
    case "GET":
      if(isset($_GET["name"])){
        $name = limpiarDato($_GET["name"]);
        $asesinos = new Asesinos();
        $banGet = $asesinos->getKillerByName($name);
        $asesino = ($banGet) ? $asesinos->getAsesinoInfo() : setMessageResponse("Ocurrió un error en el nombre",404);
        echo $asesino;
        return;
      }else if(isset($_GET["id"])){
        $id = limpiarDato($_GET["id"],true);
        if($id === false){
          echo setMessageResponse("Ocurrió un error con el ID",404);
          return;
        }
        $id = $_GET["id"];
        $asesinos = new Asesinos();
        $banGet = $asesinos->getKillerById($id);
        $asesino = ($banGet) ? $asesinos->getAsesinoInfo() : setMessageResponse("Ocurrió un error con el ID",404);
        echo $asesino;
        return;
      } 

      $asesinos = new Asesinos();
      $banGet = $asesinos->getKillers();
      $listaAsesino = ($banGet) ? $asesinos->getAsesinos() : setMessageResponse("Ocurrio un error al consultar la lista",404);
      echo $listaAsesino;  
      break;

    case "POST":
      //PRUEBA POST
      // $resultados["post"] = $_POST;
      // $resultados["file"] = $_FILES;
      // $resultados["msg"] = array("status" => 200);
      // echo json_encode($resultados);
      //file_get_contents("php://input")->json_decode->json_encode

      if(!isset($_FILES) || !isset($_POST)){
        $resultados["msg"] = json_decode(setMessageResponse("No se encontró la información",404));
        echo json_encode($resultados);
      }

      $datos = limpiarDatos($_POST);
      $dataImg = $_FILES;
      $urlImg = ROOT.ASSETS.IMG."/";
      move_uploaded_file($dataImg["img"]["tmp_name"], $urlImg.$dataImg["img"]["name"]);

      $asesino = new Asesino(
        $datos["name"],
        $datos["lore"],
        $datos["perks"],
        $dataImg["img"]["name"],
        $datos["hability"],
        $datos["habilityDescription"],
        $datos["difficulty"],
        $datos["loreName"]
      );
      
      $asesinos = new Asesinos();
      $asesinos->setAsesino($asesino);
      $banPost = $asesinos->postKiller();
      // $resultados["msg"] = array("status" => 200);
      // $resultados["datos"] = $asesino->getInAssociativeArray();
      $resultados["msg"] = ($banPost) ? 
      setMessageResponse("Asesino Insertado con éxito", 200) :
      setMessageResponse("Ocurrió un error en la inserción", 404);
      $resultados["msg"] = json_decode($resultados["msg"]);
      echo json_encode($resultados);
      
      break;
  }
 //RECIBIR TEXTO PLANO
/* $_POST["msj"] = file_get_contents("php://input");
$resultado = $_SERVER["REQUEST_METHOD"]." MENSAJE ENVIADO ".$_POST["msj"];
echo $resultado; */
?>
