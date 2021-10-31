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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
      <h4 class='padding-small text-warning'> THIS IS WEB TEST ENVIRONMENT ! Registrations only for test purpose ! </h4>
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