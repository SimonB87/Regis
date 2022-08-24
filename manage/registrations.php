<?php
session_start();
require '../config/config.php';

// change character set to utf8
if (!mysqli_set_charset($connector, "utf8")) {
	printf("Error loading character set utf8: %s\n", mysqli_error($connector));
	exit();
} else {
	//printf("Current character set: %s\n", mysqli_character_set_name($connector));//used only for testing
}

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
  <body style="background: #303030;">

    <?php
    include("handlers/handler_testenvironment.php");
    include("handlers/getpathdata.php");
    include("handlers/handler_geteventdata.php");
    include("handlers/handler_getformdata.php");
    include("handlers/handler_getidfromurl.php");
    include("shared/navigation.php");

    ?>

    <div class="bg-white padding-regular-topBottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center padding-small">Saved registrations</h1>
            <h3 id="reg-notice" class="text-center padding-small"></h3>
          </div>

        <?php
        include("components/testenvnotification.php");
        include("components/selectoneevent.php");
        include("components/registrationstable.php");
        ?>

        </div>
      </div>
    </div>

    <?php 
    include("components/modal_editregistrations.php");
    ?>

    </div>
    </div>
    </div>

    <?php
    include("../shared/footer.php");
    ?>

    <script src="../shared/libs/jquery/jquery3.6.0.min.js"></script>
    <script src="../shared/libs/bootstrap/js/bootstrap.js"></script>
    <script src="../shared/assets/js/hidenotification.js"></script>
    <script src="../shared/libs/footablebootstrap/js/footable.min.js" defer></script>
    <script src="../shared/assets/js/setupfootable.js" defer></script>
    <script src="../shared/assets/js/sendorderupdate.js" defer></script>
    <script src="../shared/assets/js/editregistrations.js" defer></script>
    <script src="../shared/assets/js/selectoneevent.js" defer></script>
    <script src="../shared/assets/js/getregistrationselectionnumber.js" defer></script>
    <script src='../shared/assets/js/scipt.js' defer></script>

  </body>
</html>