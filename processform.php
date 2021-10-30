<?php

require 'config/config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
    //header('Content-Type: text/html; charset=utf-8');
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

  $correctlyFilledFormValue = ( $correctlyFilledForm == "1") ? "Yes" : "Not";

  $htmlorderSummary = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <h2>Order summary : </h2></div>";
  $htmlValidation = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Valid registration : </strong>" . $correctlyFilledFormValue . "</div>";
  $htmlEventName = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Event name : </strong>" . $eventName . "</div>";
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
  $htmlRegistrationdate = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client registration data : </strong>" . $registrationdate . "</div>";
  $htmlConfirmPrivateInformation = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong> Client confirms GDPR policy : </strong>" . $confirmPrivateInformationResult . "</div>";
  $htmlConfirmCovidResulte = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client confirms COVID-19 policy : </strong>" .  $confirmCovidResult . "</div>";

  $paymentInstructions = "<div class='col-lg-12 col-md-12 col-sm-12 padding-small'> <h3 class='text-center padding-small'>Payment instructions : </h3> " . 
                        "<h4 class='padding-small'>For Czech participants: </h4>" . 
                        "<p> Please send the price: <strong>" . $formPrice . "</strong> <br> with Variable symbol (VS/Variabilní symbol)<strong> " . $orderId . "</strong>" . 
                        " <br>to account <strong>111222333/2010</strong> (Fio banka) </p>" . 
                        "<p> <h4 class='padding-small'>For international bank transaction : </h4> <div>IBAN: <strong> 00420111222333002010 </strong> </div> " . 
                        "<div>BIC: <strong> CZDOMINANTALFA </strong> </div>" . 
                        "<div>Bank address: <strong> Fio banka, a.s.. Millennium Plaza, V Celnici 10 117 21 Prague 1. Czech Republic </strong> </div>".
                        " <div>Account holder name: <strong> Mauritius The Greatest </strong>" . 
                        " </div> <div>Notice for receiver: <strong> order ID: " . $orderId. ", Client name: ". $clientName ." , Client email: " . $clientEmail . 
                        " </strong> </div> </p>" . "</div>"; //TODO - valid price set up by server check, payment´s details set by admin to DB

  $registrationError = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'><h3 style='color:coral;'>Registration error</h3><p style='color:coral;'>Please fill in a new registration or contact the event organizer.</p><div>";

  $userNotification = ($correctlyFilledForm) ? $paymentInstructions : $registrationError;

  echo $htmlValidation . $htmlEventName . $htmlRegistrationType . $htmlPassType . $htmlDancerKind . $htmlLengthType . $htmlCompetitionParticipation . $htmlLocation . $htmlMerchandise . $htmlFormPrice .  $htmlClientName . $htmlClientEmail . $htmlClientPhone . $htmlClientCountry . $htmlClientComments . $htmlRegistrationdate . $htmlConfirmPrivateInformation . $htmlConfirmCovidResulte . $userNotification;

  include("manage/emailing/sendmailtoadmin.php");

  ?>

      </div>
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