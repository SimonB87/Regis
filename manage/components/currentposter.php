<?php
      if ($eventDataPosterName) {
        if (strlen($eventDataPosterName) > 4) {
          if (file_exists($eventDataPosterName)) {
            echo "<div> <img src='" . $eventDataPosterName . "' alt='Event poster picture' class='full-width'> </div>";
          }
        }
      }
      ?>