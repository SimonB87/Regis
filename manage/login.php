<?php
session_start();

require("../config/config.php");
include("handlers/login_handler.php");

// change character set to utf8
if (!mysqli_set_charset($connector, "utf8")) {
	printf("Error loading character set utf8: %s\n", mysqli_error($connector));
	exit();
} else {
	//printf("Current character set: %s\n", mysqli_character_set_name($connector));//used only for testing
}

$filename = 'components/registerform.php';

if (file_exists($filename)) {
    include("handlers/register_handler.php");
} else {
    echo "The file does not exist";
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    include("shared/head.php");
    ?>

    <title> Event registration | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

  <head>
  <body>

    <?php
    include("shared/navigation.php");
    ?> 

    <div class="container">
      <div class="row">
        <div id="formOne" class="visibility visibility-visible padding-regular">

          <?php
          include("components/loginform.php");
          ?>

        </div>
        <div id="formTwo" class="visibility visibility-hidden padding-regular">

          <?php
          if (file_exists($filename)) {
              include("components/registerform.php");
          } else {
              echo "The file does not exist";
          }
          ?> 

        </div>
      </div>
    </div>


    <?php
    include("../shared/contactsection.php");
    include("../shared/footer.php");
    ?>

    <script src="../shared/libs/bootstrap/js/bootstrap.js"></script>
    <script src="../shared/assets/js/formvalidation.js"></script>
    <script src="../shared/assets/js/togglevisibility.js"></script>
    <script src="../shared/assets/js/hidenotification.js"></script>

  </body>
</html>