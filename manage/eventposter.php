<?php
session_start();
require '../config/config.php';
require 'handlers/userlogin.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    include("shared/head.php");
    include("handlers/handler_iscreatenewevent.php");
    ?>

    <title> Edit event poster | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

    <link rel="stylesheet" type="text/css" href="../shared/libs/footablebootstrap/css/footable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/libs/fontawesome/fontawesome_5.0.0.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/assets/css/footbaleedits.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> 

  </head>
  <body style="background: #303030;">

    <?php
    include("handlers/handler_getopeneventid.php");
    include("shared/navigation.php");
    include("handlers/handler_formeventsetupmain_saveproduction.php");
    include("handlers/handler_eventpostersetdb.php");

    $selectedEventId = ( isset( $_GET['id']) ) ? ($_GET['id']) : null;
    include("handlers/handler_getselectedeventbyiddata.php"); //handler_getselectedeventbyiddata.php // handler_getformdata.php

    $fileNameString = "";
    include("handlers/handler_formpostventposterstore.php");
    ?> 

    <main>

      <div class="container my-lg-5 text-center">

        <?php
        include("shared/setupnavigation.php");
        ?>

        <div class="row padding-regular">
          <div class="col-12 padding-regular">
            <h1 class="display-5 fw-bold"> <?php echo ( ( $isModeEventCreate == true ) ? "Add poster to new event" : " Edit current event poster" ); ?> </h1>
            <p class="display-7 fw-bold"> Poster shows on top of event regitration page. </p>
            <?php
            include("components/selecteventtoedit.php");
            ?>
          </div>


        </div>

      </div>

      <div class="container padding-regular-topBottom ">
        <div class="row">

        <?php
        if (file_exists($eventDataPosterName)) {
          echo "<div class='col-12 padding-regular'> <h3 class='display-7 fw-bold text-center'>Current poster</h3><div> ";
        }
        include("components/currentposter.php");
        ?>

        </div>
      </div>

      <div class="container padding-regular-topBottom ">
        <div class="row">

        <?php
        include("components/formsendposter.php");
        ?>

        </div>
      </div>
    </main>

<?php
    include("../shared/footer.php");
?>


    <script src="../shared/libs/bootstrap/js/bootstrap.js" defer></script>
    <script src="../shared/assets/js/formvalidation.js" defer></script>
    <script src="../shared/assets/js/togglevisibility.js" defer></script>
    <script src="../shared/assets/js/hidenotification.js" defer></script>
    <script src="../shared/assets/js/scriptsformevent.js" defer></script>
    <script src='../shared/assets/js/seteventsetupcurrentpage.js' defer></script>
    <script src='../shared/assets/js/eventsetupnavedithref.js' defer></script>
    <script src='../shared/assets/js/scipt.js' defer></script>

  </body>
</html>