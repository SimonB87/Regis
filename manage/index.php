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

  </head>
  <body style="background: #000;">

    <?php
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
            <div class="col-12">
              <h2 class="text-center display-7 fw-bold">Current event summary</h2>
            </div>
            <div class="col-6 center-margin">
            <!-- TODO - statistics about current event registrations - show data from DB-->
              <p><strong> Event name : </strong> Tester & Testie Easter Prague Bachata Weekend</p>
              <p><span class="fw-bold bg-secondary text-white padding-small rounded">20</span> Number of registrations <p>
              <p><span class="fw-bold bg-success text-white padding-small rounded">15</span> Paid registrations </p>
              <p><span class="fw-bold bg-info text-white padding-small rounded">3</span> Registrations waiting for payment </p>
              <p><span class="fw-bold bg-danger text-white padding-small rounded">2</span> Delayed registration payments </p>
            </div>
          </div>

          <div class="row"> 
            <div class="col-6 center-margin text-center my-5">
                <a href="registrations.php">
                  <button type="button" class="btn btn-primary">
                    MANAGE REGISTRATIONS
                  </button>
                </a>
            </div>
          </div>

        </div>

      </main>
</div>
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