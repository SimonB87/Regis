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

    $eventDataId = 0;
    $sql = "SELECT * FROM events WHERE id=(SELECT max(id) FROM events)";
  
    $results = $connector-> query($sql);
    //Error case
    if (!$sql ) {
      echo "Failed! <br> Error sql: " . mysql_error();
    }
    
    if (mysqli_query($connector, $sql)) {
      //debug echo json_encode(array("statusCode"=>200));
    } else {
      echo json_encode(array("sql - statusCode"=>418));
    }

    if ($results-> num_rows > 0 ) {
      while ($row = $results-> fetch_assoc()) {

        $eventDataId = $row["id"] ;
      }
    }

    
    //update current event
    $query = mysqli_query($connector, "UPDATE events SET eventPosterName = '$fileNameString' WHERE id = $eventDataId");

    $item = null;

    if ($query) {
         $item = "Current event poster \"" . $fileNameString . "\" was updated.";
    } else {
          $item = "Current event poster \"" . $fileNameString . "\" FAILED to update.";
          echo(mysqli_error($connector));
    }

    echo "<div id='notification_new1' class='notification bg-warning'><span class='notification-content '>" . $item . "</span><span class=\"notification--close \" onclick=\"hideNotification('notification_new1');\" > X </span>" . "</div>";

    // Clear array of POST
    $_POST = array();

  } else {

    echo "User has no save rights";

  }

}

?>