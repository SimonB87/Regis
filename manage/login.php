<?php
session_start();
require("../config/config.php");
include("handlers/login_handler.php");
include("handlers/handler_testenvironment.php");

?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    include("shared/head.php");
    ?>
    <!--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title> Event registration | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

  </head>
  <body style="background: #303030;">

    <?php

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

    include("shared/navigation.php");
    ?> 
    <div class="bg-white">
      <div class="container">
        <div class="row" >

        <?php
        if (isset($isTestDevelopment)) {
          if($isTestDevelopment == true){
            include("components/testenvnotification.php");
          }
        }
        ?>

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
    </div>


    <?php
    include("../shared/contactsection.php");
    include("../shared/footer.php");
    ?>

    <script src="../shared/libs/bootstrap/js/bootstrap.js"></script>
    <script src="../shared/assets/js/formvalidation.js"></script>
    <script src="../shared/assets/js/togglevisibility.js"></script>
    <script src="../shared/assets/js/hidenotification.js"></script>
    <script src='../shared/assets/js/scipt.js' defer></script>

  </body>
</html>