<?php

require 'config/config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    include("shared/head.php");
    ?>

    <title> Event registration | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

  <head>
  <body>

  <?php
  include("shared/navigation.php");
  ?>

  <div class='container'>
    <div class='container'>
      <div class='col-12'>
        <h1 class="text-center padding-small">Registration result :</h1>
      </div>
    </div>
  </div>

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
  $confirmPrivateInformation = mysqli_real_escape_string($connector, $_POST['confirmPrivateInformation']);
  $registrationdate = mysqli_real_escape_string($connector, $_POST['registrationdate']);

  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

  if (!mysqli_query($connector, "SET a=1")) {
    printf("Error message: %s\n", mysqli_error($link));
  }
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
  ?>

  <div class='container'>
    <div class='row'>

  <?php

  $htmlRegistrationType = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Registration type : </strong>" . $registrationType . "</div>";
  $htmlPassType = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Pass type : </strong>" . $passType . "</div>";
  $htmlDancerKind = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Dancer kind: </strong>" . $dancerKind . "</div>";
  $htmlLengthType = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Length type : </strong>" . $lengthType . "</div>";
  $htmlCompetitionParticipation = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Competition participation : </strong>" . $competitionParticipation . "</div>";
  $htmlLocation = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Location : </strong>" . $location . "</div>";
  $htmlMerchandise = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Merchandise : </strong>" . $merchandise . "</div>";
  $htmlFormPrice = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Form price: </strong>" . $formPrice . "</div>";
  $htmlClientName = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client name : </strong>" . $clientName . "</div>";
  $htmlClientEmail = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client email : </strong>" . $clientEmail . "</div>";
  $htmlClientPhone = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client phone : </strong>" . $clientPhone . "</div>";
  $htmlClientCountry = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client country : </strong>" . $clientCountry . "</div>";
  $htmlClientComments = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client comments : </strong>" . $clientComments . "</div>";
  $htmlConfirmPrivateInformation = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong> Client confirms GDPR (\"on\" if true) : </strong>" . $confirmPrivateInformation . "</div>";
  $htmlRegistrationdate = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client comments : </strong>" . $registrationdate . "</div>";

  echo $htmlRegistrationType . $htmlPassType . $htmlDancerKind . $htmlLengthType . $htmlCompetitionParticipation . $htmlLocation . $htmlMerchandise . $htmlFormPrice .  $htmlClientName . $htmlClientEmail . $htmlClientPhone . $htmlClientCountry . $htmlClientComments . $htmlRegistrationdate . $htmlConfirmPrivateInformation;

  ?>

      </div>
    </div>

  <?php
  mysqli_close($connector);
  ?>

  <?php
  include("shared/footer.php");
  ?> 

  <script src="shared/libs/bootstrap/js/bootstrap.js"></script>

  <!--
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <script src="shared/assets/js/formvalidation.js"></script>
  <script src="shared/assets/js/recalculateprice.js"></script>

  </body>
</html>