<?php
  require_once './../head.php';
  require_once './../templates/nav.php';
  $links = array("home"=>"./../","characters"=>"./characters.php","documentation"=>"./docs.php");
  if(!empty($_SESSION["usuario"])) $links["admin"] = "admin.php";
?>
  <header id="header">
    <?php createNav($links); ?>
  </header>
  <?php var_dump($_SESSION); ?>
  <main>
    <section id = "cards">
    </section>
  </main>
  
<?php
?>