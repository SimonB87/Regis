<?php

if ($correctlyFilledForm) {

  $to				= 	$clientEmail;
  $subject	=		"Event \"" . $eventName . "\" registration order-ID: \"" . $orderId . "\" and payment instructions";

  $message_head	=	"<div style='max-width: 550px; margin: 0 auto; line-height: 1.5rem; font-size: 0.9rem;'>" .
                  "<h4 class='padding-small text-warning'> THIS IS WEB TEST ENVIRONMENT ! Registrations only for test purpose ! </h4>" .
                  "<p>Thank you for registering for then event " . $eventName  . ", </p><p>please send the required amount by a bank transfer <b>according to instructions bellow</b></p></div><br>";



  $message_body = "<div style='max-width: 550px; margin: 0 auto; line-height: 1.5rem; font-size: 0.9rem; padding: 30px 30px 30px 30px;'> <div>" .

                  "<h2 style='padding: 0; margin: 0; Margin: 0;text-align: left; line-height: 1.3; color: inherit; word-wrap: normal; font-family: Helvetica, Arial, sans-serif; margin-bottom: 10px; Margin-bottom: 10px; border-bottom: 3px solid #ffc600; padding-bottom: 10px;'>" .
                  "Payment instructions" .
                  "</h2>".

                  "<div>" . $userNotification . "</div>" .

                  "<h2 style='padding: 0; margin: 0; Margin: 0;text-align: left; line-height: 1.3; color: inherit; word-wrap: normal; font-family: Helvetica, Arial, sans-serif; margin-bottom: 10px; Margin-bottom: 10px; border-bottom: 3px solid #ffc600; padding-bottom: 10px;'>" .
                  "Registration details" .
                  "</h2>".
                  "<div> <h3> Order - ID:</h3><p>" . $orderId . "</p> </div>" .
                  $htmlRegistrationType . $htmlPassType . $htmlDancerKind . $htmlLengthType . $htmlCompetitionParticipation . $htmlLocation . $htmlMerchandise . $htmlFormPrice .  $htmlClientName . $htmlClientEmail . $htmlClientPhone . $htmlClientCountry . $htmlClientComments . $htmlRegistrationdate . $htmlConfirmPrivateInformation . $htmlConfirmCovidResulte . 
                  "</div> </div>";

  $message_footer =  "<div style='max-width: 550px; margin: 0 auto; line-height: 1.5rem; font-size: 0.9rem;'>"  . 
                "<h2 style='padding: 0; margin: 0; Margin: 0;text-align: left; line-height: 1.3; color: inherit; word-wrap: normal; font-family: Helvetica, Arial, sans-serif; margin-bottom: 10px; Margin-bottom: 10px; border-bottom: 3px solid #ffc600; padding-bottom: 10px;'>" .
                "Further infromation</h2>" . 
                " <p>For further information please see the official <a href='#'> Facebook</a> event description. </p><br><br><br> <br><br>" .
                "[ Platforma REGIS - Šimon Buryan 30. 10. 2021 ]" . "</p></div>";

  $message = $message_head . $message_body . $message_footer;
                
  $replyto	=		"From: " . $clientEmail . " \n\r" . "Reply-To:" . $clientEmail . " \n\r";

  $headers = "Content-Type: text/html; charset=UTF-8";

  $warningIcon = "<span><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-exclamation-triangle' viewBox='0 0 16 16'>
                    <path d='M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z'></path>
                    <path d='M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z'></path>
                  </svg></span>";

$htmlMailIcon = "<span><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' 
                  class='bi bi-mailbox' viewBox='0 0 16 16'>
                  <path d='M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z'></path>
                  <path d='M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z'></path>
                </svg></span>";

  echo "<div class='container'> <div class='row'> <div class='col-lg-12 col-md-12 col-sm-12 padding-small'>";
  if (mail($to, $subject, $message, $headers)) {
    echo "<h4 style='color:green;'>". $htmlMailIcon ." For buyer - The confirmation email with payment instructions was sent.</h4> <p style='color:green;'>Please check your email inbox, confirmation email could be in your spam box.</p>";
  } else {
    echo "<h4 style='color:coral;'>" . $warningIcon . " For buyer - An error occured during sending confirming email.</h4> <p style='color:coral;'>Please check the event organizer for further infromation.</p>";
  }
  echo "</div>";

} else {
  echo "<h4 style='color:coral;'>" . $warningIcon . " For buyer - An error occured during handling form data.</h4> <p style='color:coral;'>Please check the event organizer for further information.</p>";
}
?>