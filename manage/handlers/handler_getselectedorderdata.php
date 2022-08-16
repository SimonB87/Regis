<?php 

$storedRegOrderId = "";
$storedRegEventName = "";
$storedRegPassType = "";
$storedRegDancerKind = "";
$storedRegOtherTicketOptions = "";
$storedRegOtherDancerKind = "";
$storedRegFormPrice = "";
$storedRegClientEmail = "";
$storedRegClientName = "";

if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

//debug
//if (!mysqli_query($connector, "SET a=1")) {
//  printf("Error message: %s\n", mysqli_error($connector));
//}

/*if (!mysqli_set_charset($connector, "utf8")) {
  printf("Error loading character set utf8: %s\n", mysqli_error($connector));
  exit();
  } else {
          //printf("Current character set: %s\n", mysqli_character_set_name($con));//used only for testing
  }*/

  $sql = "SELECT * FROM registrations WHERE orderID='$originalOrderId' LIMIT 1";

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

      $storedRegOrderId = $row["orderID"];
      $storedRegEventName = $row["eventName"];
      $storedRegPassType = $row["passType"];
      $storedRegDancerKind = $row["dancerKind"];
      $storedRegOtherTicketOptions = $row["otherTicketOptions"];
      $storedRegOtherDancerKind = $row["otherDancerKind"];
      $storedRegFormPrice = $row["formPrice"];
      $storedRegClientEmail = $row["clientEmail"];
      $storedRegClientName = $row["clientName"];
      
    }
    echo "";
}
else {
    echo "There are 0 results in DB table";
}

?>