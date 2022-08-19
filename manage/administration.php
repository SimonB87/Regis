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

  </head>
  <body style="background: #303030;">

    <?php
    include("shared/navigation.php");

    ?> 

    <div class="padding-small bg-white">
      <main>

        <h1 class="display-5 fw-bold text-center">Administration</h1>
        <h2 class="display-7 fw-bold text-center">here you can set up the app</h2>

      </main>
  </div>

  <div class="container bg-white">
    <div class="row padding-regular-top">
      <div class="col-12"> <h3 class="display-7 fw-bold"> App users </h3> </div>
      <div class="col-12"> Edit user rights for each of 4 app users </div>
      
    </div>
  </div>

  <div class="container bg-white">
    <div class="row padding-regular-top">
      <div class="col-12"> <h3 class="display-7 fw-bold"> Registration page menu </h3> </div>
      <div class="col-12"> Edit navigation items in the navigation menu of the public page with registration form </div>
    
    </div>
  </div>


  <div class="container bg-white">
    <div class="row padding-regular-top">
      <div class="col-12"> <h3 class="display-7 fw-bold"> Links in page footer </h3> </div>
      <div class="col-12"> Edit link in the footer of the public page with registration form </div>
    
    </div>
  </div>

  <div class="container bg-white">
    <div class="row padding-regular-top">
      <div class="col-12"> <h3 class="display-7 fw-bold"> Payment infromation </h3> </div>
      <div class="col-12"> Edit information regarding bak transfer for ticket purchase </div>
    
    </div>
  </div>

  <div class="container bg-white">
    <div class="row padding-regular-top">
      <div class="col-12"> <h3 class="display-7 fw-bold"> Edit texts in emaile </h3> </div>
      <div class="col-12"> Edit information regarding bak transfer for ticket purchase </div>
    
    </div>
  </div>

  <div class="container bg-white">
    <div class="row padding-regular-top padding-regular-bottom">
      <div class="col-12"> <h3 class="display-7 fw-bold"> File uploads </h3> </div>
      <div class="col-12"> Check and delete all file in the upload folder </div>
    
    </div>
  </div>

<?php
    include("../shared/contactsection.php");
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