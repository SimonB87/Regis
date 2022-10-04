<?php 

if (isset($_POST['clientEmail'])) {

  $eventID = (isset($_POST['eventID'])) ? mysqli_real_escape_string($connector, $_POST['eventID']) : null; 
  $eventName = (isset($_POST['eventName'])) ? mysqli_real_escape_string($connector, $_POST['eventName']) : null;
  $passType = (isset($_POST['passType'])) ? mysqli_real_escape_string($connector, $_POST['passType']) : null;
  $dancerKind = (isset($_POST['dancerKind'])) ? mysqli_real_escape_string($connector, $_POST['dancerKind']) : null;
  $otherTicketOptions = (isset($_POST['otherTicketOptions'])) ? mysqli_real_escape_string($connector, $_POST['otherTicketOptions']) : null;
  $otherDancerKind = (isset($_POST['otherDancerKind'])) ? mysqli_real_escape_string($connector, $_POST['otherDancerKind']) : null;
  $location = (isset($_POST['location'])) ? mysqli_real_escape_string($connector, $_POST['location']) : null;
  $formPrice = (isset($_POST['formPrice'])) ? mysqli_real_escape_string($connector, $_POST['formPrice']) : null;
  $clientName = (isset($_POST['clientName'])) ? mysqli_real_escape_string($connector, $_POST['clientName']) : null;
  $clientEmail = (isset($_POST['clientEmail'])) ? mysqli_real_escape_string($connector, $_POST['clientEmail']) : null;
  $clientPhone = (isset($_POST['clientPhone'])) ? mysqli_real_escape_string($connector, $_POST['clientPhone']) : null;
  $clientCountry = (isset($_POST['clientCountry'])) ? mysqli_real_escape_string($connector, $_POST['clientCountry']) : null;
  $clientComments = (isset($_POST['clientComments'])) ? mysqli_real_escape_string($connector, $_POST['clientComments']) : null;
  $registrationdate = (isset($_POST['registrationdate'])) ? mysqli_real_escape_string($connector, $_POST['registrationdate']) : null;


  $confirmPrivateInformation1 = isset($_POST['confirmPrivateInformation1']) ? mysqli_real_escape_string($connector, $_POST['confirmPrivateInformation1']) : null;
  $confirmPrivateInformation2 = isset($_POST['confirmPrivateInformation2']) ? mysqli_real_escape_string($connector, $_POST['confirmPrivateInformation2']) : null;
  $confirmPrivateInformation3 = isset($_POST['confirmPrivateInformation3']) ? mysqli_real_escape_string($connector, $_POST['confirmPrivateInformation3']) : null;

  $confirmPrivateInformation1 = ($confirmPrivateInformation1 == "on") ? "Yes" : $confirmPrivateInformation1;
  $confirmPrivateInformation2 = ($confirmPrivateInformation2 == "on") ? "Yes" : $confirmPrivateInformation2;
  $confirmPrivateInformation3 = ($confirmPrivateInformation3 == "on") ? "Yes" : $confirmPrivateInformation3;
  
  // form validation
  $validDancerKind = ( ($dancerKind == "") || ($dancerKind == null) ) ? false : true;
  $validPassType = ( ($passType == "") || ($passType == null) ) ? false : true;
  $validClientName = ( ($clientName == "") || ($clientName == null) ) ? false : true;
  $validClientEmail = ( ($clientEmail == "") || ($clientEmail == null) ) ? false : true;

  $correctlyFilledForm = ($validDancerKind && $validPassType && $validClientName && $validClientEmail);
  
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
  
  /* debug
  if (!mysqli_query($connector, "SET a=1")) {
    printf("Error message: %s\n", mysqli_error($link));
  }*/
  
  include("handler_checkticketavailability.php"); // output is $ticketsAvailable;
  
  if (!mysqli_set_charset($connector, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($connector));
    exit();
    } else {
            //printf("Current character set: %s\n", mysqli_character_set_name($con));//used only for testing
    }
  
    if ( ($correctlyFilledForm) && ($ticketsAvailable) ) {
        
      $sql = "INSERT INTO `registrations`( `eventID`,`eventName`,`passType`,`dancerKind`,`otherTicketOptions`,`otherDancerKind`,`location`,`formPrice`,`clientName`,`clientPhone`,`clientCountry`, `clientEmail` ,`clientComments`,`registrationdate`,`confirmPrivateInformation1Description`,`confirmPrivateInformation1`,`confirmPrivateInformation2Description`,`confirmPrivateInformation2`,`confirmPrivateInformation3Description`,`confirmPrivateInformation3`,`paystatus`,`clientTransferedOrder`,`adminEditedOrder`)
      VALUES (\"$eventID\", \"$eventName\", \"$passType \", \"$dancerKind\", \"$otherTicketOptions\", \"$otherDancerKind\", \"$location\", \"$formPrice\", \"$clientName\", \"$clientPhone\", \"$clientCountry\", \"$clientEmail\", \"$clientComments\", \"$registrationdate\", \"$confirmPrivateInformation1Description\", \"$confirmPrivateInformation1\", \"$confirmPrivateInformation2Description\", \"$confirmPrivateInformation2\", \"$confirmPrivateInformation3Description\", \"$confirmPrivateInformation3\", \"1 - unpaid\", \"Original Order - $registrationdate;\", \"Original Order - $registrationdate;\")";
      
      //Error case
      if (!$sql ) {
        echo "Failed! <br> Error sql: " . mysql_error();
      }
      
      
      if (mysqli_query($connector, $sql)) {
        //debug echo json_encode(array("statusCode"=>200));
      } 
      else {
        echo("Error description: " . $connector -> error);
      }
      
      $orderId = "string";
      
      
      $orderIdSql = "SELECT id, clientName, registrationdate FROM registrations WHERE registrationdate='". $registrationdate ."'";
      
      $results = $connector-> query($orderIdSql);
      
      if ($results-> num_rows > 0 ) {
        while ($row = $results-> fetch_assoc()) {
      
          $intYear = (int)date("Y");
          $intStart = $intYear * 10000;
          $introwId = (int)$row["id"];
          $orderId = $intStart + $introwId;
      
        }
        
      }
      else {
        echo "<h3 style='text-align: center; color: coral'>Registrace s vybraným číslem není v databázi. Vyberte existující !</h3>";
      }
      
      //Error case
      if (!$orderIdSql ) {
        echo "Failed! <br> Error orderId: " . mysql_error();
      }
      
      
      $orderSetSql = "UPDATE registrations SET orderId='" . $orderId ."' WHERE registrationdate='". $registrationdate ."'";
      
      //Error case
      if (!$orderSetSql ) {
        echo "Failed! <br> Error sql: " . mysql_error();
      }
      
      
      if (mysqli_query($connector, $orderSetSql)) {
        //debug echo json_encode(array("statusCode"=>200));
      } 
      else {
        echo ("orderSetSql - statusCode - 400");
      }

    } else {
      //echo "<h2>no data</h2>";
    }
  

} else {

  //header("Location: index.php");
}


?>