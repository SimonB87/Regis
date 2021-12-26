<form action="login.php" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
  <div>
    <h2>Přihlášení</h2>
  </div>
  <div class="form-floating mb-3">
    <label for="log_email">Email address</label>
    <input id="log_email"  class="form-control" type="email" name="log_email" placeholder="Email" value="<?php
    if(isset($_SESSION['log_email'])) {
      echo $_SESSION['log_email'];
    }
    ?>" required>
  </div>
  
  <div class="form-floating mb-3">
    <label for="password">Password</label>
    <input id="password"  class="form-control" type="password" name="log_password" placeholder="Heslo">
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"  class="form-control"> Remember me
    </label>
  </div>
  
  <?php if(in_array("Email nebo heslo nejsou správné<br>", $error_array)) echo "<p class='registration_error'>Email nebo heslo nejsou správné</p>"; ?>
  <input id="signInButton" class="w-100 btn btn-lg btn-primary" type="submit" name="login_button" value="Login" >
  <br>

  <a href="#" class="w-100 btn btn-lg btn-secondary" onclick="toggleVisibility('#formOne','#formTwo');">Nemáte účet? Registrovat lze zde!</a>
  <br>

  <a href="newPassword.php" id="forgotPassword" class="signup">Obnovení zapomenutého hesla</a>
</form>