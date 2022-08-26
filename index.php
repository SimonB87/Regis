<?php
session_start();
require("config/config.php");
$error_array = [];
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    include("manage/handlers/handler_testenvironment.php");
    include("shared/head.php");
    include("manage/handlers/handler_getappsettings.php");
    ?>

    <title> Event registration | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

  </head>
  <body style="background: #303030;">

    <?php
    include("shared/navigation.php");
    ?>

    <div class="container">
      <div class="row">

        <?php
        if (isset($isTestDevelopment)) {
          if($isTestDevelopment == true){
            include("manage/components/testenvnotification.php");
          }
        }
        ?>

      </div>
    </div>
  </div>

    <?php
    include("webform/handlers/handler_getformdata.php");
    include("webform/handlers/handler_getdescriptiondata.php");
    include("webform/handlers/handler_getsoldtickets.php");

    // Close DB Connection
    mysqli_close($connector);
    ?> 

    <?php
    include("webform/handlers/handler_calculatevisibility.php");

    if ($settings_appUnderDevelopment === "1 - on") {
      include("webform/components/appunderdevelopment.php");
    } else {
      include("webform/components/previewform.php");
    }

    ?> 


    <?php
    include("shared/contactsection.php");
    include("shared/footer.php");
    ?>

    <script src="shared/libs/bootstrap/js/bootstrap.js"></script>

    <script src="shared/assets/js/formvalidation.js"></script>
    <script src="shared/assets/js/recalculateprice.js"></script>

<?
    if ($settings_appUnderDevelopment === "1 - on") {

    } else {
      echo "<script src='shared/assets/js/setdate.js'></script>";
    }
?>

    <script src="shared/assets/js/hidenotification.js"></script>
    <script src="shared/assets/js/enableregistrationoptions.js"></script>

  </body>
</html>