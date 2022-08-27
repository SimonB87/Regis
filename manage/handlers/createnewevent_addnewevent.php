<?php

  session_start();
  require '../../config/config.php';

  $username = $_SESSION['username'];
  $usernamelevel = $_SESSION['user_level'];

  // change character set to utf8
  if (!mysqli_set_charset($connector, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($connector));
    exit();
  } else {
    //printf("Current character set: %s\n", mysqli_character_set_name($connector));//used only for testing
  }

  if($usernamelevel == "9") {

    $messageName = (isset($_POST["messageName"])) ? mysqli_real_escape_string($connector, $_POST["messageName"]) : null;
    $eventName = (isset($_POST["eventName"])) ? mysqli_real_escape_string($connector, $_POST["eventName"]) : null;
    $eventStartDate = (isset($_POST["eventStartDate"])) ? mysqli_real_escape_string($connector, $_POST["eventStartDate"]) : null;
    $eventEndDate = (isset($_POST["eventEndDate"])) ? mysqli_real_escape_string($connector, $_POST["eventEndDate"]) : null;

    $content = "";
    if ($connector -> connect_errno) {
      $content = $content . " Failed to connect to MySQL: " . $mysqli -> connect_error . " ;";
      //exit();
    } else {
      $content = $content . " Connected to database. ";
    }

    // Insert new event
    $request1 = null;
    $sql_insert = "";

    if ($messageName == "createnewevent_addnewevent") {
      $sql_insert = "INSERT INTO events (eventName, eventStartDate, eventEndDate) VALUES ('$eventName', '$eventStartDate', '$eventEndDate')";
    }

    // Perform a query, check for error - request 1
    if (!$connector -> query($sql_insert)) {
      $content = $content . ( "Error description: " . $connector -> error) .";";
    } else {
      $content = $content . " Event saved. ";
    }

    if (mysqli_query($connector, $sql_insert)) {
      $request1 = true;
    }
    else {
      $request1 = false;
    }

    // Get Event ID
    $request2 = null;
    $eventDataId = 0;

    $sql_getId = "SELECT * FROM events ORDER BY id DESC LIMIT 1"; // get ID

    $results = $connector-> query($sql_getId);

    if ($results-> num_rows > 0 ) {
      while ($row = $results-> fetch_assoc()) {
        $eventDataId = $row["id"] ;
      }
    }
    else {
      $content = $content . " 2) There are 0 results in DB table; ";
    }


    // Perform a query, check for error - request 2
    if (!$connector -> query($sql_getId )) {
      $content = $content . ( "Error description: " . $connector -> error) .";";
    } else {
      $content = $content . " Event ID received. ";
    }

    if (mysqli_query($connector, $sql_getId)) {
      $request2 = true;
    }
    else {
      $request2 = false;
    }


    if ($request1 == true) {

      if ($request2 == true) {
        echo json_encode(array("statusCode"=>200, "content"=> $content, "newEventId" => $eventDataId, "debug" => "1) OK 2) OK" ));
      } else if ($request2 == false) {
        echo json_encode(array("statusCode"=>418, "content"=> $content, "newEventId" => $eventDataId, "debug" => "1) OK 2) KO" ));
      } 

    } else if ($request1 == false) {
      echo json_encode(array("statusCode"=>418, "content"=> $content, "newEventId" => "...", "debug" => "1) KO 2) xx" ));
    } 

  }

  mysqli_close($connector);

?>