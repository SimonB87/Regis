<?php

$oneOpenEventId = 0;

if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

$sql = "SELECT * FROM events WHERE eventStatus = '1 - Registrations open' LIMIT 1";

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
        $oneOpenEventId = $eventDataId ;

      }
      echo "";
  }
  else {
      echo "There are 0 results in DB table";
  }

?>