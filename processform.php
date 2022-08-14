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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <title> Registration confirmation | 🕺💃🏻 Mauritius & Elvira Bachata Prague </title>

  </head>
  <body style="background: #303030;">

  <?php
  include("shared/navigation.php");
  include("manage/processformdata.php");

  $isEventEdited = true;
  $selectByEventId = $eventID;

  include("manage/handlers/handler_geteventdata.php");

  include("manage/handlers/handler_outputotherticketoptionsname.php");

  mysqli_close($connector);

  ?>

  <?php


  $htmlCashIcon = "<span class='toCopyIcon'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cash-coin' viewBox='0 0 16 16'>
                <path fill-rule='evenodd' d='M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z'></path>
                <path d='M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z'></path>
                <path d='M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z'></path>
                <path d='M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z'></path>
              </svg></span>";
  $htmlGlobeIcon = "<span><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-globe' viewBox='0 0 16 16'>
                        <path d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z'></path>
                      </svg>
                    </span>";
  
  $htmlLocalIcon = "<span><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pin-map' viewBox='0 0 16 16'>
                      <path fill-rule='evenodd' d='M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z'></path>
                      <path fill-rule='evenodd' d='M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z'></path>
                    </svg></span>";

  $correctlyFilledFormValue = ( $correctlyFilledForm == "1") ? "Yes" : "Not";

  $htmlorderSummary = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <h2>Order summary : </h2></div>";
  $htmlValidation = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Valid registration : </strong>" . $correctlyFilledFormValue . "</div>";
  $htmlEventName = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Event name : </strong>" . $eventName . "</div>";

  $htmlPassType = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Pass type : </strong>" . $passType . "</div>";
  $htmlDancerKind = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Dancer kind: </strong>" . $dancerKind . "</div>";

  $htmlOtherTicketOptions = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong> Other ticket option: </strong>" . $otherTicketOptionsText1 . $otherTicketOptionsText2 . "</div>";
  $htmlOtherDancerKind = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong> Other dancer kind: </strong>" . $otherDancerKind . "</div>";

  $htmlLocation = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Location : </strong>" . $location . "</div>";
  $htmlFormPrice = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Form price: </strong>" . $formPrice . "</div>";
  $htmlClientName = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client name : </strong>" . $clientName . "</div>";
  $htmlClientEmail = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client email : </strong>" . $clientEmail . "</div>";
  $htmlClientPhone = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client phone : </strong>" . $clientPhone . "</div>";
  $htmlClientCountry = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client country : </strong>" . $clientCountry . "</div>";
  $htmlClientComments = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client comments : </strong>" . $clientComments . "</div>";
  $htmlRegistrationdate = "<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong>Client registration data : </strong>" . $registrationdate . "</div>";

    $htmlConfirmPrivateInformationPart1 = (strlen($confirmPrivateInformation1) > 1) ? ("<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong> ". $confirmPrivateInformation1Description .":  </strong>" . $confirmPrivateInformation1 . "</div>") : ("" . strlen($confirmPrivateInformation1) . "");

    $htmlConfirmPrivateInformationPart2 = (strlen($confirmPrivateInformation2) > 1) ? ("<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong> ". $confirmPrivateInformation2Description .":  </strong>" . $confirmPrivateInformation1 . "</div>" ) : ("" . strlen($confirmPrivateInformation2) . "");

    $htmlConfirmPrivateInformationPart3 = (strlen($confirmPrivateInformation3) > 1) ? ("<div class='col-lg-6 col-md-6 col-sm-12 padding-small'> <strong> ". $confirmPrivateInformation3Description .":  </strong>" . $confirmPrivateInformation1 . "</div>") : ("" . strlen($confirmPrivateInformation3) . "");

  $htmlConfirmPrivateInformation = $htmlConfirmPrivateInformationPart1 . $htmlConfirmPrivateInformationPart2 . $htmlConfirmPrivateInformationPart3;
  //test
  //echo "htmlConfirmPrivateInformation " . $htmlConfirmPrivateInformation;
  //test

  $exitIcon = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check' viewBox='0 0 16 16'>
                <path d='M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z'></path>
              </svg>";

  $testEnvironment = "<div class='padding-small'> 
                        <div class='alert alert-secondary col-lg-12 col-md-12 col-sm-12 padding-small' role='alert'>
                          <h4 class=''> THIS IS WEB TEST ENVIRONMENT ! </h4> 
                          <p> Registrations only for test purpose ! </p>
                          <span class='alert-hide'>".$exitIcon."</span>
                        </div>
                      </div>";

  $paymentInstructions = "<div class='container'><div class='row'>". $testEnvironment . 
                        "<div class='col-lg-12 col-md-12 col-sm-12 padding-regular-topBottom'> <h2 class='text-center' style='color: green;'>You have registered for the event!</h2> <h3 class='text-center padding-small'>" ." Payment instructions : </h3> " . 
                        "<h4 class='padding-small'>". $htmlLocalIcon ." For Czech participants: </h4>" . 
                        "<p> Please send the price: <strong class='toCopy'>" . " " . $formPrice . "</strong> <br> with Variable symbol (VS/Variabilní symbol)<strong class='text-green toCopy' style=''> " 
                        . " " .  $orderId . "</strong>" . 
                        " <br>to account <strong class='toCopy'>" . " " . " 111222333/2010</strong> (Fio banka) </p>" . 
                        "<p> <h4 class='padding-small'>" . $htmlGlobeIcon. " For international bank transaction : </h4> <div>IBAN: <strong class='toCopy'>" . " " . " 00420111222333002010 </strong> </div> " . 
                        "<div>BIC: <strong class='toCopy'> " . "CZDOMINANTALFA </strong> </div>" . 
                        "<div>Bank address: <strong class='toCopy'>" . " Fio banka, a.s. Millennium Plaza, V Celnici 10, Prague 1, ZIP Code : 117 21. Czech Republic </strong> </div>".
                        " <div>Account holder name: <strong class='toCopy'>" . " Mauritius The Greatest </strong>" . 
                        " </div> " . 
                        " <div>Price : <strong class='toCopy'> " . " " . $formPrice . "</strong></div>" .
                        "<div>Notice for receiver: \"<strong class='toCopy'>" . " Order ID: " . $orderId. ", Client name: ". $clientName ." , Client email: " . $clientEmail . "</strong>\" </div>" .
                        " </p>" . "</div></div></div>"; //TODO - valid price set up by server check, payment´s details set by admin to DB

  $exitIcon = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check' viewBox='0 0 16 16'>
                        <path d='M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z'></path>
                     </svg>";

  $registrationError = "<div class='container'><div class='row'><div class='padding-small'>
                        <div class='alert alert-warning col-lg-12 col-md-12 col-sm-12 padding-small' role='alert'>
                          <h3 style='color:coral;'>Registration error</h3><p style='color:coral;'>Please fill in a new registration or contact the event organizer.</p><span class='alert-hide'>".$exitIcon."</span></div></div></div></div>";

  $userNotification = ($correctlyFilledForm) ? $paymentInstructions : $registrationError;

  $registrationSummary = "<div class='container padding-regular-topBottom'> <div class='row'> <div class='col-12'> <h1 class='text-center padding-regular-topBottom'>Registration summary :</h1> </div> <div class='col-12 test-link'> <a href='manage/registrations.php#orders'> <button class='btn btn-warning'> TEST : Table of saved registrations </button></a> </div>";

  echo $userNotification;

  include("manage/emailing/getorderdata.php");
  include("manage/emailing/sendmailtoadmin.php");
  include("manage/emailing/sendmailtotestadmin.php");
  include("manage/emailing/sendmailtoclient.php");

  echo $registrationSummary . $htmlValidation . $htmlEventName . $htmlPassType . $htmlDancerKind . $htmlOtherTicketOptions . $htmlOtherDancerKind . $htmlLocation . $htmlFormPrice .  $htmlClientName . $htmlClientEmail . $htmlClientPhone . $htmlClientCountry . $htmlClientComments . $htmlRegistrationdate . $htmlConfirmPrivateInformation;

  ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include("shared/contactsection.php");
  include("shared/footer.php");
  ?> 

  <script src="shared/libs/bootstrap/js/bootstrap.js"></script>
  <script src="shared/assets/js/hidenotification.js"></script>
  <script src='shared/assets/js/scipt.js' defer></script>

  <!--
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

  </body>
</html>