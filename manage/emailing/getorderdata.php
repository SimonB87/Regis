<?php

require 'config/config.php';

if (!mysqli_set_charset($connector, "utf8")) {
  printf("Error loading character set utf8: %s\n", mysqli_error($con));
  exit();
  } else {
          //printf("Current character set: %s\n", mysqli_character_set_name($con));//used only for testing
  }

$checkOrderIdSql = "SELECT * FROM registrations WHERE orderID='". $orderId ."'";

$results = $connector-> query($checkOrderIdSql);

//Error case
if (!$checkOrderIdSql ) {
  echo "Failed! <br> Error sql: " . mysql_error();
}

if (mysqli_query($connector, $checkOrderIdSql)) {
  //debug echo json_encode(array("statusCode"=>200));
} 
else {
  echo json_encode(array("checkOrderIdSql - statusCode"=>418));
}

$storedId = "string";
$storedClientComments = "string";
$storedClientCountry = "string";
$storedClientEmail = "string";
$storedClientName = "string";
$storedClientPhone = "string";
$storedCompetitionParticipation = "string";
$storedConfirmCovid = "string";
$storedConfirmPrivateInformation = "string";
$storedDancerKind = "string";
$storedEventName = "string";
$storedFormPrice = "string";
$storedLengthType = "string";
$storedLocation = "string";
$storedMerchandise = "string";
$storedOrderID = "string";
$storedPassType = "string";
$storedRegistrationdate = "string";
$storedRegistrationType = "string";

if ($results-> num_rows > 0 ) {
  while ($row = $results-> fetch_assoc()) {

    $storedId = $row["id"];
    $storedClientComments = $row["clientComments"];
    $storedClientCountry = $row["clientCountry"];
    $storedClientEmail = $row["clientEmail"];
    $storedClientName = $row["clientName"];
    $storedClientPhone = $row["clientPhone"];
    $storedCompetitionParticipation = $row["competitionParticipation"];
    $storedConfirmCovid = $row["confirmCovid"];
    $storedConfirmPrivateInformation = $row["confirmPrivateInformation"];
    $storedDancerKind = $row["dancerKind"];
    $storedEventName = $row["eventName"];
    $storedFormPrice = $row["formPrice"];
    $storedLengthType = $row["lengthType"];
    $storedLocation = $row["location"];
    $storedMerchandise = $row["merchandise"];
    $storedOrderID = $row["orderID"];
    $storedPassType = $row["passType"];
    $storedRegistrationdate = $row["registrationdate"];
    $storedRegistrationType = $row["registrationType"];

  }

  $errorIcon = "<span><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-triangle' viewBox='0 0 16 16'>
                  <path d='M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z'></path>
                  <path d='M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z'></path>
                </svg></span>";
  
} else {
  echo "<h3 style='text-align: center; color: coral'>" . $errorIcon ." Registration was not properly saved. Please register once more or contact the event organizer.</h3>";
}

//Error case
if (!$orderIdSql ) {
  echo "Failed! <br> Error orderId: " . mysql_error();
}

mysqli_close($connector);

?>