<?php

require 'config/config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    include("shared/head.php");
    ?>
    <link rel="stylesheet" type="text/css" href="shared/libs/footablebootstrap/css/footable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="shared/assets/css/footbaleedits.css">

    <title> Event registration | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

  <head>
  <body>

    <?php
    include("shared/navigation.php");
    ?> 

    <?php
    include("webform/herosection.php");
    ?> 

    <?php
    include("manage/registrationstable.php");
    ?> 

    <?php
    include("shared/footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="shared/libs/bootstrap/js/bootstrap.js"></script>


  <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="shared/libs/footablebootstrap/js/footable.js" defer></script>
    <script defer>
    jQuery(function($){
        $('.table').footable();
      });
    /* Sollution guide 15.10.2020: http://fooplugins.github.io/FooTable/docs/examples/basic/single-header.html */
    </script>

  </body>
</html>