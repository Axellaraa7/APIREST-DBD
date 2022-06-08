<?php 
require_once "./head.php";
require_once "./templates/nav.php";
$links = array(
  "Home" => "./",
  "api-killer" => "./../API/killers.php",
  "api-survi" => "./../API/survivors.php",
  "api-perks" => "./../API/perks.php"
)
?>
<header>
  <?php createNav($links); ?>
</header>
<main>
  <aside class="tabs">
    <button class="tab btnSecondary">REGISTER A KILLER</button>
    <button class="tab btnSecondary">REGISTER A SURVIVOR</button>
    <button class="tab btnSecondary">REGISTER A PERK</button>
    <button class="tab btnSecondary">DELETE A KILLER</button>
    <button class="tab btnSecondary">DELETE A SURVIVOR</button>
    <button class="tab btnSecondary">DELETE A PERK</button>
    <button class="tab btnSecondary">UPDATE A KILLER</button>
    <button class="tab btnSecondary">UPDATE A SURVIVOR</button>
    <button class="tab btnSecondary">UPDATE A PERK</button>
  </aside>
  <section id="dashboard">

  </section>
</main>