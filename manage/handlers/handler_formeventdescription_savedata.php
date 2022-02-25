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

if(isset($_POST["safe_event_description"])){

  if($usernamelevel == "9") {

    $eventID = null;
    if (isset($_POST["eventID"])) {
      $eventID = mysqli_real_escape_string($connector, $_POST["eventID"]);
    }

    $eventDescription1 = (isset($_POST["eventDescription1"])) ? mysqli_real_escape_string($connector, $_POST["exampleFormControlTextarea1"]) : null;
    $eventDescription2 = (isset($_POST["eventDescription2"])) ? mysqli_real_escape_string($connector, $_POST["exampleFormControlTextarea2"]) : null;
    $eventDescription3 = (isset($_POST["eventDescription3"])) ? mysqli_real_escape_string($connector, $_POST["exampleFormControlTextarea3"]) : null;

    if(isset($_POST["newEventBoolean"])) {
      $newEventBoolean = mysqli_real_escape_string($connector, $_POST["newEventBoolean"]);
      
      //update current event
      $query = mysqli_query($connector,
      "UPDATE events SET 
        eventDescription1 = '$eventDescription1', eventDescription2 = '$eventDescription2', eventDescription3 = '$eventDescription3'
      WHERE id = $eventID");

        $item = null;
        if ($query == true ) {
          $item = "New event description was saved.";

        } else {
          $item = "New event description failed to be saved.";
          echo (mysqli_error($connector)) . "<br><br>";

           /* check connection */
            if (mysqli_connect_errno()) {
              printf("Connect failed: %s\n", mysqli_connect_error());
              exit();
           }
        
           if (!mysqli_query($connector, "SET a=1")) {
              printf("Error message: %s\n", mysqli_error($connector));
           }
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