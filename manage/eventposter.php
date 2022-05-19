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
    ?>

    <title> Edit event registration | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

    <link rel="stylesheet" type="text/css" href="../shared/libs/footablebootstrap/css/footable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/libs/fontawesome/fontawesome_5.0.0.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/assets/css/footbaleedits.css">
<!--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> <!-- source: https://www.w3schools.com/icons/fontawesome5_intro.asp -->

  </head>
  <body>

    <?php
    include("shared/navigation.php");
    include("handlers/handler_formeventsetupmain_saveproduction.php");
    include("handlers/handler_eventpostersetdb.php");

    $fileNameString = "";
    include("handlers/handler_formpostventposterstore.php");
    ?> 

    <main>

      <div class="container my-5 text-center">

        <?php
        include("shared/setupnavigation.php");
        ?>

        <div class="row padding-regular">
          <div class="col-12 padding-regular">
            <h1 class="display-5 fw-bold">Event poster</h1>
            <p class="display-7 fw-bold">Edit the picture for current event </p>
          </div>


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
    include("../shared/contactsection.php");
    include("../shared/footer.php");
?>


    <script src="../shared/libs/bootstrap/js/bootstrap.js" defer></script>
    <script src="../shared/assets/js/formvalidation.js" defer></script>
    <script src="../shared/assets/js/togglevisibility.js" defer></script>
    <script src="../shared/assets/js/hidenotification.js" defer></script>
    <script src="../shared/assets/js/formsetionsedit.js" defer></script>
    <script src="../shared/assets/js/scriptsformevent.js" defer></script>
    <script src='../shared/assets/js/seteventsetupcurrentpage.js' defer></script>

  </body>
</html>