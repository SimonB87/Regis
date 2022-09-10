<?php

session_start();
require '../../config/config.php';

$username = $_SESSION['username'];
$usernamelevel = $_SESSION['user_level'];

if($usernamelevel == "9") {

  // change character set to utf8
  if (!mysqli_set_charset($connector, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($connector));
    exit();
  } else {
    //printf("Current character set: %s\n", mysqli_character_set_name($connector));//used only for testing
  }

  $messageName = (isset($_POST["messagename"])) ? mysqli_real_escape_string($connector, $_POST["messagename"]) : null;

  $emailTextRegistrationNotice = (isset($_POST["emailTextRegistrationNotice"])) ? mysqli_real_escape_string($connector, $_POST["emailTextRegistrationNotice"]) : null;
  $emailTextOrderPaid = (isset($_POST["emailTextOrderPaid"])) ? mysqli_real_escape_string($connector, $_POST["emailTextOrderPaid"]) : null;
  $emailTextPaymentReminder = (isset($_POST["emailTextPaymentReminder"])) ? mysqli_real_escape_string($connector, $_POST["emailTextPaymentReminder"]) : null;
  $emailTextRegistrationCancelled = (isset($_POST["emailTextRegistrationCancelled"])) ? mysqli_real_escape_string($connector, $_POST["emailTextRegistrationCancelled"]) : null;

  $content = "";
  if ($connector -> connect_errno) {
    $content = $content . " Failed to connect to MySQL: " . $mysqli -> connect_error . " ;";
    //exit();
  } else {
    $content = $content . " Connected to database. ";
  }

  if ($messageName == "administration_editemailtexts") {
    $sql_update = "UPDATE `settings` SET `emailTextRegistrationNotice`='$emailTextRegistrationNotice', `emailTextOrderPaid`='$emailTextOrderPaid', `emailTextPaymentReminder`='$emailTextPaymentReminder', `emailTextRegistrationCancelled`='$emailTextRegistrationCancelled' WHERE id='1'";
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

  mysqli_close($connector);

}

?>