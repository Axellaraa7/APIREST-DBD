<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DEAD BY DAYLIGHT</title>
  <?php
    $scriptName = explode("/", $_SERVER["SCRIPT_NAME"]);
    $file = substr(array_pop($scriptName),0,-4);
    echo "<link rel='stylesheet' href='./CSS/dist/$file.css'>";
  ?>
  <link rel="shortcut icon" href="./../Assets/IMG/logoIcon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <script src="./JS/index.js" type="module" defer></script>
</head>
<body>
  