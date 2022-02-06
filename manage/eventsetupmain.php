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

    <link rel="stylesheet" type="text/css" href="../shared/libs/footablebootstrap/css/footable.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <head>
  <body>

    <?php
    include("shared/navigation.php");
    ?> 

    <main>
      <div class="container my-5 text-center">
        <div class="row">
          <h1 class="display-5 fw-bold">Event main set up</h1>
          <p class="display-7 fw-bold">Set here event main characteristics</p>
        </div>
      </div>

      <div class="container padding-regular-bottom ">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 center-margin">
            <!-- TODO : form with all these inputs -->
            * Event ID (required) - type unique integer, unique from all other past events<br>
            * Event status (required) - select: registrations open; event passed; event cancelled;<br>
            * Event name (required) - ... long text<br>
            * Event start date (required) - type date <br>
            * Event end date (required) - type date<br>
            * Early birds registrations start date (optional)- type date<br>
            * Early birds registrations - amount of tickets - required if "Early birds registrations start date" is set <br>
            * Regular tickets registrations start date (optional)- type date<br>
            * Regular tickets registrations - amount of tickets - required if "Regular tickets registrations start date" is set <br>
            * Special type 1 registrations start date (optional) - for party tickets? - type date<br>
            * Special type 1 registrations name - Type name - required if "Special type 1 registrations start date" is set - type text<br>
            * Special type 1 registrations - amount of tickets - required if "Special type 1 registrations start date" is set <br>
            * Special type 2 registrations start date (optional) - for other purposes - type date<br>
            * Special type 2 registrations name - Type name - required if "Special type 2 registrations start date" is set - type text<br>
            * Special type 2 registrations - amount of tickets - required if "Special type 2 registrations start date" is set <br>

          </div>
        </div>
      </div>
    </main>

    <div class="container text-center">
      <div class="row">
        <div class="col-12 my-2">
          <h2 class="display-5 fw-bold">Past events data</h2>
        </div>
        <div class="col-12 my-2">

        <table id="events" class="table search_project_table" data-sorting="true" data-paging="true">
          <thead class="bg-info text-white">
            <tr>
              <th class="footable-sortable"> Event ID </th>
              <th class="footable-sortable"> Event status </th>
              <th class="footable-sortable" data-breakpoints="xs sm"> Event name </th>
              <th class="footable-sortable" data-breakpoints="xs sm"> Event start date </th>
              <th class="footable-sortable" data-breakpoints="xs sm"> Event end date </th>
              <th class="footable-sortable" data-breakpoints="xs sm md"> Early birds registrations start date </th>
              <th class="footable-sortable" data-breakpoints="xs sm md lg"> Early birds amount of tickets </th>
              <th class="footable-sortable" data-breakpoints="xs sm md"> Regular tickets registrations start date </th> 
              <th class="footable-sortable" data-breakpoints="xs sm md lg"> Regular tickets amount</th> 
              <th class="footable-sortable" data-breakpoints="xs sm md lg"> Special type 1 registrations start date </th> 
              <th class="footable-sortable" data-breakpoints="xs sm md lg"> Special type 1 registrations name </th> 
              <th class="footable-sortable" data-breakpoints="xs sm md lg"> Special type 1 registrations amount of tickets </th> 
              <th class="footable-sortable" data-breakpoints="xs sm md lg"> Special type 2 registrations start date </th> 
              <th class="footable-sortable" data-breakpoints="xs sm md lg"> Special type 2 registrations name </th> 
              <th class="footable-sortable" data-breakpoints="xs sm md lg"> Special type 2 registrations amount of tickets </th> 
            </tr>
          </thead>

          <tbody>
            <!-- TODO : show data in tabel from database -->
            <tr>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
              <td> # </td>
            </tr>
          </tbody>
        </table>

        </div>
      </div>
    </div>
      <!-- TODO : table of last last event -->

<?php
    include("../shared/contactsection.php");
    include("../shared/footer.php");
?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="../shared/libs/footablebootstrap/js/footable.js" defer></script>
    <script defer>
    jQuery(function($){
        $('.table').footable();
      });
    /* Sollution guide 15.10.2020: http://fooplugins.github.io/FooTable/docs/examples/basic/single-header.html */
    </script>

    <script src="../shared/libs/bootstrap/js/bootstrap.js"></script>
    <script src="../shared/assets/js/formvalidation.js"></script>
    <script src="../shared/assets/js/togglevisibility.js"></script>
    <script src="../shared/assets/js/hidenotification.js"></script>

  </body>
</html>