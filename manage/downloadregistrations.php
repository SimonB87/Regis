<?php
session_start();
require '../config/config.php';

$username;
$usernamelevel;

/*if the user is loggen in, make the username variable equal to username. If user is not logged in, send him back to register page.*/
if (isset($_SESSION['username'])) {
  $userLoggedIn = $_SESSION['username'];
  $user_details_query = mysqli_query($connector, "SELECT * FROM users WHERE username='$userLoggedIn'");
  $user = mysqli_fetch_array($user_details_query);

  $username = $_SESSION['username'];
  $usernamelevel = $_SESSION['user_level'];
}
else {
  header("Location: login.php");
  exit();
}
?>


<?php

  $list = [];

  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

  // debug
  //if (!mysqli_query($connector, "SET a=1")) {
  //  printf("Error message: %s\n", mysqli_error($link));
  //}


  if (!mysqli_set_charset($connector, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($con));
    exit();
    } else {
            //printf("Current character set: %s\n", mysqli_character_set_name($con));//used only for testing
    }

    $sql = "SELECT * FROM registrations ORDER BY id DESC";

    $results = $connector-> query($sql);
    //Error case
    if (!$sql ) {
      echo "Failed! <br> Error sql: " . mysql_error();
    }
    
    
    if (mysqli_query($connector, $sql)) {
      //debug echo json_encode(array("statusCode"=>200));
    } 
    else {
      echo json_encode(array("sql - statusCode"=>418));
    }

    $paymentStatus = "TOOO - payment status";

    //function to fatch the data

    if (($usernamelevel == "8") || ($usernamelevel == "9")) {
    
      $list = array (
          array('Order ID', 'Event name', 'Registration date ', 'Client name', 'Pass type', 'Price', 'Client email', 'Registration type', 'Other ticket options ', 'Client phone','Client country','Client comments','Client confrimation 1 description ','Client confrimation 1','Client confrimation 2 description','Client confrimation 2','Client confrimation 3 description','Client confrimation 3','Payment status','ID (in database)')
      );

      if ($results-> num_rows > 0 ) {
        while ($row = $results-> fetch_assoc()) {

          if (isset($list)) {
            echo "I am here...<br>";
          } else {
            echo "Nothing here...<br>";
          }

          $newRow = array( $row["orderID"], $row["eventName"], $row["registrationdate"], $row["clientName"], $row["passType"], $row["formPrice"], $row["clientEmail"], $row["dancerKind"], $row["registrationType"], $row["otherTicketOptions"], $row["clientPhone"], $row["clientCountry"], $row["clientComments"], $row["confirmPrivateInformation1Description"], $row["confirmPrivateInformation1"], $row["confirmPrivateInformation2Description"], $row["confirmPrivateInformation2"], $row["confirmPrivateInformation3Description"], $row["confirmPrivateInformation3"], "TODO - paymentStatus" , $row["id"] );

          $list = array_push($list, $newRow );
      }
      $list = array_push($list, " 0 " );
    } else {
      $list = array_push($list, "There are 0 results in DB table" );
    }

  }

  mysqli_close($connector);

  // Create a CSV file from DB

  $fp = fopen('file.csv', 'w');

  foreach ($list as $fields) {
      fputcsv($fp, $fields);
  }

  fclose($fp);

?>

