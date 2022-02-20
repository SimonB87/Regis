<?php

// change character set to utf8
if (!mysqli_set_charset($connector, "utf8")) {
	printf("Error loading character set utf8: %s\n", mysqli_error($connector));
	exit();
} else {
	//printf("Current character set: %s\n", mysqli_character_set_name($connector));//used only for testing
}

$username = $_SESSION['username'];
$usernamelevel = $_SESSION['user_level'];

if(isset($_POST["safe_form_data"])){

  if($usernamelevel == "9") {

    $eventID = null;
    if (isset($_POST["eventID"])) {
      $eventID = mysqli_real_escape_string($connector, $_POST["eventID"]);
    }
    $eventStatus = mysqli_real_escape_string($connector, $_POST["eventStatus"]);
    $eventName = mysqli_real_escape_string($connector, $_POST["eventName"]);
    $eventStartDate = mysqli_real_escape_string($connector, $_POST["eventStartDate"]);
    $eventEndDate = mysqli_real_escape_string($connector, $_POST["eventEndDate"]);
    $enableCoupleTicket = mysqli_real_escape_string($connector, $_POST["enableCoupleTicket"]);
    $enableCoupleTicket = (strtolower( $enableCoupleTicket ) == "on") ? "Yes" : "No";

    $earlyBirdsRegistrationEnabled = mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationEnabled"]);
    $earlyBirdsRegistrationEnabled = (strtolower( $earlyBirdsRegistrationEnabled ) == "on") ? "Yes" : "No";
    $earlyBirdsRegistrationName = mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationName"]);
    $earlyBirdsRegistrationsStartDate = mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationsStartDate"]);
    $earlyBirdsRegistrationsEndDate = mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationsEndDate"]);
    $ticketsAmountEarlyBirdsRegistrationsSingle = mysqli_real_escape_string($connector, $_POST["ticketsAmountEarlyBirdsRegistrationsSingle"]);
    $earlyBirdsTicketPriceSingle = mysqli_real_escape_string($connector, $_POST["earlyBirdsTicketPriceSingle"]);
    $earlyBirdsTicketPriceCouple = mysqli_real_escape_string($connector, $_POST["earlyBirdsTicketPriceCouple"]);
    $earlyBirdsTicketAmountCouple = mysqli_real_escape_string($connector, $_POST["earlyBirdsTicketAmountCouple"]);

    $regularRegistrationEnabled = mysqli_real_escape_string($connector, $_POST["regularRegistrationEnabled"]);
    $regularRegistrationEnabled = (strtolower( $regularRegistrationEnabled ) == "on") ? "Yes" : "No";
    $regularRegistrationName = mysqli_real_escape_string($connector, $_POST["regularRegistrationName"]);
    $regularRegistrationsStartDate = mysqli_real_escape_string($connector, $_POST["regularRegistrationsStartDate"]);
    $regularRegistrationsEndDate = mysqli_real_escape_string($connector, $_POST["regularRegistrationsEndDate"]);
    $regularTicketPriceSingle = mysqli_real_escape_string($connector, $_POST["regularTicketPriceSingle"]);
    $regularTicketAmountSingle = mysqli_real_escape_string($connector, $_POST["regularTicketAmountSingle"]);
    $regularTicketPriceCouple = mysqli_real_escape_string($connector, $_POST["regularTicketPriceCouple"]);
    $regularTicketAmountCouple = mysqli_real_escape_string($connector, $_POST["regularTicketAmountCouple"]);

    $partyRegistrationEnabled = mysqli_real_escape_string($connector, $_POST["partyRegistrationEnabled"]);
    $partyRegistrationEnabled = (strtolower( $partyRegistrationEnabled ) == "on") ? "Yes" : "No";
    $partyRegistrationName = mysqli_real_escape_string($connector, $_POST["partyRegistrationName"]);
    $partyRegistrationsStartDate = mysqli_real_escape_string($connector, $_POST["partyRegistrationsStartDate"]);
    $partyRegistrationsEndDate = mysqli_real_escape_string($connector, $_POST["partyRegistrationsEndDate"]);
    $partyTicketPriceSingle = mysqli_real_escape_string($connector, $_POST["partyTicketPriceSingle"]);
    $partyTicketAmountSingle = mysqli_real_escape_string($connector, $_POST["partyTicketAmountSingle"]);
    $partyTicketPriceCouple = mysqli_real_escape_string($connector, $_POST["partyTicketPriceCouple"]);
    $partyTicketAmountCouple = mysqli_real_escape_string($connector, $_POST["partyTicketAmountCouple"]);

    $specialType1RegistrationEnabled = mysqli_real_escape_string($connector, $_POST["specialType1RegistrationEnabled"]);
    $specialType1RegistrationEnabled = (strtolower( $specialType1RegistrationEnabled ) == "on") ? "Yes" : "No";
    $specialType1RegistrationName = mysqli_real_escape_string($connector, $_POST["specialType1RegistrationName"]);
    $specialType1RegistrationsStartDate = mysqli_real_escape_string($connector, $_POST["specialType1RegistrationsStartDate"]);
    $specialType1RegistrationsEndDate = mysqli_real_escape_string($connector, $_POST["specialType1RegistrationsEndDate"]);
    $specialType1TicketPriceSingle = mysqli_real_escape_string($connector, $_POST["specialType1TicketPriceSingle"]);
    $specialType1TicketAmountSingle = mysqli_real_escape_string($connector, $_POST["specialType1TicketAmountSingle"]);
    $specialType1TicketPriceCouple = mysqli_real_escape_string($connector, $_POST["specialType1TicketPriceCouple"]);
    $specialType1TicketAmountCouple  = mysqli_real_escape_string($connector, $_POST["specialType1TicketAmountCouple"]);

    $specialType2RegistrationEnabled = mysqli_real_escape_string($connector, $_POST["specialType2RegistrationEnabled"]);
    $specialType2RegistrationEnabled = (strtolower( $specialType2RegistrationEnabled ) == "on") ? "Yes" : "No";
    $specialType2RegistrationName = mysqli_real_escape_string($connector, $_POST["specialType2RegistrationName"]);
    $specialType2RegistrationsStartDate = mysqli_real_escape_string($connector, $_POST["specialType2RegistrationsStartDate"]);
    $specialType2RegistrationsEndDate = mysqli_real_escape_string($connector, $_POST["specialType2RegistrationsEndDate"]);
    $specialType2TicketPriceSingle = mysqli_real_escape_string($connector, $_POST["specialType2TicketPriceSingle"]);
    $specialType2TicketAmountSingle = mysqli_real_escape_string($connector, $_POST["specialType2TicketAmountSingle"]);
    $specialType2TicketPriceCouple = mysqli_real_escape_string($connector, $_POST["specialType2TicketPriceCouple"]);
    $specialType2TicketAmountCouple = mysqli_real_escape_string($connector, $_POST["specialType2TicketAmountCouple"]);


    if(isset($_POST["newEventBoolean"])) {
      $newEventBoolean = mysqli_real_escape_string($connector, $_POST["newEventBoolean"]);
      if(strtolower($newEventBoolean) == "on") { //save a new event
        $query = mysqli_query($connector, 
        "INSERT INTO events (eventStatus, eventName, eventStartDate, eventEndDate, enableCoupleTicket, earlyBirdsRegistrationEnabled, earlyBirdsRegistrationName, earlyBirdsRegistrationsStartDate, earlyBirdsRegistrationsEndDate, ticketsAmountEarlyBirdsRegistrationsSingle , earlyBirdsTicketPriceSingle, earlyBirdsTicketPriceCouple, earlyBirdsTicketAmountCouple, regularRegistrationEnabled, regularRegistrationName, regularRegistrationsStartDate, regularRegistrationsEndDate, regularTicketPriceSingle, regularTicketAmountSingle, regularTicketPriceCouple, regularTicketAmountCouple, partyRegistrationEnabled, partyRegistrationName, partyRegistrationsStartDate, partyRegistrationsEndDate, partyTicketPriceSingle, partyTicketAmountSingle, partyTicketPriceCouple, partyTicketAmountCouple, specialType1RegistrationEnabled, specialType1RegistrationName, specialType1RegistrationsStartDate, specialType1RegistrationsEndDate, specialType1TicketPriceSingle, specialType1TicketAmountSingle, specialType1TicketPriceCouple, specialType1TicketAmountCouple, specialType2RegistrationEnabled, specialType2RegistrationName, specialType2RegistrationsStartDate, specialType2RegistrationsEndDate, specialType2TicketPriceSingle, specialType2TicketAmountSingle, specialType2TicketPriceCouple, specialType2TicketAmountCouple) 
        VALUES ('$eventStatus', '$eventName', '$eventStartDate', '$eventEndDate', '$enableCoupleTicket', '$earlyBirdsRegistrationEnabled', '$earlyBirdsRegistrationName', '$earlyBirdsRegistrationsStartDate', '$earlyBirdsRegistrationsEndDate', '$ticketsAmountEarlyBirdsRegistrationsSingle', '$earlyBirdsTicketPriceSingle', '$earlyBirdsTicketPriceCouple', '$earlyBirdsTicketAmountCouple', '$regularRegistrationEnabled', '$regularRegistrationName', '$regularRegistrationsStartDate', '$regularRegistrationsEndDate', '$regularTicketPriceSingle', '$regularTicketAmountSingle', '$regularTicketPriceCouple', '$regularTicketAmountCouple', '$partyRegistrationEnabled', '$partyRegistrationName', '$partyRegistrationsStartDate', '$partyRegistrationsEndDate', '$partyTicketPriceSingle', '$partyTicketAmountSingle', '$partyTicketPriceCouple', '$partyTicketAmountCouple', '$specialType1RegistrationEnabled', '$specialType1RegistrationName', '$specialType1RegistrationsStartDate', '$specialType1RegistrationsEndDate', '$specialType1TicketPriceSingle', '$specialType1TicketAmountSingle', '$specialType1TicketPriceCouple', '$specialType1TicketAmountCouple', '$specialType2RegistrationEnabled', '$specialType2RegistrationName', '$specialType2RegistrationsStartDate', '$specialType2RegistrationsEndDate', '$specialType2TicketPriceSingle', '$specialType2TicketAmountSingle', '$specialType2TicketPriceCouple', '$specialType2TicketAmountCouple')");

        $item = null;
        if ($query) {
          $item = "New event \"" . $eventName . "\" was saved.";
        } else {
          $item = "New event \"" . $eventName . "\" failed to be save.";
        }
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