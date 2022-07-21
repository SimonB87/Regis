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

<!DOCTYPE html>
<html lang="en">
  <head>

    <title> Download Event registration | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

  </head>
  <body>

<?php

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

    $paymentStatus = "TODO - payment status";

    //function to fatch the data

    if (($usernamelevel == "8") || ($usernamelevel == "9")) {

      echo "<table>";
      echo "<thead>
              <tr>
                <th> Order ID </th>
                <th data-breakpoints='xs sm'> Event name </th>
                <th> Registration date </th>
                <th> Client name </th>
                <th data-breakpoints='xs sm md'> Pass type </th>
                <th> Price </th>
                <th data-breakpoints='xs sm md'> Client email </th>
                <th data-breakpoints='xs sm md'> Dancer kind </th> 
                <th data-breakpoints='xs sm md lg'> Registration type </th> 
                <th data-breakpoints='xs sm md lg'> Other ticket options </th> 
                <th data-breakpoints='xs sm md'> Client phone </th> 
                <th data-breakpoints='xs sm md lg'> Client country </th> 
                <th data-breakpoints='xs sm md lg'> Client comments </th> 
                <th data-breakpoints='xs sm md lg'> Client Confrimation 1 Description </th> 
                <th data-breakpoints='xs sm md lg'> Client Confrimation 1 </th> 
                <th data-breakpoints='xs sm md lg'> Client Confrimation 2 Description </th> 
                <th data-breakpoints='xs sm md lg'> Client Confrimation 2 </th> 
                <th data-breakpoints='xs sm md lg'> Client Confrimation 3 Description </th> 
                <th data-breakpoints='xs sm md lg'> Client Confrimation 3 </th> 
                <th data-breakpoints='xs sm'> Payment status </th>
                <th data-breakpoints='xs sm md lg'> ID (in database) </th>
              </tr>
            </thead>
            <tbody>";
    
      if ($results-> num_rows > 0 ) {
        while ($row = $results-> fetch_assoc()) {

          echo "<tr><td>" . $row["orderID"] . "</td><td>" . $row["eventName"] . "</td><td>" . $row["registrationdate"]  . "</td><td>" . $row["clientName"] ."</td><td>" . $row["passType"] . "</td> <td>" . $row["formPrice"] . "</td> <td>" . $row["clientEmail"]  . "</td> <td>" . $row["dancerKind"] . "</td><td>" . 
          $row["registrationType"] . "</td><td>" . $row["otherTicketOptions"] . "</td><td>" . $row["clientPhone"] . "</td><td>" . $row["clientCountry"] . "</td><td>" . $row["clientComments"] . "</td><td>" . $row["confirmPrivateInformation1Description"] . "</td><td>" .
          $row["confirmPrivateInformation1"] . "</td><td>" . $row["confirmPrivateInformation2Description"] . "</td><td>" . $row["confirmPrivateInformation2"] . "</td><td>" . $row["confirmPrivateInformation3Description"] . "</td><td>" . $row["confirmPrivateInformation3"] . "</td><td>" . $paymentStatus . "</td><td>" . $row["id"] . "</td>" . "</tr>";

      }

      echo "</tbody></table>";
      //echo " 0 " ;
    } else {
      echo "There are 0 results in DB table";
    }

  }

  mysqli_close($connector);


?>

<script src="../shared/assets/js/downloadcsv.js"></script>

</body>
</html>
