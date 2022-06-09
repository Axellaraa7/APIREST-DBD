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
    <div class="tabCol">
      <button class="tab btnSecondary">UPLOAD A KILLER</button>
      <button class="tab btnSecondary">UPLOAD A SURVIVOR</button>
      <button class="tab btnSecondary">UPLOAD A PERK</button>  
    </div>
    <div class="tabCol">
      <button class="tab btnSecondary">DELETE A KILLER</button>
      <button class="tab btnSecondary">DELETE A SURVIVOR</button>
      <button class="tab btnSecondary">DELETE A PERK</button>
    </div>
    <div class="tabCol">
      <button class="tab btnSecondary">UPDATE A KILLER</button>
      <button class="tab btnSecondary">UPDATE A SURVIVOR</button>
      <button class="tab btnSecondary">UPDATE A PERK</button>
    </div>
  </aside>
  <section id="dashboard">

  </section>
</main>