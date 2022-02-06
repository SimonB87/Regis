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

  <div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
    <label class="form-check-label" for="flexCheckDefault">
      Remember me
    </label>
  </div>

  <?php if(in_array("Email nebo heslo nejsou správné", $error_array)) 
    echo "<div class='registration_error btn btn-warning'>Email nebo heslo nejsou správné.<span class='registration_error_close'>&nbsp;<i class='fas fa-times'></i>&nbsp;</span></div>"; 
  ?>
  <span class="padding-regular">
    <input id="signInButton" class="w-100 btn btn-lg btn-primary" type="submit" name="login_button" value="Login" >
  </span>

  <?php
          if (file_exists("registerform.php")) {
              echo `<span class="padding-regular">
                    <a href="#" class="w-100 btn btn-lg btn-secondary" onclick="toggleVisibility('#formOne','#formTwo');">Nemáte účet? Registrovat lze zde!</a>
                  </span><br>`;
          }
  ?> 

  <span class="padding-regular">
    <a href="#" class="w-100 btn btn-lg btn-secondary" onclick="toggleVisibility('#formOne','#formTwo');">Nemáte účet? Registrovat lze zde!</a>
  </span>

  <!-- Lost password - TODO! -->
  <span class="padding-regular">
    <a href="newPassword.php" id="forgotPassword" class="signup w-100 btn btn-lg btn-info text-white">Obnovení zapomenutého hesla</a>
  </span>
</form>