<?php

$urlpath = $_SERVER['REQUEST_URI'];
$isModeEventCreate = strpos($urlpath, "createnewevent");

$sql = "";
if ( $isModeEventCreate == true ) {
  echo "<div class='text-center'> Select a new poster </div>";
} else {
  if ($eventDataPosterName) {
    if (strlen($eventDataPosterName) > 4) {
      if (file_exists($eventDataPosterName)) {
        echo "<div> <img src='" . $eventDataPosterName . "' alt='Event poster picture' class='full-width'> </div>";
      }
    }
  }
}


      ?>