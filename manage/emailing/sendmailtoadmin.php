<?php

$to				= 	"buryans@gmail.com";
$subject	=		"Testovací prostředí - Máme novou registraci - Platforma REGIS";

$message_head	=	"<div style='max-width: 550px; margin: 0 auto; line-height: 1.5rem; font-size: 0.9rem;'>" .
                "<p>Krásný den, </p><p>na testovací prostředí přístála další <b>nová registrace do platformy REGIS</b></p></div><br>";



$message_body = "<div style='max-width: 550px; margin: 0 auto; line-height: 1.5rem; font-size: 0.9rem; padding: 30px 30px 30px 30px;'> <div>" .
                $htmlRegistrationType . $htmlPassType . $htmlDancerKind . $htmlLengthType . $htmlCompetitionParticipation . $htmlLocation . $htmlMerchandise . $htmlFormPrice .  $htmlClientName . $htmlClientEmail . $htmlClientPhone . $htmlClientCountry . $htmlClientComments . $htmlRegistrationdate . $htmlConfirmPrivateInformation . $htmlConfirmCovidResulte .
                "</div> </div>";

$message_footer =  "<div style='max-width: 550px; margin: 0 auto; line-height: 1.5rem; font-size: 0.9rem;'>"  . 
              "<p>Další podrobnosti příkladu najdete na platformě REGIS. Prosíme, aby ste se registrace následně věnovali v nejbližší době. </p><br><br><br>" .

              "<h2 style='padding: 0; margin: 0; Margin: 0;text-align: left; line-height: 1.3; color: inherit; word-wrap: normal; font-family: Helvetica, Arial, sans-serif; margin-bottom: 10px; Margin-bottom: 10px; border-bottom: 3px solid #ffc600; padding-bottom: 10px;'>" .
              "POKYNY PRO ADMINISTRACI</h2> Podanou žádost najdete v " . 
              " <a href='#'> Sekce pro administrátora </a> ve správě registrací <br><br>" .
              
              "[ REGIS - Šimon Buryan 30. 10. 2021 ]" . "</p></div>";

$message = $message_head . $message_body . $message_footer;
              
$replyto	=		"From: " . $clientEmail . " \n\r" . "Reply-To:" . $clientEmail . " \n\r";

$headers = "Content-Type: text/html; charset=UTF-8";

echo "<div class='container'> <div class='row'> <div class='col-lg-12 col-md-12 col-sm-12 padding-small'>";
if (mail($to, $subject, $message, $headers)) {
  echo "<h4>Žádost byla odeslána.</h4> <p>Děkujeme za využití našich služeb.</p>";
} else {
  echo "<h4>Objevila se chyba.</h4> <p>Informujte případně správce.</p>";
}
echo "</div>";
?>