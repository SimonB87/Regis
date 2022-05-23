<?php

$preview_earlybirdsSingleSold = 0;
$preview_earlybirdsCoupleSold = 0;
$preview_regularSingleSold = 0;
$preview_regularCoupleSold = 0;
$preview_partySingleSold = 0;
$preview_partyCoupleSold = 0;
$preview_spec1SingleSold = 0;
$preview_spec1CoupleSold = 0;

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

  // fill : $preview_earlybirdsSingleSold;
  $sql = "SELECT * FROM registrations WHERE ((eventID='$eventDataId') AND (passType='1 - Early birds') AND ((dancerKind='1 - Leader') OR (dancerKind='2 - Follower')))";

  $results = $connector-> query($sql);
  //Error case
  if (!$sql ) {
    echo "Failed! <br> Error sql: " . mysql_error() . " <br>";
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

      $preview_earlybirdsSingleSold = $results-> num_rows;

    }
    echo "";
  } else {
    $preview_earlybirdsSingleSold = 0;
  }
  
  // Comment out DB close
  mysqli_close($connector);


?>