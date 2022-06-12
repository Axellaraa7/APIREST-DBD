<?php
  function createNav($links){
    $navbar = "<nav ><div class='hamburguer'><i class='fa-solid fa-heart fa-beat'></i></div><ul class='menu'>";
    foreach($links as $message => $link){
      $navbar .= "<li><a href='$link' class='btn btnNav'>$message</a></li>";
    }
    $navbar .= "</ul></nav>";   
    echo <<< nav
      <section class='navbar'>
        <figure>
          <img src='https://us.v-cdn.net/6030815/uploads/editor/us/apbwthui3273.gif' class='logo' alt='logodbd'>
        </figure>
        $navbar
      </section>
    nav;
  }
  /* <section class="navbar">
    <figure>
      <img src="https://us.v-cdn.net/6030815/uploads/editor/us/apbwthui3273.gif" class="logo" alt="logodbd">
    </figure>
    <nav>
      <ul>
        <li><a href="#" class="btn btnNav">HOME</a></li>
        <li><a href="./killers-characters/killer-main.php" class="btn btnNav">KILLERS</a></li>
        <li><a href="./survivors-characters/survivor-main.php" class="btn btnNav">SURVIVORS</a></li>
        <li><a href="" class="btn btnNav">PERKS</a></li>
      </ul>
    </nav>
  </section> */
?>

