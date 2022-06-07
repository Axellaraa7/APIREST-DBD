<?php
require_once './../header.php';

include_once './../../definitions.php';

$killer = $_GET["name"];
echo $killer;
?>

<main id="main" style="border:2px solid black;">

</main>

<script>
  const d = document;
  console.log("Hola");
  urlApiKiller = "http://127.0.0.1/DBD-API/API/killers.php?name="+"<?= $killer ?>"
  console.log(urlApiKiller);
  fetch(urlApiKiller)
  .then(response => response.json())
  .then(data => {
    console.log(data);
    const img = d.createElement("img");
    const main = d.getElementById("main");
    img.src = "<?= LOCALHOST.ASSETS.IMG.'/'?>"+data.img;
    console.log(img);
    main.appendChild(img);
  });
  
</script>