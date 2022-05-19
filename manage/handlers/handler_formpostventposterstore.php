<?php

if(isset($_POST["submit_poster"])) {

  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $notification_text = "";

  // Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
      $notification_text =  "File is an image - " . $check["mime"] . ".";
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
}

?>
