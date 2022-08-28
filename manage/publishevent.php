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

    <title> Make event public | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

    <link rel="stylesheet" type="text/css" href="../shared/libs/footablebootstrap/css/footable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/libs/fontawesome/fontawesome_5.0.0.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/libs/emojionearea/emojionearea.min.css">
    <link rel="stylesheet" type="text/css" href="../shared/assets/css/footbaleedits.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> 
  </head>
  <body style="background: #303030;">

    <?php
    //include("handlers/handler_getopeneventid.php");
    include("shared/navigation.php");
    include("handlers/handler_formeventdescription_savedata.php");
    include("handlers/handler_publishevent_update.php");
    include("handlers/handler_testenvironment.php");
    ?> 

    <main class="bg-white">

      <div class="container text-center">

        <?php
        include("handlers/getpathdata.php");
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

            <h1 class="display-5 fw-bold">Make event public</h1>

            <p class="display-7 fw-bold">Manage which event should be made public out of all saved events </p>
            <!-- Event status notifications -->
            <div id="status-background" class="my-5 padding-regular rounded">
              <h3 id="status-notification"> </h3>
            </div>

          </div>



        </div>
      </div>

    </main>

    <div class="row bg-white padding-small">
      <div class="custom-container">
        <?php
        include("components/publishevent_table.php");
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
    <script src="../shared/assets/js/hidenotification.js" defer></script>
    <script src="../shared/assets/js/formsetionsedit.js" defer></script>
    <script src="../shared/assets/js/footablerun.js" defer></script>
    <script src='../shared/libs/emojionearea/emojionearea.min.js' defer></script>
    <script src='../shared/assets/js/emojionearea_set.js' defer></script>
    <script src='../shared/assets/js/seteventsetupcurrentpage.js' defer></script>
    <script src='../shared/assets/js/publisheventscheck.js' defer></script>


  </body>
</html>