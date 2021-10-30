<?php

if ($correctlyFilledForm) {

  $to				= 	$clientEmail;
  $subject	=		"Event \"" . $eventName . "\" registration order-ID: \"" . $orderId . "\" and payment instructions";

  $message_head	=	"<div style='max-width: 550px; margin: 0 auto; line-height: 1.5rem; font-size: 0.9rem;'>" .
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

  echo "<div class='container'> <div class='row'> <div class='col-lg-12 col-md-12 col-sm-12 padding-small'>";
  if (mail($to, $subject, $message, $headers)) {
    echo "<h4 style='color:green;'> The confirmation email with payment instructions was sent.</h4> <p style='color:green;'>Please check your email inbox, confirmation email could be in your spam box.</p>";
  } else {
    echo "<h4 style='color:coral;'>For buyer - An error occured during sending confirming email.</h4> <p style='color:coral;'>Please check the event organizer for further infromation.</p>";
  }
  echo "</div>";

} else {
  echo "<h4 style='color:coral;'>For buyer - An error occured during handling form data.</h4> <p style='color:coral;'>Please check the event organizer for further information.</p>";
}
?>