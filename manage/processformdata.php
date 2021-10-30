<?php 

$eventName = mysqli_real_escape_string($connector, $_POST['eventName']);
$passType = mysqli_real_escape_string($connector, $_POST['passType']);
$registrationType = mysqli_real_escape_string($connector, $_POST['registrationType']);
$dancerKind = mysqli_real_escape_string($connector, $_POST['dancerKind']);
$lengthType = mysqli_real_escape_string($connector, $_POST['lengthType']);
$competitionParticipation = mysqli_real_escape_string($connector, $_POST['competitionParticipation']);
$location = mysqli_real_escape_string($connector, $_POST['location']);
$merchandise = mysqli_real_escape_string($connector, $_POST['merchandise']);
$formPrice = mysqli_real_escape_string($connector, $_POST['formPrice']);
$clientName = mysqli_real_escape_string($connector, $_POST['clientName']);
$clientEmail = mysqli_real_escape_string($connector, $_POST['clientEmail']);
$clientPhone = mysqli_real_escape_string($connector, $_POST['clientPhone']);
$clientCountry = mysqli_real_escape_string($connector, $_POST['clientCountry']);
$clientComments = mysqli_real_escape_string($connector, $_POST['clientComments']);
$registrationdate = mysqli_real_escape_string($connector, $_POST['registrationdate']);
$confirmPrivateInformation = mysqli_real_escape_string($connector, $_POST['confirmPrivateInformation']);
$confirmCovid = mysqli_real_escape_string($connector, $_POST['confirmCovid']);
$confirmCovidResult = ($confirmCovid == "on") ? "Yes, agreed with COVID-19 therms" : "denied" ;
$confirmPrivateInformationResult = ($confirmPrivateInformation == "on") ? "Yes, agreed with GDPR" : "denied" ;

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

$sql = "INSERT INTO `registrations`( `eventName`,`passType`,`registrationType`,`dancerKind`,`lengthType`,`competitionParticipation`,`location`,`merchandise`,`formPrice`,`clientName`,`clientPhone`,`clientCountry`, `clientEmail` ,`clientComments`,`registrationdate`,`confirmPrivateInformation`,`confirmCovid`) 
VALUES ('$eventName', '$passType ', '$registrationType', '$dancerKind', '$lengthType', '$competitionParticipation', '$location', '$merchandise', '$formPrice', '$clientName', '$clientPhone', '$clientCountry', '$clientEmail', '$clientComments', '$registrationdate', '$confirmPrivateInformationResult', '$confirmCovidResult')";


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

    $orderId = date("Y") . "00" . $row["id"];
    //debug
    //echo "<div> --- </div>";
    //echo "<div> result : ID " . $row["id"]. "</div>";
    //debug
  }
  
}
else {
  echo "<h3 style='text-align: center; color: coral'>Registrace s vybraným číslem není v databázi. Vyberte existující !</h3>";
}

//Error case
if (!$orderIdSql ) {
  echo "Failed! <br> Error orderId: " . mysql_error();
}


mysqli_close($connector);
?>