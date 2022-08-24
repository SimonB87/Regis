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

    $messageName = (isset($_POST["messagename"])) ? mysqli_real_escape_string($connector, $_POST["messagename"]) : null;
    $usermail = (isset($_POST["usermail"])) ? mysqli_real_escape_string($connector, $_POST["usermail"]) : null;
    $userright = (isset($_POST["userright"])) ? mysqli_real_escape_string($connector, $_POST["userright"]) : null;

    $content = "";
    if ($connector -> connect_errno) {
      $content = $content . " Failed to connect to MySQL: " . $mysqli -> connect_error . " ;";
      //exit();
    } else {
      $content = $content . " Connected to database. ";
    }

    if ($messageName == "administration_updateuser") {
      $sql_update = "UPDATE `users` SET `user_level`='$userright' WHERE  email='$usermail'";
    }

    // Perform a query, check for error
    if (!$connector -> query($sql_update)) {
      $content = $content . ( "Error description: " . $connector -> error) .";";
    } else {
      $content = $content . " Information updated. ";
    }

    if (mysqli_query($connector, $sql_update)) {
      echo json_encode(array("statusCode"=>200, "content"=> $content, "debug" => "..." ));
    } 
    else {
      echo json_encode(array("statusCode"=>418, "content"=> $content, "debug" => "..." ));
    }


  }

  mysqli_close($connector);

?>