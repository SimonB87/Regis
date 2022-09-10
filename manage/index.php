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

$authorizedUser = ( ($usernamelevel == "9") || ($usernamelevel == "8") );

/*if the user is loggen in, make the username variable equal to username. If user is not logged in, send him back to register page.*/
if ( (isset($_SESSION['username'])) && ( $authorizedUser == true )) {
  $userLoggedIn = $_SESSION['username'];
  $user_details_query = mysqli_query($connector, "SELECT * FROM users WHERE username='$userLoggedIn'");
  $user = mysqli_fetch_array($user_details_query);
}
else {
  header("Location: login.php");
  exit();
}

include("handlers/handler_testenvironment.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    include("shared/head.php");
    ?>
    <title> Event registration | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>
    <link href="../shared/libs/charts.js/css/chart.min.css" rel="stylesheet" >

  </head>
  <body style="background: #303030;">

    <?php
    include("handlers/handler_getopeneventid.php"); // leave this here, it belogs here
    include("shared/navigation.php");

    ?> 

    <div class="padding-small" style="background: #fff;">
      <main>

        <div class="container px-4 py-5 my-5 text-center">
          <div class="row">
            <h1 class="display-5 fw-bold">Hello,</h1>
            <h2 class="display-7 fw-bold">you are logged in now</h2>
          </div>
        </div>

        <div class="container px-4 py-5 my-5">

          <div class="row">

          <?php
          if (isset($isTestDevelopment)) {
            if($isTestDevelopment == true){
              include("components/testenvnotification.php");
            }
          }
          ?>

          </div>


        <?php
        
        if ( $authorizedUser == true ) {

          $isEventEdited = true;
          include("handlers/handler_geteventdata.php");

          if (isset($eventDataEventName)) {
            if ( strlen($eventDataEventName) > 2 ) {
              
              include("handlers/handler_registrationdataforanalytics.php");
              include("components/registrationanalytics.php");
    
              mysqli_close($connector);

            } else {
              echo "<div class='row'> <div class='col-12 padding-regular bg-info text-white'> <h3> Looks like there is no open event. </h3> <h5> Create a new event. </h5> </div></div>";
            }
          } else {
            echo "<div class='row'> <div class='col-12 padding-regular bg-info text-white'> <h3> Looks like there is no open event. </h3> <h5> Create a new event. </h5> </div></div>";
          }



        } else {
          echo "<div class='row'> <div class='col-12 padding-regular bg-warning'> <h3 class='text-white'> User not authorized</h3> </div></div>";
        }

        ?>

        </div>

      </main>
</div>
<?php
    include("../shared/footer.php");
?>

    <script src="../shared/libs/bootstrap/js/bootstrap.js"></script>
    <script src="../shared/libs/charts.js/js/chart.bundle.min.js"></script>
    <script src="../shared/assets/js/formvalidation.js"></script>
    <script src="../shared/assets/js/togglevisibility.js"></script>
    <script src="../shared/assets/js/hidenotification.js"></script>
    <script src='../shared/assets/js/scipt.js' defer></script>
    <script src="../shared/assets/js/chartjsinit.js"></script>
    <script src="../shared/assets/js/populateregistrationsdata.js" defer></script>

  </body>
</html>