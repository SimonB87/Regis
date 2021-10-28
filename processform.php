<?php

require 'config/config.php';

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

  <h1>Registered</h1>

  <?php
  //DB connection :
  $dbConnection = new mysqli ($host, $dbusername, $dbpassword, $dbname);

  //$prefilled_userName = filter_input(INPUT_POST, 'prefilled_userName');
  $floatingName = filter_input(INPUT_POST, 'floatingName');
  $string = "<div>" . $floatingName . "</div>";
  echo $string;

  //DB close :
  $dbConnection->close();
  
  ?>

  <?php
  include("shared/footer.php");
  ?> 


  <script src="shared/libs/bootstrap/js/bootstrap.js"></script>

<!--
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <script src="shared/assets/js/formvalidation.js"></script>
  <script src="shared/assets/js/recalculateprice.js"></script>

  </body>
</html>