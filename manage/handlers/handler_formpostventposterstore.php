<?php

if(isset($_POST["submit_poster"])) {

  /*
  // Save poster file to server
  */

  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $notification_text = "";

  // Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
      //$notification_text =  "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
  } else {
      $notification_text = $notification_text . "File is not an image.";
      $uploadOk = 0;
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    $notification_text = $notification_text . "Eh, sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    $notification_text = $notification_text . "Eh, sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    $notification_text = $notification_text . "Eh, sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $notification_text = $notification_text . "Eh, sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $notification_text = $notification_text . "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      $notification_text = $notification_text . "Eh, sorry, there was an error uploading your file.";
    }
  }

  echo "<div id='notification_new1' class='notification bg-warning'> <span class='notification-content '>" . $notification_text . "</span> <span class=\"notification--close \" onclick=\"hideNotification('notification_new1');\" > X </span>" . "</div>";
  $fileNameString = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));

  /*
  // Store poster name to DB
  */

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

    $eventID = null;
    if (isset($_POST["eventID"])) {
      $eventID = mysqli_real_escape_string($connector, $_POST["eventID"]);
    }
    $eventIDVal = intval($eventID);

      
        $query = null;

        $sql = "";
        if ( $isModeEventCreate == true ) {
          $sql = "UPDATE events SET posterFileName = '$target_file' ORDER BY id DESC LIMIT 1"; // newest event ID
        } else {
          $sql = "UPDATE events SET posterFileName = '$target_file' WHERE id=$eventIDVal";
        }

        $query = mysqli_query($connector, "UPDATE events SET posterFileName = '$target_file' WHERE id=$eventIDVal");

        $item = null;
        if ($query == true ) {
          $item = "Poster to event - ID: \"" . $eventID . "\" was saved. Refresh this page to see it.";

        } else {
          $item = "Poster to event - ID: \"" . $eventID . "\" failed to be saved.";
          echo (mysqli_error($connector)) . "<br><br>";

           // check connection
            if (mysqli_connect_errno()) {
              printf("Connect failed: %s\n", mysqli_connect_error());
              exit();
           }
        
           if (!mysqli_query($connector, "SET a=1")) {
              printf("Error message: %s\n", mysqli_error($connector));
           }
        }
        
        echo "<div id='notification_new2' class='notification bg-warning'> <span class='notification-content '>" . $item . "</span> <span class=\"notification--close \" onclick=\"hideNotification('notification_new1');\" > X </span>" . "</div>";

      
    
    // Clear array of POST
    $_POST = array();

  } else {
    echo "User has no save rights";
  }

}

?>
