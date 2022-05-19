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

if($usernamelevel == "9") {

  if ( isset($_POST["safe_publish_data"]) ) {

    $eventStatus = (isset($_POST["eventStatus"])) ? mysqli_real_escape_string($connector, $_POST["eventStatus"]) : null;
    $eventId = (isset($_POST["eventId"])) ? mysqli_real_escape_string($connector, $_POST["eventId"]) : null;

    $query = mysqli_query($connector, "UPDATE events SET eventStatus = '$eventStatus' WHERE id = $eventId");

    if ($query) {
      $item = "Event item number \"" . $eventId. "\" was updated.";
    } else {
      $item = "Event item number \"" . $eventId . "\" FAILED to update.";
      echo(mysqli_error($connector));
    }

    echo "<div id='notification_new1' class='notification bg-warning'> <span class='notification-content '>" . $item . " <span class=\"notification--close \" onclick=\"hideNotification('notification_new1');\" > X </span>" . "</div>";
  }


    // Clear array of POST
    $_POST = array();

} else {
  echo "User has no save rights";
}

?>