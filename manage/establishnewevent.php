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

    <title> Create new event | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

    <link rel="stylesheet" type="text/css" href="../shared/libs/footablebootstrap/css/footable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/libs/fontawesome/fontawesome_5.0.0.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/assets/css/footbaleedits.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> 
  </head>
  <body style="background: #303030;">

    <?php
    //include("handlers/handler_getopeneventid.php");
    include("shared/navigation.php");
    //include("handlers/handler_formeventsetupmain_saveproduction.php");
    include("handlers/handler_testenvironment.php");
    ?> 

    <main class="bg-white">
        <?php
        //include("shared/aside.php");
        ?>
      <div class="container margin-small-topBottom text-center position-relative">

        <?php
        include("handlers/getpathdata.php");
        //include("handlers/handler_geteventdata.php");
        include("shared/setupnavigation.php");
        ?>

        <div class="row padding-regular">

          <?php
            if (isset($isTestDevelopment)) {
              if($isTestDevelopment == true){
                include("components/testenvnotification.php");
              }
            }
          ?>

          <div class="col-12 padding-regular">
            <h1 class="display-5 fw-bold">Create a new event - basic set up</h1>
            <p class="display-7 fw-bold">Establish a new event with new event ID, name and date</p>
          </div>

          <?php
          //include("shared/tableeventdata.php");
          ?>

        </div>

      </div>

      <div class="container padding-regular-topBottom ">
        <div class="row">

        <?php
        //include("components/formeventsetupmain.php");
        ?>

        </div>
      </div>
    </main>

    <div class="container text-center bg-white padding-regular-topBottom">
      <div class="row bg-light rounded border">

        <?php
        include("components/establishneweventdata.php");
        ?>

      </div>
    </div>

    <div class="container text-center bg-white padding-regular-topBottom">
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
    <script src="../shared/assets/js/establishnewevent.js" defer></script>
    <script src='../shared/assets/js/seteventsetupcurrentpage.js' defer></script>
    <script src='../shared/assets/js/eventsetupnavedithref.js' defer></script>
    <script src='../shared/assets/js/scipt.js' defer></script>

  </body>
</html>