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

// change character set to utf8
if (!mysqli_set_charset($connector, "utf8")) {
	printf("Error loading character set utf8: %s\n", mysqli_error($connector));
	exit();
} else {
	//printf("Current character set: %s\n", mysqli_character_set_name($connector));//used only for testing
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    include("shared/head.php");
    ?>

    <title> Event registration | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

  <head>
  <body>

    <?php
    include("shared/navigation.php");
    ?> 

    <main>
    <div class="container px-4 py-5 my-5 text-center">
      <div class="row">
        <h1 class="display-5 fw-bold">Hello,</h1>
        <h2 class="display-7 fw-bold">you are logged in now</h2>
      </div>
    </div>
    <!-- TODO - statistics about current event registrations-->
    <div class="container px-4 py-5 my-5">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center display-7 fw-bold">Current event summary</h2>
        </div>
        <div class="col-6 center-margin">
          <p>Event name: <span class="fw-bold">Tester & Testie Easter Prague Bachata Weekend</span></p>
          <p>Number of registrations: <span class="fw-bold">20</span><p>
          <p>Paid registrations: <span class="fw-bold">15</span></p>
          <p>Registrations waiting for payment: <span class="fw-bold">3</span></p>
          <p>Delayed registration payments: <span class="fw-bold">3</span></p>
        </div>
      </div>
    </div>
    </main>

<?php
    include("../shared/contactsection.php");
    include("../shared/footer.php");
?>

    <script src="../shared/libs/bootstrap/js/bootstrap.js"></script>
    <script src="../shared/assets/js/formvalidation.js"></script>
    <script src="../shared/assets/js/togglevisibility.js"></script>
    <script src="../shared/assets/js/hidenotification.js"></script>

  </body>
</html>