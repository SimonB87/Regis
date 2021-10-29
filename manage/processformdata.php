<?php 

$clientName = mysqli_real_escape_string($connector, $_POST['clientName']);
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

$confirmPrivateInformationResult = ($confirmPrivateInformation == "on") ? "yes, agreed" : "denied" ;

if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

/*
if (!mysqli_query($connector, "SET a=1")) {
  printf("Error message: %s\n", mysqli_error($link));
}
*/


/*
if (!mysqli_set_charset($connector, "utf8")) {
  printf("Error loading character set utf8: %s\n", mysqli_error($con));
  exit();
  } else {
          //printf("Current character set: %s\n", mysqli_character_set_name($con));//used only for testing
  }

$sql = "INSERT INTO `waste_calculation`( `region_cr`,`town_name`,`naklady_oh`,`prijmy_oh`,`naklady_tridenySber_tuny`,`naklady_tridenySber_perCapita`,`naklady_sko_tuny`,`naklady_sko_perCapita`,`produkce_odpady`,`produkce_o_odpadu`,`produkce_n_odpadu`,`produkce_komun_odpadu`,`produkce_sko`,`produkce_plast`,`produkce_papir`,`produkce_sklo`,`produkce_kovy`, `date`) 
VALUES ('$region_cr ', '$town_name', '$naklady_oh', '$prijmy_oh', '$naklady_tridenySber_tuny', '$naklady_tridenySber_perCapita', '$naklady_sko_tuny', '$naklady_sko_perCapita', '$produkce_odpady', '$produkce_o_odpadu', '$produkce_n_odpadu', '$produkce_komun_odpadu', '$produkce_sko', '$produkce_plast', '$produkce_papir', '$produkce_sklo', '$produkce_kovy', '$date')";

//Error case
if (!$sql) {
    echo "Failed! <br> Error: ".mysql_error();
}

if (mysqli_query($connector, $sql)) {
  echo json_encode(array("statusCode"=>200));
} 
else {
  echo json_encode(array("statusCode"=>418));
}
*/

mysqli_close($connector);

?>