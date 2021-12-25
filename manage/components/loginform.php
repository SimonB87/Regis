<h2>Přihlášení</h2>
<form action="login.php" method="POST" novalidate>
  <input id="log_email" type="email" name="log_email" placeholder="Email" value="<?php
  if(isset($_SESSION['log_email'])) {
    echo $_SESSION['log_email'];
  }
  ?>" required>
  <br>

  <input id="password" type="password" name="log_password" placeholder="Heslo">
  <br>

  <?php if(in_array("Email nebo heslo nejsou správné<br>", $error_array)) echo "<p class='registration_error'>Email nebo heslo nejsou správné</p>"; ?>
  <input id="signInButton" type="submit" name="login_button" value="Přihlásit se">
  <br>

  <a href="#" class="btn btn-lg" onclick="toggleVisibility('#formOne','#formTwo');">Nemáte účet? Registrovat lze zde!</a>
  <br>

  <a href="newPassword.php" id="forgotPassword" class="signup">Obnovení zapomenutého hesla</a>
</form>