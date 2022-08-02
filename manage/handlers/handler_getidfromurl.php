<?php 

$stringCleared = "";
$selectedEvent = "";


try {
  if ( isset( $_GET['id']) ) {
    $stringCleared = mysqli_real_escape_string($connector, $_GET['id']);
    $selectedEvent = isset($stringCleared) ? mysqli_real_escape_string($connector, $_GET['id']) : "";
  }
}

//catch exception
catch(Exception $e) {
  //echo 'Message: ' .$e->getMessage();
}

?>