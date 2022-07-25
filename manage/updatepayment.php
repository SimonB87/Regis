<?php

  session_start();
  require '../config/config.php';

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

    $name = (isset($_POST["orderid"])) ? mysqli_real_escape_string($connector, $_POST["orderid"]) : null;
    $clientname = (isset($_POST["ordername"])) ? mysqli_real_escape_string($connector, $_POST["ordername"]) : null;
    $paymentoption = (isset($_POST["paymentoption"])) ? mysqli_real_escape_string($connector, $_POST["paymentoption"]) : null;

    $content = "";
    if ($connector -> connect_errno) {
      $content = $content . " Failed to connect to MySQL: " . $mysqli -> connect_error . " ;";
      //exit();
    } else {
      $content = $content . " Connected to database. ";
    }
    
    $sql = "UPDATE `registrations` SET `paystatus`='$paymentoption' WHERE orderID='$name'";

        // Perform a query, check for error
    if (!$connector -> query($sql)) {
      $content = $content . ( "Error description: " . $connector -> error) .";";
    } else {
      $content = $content . " Information updated. ";
    }

    if (mysqli_query($connector, $sql)) {
      echo json_encode(array("statusCode"=>200, "content"=> $content ));
    } 
    else {
      echo json_encode(array("statusCode"=>418, "content"=> $content ));
    }

  }

	mysqli_close($connector);
?>