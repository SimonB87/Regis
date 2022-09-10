<?php
session_start();
require '../config/config.php';
require 'handlers/userlogin.php';

// change character set to utf8
if (!mysqli_set_charset($connector, "utf8")) {
	printf("Error loading character set utf8: %s\n", mysqli_error($connector));
	exit();
} else {
	//printf("Current character set: %s\n", mysqli_character_set_name($connector));//used only for testing
}

/*if the user is loggen in, make the username variable equal to username. If user is not logged in, send him back to register page.*/
if ( ($usernamelevel == "9") ) {
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
    <title> Administration | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>
    <link href="../shared/libs/charts.js/css/chart.min.css" rel="stylesheet" >
    <script src="https://kit.fontawesome.com/ae3a13eb1c.js" crossorigin="anonymous"></script>

  </head>
  <body style="background: #303030;">

    <?php
    include("handlers/handler_getopeneventid.php");
    include("shared/navigation.php");
    include("handlers/handler_testenvironment.php");
    include("handlers/handler_getappsettings.php");
    include("handlers/handler_getapplinks.php");
    include("handlers/handler_getemailtexts.php");
    ?> 

    <div class="padding-small bg-white">
      <main id="administration">
        <div class="row">

          <?php
            if (isset($isTestDevelopment)) {
              if($isTestDevelopment == true){
                include("components/testenvnotification.php");
              }
            }
          ?>

          <div class="col-12">
            <h1 class="display-5 fw-bold text-center">Administration</h1>
          </div>
          <div class="col-12">
            <h2 class="display-7 fw-bold text-center">here you can set up the app</h2>
          </div>

        </div>

      </main>
  </div>

  <?php  
  // admin page navigation
  include("components/administration_pagenavigation.php");
  ?>

  <div class="container bg-white">

  <?php
  // admin sections
  include("components/administration_appuser.php");
  include("components/administration_navregistration.php");
  include("components/administration_footerlinks.php");
  include("components/administration_editmainapptexts.php");
  include("components/administration_mailtexts.php");
  include("components/administration_fileuploads.php");

  mysqli_close($connector);

  ?>

  </div>

<?php
    include("../shared/contactsection.php");
    include("../shared/footer.php");
?>

    <script src="../shared/libs/jquery/jquery3.6.0.min.js"></script>
    <script src="../shared/libs/bootstrap/js/bootstrap.js"></script>
    <script src="../shared/assets/js/formvalidation.js"></script>
    <script src="../shared/assets/js/togglevisibility.js"></script>
    <script src="../shared/assets/js/hidenotification.js"></script>
    <script src="../shared/assets/js/scipt.js" defer></script>
    <script src="../shared/assets/js/navpills.js" defer></script>
    <script src="../shared/assets/js/tooltip.js" defer></script>
    <script src="../shared/assets/js/administration.js" defer></script>

  </body>
</html>