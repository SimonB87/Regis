<?php
session_start();
require '../config/config.php';

/*if the user is loggen in, make the username variable equal to username. If user is not logged in, send him back to register page.*/
if (isset($_SESSION['username'])) {
  $userLoggedIn = $_SESSION['username'];
  $user_details_query = mysqli_query($connector, "SELECT * FROM users WHERE username='$userLoggedIn'");
  $user = mysqli_fetch_array($user_details_query);
}
else {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    include("shared/head.php");
    ?>
    <link rel="stylesheet" type="text/css" href="../shared/libs/footablebootstrap/css/footable.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../shared/assets/css/footbaleedits.css">

    <title> Registrations management | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

  </head>
  <body>

    <?php
    include("handlers/handler_getformdata.php");
    include("shared/navigation.php");

    include("components/registrationstable.php");

    include("../shared/footer.php");

    include("components/modal_editregistrations.php");

    ?>

    <script src="../shared/libs/jquery/jquery3.6.0.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>-->
    <script src="../shared/libs/bootstrap/js/bootstrap.js"></script>
    <script src="../shared/assets/js/hidenotification.js"></script>


  <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="../shared/libs/footablebootstrap/js/footable.min.js" defer></script>
    <script src="../shared/assets/js/setupfootable.js" defer></script>

    <script src="../shared/assets/js/sendpaystatusupdate.js" defer></script>
    <script src="../shared/assets/js/editregistrations.js" defer></script>

  </body>
</html>