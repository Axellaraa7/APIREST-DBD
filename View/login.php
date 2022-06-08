<?php 
require_once "./head.php";
require_once "./templates/nav.php";

$links = array("Home" => "./");
?>
<main>
  <header> <?php createNav($links) ?></header>
  <form id="login" method="post" action="./">
    <div>
      <label for="admin">Nombre de usuario</label>
      <input type="text" name="admin" id="admin" required>
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
    </div>
    <div>
      <button type="submit" class="btn btnThird">ENTRAR</button>
      <hr>
      <button class="btn btnSecondary">Olvidé mi contraseña</button>
    </div>
  </form>
</main>