<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DEAD BY DAYLIGHT</title>
  <?php
  session_start();
  $scriptName = str_replace("\\","/",$_SERVER["SCRIPT_FILENAME"]);
  $arrayRoot = explode("/", $scriptName);
  $cont = count($arrayRoot) - 1;
  switch ($cont) {
    case 4:
      $path = './';
      break;
    case 5:
      $path = "./../";
      break;
    case 6:
      $path = "./../../";
      break;
    case 7:
      $path = "./../../../";
      break;
    default:
      $path = "./";
      break;
  }
  $file = substr(array_pop($arrayRoot), 0, -4);
  echo "<link rel='stylesheet' href='".$path."VIEW/CSS/dist/$file.css'>";
  echo "<link rel='shortcut icon' href='".$path."Assets/ICONS/logoIcon.ico' type='image/x-icon'>";
  echo "<script src='".$path."VIEW/JS/index.js' type='module' defer></script>"
  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>