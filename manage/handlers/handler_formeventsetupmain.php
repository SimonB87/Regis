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

    $eventID = mysqli_real_escape_string($connector, $_POST["eventID"]);
    $newEventBoolean = mysqli_real_escape_string($connector, $_POST["newEventBoolean"]);
    $eventStatus = mysqli_real_escape_string($connector, $_POST["eventStatus"]);
    $eventName = mysqli_real_escape_string($connector, $_POST["eventName"]);
    $eventStartDate = mysqli_real_escape_string($connector, $_POST["eventStartDate"]);
    $eventEndDate = mysqli_real_escape_string($connector, $_POST["eventEndDate"]);
    $enableCoupleTicket = mysqli_real_escape_string($connector, $_POST["enableCoupleTicket"]);

    $query = mysqli_query($connector, "INSERT INTO events (eventStatus, eventName, eventStartDate, eventEndDate, enableCoupleTicket) VALUES ('$eventStatus', '$eventName', '$eventStartDate', '$eventEndDate', '$enableCoupleTicket')");


  } else {
    echo "user has no save rights";
  }


}

?>