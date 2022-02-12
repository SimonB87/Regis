<?php
  //find URL of the current page
  $urlink = $_SERVER["REQUEST_URI"];
  $createPage = "createneweventsetupmain.php";
  $createPagePosition = strpos($urlink, $createPage);

  $isEventEdited = ($createPagePosition == false) ? true : false;

  $eventDataId = null;
  $eventDataEventStatus = null;
  $eventDataEventName = null;
  $eventDataEventStartDate = null;
  $eventDataEventEndDate = null;
  $eventDataEnableCoupleTicket = null;

  if ($isEventEdited) {

    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }
  
    /* debug
    if (!mysqli_query($connector, "SET a=1")) {
      printf("Error message: %s\n", mysqli_error($link));
    }*/
  
    if (!mysqli_set_charset($connector, "utf8")) {
      printf("Error loading character set utf8: %s\n", mysqli_error($con));
      exit();
      } else {
              //printf("Current character set: %s\n", mysqli_character_set_name($con));//used only for testing
      }

      $sql = "SELECT * FROM events WHERE id=(SELECT max(id) FROM events)";
  
      $results = $connector-> query($sql);
      //Error case
      if (!$sql ) {
        echo "Failed! <br> Error sql: " . mysql_error();
      }
      
      if (mysqli_query($connector, $sql)) {
        //debug echo json_encode(array("statusCode"=>200));
      } 
      else {
        echo json_encode(array("sql - statusCode"=>418));
      }
  
      //function to fatch the data
      if ($results-> num_rows > 0 ) {
        while ($row = $results-> fetch_assoc()) {

          $eventDataId = $row["id"] ;
          $eventDataEventStatus = $row["eventStatus"] ;
          $eventDataEventName = $row["eventName"] ;
          $eventDataEventStartDate = $row["eventStartDate"] ;
          $eventDataEventEndDate = $row["eventEndDate"] ;
          $eventDataEnableCoupleTicket = $row["enableCoupleTicket"] ;

        }
        echo "";
    }
    else {
        echo "There are 0 results in DB table";
    }
    
    // Comment out DB close
    // mysqli_close($connector);

  }

?>