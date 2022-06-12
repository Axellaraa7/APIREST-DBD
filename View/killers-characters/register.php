<?php
require_once "./../head.php";
?>
<main>
  <form id="form">
    <div class="titleContainer">
      <h2>Upload a Killer</h2>
    </div>

    <div class="formElement ">
      <input type="text" id="name" name="name" >
      <label for="name" class="ph">
        <span class="fa-regular fa-heart fa-5x fa-bounce"></span>
        Name
      </label>
    </div>

    <div class="formElement">
      <input type="text" id="hability" name="hability" required>
      <label for="hability" class="ph">
        <span class="fa-solid fa-burst"></span>
        Hability
      </label>
    </div>

    <div class="formElement">
      <textarea name="habilityDescription" id="habilityDescription" cols="20" rows="6" required></textarea>
      <label for="habilityDescription" class="ph">
        <span class="fa-solid fa-book-skull"></span>
        Hability Description
      </label>
    </div>

    <div class="formElement">
      <input type="text" id="loreName" name="loreName" required>
      <label for="loreName" class="ph">
        <span class="fa-brands fa-odnoklassniki"></span>
        Real Name
      </label>
    </div>

    <div class="formElement">
      <textarea name="lore" id="lore" cols="20" rows="6" required></textarea>
      <label for="lore" class="ph">
        <span class="fa-solid fa-book-open"></span>
        Lore
      </label>
    </div>
    <div class="formElement feSelect">
      <label for="difficulty">
        <span class="fa-solid fa-brain"></span>
        Difficulty
      </label>
      <select name="difficulty" id="difficulty" required></select>
    </div>
    <div class="formElement feSelect">
      <label for="perks">
        <span class="fa-solid fa-hand-back-fist"></span>
        Perks
      </label>
      <input type="text" id="perks" name="perks" required>
      <!-- <div class="selects">
        <select name="perks" id="perks" class="selectPerk" ></select>
        <select name="perks" id="perks" class="selectPerk" ></select>
        <select name="perks" id="perks" class="selectPerk" ></select>
      </div> -->
    </div>
    <div class="formElement feFile">
      <label for="img">
        <span class="fa-solid fa-file-arrow-up"></span>
        Image
      </label>
      <input type="file" id="img" name="img" required>
    </div>
    <div class="formElement feButtons">
      <button type="submit" value="register" class="btn btnMain">SUBMIT</button>
      <button type="reset" value="erase" class="btn btnThird">ERASE</button>
    </div>
  </form>
</main>

<?php
require_once "./../footer.php";
?>