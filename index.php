<?php
session_start();
require("config/config.php");
$error_array = [];
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    include("shared/head.php");
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
        include("manage/components/testenvnotification.php");
        ?>
      </div>
    </div>
  </div>

    <?php
    include("webform/handlers/handler_getformdata.php");
    include("webform/handlers/handler_getdescriptiondata.php");
    include("webform/handlers/handler_getsoldtickets.php");
    ?> 

    <?php
    include("webform/handlers/handler_calculatevisibility.php");
    include("webform/components/previewform.php");
    ?> 


    <?php
    include("shared/contactsection.php");
    include("shared/footer.php");
    ?>

    <script src="shared/libs/bootstrap/js/bootstrap.js"></script>

  <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="shared/assets/js/formvalidation.js"></script>
    <script src="shared/assets/js/recalculateprice.js"></script>
    <script src="shared/assets/js/setdate.js"></script>
    <script src="shared/assets/js/hidenotification.js"></script>
    <script src="shared/assets/js/enableregistrationoptions.js"></script>

  </body>
</html>