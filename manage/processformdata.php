<?php 
include("handlers/handler_getconfirmprivateinfodescription.php");

if ((isset($_POST['clientName'])) or (isset($_POST['clientEmail']))) {

  $eventID = mysqli_real_escape_string($connector, $_POST['eventID']); //* ** */
  $eventName = mysqli_real_escape_string($connector, $_POST['eventName']);
  $passType = mysqli_real_escape_string($connector, $_POST['passType']);
  //$registrationType = mysqli_real_escape_string($connector, $_POST['registrationType']);
  $dancerKind = mysqli_real_escape_string($connector, $_POST['dancerKind']);
  $otherTicketOptions = mysqli_real_escape_string($connector, $_POST['otherTicketOptions']); /* ** */
  //$competitionParticipation = mysqli_real_escape_string($connector, $_POST['competitionParticipation']);
  $location = mysqli_real_escape_string($connector, $_POST['location']);
  $formPrice = mysqli_real_escape_string($connector, $_POST['formPrice']);
  $clientName = mysqli_real_escape_string($connector, $_POST['clientName']);
  $clientEmail = mysqli_real_escape_string($connector, $_POST['clientEmail']);
  $clientPhone = mysqli_real_escape_string($connector, $_POST['clientPhone']);
  $clientCountry = mysqli_real_escape_string($connector, $_POST['clientCountry']);
  $clientComments = mysqli_real_escape_string($connector, $_POST['clientComments']);
  $registrationdate = mysqli_real_escape_string($connector, $_POST['registrationdate']);

  $confirmPrivateInformation1 = isset($_POST['confirmPrivateInformation1']) ? mysqli_real_escape_string($connector, $_POST['confirmPrivateInformation1']) : null;
  $confirmPrivateInformation2 = isset($_POST['confirmPrivateInformation2']) ? mysqli_real_escape_string($connector, $_POST['confirmPrivateInformation2']) : null;
  $confirmPrivateInformation3 = isset($_POST['confirmPrivateInformation3']) ? mysqli_real_escape_string($connector, $_POST['confirmPrivateInformation3']) : null;

  $confirmPrivateInformation1 = ($confirmPrivateInformation1 == "on") ? "Yes" : $confirmPrivateInformation1;
  $confirmPrivateInformation2 = ($confirmPrivateInformation2 == "on") ? "Yes" : $confirmPrivateInformation2;
  $confirmPrivateInformation3 = ($confirmPrivateInformation3 == "on") ? "Yes" : $confirmPrivateInformation3;
  
  // form validation
  $validDancerKind = ($dancerKind == "") ? false : true;
  $validPassType = ($passType == "") ? false : true;
  $validClientName = ($clientName == "") ? false : true;
  $validClientEmail = ($clientEmail == "") ? false : true;
  $correctlyFilledForm = ($validDancerKind && $validPassType && $validClientName && $validClientEmail);
  
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
  
    if ($correctlyFilledForm){
  
      $sql = "INSERT INTO `registrations`( `eventID`,`eventName`,`passType`,`dancerKind`,`otherTicketOptions`,`location`,`formPrice`,`clientName`,`clientPhone`,`clientCountry`, `clientEmail` ,`clientComments`,`registrationdate`,`confirmPrivateInformation1Description`,`confirmPrivateInformation1`,`confirmPrivateInformation2Description`,`confirmPrivateInformation2`,`confirmPrivateInformation3Description`,`confirmPrivateInformation3`) 
      VALUES ('$eventID', '$eventName', '$passType ', '$dancerKind', '$otherTicketOptions', '$location', '$formPrice', '$clientName', '$clientPhone', '$clientCountry', '$clientEmail', '$clientComments', '$registrationdate', '$confirmPrivateInformation1Description', '$confirmPrivateInformation1', '$confirmPrivateInformation2Description', '$confirmPrivateInformation2', '$confirmPrivateInformation3Description', '$confirmPrivateInformation3')";
      
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
        echo json_encode(array("orderSetSql - statusCode"=>418));
      }
  
    } else {
      //echo "<h2>no data</h2>";
    }
  
  
  mysqli_close($connector);

} else {

  header("Location: index.php");
}


?>