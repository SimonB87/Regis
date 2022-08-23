<?php

require 'config/config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    //header('Content-Type: text/html; charset=utf-8');
    include("shared/head.php");
    ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <title> Registration confirmation | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

  </head>
  <body style="background: #303030;">

  <?php
  include("manage/handlers/handler_testenvironment.php");
  include("shared/appinfosetup/appadminbankinfo.php");
  include("shared/navigation.php");
  include("manage/processformdata.php");

  $isEventEdited = true;
  $selectByEventId = $eventID;

  include("manage/handlers/handler_geteventdata.php");
  include("manage/handlers/handler_outputotherticketoptionsname.php");

  mysqli_close($connector);

  include("webForm/components/pagecontent_processregistration.php");

  include("shared/appinfosetup/appadminbankinfo.php");

  include("manage/emailing/getorderdata.php");
  include("manage/emailing/sendmailtoadmin.php");
  include("manage/emailing/sendmailtotestadmin.php");
  include("manage/emailing/sendmailtoclient.php");

  ?>


  </div>

  <?php
  include("shared/contactsection.php");
  include("shared/footer.php");
  ?> 

  <script src="shared/libs/bootstrap/js/bootstrap.js"></script>
  <script src="shared/assets/js/hidenotification.js"></script>
  <script src='shared/assets/js/scipt.js' defer></script>

  <!--
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

  </body>
</html>