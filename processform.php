<?php

require 'config/config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    include("shared/head.php");
    ?>

    <title> Registration confirmation | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

  <head>
  <body>

  <?php
  include("shared/navigation.php");
  ?>

  <div class='content'>
    <div class='container'>
      <div class='container'>
        <div class='col-12'>
          <h1 class="text-center padding-small">Registration result :</h1>
        </div>
      </div>
    </div>

  <?php

  include("manage/processformdata.php");

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
  $htmlConfirmPrivateInformation = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong> Client confirms GDPR : </strong>" . $confirmPrivateInformationResult . "</div>";
  $htmlRegistrationdate = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client comments : </strong>" . $registrationdate . "</div>";

  echo $htmlRegistrationType . $htmlPassType . $htmlDancerKind . $htmlLengthType . $htmlCompetitionParticipation . $htmlLocation . $htmlMerchandise . $htmlFormPrice .  $htmlClientName . $htmlClientEmail . $htmlClientPhone . $htmlClientCountry . $htmlClientComments . $htmlRegistrationdate . $htmlConfirmPrivateInformation;

  ?>

      </div>
    </div>
  </div>



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