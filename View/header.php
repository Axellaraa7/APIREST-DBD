<?php 
require_once './templates/nav.php'; 
$links = array(
  "home"=>"", 
  "killers"=>"./killers-characters/killer-main.php",
  "survivors"=>"./survivors-characters/survivor-main.php", 
  "perks"=>"#");
if(!empty($_POST)) $_SESSION["admin"] = $_POST["admin"];

if(isset($_SESSION["admin"]))
  $links[$_SESSION["admin"]] = "./admin.php";
else{
  unset($_SESSION["admin"]);
  $links["Login"] = "./login.php";
}
?>
<header id="header">
  <?php createNav($links);  ?>
</header>
<div class="bgImg">
  <section class="gameDesc">
    <h1 class="titleWhite">DEAD BY DAYLIGHT</h1>
    <div>
      <div class="col">
        <h2>Asesinos</h2>
        <p>Tu objetivo es cazar a los supervivientes y evitar que escapen por la puerta de salida ¿aguantarás la presión? </p>
      </div>
      <div class="col">
        <h2>Supervivientes</h2>
        <p>Tu objetivo es reparar 5 generadores, abrir la puerta de salida y evitar que el asesino de destruya ¿podrás escapar? </p>
      </div>
    </div>
    <a href="https://deadbydaylight.com/" target="_blank" class="btn btnMain">SABER MÁS</a>
    <section class="platforms">
      <figure>
        <img src="./../Assets/ICONS/SVG/steam.svg" alt="logoSteam">
      </figure>
      <figure>
        <img src="./../Assets/ICONS/SVG/stadia.svg" alt="logoStadia">
      </figure>
      <figure>
        <img src="./../Assets/ICONS/SVG/microsoft.svg" alt="logoMicrosoft">
      </figure>
      <figure>
        <img src="./../Assets/ICONS/SVG/ps.svg" alt="logoPlayStation">
      </figure>
      <figure>
        <img src="./../Assets/ICONS/SVG/xbox.svg" alt="logoXbox">
      </figure>
    </section>
  </section>
</div>

