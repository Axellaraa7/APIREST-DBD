<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DEAD BY DAYLIGHT</title>
  <?php
  session_start();
  $scriptName = explode("/", $_SERVER["SCRIPT_NAME"]);
  $cont = count($scriptName) - 1;
  switch ($cont) {
    case 1:
      $path = './';
      break;
    case 2:
      $path = "./../";
      break;
    case 3:
      $path = "./../../";
      break;
    default:
      $path = "./";
      break;
  }
  $file = substr(array_pop($scriptName), 0, -4);
  echo "<link rel='stylesheet' href='".$path."VIEW/CSS/dist/$file.css'>";
  echo "<link rel='shortcut icon' href='".$path."Assets/ICONS/logoIcon.ico' type='image/x-icon'>";
  echo "<script src='".$path."VIEW/JS/index.js' type='module' defer></script>"
  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>