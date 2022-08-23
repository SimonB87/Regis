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

    if ( $isModeEventCreate == true ) { 
      echo "<title> Create event description | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>";
    } else {
      echo "<title> Edit event description | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>";
    }
    ?>

    <link rel="stylesheet" type="text/css" href="../shared/libs/footablebootstrap/css/footable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/libs/fontawesome/fontawesome_5.0.0.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/libs/emojionearea/emojionearea.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/assets/css/footbaleedits.css">
<!--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> <!-- source: https://www.w3schools.com/icons/fontawesome5_intro.asp -->

  </head>
  <body style="background: #303030;">

    <?php
    include("shared/navigation.php");
    include("handlers/handler_formeventdescription_savedata.php");
    ?> 

    <main>

      <div class="container my-5 text-center">

        <?php
        include("handlers/getpathdata.php");
        include("shared/setupnavigation.php");
        ?>

        <div class="row padding-regular">
          <div class="col-12 padding-regular text-center">
            <h1 class='display-5 fw-bold'>

<?php 
    if ( $isModeEventCreate == true ) { 
      echo " Create event description ";
    } else {
      echo " Edit event description ";
    }
?>
              </h1>
            <p class="display-7 fw-bold">Set here event description for the event page </p>
          </div>

        </div>

      </div>

      <div class="container padding-regular-topBottom ">
        <div class="row">

        <?php
        include("handlers/handler_getformdescriptiondata.php");
        include("components/formeventdescription.php");
        ?>

        </div>
      </div>
    </main>

    <div class="container text-center">
      <div class="row">
        <div class="col-12 my-2">
          <h2 class="display-5 fw-bold">All events data</h2>
        </div>

        <?php
        include("components/eventstable.php");
        ?>

      </div>
    </div>

<?php
    include("../shared/contactsection.php");
    include("../shared/footer.php");
?>

    <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>

    <script src="../shared/libs/footablebootstrap/js/footable.min.js" defer></script>
    <script src="../shared/libs/bootstrap/js/bootstrap.js" defer></script>
    <script src="../shared/assets/js/formvalidation.js" defer></script>
    <script src="../shared/assets/js/togglevisibility.js" defer></script>
    <script src="../shared/assets/js/hidenotification.js" defer></script>
    <script src="../shared/assets/js/formsetionsedit.js" defer></script>
    <script src="../shared/assets/js/scriptsformevent.js" defer></script>
    <script src="../shared/assets/js/footablerun.js" defer></script>
    <script src='../shared/libs/emojionearea/emojionearea.min.js' defer></script>
    <script src='../shared/assets/js/emojionearea_set.js' defer></script>
    <script src='../shared/assets/js/seteventsetupcurrentpage.js' defer></script>
    <script src='../shared/assets/js/scipt.js' defer></script>

  </body>
</html>