<h2>Registrace</h2>
<form action="login.php" method="POST" novalidate>
  <input type="text" name="reg_fname" placeholder="Jméno" value="<?php
  if(isset($_SESSION['reg_fname'])) {
    echo $_SESSION['reg_fname'];
  }
  ?>" required>
  <br>

  <?php if(in_array("Vaše jméno musí mít mezi 2 a 25 znaky<br>", $error_array)) echo "<p class='registration_error'>Vaše jméno musí mít počet znaků 2 až 25</p>"; ?>

  <input type="text" name="reg_lname" placeholder="Příjmení" value="<?php
  if(isset($_SESSION['reg_lname'])) {
    echo $_SESSION['reg_lname'];
  }
  ?>" required>
  <br>

  <?php if(in_array("Vaše příjmení musí mít mezi 2 a 25 znaky<br>", $error_array)) echo "<p class='registration_error'>Vaše příjmení musí mít počet znaků 2 až 25</p>"; ?>

  <input type="email" name="reg_email" placeholder="Email" value="<?php
  if(isset($_SESSION['reg_email'])) {
    echo $_SESSION['reg_email'];
  }
  ?>" required>
  <br>

  <input type="email" name="reg_email2" placeholder="Ověřit email" value="<?php
  if(isset($_SESSION['reg_email2'])) {
    echo $_SESSION['reg_email2'];
  }
  ?>" required>
  <br>

  <?php if(in_array("Email je již využíván<br>", $error_array)) echo "<p class='registration_error'>Email je již užíván</p>";
  else if(in_array("Email nemá validní formát <br>", $error_array)) echo "<p class='registration_error'>email nemá validní formát</p>";
  else if(in_array("Emaily nejsou stejné<br>", $error_array)) echo "<p class='registration_error'>Emaily se neshodují</p>"; ?>


  <input type="password" name="reg_password" class="input-password" placeholder="Zadejte heslo..." required>
  <br>

  <input type="password" name="reg_password2" class="input-password" placeholder="Ověřit heslo" required>
  <br>

  <?php if(in_array("Hesla neodpovídají<br>", $error_array)) echo "<p class='registration_error'>Vaše hesla se neshodují</p>";

  else if(in_array("Vaše hesla mohou obsahovat jen písmena bez diakritiky a celá čísla<br>", $error_array)) echo "<p class='registration_error'>Vaše heslo může obsahovat jen znaky bez diakritiky a čísla</p>";
  else if(in_array("Vaše heslo musí být mezi 5 a 30 znaky<br>", $error_array)) echo "<p class='registration_error'>Vaše heslo musí mít od 5 do 30 znaků.</p>"; ?>

  <br>
  <input type="submit" name="register_button" value="Registrovat">
  <br>
  <br>

  <?php if(in_array("<span style='color: #14C800;'>Jste připraven/a! Nyní se můžete přihlásit!</span><br>", $error_array)) echo "<span style='color: #14C800;'>Vše je připraveno! Můžete se přihlásit!</span></p>"; ?>
  <a href="#" id="signin" class="w-100 btn btn-lg btn-secondary" onclick="toggleVisibility('#formTwo','#formOne');" >Již máte účet? Vstupte zde!</a>
</form>
<br>