<?php
require("../config/config.php");
include("handlers/login_handler.php");

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
    include("../shared/navigation.php");
    ?> 

    <div class="container">
      <div class="row">
        <div id="formOne" class="visibility visibility-visible col-sm-12 col-md-6 col-xl-4">

          <?php
          include("components/loginform.php");
          ?>

        </div>
        <div id="formTwo" class="visibility visibility-hidden col-sm-12 col-md-6 col-xl-4">

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