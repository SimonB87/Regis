<form action="login.php" method="POST" class="">
  <div class="p-4 p-md-5-lg border rounded-3 bg-light">
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
    
    <div class="form-floating mb-3 password-parent">
      <label for="password">Password</label>
      <input id="password" class="form-control input-password" type="password" name="log_password" placeholder="Heslo">
      
      <span class="password-child-icons">
        <span class="show-segment--icon password-child-icons-open visibility-visible" onclick="toggleVisibility('.password-child-icons-open', '.password-child-icons-close'); togglePassWord();"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
        <span class="show-segment--icon password-child-icons-close visibility-hidden" onclick="toggleVisibility('.password-child-icons-close', '.password-child-icons-open'); togglePassWord();"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
      </span>

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
    <div class="padding-small">
      <input id="signInButton" class="w-100 btn btn-lg btn-primary" type="submit" name="login_button" value="Login" >
    </div>

    <?php
            if (file_exists("registerform.php")) {
                echo `<span class="padding-regular">
                      <a href="#" class="w-100 btn btn-lg btn-secondary" onclick="toggleVisibility('#formOne','#formTwo');">Nemáte účet? Registrovat lze zde!</a>
                    </span><br>`;
            }
    ?> 

    <div class="padding-small">
      <a href="#" class="w-100 btn btn-lg btn-secondary" onclick="toggleVisibility('#formOne','#formTwo');">Nemáte účet? Registrovat lze zde!</a>
    </div>

    <!-- Lost password - TODO! -->
    <div class="padding-small">
      <a href="newPassword.php" id="forgotPassword" class="signup w-100 btn btn-lg btn-info text-white">Obnovení zapomenutého hesla</a>
    </div>
  </div>
</form>