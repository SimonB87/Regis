<?php

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

      echo "<script> let regData = {}; </script>";

      // 1) all current registrations
      $sql = "SELECT * FROM registrations WHERE eventID ='$eventDataId'";

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
        //echo "1) num rows : " . ( $results-> num_rows );
        echo "<script> regData.allRegistrations = " . ( $results-> num_rows ) . "; </script>";
      }
      else {
        //echo "There are 0 results in DB table";
        echo "<script> regData.allRegistrations = " . "0" . "; </script>";
      }
      //echo "<br>";



    // 2) unpaid current registrations
    $sql = "SELECT * FROM registrations WHERE eventID='$eventDataId' AND paystatus='1 - unpaid'";


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
      //echo "2) num rows : " . ( $results-> num_rows );
      echo "<script> regData.unpaidRegistrations = " . ( $results-> num_rows ) . "; </script>";
    }
    else {
      echo "<script> regData.unpaidRegistrations = " . "0" . "; </script>";

    }
    //echo "<br>";



    // 3) reminded payments for current registrations
    $sql = "SELECT * FROM registrations WHERE eventID='$eventDataId' AND paystatus='3 - reminder sent'";

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
      echo "<script> regData.remindedPayment = " . ( $results-> num_rows ) . " ; </script>";
    }
    else {
      echo "<script> regData.remindedPayment = " . "0" . "; </script>";
    }
    //echo "<br>";



    // 4) reminded payments for current registrations
    $sql = "SELECT * FROM registrations WHERE eventID='$eventDataId' AND paystatus='4 - cancelled registration'";

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
      echo "<script> regData.cancelledRegistrations = " . ( $results-> num_rows ) . " ; </script>";
    }
    else {
      echo "<script> regData.cancelledRegistrations = " . "0" . " ; </script>";
    }
    //echo "<br>";

    // 5) reminded payments for current registrations
    $sql = "SELECT * FROM registrations WHERE eventID='$eventDataId' AND paystatus='2 - paid'";

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
      echo "<script> regData.paidRegistrations = " . ( $results-> num_rows ) . " ; </script>";
    }
    else {
      echo "<script> regData.paidRegistrations = " . "0" . " ; </script>";
    }
    //echo "<br>";

    //echo "<script> console.log(regData); </script>";



    // Comment out DB close
    // mysqli_close($connector);

  }

?>