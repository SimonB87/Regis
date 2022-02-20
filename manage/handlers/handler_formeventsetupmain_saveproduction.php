<?php

// change character set to utf8
if (!mysqli_set_charset($connector, "utf8")) {
	printf("Error loading character set utf8: %s\n", mysqli_error($connector));
	exit();
} else {
	//printf("Current character set: %s\n", mysqli_character_set_name($connector));//used only for testing
}

$isTestEnv = null;
$hostName = $_SERVER['SERVER_NAME'];
if ( ($hostName == "localhost") || ($hostName == "127.0.0.1")) {
  $isTestEnv = true;
} else {
  $isTestEnv = false;
}

$username = $_SESSION['username'];
$usernamelevel = $_SESSION['user_level'];

if(isset($_POST["safe_form_data"])){

  if($usernamelevel == "9") {

    $eventID = null;
    if (isset($_POST["eventID"])) {
      $eventID = mysqli_real_escape_string($connector, $_POST["eventID"]);
    }
    $eventStatus = (isset($_POST["eventStatus"])) ? mysqli_real_escape_string($connector, $_POST["eventStatus"]) : null;
    $eventName = (isset($_POST["eventName"])) ? mysqli_real_escape_string($connector, $_POST["eventName"]) : null;
    $eventStartDate = (isset($_POST["eventStartDate"])) ? mysqli_real_escape_string($connector, $_POST["eventStartDate"]) : null;
    $eventEndDate = (isset($_POST["eventEndDate"])) ? mysqli_real_escape_string($connector, $_POST["eventEndDate"]) : null;
    $enableCoupleTicket = (isset($_POST["enableCoupleTicket"])) ? mysqli_real_escape_string($connector, $_POST["enableCoupleTicket"]) : null;
    $enableCoupleTicket = (strtolower( $enableCoupleTicket ) == "on") ? "Yes" : "No";

    $earlyBirdsRegistrationEnabled = (isset($_POST["earlyBirdsRegistrationEnabled"])) ? mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationEnabled"]) : null;
    $earlyBirdsRegistrationEnabled = (strtolower( $earlyBirdsRegistrationEnabled ) == "on") ? "Yes" : "No";
    $earlyBirdsRegistrationName = (isset($_POST["earlyBirdsRegistrationName"])) ? mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationName"]) : null;
    $earlyBirdsRegistrationsStartDate = (isset($_POST["earlyBirdsRegistrationsStartDate"])) ? mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationsStartDate"]) : null;
    $earlyBirdsRegistrationsEndDate = (isset($_POST["earlyBirdsRegistrationsEndDate"])) ? mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationsEndDate"]) : null;
    $ticketsAmountEarlyBirdsRegistrationsSingle = (isset($_POST["ticketsAmountEarlyBirdsRegistrationsSingle"])) ? mysqli_real_escape_string($connector, $_POST["ticketsAmountEarlyBirdsRegistrationsSingle"]) : null;
    $earlyBirdsTicketPriceSingle = (isset($_POST["earlyBirdsTicketPriceSingle"])) ? mysqli_real_escape_string($connector, $_POST["earlyBirdsTicketPriceSingle"]) : null;
    $earlyBirdsTicketPriceCouple = (isset($_POST["earlyBirdsTicketPriceCouple"])) ? mysqli_real_escape_string($connector, $_POST["earlyBirdsTicketPriceCouple"]) : null;
    $earlyBirdsTicketAmountCouple = (isset($_POST["earlyBirdsTicketAmountCouple"])) ? mysqli_real_escape_string($connector, $_POST["earlyBirdsTicketAmountCouple"]) : null;

    $regularRegistrationEnabled = (isset($_POST["regularRegistrationEnabled"])) ? mysqli_real_escape_string($connector, $_POST["regularRegistrationEnabled"]) : null;
    $regularRegistrationEnabled = (strtolower( $regularRegistrationEnabled ) == "on") ? "Yes" : "No";
    $regularRegistrationName = (isset($_POST["regularRegistrationName"])) ? mysqli_real_escape_string($connector, $_POST["regularRegistrationName"]) : null;
    $regularRegistrationsStartDate = (isset($_POST["regularRegistrationsStartDate"])) ? mysqli_real_escape_string($connector, $_POST["regularRegistrationsStartDate"]) : null;
    $regularRegistrationsEndDate = (isset($_POST["regularRegistrationsEndDate"])) ? mysqli_real_escape_string($connector, $_POST["regularRegistrationsEndDate"]) : null;
    $regularTicketPriceSingle = (isset($_POST["regularTicketPriceSingle"])) ? mysqli_real_escape_string($connector, $_POST["regularTicketPriceSingle"]) : null;
    $regularTicketAmountSingle = (isset($_POST["regularTicketAmountSingle"])) ? mysqli_real_escape_string($connector, $_POST["regularTicketAmountSingle"]) : null;
    $regularTicketPriceCouple = (isset($_POST["regularTicketPriceCouple"])) ? mysqli_real_escape_string($connector, $_POST["regularTicketPriceCouple"]) : null;
    $regularTicketAmountCouple = (isset($_POST["regularTicketAmountCouple"])) ? mysqli_real_escape_string($connector, $_POST["regularTicketAmountCouple"]) : null;

    $partyRegistrationEnabled = (isset($_POST["partyRegistrationEnabled"])) ? mysqli_real_escape_string($connector, $_POST["partyRegistrationEnabled"]) : null;
    $partyRegistrationEnabled = (strtolower( $partyRegistrationEnabled ) == "on") ? "Yes" : "No";
    $partyRegistrationName = (isset($_POST["partyRegistrationName"])) ? mysqli_real_escape_string($connector, $_POST["partyRegistrationName"]) : null;
    $partyRegistrationsStartDate = (isset($_POST["partyRegistrationsStartDate"])) ? mysqli_real_escape_string($connector, $_POST["partyRegistrationsStartDate"]) : null;
    $partyRegistrationsEndDate = (isset($_POST["partyRegistrationsEndDate"])) ? mysqli_real_escape_string($connector, $_POST["partyRegistrationsEndDate"]) : null;
    $partyTicketPriceSingle = (isset($_POST["partyTicketPriceSingle"])) ? mysqli_real_escape_string($connector, $_POST["partyTicketPriceSingle"]) : null;
    $partyTicketAmountSingle = (isset($_POST["partyTicketAmountSingle"])) ? mysqli_real_escape_string($connector, $_POST["partyTicketAmountSingle"]) : null;
    $partyTicketPriceCouple = (isset($_POST["partyTicketPriceCouple"])) ? mysqli_real_escape_string($connector, $_POST["partyTicketPriceCouple"]) : null;
    $partyTicketAmountCouple = (isset($_POST["partyTicketAmountCouple"])) ? mysqli_real_escape_string($connector, $_POST["partyTicketAmountCouple"]) : null;

    $specialType1RegistrationEnabled = (isset($_POST["specialType1RegistrationEnabled"])) ? mysqli_real_escape_string($connector, $_POST["specialType1RegistrationEnabled"]) : null;
    $specialType1RegistrationEnabled = (strtolower( $specialType1RegistrationEnabled ) == "on") ? "Yes" : "No";
    $specialType1RegistrationName = (isset($_POST["specialType1RegistrationName"])) ? mysqli_real_escape_string($connector, $_POST["specialType1RegistrationName"]) : null;
    $specialType1RegistrationsStartDate = (isset($_POST["specialType1RegistrationsStartDate"])) ? mysqli_real_escape_string($connector, $_POST["specialType1RegistrationsStartDate"]) : null;
    $specialType1RegistrationsEndDate = (isset($_POST["specialType1RegistrationsEndDate"])) ? mysqli_real_escape_string($connector, $_POST["specialType1RegistrationsEndDate"]) : null;
    $specialType1TicketPriceSingle = (isset($_POST["specialType1TicketPriceSingle"])) ? mysqli_real_escape_string($connector, $_POST["specialType1TicketPriceSingle"]) : null;
    $specialType1TicketAmountSingle = (isset($_POST["specialType1TicketAmountSingle"])) ? mysqli_real_escape_string($connector, $_POST["specialType1TicketAmountSingle"]) : null;
    $specialType1TicketPriceCouple = (isset($_POST["specialType1TicketPriceCouple"])) ? mysqli_real_escape_string($connector, $_POST["specialType1TicketPriceCouple"]) : null;
    $specialType1TicketAmountCouple  = (isset($_POST["specialType1TicketAmountCouple"])) ? mysqli_real_escape_string($connector, $_POST["specialType1TicketAmountCouple"]) : null;

    $specialType2RegistrationEnabled = (isset($_POST["specialType2RegistrationEnabled"])) ? mysqli_real_escape_string($connector, $_POST["specialType2RegistrationEnabled"]) : null;
    $specialType2RegistrationEnabled = (strtolower( $specialType2RegistrationEnabled ) == "on") ? "Yes" : "No";
    $specialType2RegistrationName = (isset($_POST["specialType2RegistrationName"])) ?  mysqli_real_escape_string($connector, $_POST["specialType2RegistrationName"]) : null;
    $specialType2RegistrationsStartDate = (isset($_POST["specialType2RegistrationsStartDate"])) ? mysqli_real_escape_string($connector, $_POST["specialType2RegistrationsStartDate"]) : null;
    $specialType2RegistrationsEndDate = (isset($_POST["specialType2RegistrationsEndDate"])) ? mysqli_real_escape_string($connector, $_POST["specialType2RegistrationsEndDate"]) : null;
    $specialType2TicketPriceSingle = (isset($_POST["specialType2TicketPriceSingle"])) ? mysqli_real_escape_string($connector, $_POST["specialType2TicketPriceSingle"]) : null;
    $specialType2TicketAmountSingle = (isset($_POST["specialType2TicketAmountSingle"])) ? mysqli_real_escape_string($connector, $_POST["specialType2TicketAmountSingle"]) : null;
    $specialType2TicketPriceCouple = (isset($_POST["specialType2TicketPriceCouple"])) ? mysqli_real_escape_string($connector, $_POST["specialType2TicketPriceCouple"]) : null;
    $specialType2TicketAmountCouple = (isset($_POST["specialType2TicketAmountCouple"])) ? mysqli_real_escape_string($connector, $_POST["specialType2TicketAmountCouple"]) : null;

    /** fix ID for Wedos DB - start **/ 
    $idData = null;
    if (($isTestEnv == false) || ($isTestEnv == 0) || ($isTestEnv == "0") ) {
      $id = 0;

      $sqlString = "SELECT max(id) FROM events";
      $results = $connector-> query($sqlString);
        //Error case
        if (!$sqlString ) {
          echo "Failed! <br> Error sql: " . mysql_error();
        }
        
        if (mysqli_query($connector, $sqlString)) {
          //debug echo json_encode(array("statusCode"=>200));
        } 
        else {
          echo json_encode(array("sqlString - statusCode"=>418));
        }
    
        //function to fatch the data
        if ($results-> num_rows > 0 ) {
          while ($row = $results-> fetch_assoc()) {
  
            $eventDataId = $row["id"] ;
            $idData = intval($eventDataId) + 1;
  
          }
          //echo "";
      }
      else {
          //echo "There are 0 results in DB table";
      }
    }
    /** fix ID for Wedos DB - end **/

    if(isset($_POST["newEventBoolean"])) {
      $newEventBoolean = mysqli_real_escape_string($connector, $_POST["newEventBoolean"]);
      
      if(strtolower($newEventBoolean) == "on") { //save a new event

        if (($isTestEnv == true) || ($isTestEnv == 1) || ($isTestEnv == "1") ) { 

          $query = mysqli_query($connector, 
          "INSERT INTO events (eventStatus, eventName, eventStartDate, eventEndDate, enableCoupleTicket, earlyBirdsRegistrationEnabled, earlyBirdsRegistrationName, earlyBirdsRegistrationsStartDate, earlyBirdsRegistrationsEndDate, ticketsAmountEarlyBirdsRegistrationsSingle , earlyBirdsTicketPriceSingle, earlyBirdsTicketPriceCouple, earlyBirdsTicketAmountCouple, regularRegistrationEnabled, regularRegistrationName, regularRegistrationsStartDate, regularRegistrationsEndDate, regularTicketPriceSingle, regularTicketAmountSingle, regularTicketPriceCouple, regularTicketAmountCouple, partyRegistrationEnabled, partyRegistrationName, partyRegistrationsStartDate, partyRegistrationsEndDate, partyTicketPriceSingle, partyTicketAmountSingle, partyTicketPriceCouple, partyTicketAmountCouple, specialType1RegistrationEnabled, specialType1RegistrationName, specialType1RegistrationsStartDate, specialType1RegistrationsEndDate, specialType1TicketPriceSingle, specialType1TicketAmountSingle, specialType1TicketPriceCouple, specialType1TicketAmountCouple, specialType2RegistrationEnabled, specialType2RegistrationName, specialType2RegistrationsStartDate, specialType2RegistrationsEndDate, specialType2TicketPriceSingle, specialType2TicketAmountSingle, specialType2TicketPriceCouple, specialType2TicketAmountCouple) 
          VALUES ('$eventStatus', '$eventName', '$eventStartDate', '$eventEndDate', '$enableCoupleTicket', '$earlyBirdsRegistrationEnabled', '$earlyBirdsRegistrationName', '$earlyBirdsRegistrationsStartDate', '$earlyBirdsRegistrationsEndDate', '$ticketsAmountEarlyBirdsRegistrationsSingle', '$earlyBirdsTicketPriceSingle', '$earlyBirdsTicketPriceCouple', '$earlyBirdsTicketAmountCouple', '$regularRegistrationEnabled', '$regularRegistrationName', '$regularRegistrationsStartDate', '$regularRegistrationsEndDate', '$regularTicketPriceSingle', '$regularTicketAmountSingle', '$regularTicketPriceCouple', '$regularTicketAmountCouple', '$partyRegistrationEnabled', '$partyRegistrationName', '$partyRegistrationsStartDate', '$partyRegistrationsEndDate', '$partyTicketPriceSingle', '$partyTicketAmountSingle', '$partyTicketPriceCouple', '$partyTicketAmountCouple', '$specialType1RegistrationEnabled', '$specialType1RegistrationName', '$specialType1RegistrationsStartDate', '$specialType1RegistrationsEndDate', '$specialType1TicketPriceSingle', '$specialType1TicketAmountSingle', '$specialType1TicketPriceCouple', '$specialType1TicketAmountCouple', '$specialType2RegistrationEnabled', '$specialType2RegistrationName', '$specialType2RegistrationsStartDate', '$specialType2RegistrationsEndDate', '$specialType2TicketPriceSingle', '$specialType2TicketAmountSingle', '$specialType2TicketPriceCouple', '$specialType2TicketAmountCouple')");

        } elseif (($isTestEnv == false) || ($isTestEnv == 0) || ($isTestEnv == "0") ) { 

          // fix ID for Wedos DB
          $query = mysqli_query($connector, 
          "INSERT INTO events (id, eventStatus, eventName, eventStartDate, eventEndDate, enableCoupleTicket, earlyBirdsRegistrationEnabled, earlyBirdsRegistrationName, earlyBirdsRegistrationsStartDate, earlyBirdsRegistrationsEndDate, ticketsAmountEarlyBirdsRegistrationsSingle , earlyBirdsTicketPriceSingle, earlyBirdsTicketPriceCouple, earlyBirdsTicketAmountCouple, regularRegistrationEnabled, regularRegistrationName, regularRegistrationsStartDate, regularRegistrationsEndDate, regularTicketPriceSingle, regularTicketAmountSingle, regularTicketPriceCouple, regularTicketAmountCouple, partyRegistrationEnabled, partyRegistrationName, partyRegistrationsStartDate, partyRegistrationsEndDate, partyTicketPriceSingle, partyTicketAmountSingle, partyTicketPriceCouple, partyTicketAmountCouple, specialType1RegistrationEnabled, specialType1RegistrationName, specialType1RegistrationsStartDate, specialType1RegistrationsEndDate, specialType1TicketPriceSingle, specialType1TicketAmountSingle, specialType1TicketPriceCouple, specialType1TicketAmountCouple, specialType2RegistrationEnabled, specialType2RegistrationName, specialType2RegistrationsStartDate, specialType2RegistrationsEndDate, specialType2TicketPriceSingle, specialType2TicketAmountSingle, specialType2TicketPriceCouple, specialType2TicketAmountCouple) 
          VALUES ('$idData', '$eventStatus', '$eventName', '$eventStartDate', '$eventEndDate', '$enableCoupleTicket', '$earlyBirdsRegistrationEnabled', '$earlyBirdsRegistrationName', '$earlyBirdsRegistrationsStartDate', '$earlyBirdsRegistrationsEndDate', '$ticketsAmountEarlyBirdsRegistrationsSingle', '$earlyBirdsTicketPriceSingle', '$earlyBirdsTicketPriceCouple', '$earlyBirdsTicketAmountCouple', '$regularRegistrationEnabled', '$regularRegistrationName', '$regularRegistrationsStartDate', '$regularRegistrationsEndDate', '$regularTicketPriceSingle', '$regularTicketAmountSingle', '$regularTicketPriceCouple', '$regularTicketAmountCouple', '$partyRegistrationEnabled', '$partyRegistrationName', '$partyRegistrationsStartDate', '$partyRegistrationsEndDate', '$partyTicketPriceSingle', '$partyTicketAmountSingle', '$partyTicketPriceCouple', '$partyTicketAmountCouple', '$specialType1RegistrationEnabled', '$specialType1RegistrationName', '$specialType1RegistrationsStartDate', '$specialType1RegistrationsEndDate', '$specialType1TicketPriceSingle', '$specialType1TicketAmountSingle', '$specialType1TicketPriceCouple', '$specialType1TicketAmountCouple', '$specialType2RegistrationEnabled', '$specialType2RegistrationName', '$specialType2RegistrationsStartDate', '$specialType2RegistrationsEndDate', '$specialType2TicketPriceSingle', '$specialType2TicketAmountSingle', '$specialType2TicketPriceCouple', '$specialType2TicketAmountCouple')");

        }


        $item = "New event \"" . $eventName . "\" was saved.";
        echo "<div id='notification_new1' class='notification'>" . $item . " <span class=\"notification--close\" onclick=\"hideNotification('notification_new1');\" > X </span>" . "</div>";
      }
    } else {
      //update current event
      $query = mysqli_query($connector,
      "UPDATE events SET 
        eventStatus = '$eventStatus', eventName = '$eventName', eventStartDate = '$eventStartDate', eventEndDate = '$eventEndDate', enableCoupleTicket = '$enableCoupleTicket', earlyBirdsRegistrationEnabled = '$earlyBirdsRegistrationEnabled', earlyBirdsRegistrationName = '$earlyBirdsRegistrationName', earlyBirdsRegistrationsStartDate = '$earlyBirdsRegistrationsStartDate', earlyBirdsRegistrationsEndDate = '$earlyBirdsRegistrationsEndDate', ticketsAmountEarlyBirdsRegistrationsSingle = '$ticketsAmountEarlyBirdsRegistrationsSingle', earlyBirdsTicketPriceSingle = '$earlyBirdsTicketPriceSingle', earlyBirdsTicketPriceCouple = '$earlyBirdsTicketPriceCouple', earlyBirdsTicketAmountCouple = '$earlyBirdsTicketAmountCouple', regularRegistrationEnabled = '$regularRegistrationEnabled', regularRegistrationName = '$regularRegistrationName', regularRegistrationsStartDate = '$regularRegistrationsStartDate', regularRegistrationsEndDate = '$regularRegistrationsEndDate', regularTicketPriceSingle = '$regularTicketPriceSingle', regularTicketAmountSingle = '$regularTicketAmountSingle', regularTicketPriceCouple = '$regularTicketPriceCouple', regularTicketAmountCouple = '$regularTicketAmountCouple', partyRegistrationEnabled = '$partyRegistrationEnabled', partyRegistrationName = '$partyRegistrationName', partyRegistrationsStartDate = '$partyRegistrationsStartDate', partyRegistrationsEndDate = '$partyRegistrationsEndDate', partyTicketPriceSingle = '$partyTicketPriceSingle', partyTicketAmountSingle = '$partyTicketAmountSingle', partyTicketPriceCouple = '$partyTicketPriceCouple', partyTicketAmountCouple = '$partyTicketAmountCouple', specialType1RegistrationEnabled = '$specialType1RegistrationEnabled', specialType1RegistrationName = '$specialType1RegistrationName', specialType1RegistrationsStartDate = '$specialType1RegistrationsStartDate', specialType1RegistrationsEndDate = '$specialType1RegistrationsEndDate', specialType1TicketPriceSingle = '$specialType1TicketPriceSingle', specialType1TicketAmountSingle = '$specialType1TicketAmountSingle', specialType1TicketPriceCouple = '$specialType1TicketPriceCouple', specialType1TicketAmountCouple = '$specialType1TicketAmountCouple', specialType2RegistrationEnabled = '$specialType2RegistrationEnabled', specialType2RegistrationName = '$specialType2RegistrationName', specialType2RegistrationsStartDate = '$specialType2RegistrationsStartDate', specialType2RegistrationsEndDate = '$specialType2RegistrationsEndDate', specialType2TicketPriceSingle = '$specialType2TicketPriceSingle', specialType2TicketAmountSingle = '$specialType2TicketAmountSingle', specialType2TicketPriceCouple = '$specialType2TicketPriceCouple', specialType2TicketAmountCouple = '$specialType2TicketAmountCouple'
      WHERE id = $eventID");

      $item = null;
      if ($query) {
        $item = "Current event \"" . $eventName . "\" was updated.";
      } else {
        $item = "Current event \"" . $eventName . "\" FAILED to update.";
        echo(mysqli_error($connector));
      }
      echo "<div id='notification_new1' class='notification'>" . $item . " <span class=\"notification--close\" onclick=\"hideNotification('notification_new1');\" > X </span>" . "</div>";
    }

    // Clear array of POST
    $_POST = array();

  } else {
    echo "User has no save rights";
  }


}

?>