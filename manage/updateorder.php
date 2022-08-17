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

    $targetOrderId = (isset($_POST["orderid"])) ? mysqli_real_escape_string($connector, $_POST["orderid"]) : null;
    $messageName = (isset($_POST["messagename"])) ? mysqli_real_escape_string($connector, $_POST["messagename"]) : null;

    $clientname = (isset($_POST["ordername"])) ? mysqli_real_escape_string($connector, $_POST["ordername"]) : null;
    $paymentoption = (isset($_POST["paymentoption"])) ? mysqli_real_escape_string($connector, $_POST["paymentoption"]) : null;

    $dancerkind = (isset($_POST["dancerkind"])) ? mysqli_real_escape_string($connector, $_POST["dancerkind"]) : null;
    $passType = (isset($_POST["passType"])) ? mysqli_real_escape_string($connector, $_POST["passType"]) : null;
    $otherTicketOptions = (isset($_POST["otherTicketOptions"])) ? mysqli_real_escape_string($connector, $_POST["otherTicketOptions"]) : null;
    $otherDancerKind = (isset($_POST["otherDancerKind"])) ? mysqli_real_escape_string($connector, $_POST["otherDancerKind"]) : null;
    $clientName = (isset($_POST["clientName"])) ? mysqli_real_escape_string($connector, $_POST["clientName"]) : null;
    $clientEmail = (isset($_POST["clientEmail"])) ? mysqli_real_escape_string($connector, $_POST["clientEmail"]) : null;
    $clientPhone = (isset($_POST["clientPhone"])) ? mysqli_real_escape_string($connector, $_POST["clientPhone"]) : null;
    $clientCountry = (isset($_POST["clientCountry"])) ? mysqli_real_escape_string($connector, $_POST["clientCountry"]) : null;
    $clientComments = (isset($_POST["clientComments"])) ? mysqli_real_escape_string($connector, $_POST["clientComments"]) : null;

    $content = "";
    if ($connector -> connect_errno) {
      $content = $content . " Failed to connect to MySQL: " . $mysqli -> connect_error . " ;";
      //exit();
    } else {
      $content = $content . " Connected to database. ";
    }

    $sql_update = "";
    $date = date("d.m.Y" );
    $currentAdminEditedOrder = (isset($_SESSION['username'])) ? $_SESSION['username'] : "";
    $adminNote = $currentAdminEditedOrder . " edited paystatus " . $date;

    $postMail = "";

    if($messageName == "updatepayment") {
      $sql_update = "UPDATE `registrations` SET `paystatus`='$paymentoption', `adminEditedOrder`='$adminNote' WHERE orderID='$targetOrderId'";

      if ( $paymentoption == "2 - paid" ) {
        include("emailing/orderpaid.php");
      } else if ($paymentoption == "3 - reminder sent" ) {
        include("emailing/paymentreminder.php");
      } 
    } else if ($messageName == "updateorder") {
      $sql_update = "UPDATE `registrations` SET dancerKind = '$dancerkind', passType = '$passType', otherTicketOptions = '$otherTicketOptions', otherDancerKind = '$otherDancerKind', clientName = '$clientName', clientEmail = '$clientEmail', clientPhone = '$clientPhone', clientCountry = '$clientCountry', clientComments = '$clientComments', `adminEditedOrder`='$currentAdminEditedOrder edited order data $date;' WHERE orderID='$targetOrderId'";
    }

    // Perform a query, check for error
    if (!$connector -> query($sql_update)) {
      $content = $content . ( "Error description: " . $connector -> error) .";";
    } else {
      $content = $content . " Information updated. ";
    }

    if (mysqli_query($connector, $sql_update)) {
      echo json_encode(array("statusCode"=>200, "content"=> $content, "postMail" => $postMail, "debug" => "..." ));
    } 
    else {
      echo json_encode(array("statusCode"=>418, "content"=> $content, "postMail" => $postMail, "debug" => "..." ));
    }

  }

	mysqli_close($connector);
?>