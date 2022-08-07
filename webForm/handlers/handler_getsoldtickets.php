<?php

$earlybirdsSingleSold = 0;
$earlybirdsSingleSold_leader = 0;
$earlybirdsSingleSold_follower = 0; 

$earlybirdsCoupleSold = 0;


$regularSingleSold = 0;
$regularSingleSold_leader = 0;
$regularSingleSold_follower = 0;

$regularCoupleSold = 0;

$partySingleSold = 0;
$partySingleSold_leader = 0; 
$partySingleSold_follower = 0;

$partyCoupleSold = 0;

$spec1SingleSold = 0; //TODO
$spec1SingleSold_leader = 0; //TODO
$spec1SingleSold_follower = 0; //TODO

$spec1CoupleSold = 0; //TODO

$spec2SingleSold = 0; //TODO
$spec2SingleSold_leader = 0; //TODO
$spec2SingleSold_follower = 0; //TODO

$spec2CoupleSold = 0; //TODO

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

  /*
  // fill : $earlybirdsSingleSold;
  */
  $sql = "SELECT * FROM registrations WHERE ((eventID=$eventDataId) AND (passType='1 - Early birds leader/follower') AND ((dancerKind='1 - Leader') OR (dancerKind='2 - Follower')))";

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

      $earlybirdsSingleSold = $results-> num_rows;

    }
    echo "";
  } else {
    $earlybirdsSingleSold = 0;
  }

  /*
  // fill : $earlybirdsSingleSold_leader;
  */
  $sql = "SELECT * FROM registrations WHERE ((eventID=$eventDataId) AND (passType='1 - Early birds leader/follower') AND ((dancerKind='1 - Leader') ))";

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

      $earlybirdsSingleSold_leader = $results-> num_rows;

    }
    echo "";
  } else {
    $earlybirdsSingleSold_leader = 0;
  }

  /*
  // fill : $earlybirdsSingleSold_follower;
  */
  $sql = "SELECT * FROM registrations WHERE ( (eventID=$eventDataId) AND (passType='1 - Early birds leader/follower') AND ( dancerKind='2 - Follower') )";

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

      $earlybirdsSingleSold_follower = $results-> num_rows;

    }
    echo "";
  } else {
    $earlybirdsSingleSold_follower = 0;
  }
  
  /*
  // fill : $earlybirdsCoupleSold;
  */
  $sql = "SELECT * FROM registrations WHERE ( (eventID=$eventDataId) AND (passType='2 - Early birds couple') AND (dancerKind='3 - Couple') )";

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

      $earlybirdsCoupleSold = $results-> num_rows;

    }
    echo "";
  } else {
    $earlybirdsCoupleSold = 0;
  }

  /*
  // fill : $regularSingleSold;
  */
  $sql = "SELECT * FROM registrations WHERE ( (eventID=$eventDataId) AND (passType='3 - Fullpass leader/follower') AND ((dancerKind='1 - Leader') OR (dancerKind='2 - Follower')))";

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

      $regularSingleSold = $results-> num_rows;

    }
    echo "";
  } else {
    $regularSingleSold = 0;
  }

  /*
  // fill : $regularSingleSold_leader;
  */
  $sql = "SELECT * FROM registrations WHERE ( (eventID=$eventDataId) AND (passType='3 - Fullpass leader/follower') AND (dancerKind='1 - Leader') )";

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

      $regularSingleSold_leader = $results-> num_rows;

    }
    echo "";
  } else {
    $regularSingleSold_leader = 0;
  }

  /*
  // fill : $regularSingleSold_follower;
  */

  $sql = "SELECT * FROM registrations WHERE ( (eventID=$eventDataId) AND (passType='3 - Fullpass leader/follower') AND (dancerKind='2 - Follower') )";

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

      $regularSingleSold_follower = $results-> num_rows;

    }
    echo "";
  } else {
    $regularSingleSold_follower = 0;
  }


  /*
  // fill : $regularCoupleSold;
  */
  $sql = "SELECT * FROM registrations WHERE ( (eventID=$eventDataId) AND (passType='4 - Fullpass couple') AND (dancerKind='3 - Couple') )";

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

      $regularCoupleSold = $results-> num_rows;

    }
    echo "";
  } else {
    $regularCoupleSold = 0;
  }

  /*
  // fill : $partySingleSold;
  */
  $sql = "SELECT * FROM registrations WHERE ( (eventID=$eventDataId) AND (passType='5 - Partypass leader/follower') AND ((dancerKind='1 - Leader') OR (dancerKind='2 - Follower')))";

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

      $partySingleSold = $results-> num_rows;

    }
    echo "";
  } else {
    $partySingleSold = 0;
  }


  /*
  // fill : $partySingleSold_leader;
  */
  $sql = "SELECT * FROM registrations WHERE ( (eventID=$eventDataId) AND (passType='5 - Partypass leader/follower') AND ( (dancerKind='1 - Leader') ))";

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

      $partySingleSold_leader = $results-> num_rows;

    }
    echo "";
  } else {
    $partySingleSold_leader = 0;
  }


  /*
  // fill : $partySingleSold_follower;
  */
  $sql = "SELECT * FROM registrations WHERE ( (eventID=$eventDataId) AND (passType='5 - Partypass leader/follower') AND ( (dancerKind='2 - Follower') ))";

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

      $partySingleSold_follower = $results-> num_rows;

    }
    echo "";
  } else {
    $partySingleSold_follower = 0;
  }


  /*
  // fill : $partyCoupleSold;
  */
  $sql = "SELECT * FROM registrations WHERE ( (eventID=$eventDataId) AND (passType='6 - Partypass couple') AND (dancerKind='3 - Couple') )";

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

      $partyCoupleSold = $results-> num_rows;

    }
    echo "";
  } else {
    $partyCoupleSold = 0;
  }

  // Comment out DB close
  mysqli_close($connector);


  /*
  // TODO fill : $spec1SingleSold;
  */

  /*
  // TODO fill : $spec1SingleSold_leader;
  */

  /*
  // TODO fill : $spec1SingleSold_follower;
  */


  /*
  // TODO fill : $spec1CoupleSold;
  */





  /*
  // TODO fill : $spec2SingleSold;
  */

  /*
  // TODO fill : $spec2SingleSold_leader;
  */

  /*
  // TODO fill : $pec2SingleSold_follower;
  */


  /*
  // TODO fill : $spec1CoupleSold;
  */

?>