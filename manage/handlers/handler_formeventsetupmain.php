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

    $earlyBirdsRegistrationEnabled = mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationEnabled"]);
    $earlyBirdsRegistrationName = mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationName"]);
    $earlyBirdsRegistrationsStartDate = mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationsStartDate"]);
    $earlyBirdsRegistrationsEndDate = mysqli_real_escape_string($connector, $_POST["earlyBirdsRegistrationsEndDate"]);

    $ticketsAmountEarlyBirdsRegistrationsSingle  = mysqli_real_escape_string($connector, $_POST["ticketsAmountEarlyBirdsRegistrationsSingle"]);
    $earlyBirdsTicketPriceSingle = mysqli_real_escape_string($connector, $_POST["earlyBirdsTicketPriceSingle"]);
    $earlyBirdsTicketPriceCouple = mysqli_real_escape_string($connector, $_POST["earlyBirdsTicketPriceCouple"]);
    $earlyBirdsTicketAmountCouple = mysqli_real_escape_string($connector, $_POST["earlyBirdsTicketAmountCouple"]);

/*  // fix ID for Wedos DB
    
    $id = 0;

    $sql = "SELECT max(id) FROM events";
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
  
      //function to fatch the data
      if ($results-> num_rows > 0 ) {
        while ($row = $results-> fetch_assoc()) {

          $eventDataId = $row["id"] ;
          $id = intval($eventDataId) + 1;

        }
        //echo "";
    }
    else {
        //echo "There are 0 results in DB table";
    }*/

    if(isset($_POST["newEventBoolean"])) {
      $newEventBoolean = mysqli_real_escape_string($connector, $_POST["newEventBoolean"]);
      if($newEventBoolean == "on") {
        $query = mysqli_query($connector, "INSERT INTO events (eventStatus, eventName, eventStartDate, eventEndDate, enableCoupleTicket, earlyBirdsRegistrationEnabled, earlyBirdsRegistrationName, earlyBirdsRegistrationsStartDate, earlyBirdsRegistrationsEndDate,  	ticketsAmountEarlyBirdsRegistrationsSingle , earlyBirdsTicketPriceSingle, earlyBirdsTicketPriceCouple, earlyBirdsTicketAmountCouple) VALUES ('$eventStatus', '$eventName', '$eventStartDate', '$eventEndDate', '$enableCoupleTicket', '$earlyBirdsRegistrationEnabled', '$earlyBirdsRegistrationName', '$earlyBirdsRegistrationsStartDate', '$earlyBirdsRegistrationsEndDate', '$earlyBirdsTicketPriceSingle', '$earlyBirdsTicketPriceSingle', '$earlyBirdsTicketPriceCouple', '$earlyBirdsTicketAmountCouple')");

        // fix ID for Wedos DB
        //$query = mysqli_query($connector, "INSERT INTO events (id, eventStatus, eventName, eventStartDate, eventEndDate, enableCoupleTicket) VALUES ('$id','$eventStatus', '$eventName', '$eventStartDate', '$eventEndDate', '$enableCoupleTicket')");

        $item = "New event \"" . $eventName . "\" was saved.";
        echo "<div id='notification_new1' class='notification'>" . $item . " <span class=\"notification--close\" onclick=\"hideNotification('notification_new1');\" > X </span>" . "</div>";
      }
    } else {
      //TODO - update current event
    }

    // Clear array of POST
    $_POST = array();

  } else {
    echo "user has no save rights";
  }


}

?>