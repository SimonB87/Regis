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

  if ( (isset($_POST["safe_form_data1"])) || (isset($_POST["safe_form_data2"])) || (isset($_POST["safe_form_data3"])) || (isset($_POST["safe_form_data4"])) ) {

    $merchId1 = (isset($_POST["merch_id_item1"])) ? mysqli_real_escape_string($connector, $_POST["merch_id_item1"]) : null;
    $merchName1 = (isset($_POST["merch_name_item1"])) ? mysqli_real_escape_string($connector, $_POST["merch_name_item1"]) : null;
    $merchPrice1 = (isset($_POST["merch_price_item1"])) ? mysqli_real_escape_string($connector, $_POST["merch_price_item1"]) : null;
    $merchStatus1 = (isset($_POST["merch_available_item1"])) ? mysqli_real_escape_string($connector, $_POST["merch_available_item1"]) : null;

    $merchId2 = (isset($_POST["merch_id_item2"])) ? mysqli_real_escape_string($connector, $_POST["merch_id_item2"]) : null;
    $merchName2 = (isset($_POST["merch_name_item2"])) ? mysqli_real_escape_string($connector, $_POST["merch_name_item2"]) : null;
    $merchPrice2 = (isset($_POST["merch_price_item2"])) ? mysqli_real_escape_string($connector, $_POST["merch_price_item2"]) : null;
    $merchStatus2 = (isset($_POST["merch_available_item2"])) ? mysqli_real_escape_string($connector, $_POST["merch_available_item2"]) : null;

    $merchId3 = (isset($_POST["merch_id_item3"])) ? mysqli_real_escape_string($connector, $_POST["merch_id_item3"]) : null;
    $merchName3 = (isset($_POST["merch_name_item3"])) ? mysqli_real_escape_string($connector, $_POST["merch_name_item3"]) : null;
    $merchPrice3 = (isset($_POST["merch_price_item3"])) ? mysqli_real_escape_string($connector, $_POST["merch_price_item3"]) : null;
    $merchStatus3 = (isset($_POST["merch_available_item3"])) ? mysqli_real_escape_string($connector, $_POST["merch_available_item3"]) : null;

    $merchId4 = (isset($_POST["merch_id_item4"])) ? mysqli_real_escape_string($connector, $_POST["merch_id_item4"]) : null;
    $merchName4 = (isset($_POST["merch_name_item4"])) ? mysqli_real_escape_string($connector, $_POST["merch_name_item4"]) : null;
    $merchPrice4 = (isset($_POST["merch_price_item4"])) ? mysqli_real_escape_string($connector, $_POST["merch_price_item4"]) : null;
    $merchStatus4 = (isset($_POST["merch_available_item4"])) ? mysqli_real_escape_string($connector, $_POST["merch_available_item4"]) : null;

    $item = null;

    //update current event
    if ( ($merchId1 <> null) && ($merchName1 <> null) && ($merchPrice1 <> null) && ($merchStatus1 <> null) ) { 
      $query = mysqli_query($connector, "UPDATE merchandiseItems SET merchName = '$merchName1', merchPrice = '$merchPrice1', merchAvailable = '$merchStatus1' WHERE id = $merchId1");

      if ($query) {
        $item = "Merchandise item number \"" . $merchId1 . "\" was updated.";
      } else {
        $item = "Merchandise item number \"" . $merchId1 . "\" FAILED to update.";
        echo(mysqli_error($connector));
      }

    }

    if ( ($merchId2 <> null) && ($merchName2 <> null) && ($merchPrice2 <> null) && ($merchStatus2 <> null) ) { 
      $query = mysqli_query($connector, "UPDATE merchandiseItems SET merchName = '$merchName2', merchPrice = '$merchPrice2', merchAvailable = '$merchStatus2' WHERE id = $merchId2");

      if ($query) {
        $item = "Merchandise item number \"" . $merchId2 . "\" was updated.";
      } else {
        $item = "Merchandise item number \"" . $merchId2 . "\" FAILED to update.";
        echo(mysqli_error($connector));
      }
    }

    if ( ($merchId3 <> null) && ($merchName3 <> null) && ($merchPrice3 <> null) && ($merchStatus3 <> null) ) { 
      $query = mysqli_query($connector, "UPDATE merchandiseItems SET merchName = '$merchName3', merchPrice = '$merchPrice3', merchAvailable = '$merchStatus3' WHERE id = $merchId3");

      if ($query) {
        $item = "Merchandise item number \"" . $merchId3 . "\" was updated.";
      } else {
        $item = "Merchandise item number \"" . $merchId3 . "\" FAILED to update.";
        echo(mysqli_error($connector));
      }
    }

    if ( ($merchId4 <> null) && ($merchName4 <> null) && ($merchPrice4 <> null) && ($merchStatus4 <> null) ) { 
      $query = mysqli_query($connector, "UPDATE merchandiseItems SET merchName = '$merchName4', merchPrice = '$merchPrice4', merchAvailable = '$merchStatus4' WHERE id = $merchId4");

      if ($query) {
        $item = "Merchandise item number \"" . $merchId4 . "\" was updated.";
      } else {
        $item = "Merchandise item number \"" . $merchId4 . "\" FAILED to update.";
        echo(mysqli_error($connector));
      }
    }

    echo "<div id='notification_new1' class='notification'>" . $item . " <span class=\"notification--close\" onclick=\"hideNotification('notification_new1');\" > X </span>" . "</div>";

    // Clear array of POST
    $_POST = array();

  }
} else {
  echo "User has no save rights";
}

?>