<?php

if ($correctlyFilledForm) {

  $to				= 	$clientEmail;


  $subject	=		" Your order-ID: \"" . $storedOrderID . "\" na akci \"" . $storedEventName . "\" | Platform REGIS";

  //include("././shared/appinfosetup/appadminbankinfo.php"); // TODO bug fix this link

  $nationalBankAccount = "2002019652/2010 (Fio Banka, a.s.)";  // onyl temporarly
  $accountIBAN = "CZ65 2010 0000 0020 0201 9652"; // onyl temporarly
  $accountBIC = "FIOBCZPPXXX"; // onyl temporarly
  $accountHolderName = "Elvira Masanlo"; // onyl temporarly
  $accountHolderAddress = "My Main Street 909/123, 12 007 - My City, My Country"; // onyl temporarly
  $accountBankAddress = "Fio banka, a.s. Millennium Plaza, V Celnici 10, Prague 1, ZIP Code : 117 21. Czech Republic"; // onyl temporarly
  
  $paymentInstructions_holderAddress = (isset($accountHolderAddress)) ? (" <p>Account holder name: <strong>" . $accountHolderAddress . " </strong></p>" ) : "";

  $message_header	=	"<!-- BODY -->
                    <!-- Set message background color (twice) and text color (twice) -->
                    <body topmargin='0' rightmargin='0' bottommargin='0' leftmargin='0' marginwidth='0' marginheight='0' width='100%' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%; height: 100%; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%; background: #2D3445;
                      color: #FFFFFF;'
                      bgcolor='#2D3445'
                      text='#FFFFFF'>
                    
                    <!-- SECTION / BACKGROUND -->
                    <!-- Set message background color one again -->
                    <table width='100%' align='center' border='0' cellpadding='0' cellspacing='0' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;' class='background'><tr><td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;'
                      bgcolor='#2D3445'>
                    
                    <!-- WRAPPER -->
                    <!-- Set wrapper width (twice) -->
                    <table style='min-height: 50px;'></table> <!-- dev-try added extra space from top -->

                    <table border='0' cellpadding='0' cellspacing='0' align='center'
                      width='500' style='border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit; max-width: 500px; background-color: #c1470a; border: 3px solid #c1470a;' class='wrapper'> <!-- dev-try - special background -->
                    
                      <tr>
                        <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
                          padding-top: 20px;
                          padding-bottom: 20px;'>
                    
                          <!-- PREHEADER -->
                          <!-- Set text color to background color -->
                          <div style='display: none; visibility: hidden; overflow: hidden; opacity: 0; font-size: 1px; line-height: 1px; height: 0; max-height: 0; max-width: 0;
                            color: #2D3445;' class='preheader'>
                            Available on&nbsp;GitHub and&nbsp;CodePen. Highly compatible. Designer friendly. More than 50%&nbsp;of&nbsp;total email opens occurred on&nbsp;a&nbsp;mobile device&nbsp;— a&nbsp;mobile-friendly design is&nbsp;a&nbsp;must for&nbsp;email campaigns.</div>
                    
                          <!-- LOGO -->
                          <!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2. URL format: http://domain.com/?utm_source={{Campaign-Source}}&utm_medium=email&utm_content=logo&utm_campaign={{Campaign-Name}} -->
                          <a target='_blank' style='text-decoration: none;'
                            href='https://github.com/konsav/email-templates/'><img border='0' vspace='0' hspace='0'
                            src='https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e79e6b7afefe444bb6e516a_page-01__1_-removebg-preview.png'
                            width='200' height='60'
                            alt='Logo' title='Logo' style='
                            color: #FFFFFF;
                            font-size: 10px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;' /></a>
                    
                        </td>
                      </tr>";
  
  
  
  $message_start = "<!-- HERO IMAGE -->
                    <!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2 (wrapper x2). Do not set height for flexible images (including 'auto'). URL format: http://domain.com/?utm_source={{Campaign-Source}}&utm_medium=email&utm_content={{Ìmage-Name}}&utm_campaign={{Campaign-Name}} -->
                    <tr style='background: linear-gradient(60deg, #2D3445, #2D3445, #e66465, #e66465,  #9198e5, #9198e5, #2D3445, #2D3445);'> <!-- dev-try background section -->
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;
                        padding-top: 0px;' class='hero'><a target='_blank' style='text-decoration: none;'
                        href='https://github.com/konsav/email-templates/'><img border='0' vspace='0' hspace='0'
                        src='https://uploads-ssl.webflow.com/5e18aa9988b6fcc053b834a9/5e85c0dbf0055b5090ac5b57_x6760-removebg-preview.png'
                        alt='Please enable images to view this content' title='Hero Image'
                        width='340' style='
                        width: 87.5%;
                        max-width: 340px;
                        color: #FFFFFF; font-size: 13px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;'/></a></td>
                    </tr>

                    <!-- SUPHEADER -->
                    <!-- Set text color and font family ('sans-serif' or 'Georgia, serif') -->
                    <tr>
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 14px; font-weight: 400; line-height: 150%; letter-spacing: 2px;
                        padding-top: 27px;
                        padding-bottom: 0;
                        color: #ffffff;
                        font-family: sans-serif;' class='supheader'>
                          You have successfuly registered for the event " . $storedEventName . " organized by Mauritius & Elvira Bachata Prague team
                      </td>
                    </tr>

                    <!-- HEADER -->
                    <!-- Set text color and font family ('sans-serif' or 'Georgia, serif') -->
                    <tr>
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;  padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 24px; font-weight: bold; line-height: 130%;
                        padding-top: 5px;
                        color: #ffffff;
                        font-family: sans-serif;' class='header'>
                         Thank you for registering for then event, below you will find the payment instructions. After paying the event organizer will send you your ticket.
                      </td>
                    </tr>
                    <tr>
                    <!-- separation line -->
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
                        padding-top: 30px;' class='line'><hr
                        color='#565F73' align='center' width='100%' size='1' noshade style='margin: 0; padding: 0;' />
                      </td>
                    </tr>";

  $message_payments =  "<!-- PARAGRAPH -->
                    <!-- Set text color and font family ('sans-serif' or 'Georgia, serif'). Duplicate all text styles in links, including line-height -->
                    <tr>
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
                        padding-top: 15px; 
                        color: #35384e;
                        font-family: sans-serif;' class='paragraph'>
                          <h3>Payment instructions</h3>
                      </td>
                    </tr>
                    <tr>
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
                        padding-top: 15px; 
                        color: #35384e;
                        font-family: sans-serif;' class='paragraph'>
                          <h4>For participants from Czech Republic</h4>
                      </td>
                    </tr>
                    <tr>
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
                        padding-top: 15px; 
                        color: #35384e;
                        font-family: sans-serif;' class='paragraph'>
                          <p>Please send the price: <strong>" . $storedFormPrice . "</strong></p>
                          <p>with Variable symbol (VS/Variabilní symbol) <strong>" . $storedOrderID . "</strong></p>
                          <p>to account <strong> " . $nationalBankAccount . " </strong> </p>
                      </td>
                    </tr>
                    <tr>
                    <!-- separation line -->
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
                        padding-top: 30px;' class='line'><hr
                        color='#565F73' align='center' width='100%' size='1' noshade style='margin: 0; padding: 0;' />
                      </td>
                    </tr>
                    <tr>
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
                        padding-top: 15px; 
                        color: #35384e;
                        font-family: sans-serif;' class='paragraph'>
                          <h4>For international payments</h4>
                      </td>
                    </tr>
                    <tr>
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
                        padding-top: 15px; 
                        color: #35384e;
                        font-family: sans-serif;' class='paragraph'>
                        <p>IBAN: <strong>" . $accountIBAN . "</strong></p>
                        <p>BIC/SWIFT: <strong>".$accountBIC."</strong></p>
                        <p>Bank address: <strong>". $accountBankAddress ."</strong></p>
                        <p>Account holder name: <strong>".$accountHolderName."</strong></p>" .
                        $paymentInstructions_holderAddress .
                        "<p>Price : <strong>" . $storedFormPrice . "</strong></p>
                        <p>Notice for receiver: <strong>\"Order ID:" . $storedOrderID . ", client: " . $storedClientName . " , contact: " . $storedClientEmail. "\"</strong></p>
                      </td>
                    </tr>
                    <tr>
                    <!-- separation line -->
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
                        padding-top: 30px;' class='line'><hr
                        color='#565F73' align='center' width='100%' size='1' noshade style='margin: 0; padding: 0;' />
                      </td>
                    </tr>
                    <tr>";

                    $confirmationHtml1 = ( (isset($storedPrivateInformation1Description)) && (strlen($storedPrivateInformation1Description) > 2) ) ? ( "<p>" . $storedPrivateInformation1Description . " : <strong>" . $storedconfirmPrivateInformation1 . "</strong></p>" ) : "";
                    $confirmationHtml2 = ( (isset($storedPrivateInformation2Description)) && (strlen($storedPrivateInformation2Description) > 2) ) ? ( "<p>" . $storedPrivateInformation2Description . " : <strong>" . $storedconfirmPrivateInformation2 . "</strong></p>" ) : "";
                    $confirmationHtml3 = ( (isset($storedPrivateInformation3Description)) && (strlen($storedPrivateInformation3Description) > 2) ) ? ( "<p>" . $storedPrivateInformation3Description . " : <strong>" . $storedconfirmPrivateInformation3 . "</strong></p>" ) : "";

$message_summary =  "<!-- PARAGRAPH -->
                      <!-- Set text color and font family ('sans-serif' or 'Georgia, serif'). Duplicate all text styles in links, including line-height -->
                      <tr>
                        <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
                          padding-top: 15px; 
                          color: #35384e;
                          font-family: sans-serif;' class='paragraph'>
                            <h3>Registration summary</h3>
                        </td>
                      </tr>
                      <tr>
                        <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
                          padding-top: 15px; 
                          color: #35384e;
                          font-family: sans-serif;' class='paragraph'>
                          <p>Order ID: <strong>" . $storedOrderID . "</strong></p>
                          <p>Event name : <strong>" . $storedEventName . "</strong></p>

                          <p>Price : <strong>" . $storedFormPrice . "</strong></p>

                          <p>Pass type : <strong>" . $storedPassType . "</strong></p>
                          <p>Dancer kind : <strong>" . $storedDancerKind . "</strong></p>

                          <p>Other ticket option : <strong>" . $otherTicketOptionsText1 . $otherTicketOptionsText2 . "</strong></p>
                          <p>Other ticket option dancer kind  : <strong>" . $storedOtherDancerKind . "</strong></p>

                          <p>Event location : <strong>" . $storedLocation . "</strong></p>
                          <p></p>
                          <p>Buyer name : <strong>" . $storedClientName . "</strong></p>
                          <p>Buyer email : <strong>" . $storedClientEmail . "</strong></p>
                          <p>Buyer phone : <strong>" . $storedClientPhone . "</strong></p>
                          <p>Ordered on date : <strong>" . $storedRegistrationdate . "</strong></p>" .
                          $confirmationHtml1 .
                          $confirmationHtml2 .
                          $confirmationHtml3 .
                        "</td>
                      </tr>";

$message_footer = "	<!-- LINE -->
                    <!-- Set line color -->
                    <tr>
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
                        padding-top: 30px;' class='line'><hr
                        color='#565F73' align='center' width='100%' size='1' noshade style='margin: 0; padding: 0;' />
                      </td>
                    </tr>

                    <!-- FOOTER -->
                    <!-- Set text color and font family ('sans-serif' or 'Georgia, serif'). Duplicate all text styles in links, including line-height -->
                    <tr>
                      <td align='center' valign='top' style='border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 13px; font-weight: 400; line-height: 150%;
                        padding-top: 10px;
                        padding-bottom: 20px;
                        color: #000;
                        font-family: sans-serif;' class='footer'>

                          This email template was sent to you by Regis registration system © created with ♥ by <a href='http://www.simonburyan.cz/' target='_blank' style='text-decoration: underline; color: blue; font-family: sans-serif; font-size: 13px; font-weight: 400; line-height: 150%;'>SimonBuryan.cz</a> .

                          <!-- ANALYTICS -->
                          <!-- https://www.google-analytics.com/collect?v=1&tid={{UA-Tracking-ID}}&cid={{Client-ID}}&t=event&ec=email&ea=open&cs={{Campaign-Source}}&cm=email&cn={{Campaign-Name}} -->
                          <img width='1' height='1' border='0' vspace='0' hspace='0' style='margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;'
                          src='https://raw.githubusercontent.com/konsav/email-templates/master/images/tracker.png' />

                      </td>
                    </tr>

                    <!-- End of WRAPPER -->
                    </table>

                    <!-- End of SECTION / BACKGROUND -->
                    </td></tr></table>

                    <table style='min-height: 50px;'></table> <!-- dev-try added extra space from bottom -->

                    </body>";



  $message = $message_header . $message_start . $message_payments . $message_summary . $message_footer;
                
  $replyto	=		"From: " . $storedClientEmail . " \n\r" . "Reply-To:" . $storedClientEmail . " \n\r";
  
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

  $exitIcon = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check' viewBox='0 0 16 16'>
                 <path d='M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z'></path>
              </svg>";


  echo "<div class='container'> <div class='row'> <div class='col-lg-12 col-md-12 col-sm-12 padding-small'>";
  if ( (mail($to, $subject, $message, $headers)) && $correctlyFilledForm ) {
    echo "<div class='alert alert-success' role='alert'><h4 style='color:green;'>". $htmlMailIcon ." For buyer - The confirmation email with payment instructions was sent.</h4> <p style=''>Please check your email inbox, confirmation email could be in your spam box.</p><span class='alert-hide'>".$exitIcon."</span></div>";
  } else {
    echo "<div class='alert alert-warning' role='alert'><h4 style='color:coral;'>" . $warningIcon . " For buyer - An error occurred during sending confirming email.</h4> <p style=''>Please check the event organizer for further information.</p><span class='alert-hide'>".$exitIcon."</span></div>";
  }
  echo "</div></div></div>";

} else {
  echo "<div class='container'> <div class='row'> <div class='col-lg-12 col-md-12 col-sm-12 padding-small'>";
  echo "<div class='alert alert-warning' role='alert'><h4 style='color:coral;'><h4 style='color:coral;'>" . $warningIcon . " For buyer - An error occured during handling form data.</h4> <p style='color:coral;'>Please check the event organizer for further information.</p><span class='alert-hide'>".$exitIcon."</span></div>";
  echo "</div></div></div>";
}
?>