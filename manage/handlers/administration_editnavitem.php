<?php

session_start();
require '../../config/config.php';

$username = $_SESSION['username'];
$usernamelevel = $_SESSION['user_level'];

if($usernamelevel == "9") {

  $debug = "";
  // change character set to utf8
  if (!mysqli_set_charset($connector, "utf8")) {
    $message1 =(" (1) Error loading character set utf8: %s\n" . mysqli_error($connector));
    $debug = $debug . $message1;
    exit();
  } else {
    //printf("Current character set: %s\n", mysqli_character_set_name($connector));//used only for testing
  }

  if (mysqli_connect_errno()) {
    $message2 = " (2) Connect failed: %s\n" . mysqli_connect_error();
    $debug = $debug . $message2;
    exit();
  }

  //debug 
  // if (!mysqli_query($connector, `DECLARE @a=1;`)) {
  //   $message3 = (" (3) Error message: %s\n" . mysqli_error($connector));
  //   $debug = $debug . $message3;
  // }

  $messageName = (isset($_POST["messagename"])) ? mysqli_real_escape_string($connector, $_POST["messagename"]) : null;
  $navItemId = (isset($_POST["navItemId"])) ? mysqli_real_escape_string($connector, $_POST["navItemId"]) : null;
  $navItemAllowed = (isset($_POST["navItemAllowed"])) ? mysqli_real_escape_string($connector, $_POST["navItemAllowed"]) : null;
  $navItemName = (isset($_POST["navItemName"])) ? mysqli_real_escape_string($connector, $_POST["navItemName"]) : null;
  $navItemLink = (isset($_POST["navItemLink"])) ? mysqli_real_escape_string($connector, $_POST["navItemLink"]) : null;

  $navItemAllowed = ( $navItemAllowed == "on" ) ? "on" : "off";


  $content = "";
  if ($connector -> connect_errno) {
    $debug = $debug . " Failed to connect to MySQL: " . $mysqli -> connect_error . " ;";
    //exit();
  } else {
    $debug = $debug . " Connected to database. ";
  }

  if ($messageName == "administration_editnavitem") {
    $sql_update = "UPDATE `navitems` SET `itemAllowed`='$navItemAllowed', `displayName`='$navItemName', `itemWebLink`='$navItemLink' WHERE id='$navItemId'";
  }

  // Perform a query, check for error
  if (!$connector -> query($sql_update)) {
    $content = $content . ( "Error description: " . $connector -> error) .";";
  } else {
    $content = $content . " Information updated. ";
  }

  if (mysqli_query($connector, $sql_update)) {
    echo json_encode(array("statusCode"=>200, "content"=> $content, "debug" => $debug ));
  } 
  else {
    echo json_encode(array("statusCode"=>418, "content"=> $content, "debug" => $debug ));
  }

  mysqli_close($connector);

}

?>