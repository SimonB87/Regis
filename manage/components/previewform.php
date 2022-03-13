<!-- component : preview form -->








<?php
//test
echo  "TEST <br> *1* " .
  $eventDataId  . " ; " .
  $eventDataEventStatus . " ; " .
  $eventDataEventName . " ; " .
  $eventDataEventStartDate . " ; " .
  $eventDataEventEndDate . " ; eventDataEnableCoupleTicket : " .
  $eventDataEnableCoupleTicket . " ; " .
  "<br> *2* " .
  $eventDataAgreementsEnabled . " ; " .
  $eventDataAgreement1Enabled . " ; " .
  $eventDataAgreement1Text . " ; " .
  $eventDataAgreement2Enabled . " ; " .
  $eventDataAgreement2Text . " ; " .
  $eventDataAgreement3Enabled . " ; " .
  $eventDataAgreement3Text . " ; " .
  "<br> *3* " .
  $eventDataEarlyBirdsRegistrationEnabled . " ; " .
  $eventDataEarlyBirdsRegistrationName . " ; " .
  $eventDataEarlyBirdsRegistrationsStartDate . " ; " .
  $eventDataEarlyBirdsRegistrationsEndDate . " ; " .
  $eventDataTicketsAmountEarlyBirdsRegistrationsSingle . " ; " .
  $eventDataEarlyBirdsTicketPriceSingle . " ; " .
  $eventDataEarlyBirdsTicketPriceCouple . " ; " .
  $eventDataEarlyBirdsTicketAmountCouple . " ; " .
  "<br> *4* " .
  $eventDataRegularRegistrationEnabled . " ; " . 
  $eventDataRegularRegistrationName . " ; " .
  $eventDataRegularRegistrationsStartDate . " ; " . 
  $eventDataRegularRegistrationsEndDate . " ; " . 
  $eventDataRegularTicketPriceSingle . " ; " .
  $eventDataRegularTicketAmountSingle . " ; " .
  $eventDataRegularTicketPriceCouple . " ; " .
  $eventDataRegularTicketAmountCouple . " ; " .
  "<br> *5* " .
  $partyRegistrationEnabled . " ; " .
  $partyRegistrationName . " ; " .
  $partyRegistrationsStartDate . " ; " .
  $partyRegistrationsEndDate . " ; " .
  $partyTicketPriceSingle . " ; " .
  $partyTicketAmountSingle . " ; " .
  $partyTicketPriceCouple . " ; " .
  $partyTicketAmountCouple . " ; " .
  "<br> *6* " .
  $eventDataSpecialType1RegistrationEnabled . " ; " .
  $eventDataSpecialType1RegistrationName . " ; " .
  $eventDataSpecialType1RegistrationsStartDate . " ; " .
  $eventDataSpecialType1RegistrationsEndDate . " ; " .
  $eventDataSpecialType1TicketPriceSingle . " ; " . 
  $eventDataSpecialType1TicketAmountSingle . " ; " .
  $eventDataSpecialType1TicketPriceCouple . " ; " . 
  $eventDataSpecialType1TicketAmountCouple . " ; " .
  "<br> *7* " .
  $eventDataSpecialType2RegistrationEnabled . " ; " .
  $eventDataSpecialType2RegistrationName . " ; " .
  $eventDataSpecialType2RegistrationsStartDate . " ; " .
  $eventDataSpecialType2RegistrationsEndDate . " ; " .
  $eventDataSpecialType2TicketPriceSingle . " ; " . 
  $eventDataSpecialType2TicketAmountSingle . " ; " .
  $eventDataSpecialType2TicketPriceCouple . " ; " . 
  $eventDataSpecialType2TicketAmountCouple;
//test
?>



















<div class="col-12 padding-regular-topBottom my-5">
  <h3 class="text-center"> Preview registration form </h3>
</div>

<div class="col-12 padding-regular-topBottom bg-light rounded">

  <form id="form" class="needs-validation" method="post" action="processform.php" novalidate="">

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 padding-small hidden">
<!--              <option value="1" selected class="1.0">Early bird - till 1st April</option>
              <option value="2" class="1.2">Regular ticket - since 2nd April</option>  -->
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="eventName" value="2021 - Tester &amp; Testie testing weekend" aria-label="readonly Registration type" readonly="" name="eventName" aria-placeholder="1.0" maxlength="250">
            <label for="eventName">Event name (hidden in browser)</label>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 padding-small">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="location" value="Prague" aria-label="readonly input example" readonly="" name="location" maxlength="250">
            <label for="location">Location (hidden in browser)</label>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 padding-small hidden">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="registrationdate" value="" aria-label="readonly Registration date" readonly="" name="registrationdate" maxlength="250">
            <label for="registrationdate">Registration date (hidden in browser)</label>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
          <div class="mb-3 full-width full-height div-select">
            <select id="dancerKind" class="form-select" aria-label="Pass type" onchange="recalculatePrice();" required="" name="dancerKind">
              <option value="" selected="" aria-valuenow="0.0">Select dancer kind ...</option>
              <option value="1 - Leader" aria-valuenow="1.0">Leader</option>
              <option value="2 - Follower" aria-valuenow="1.0">Follower</option>
              <?php if ( (isset($eventDataEnableCoupleTicket) ) && ( strtolower($eventDataEnableCoupleTicket) === "yes" ) ) { echo "<option value='3 - Couple' aria-valuenow='1.75'>Couple</option>"; } ?>

            </select>
            <div class="form-select-customLabel">
              Dancer kind
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please select some valid option.
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
          <div id="passType--parent" class="mb-3 full-width full-height div-select">
            <select id="passType" class="form-select" aria-label="Pass type" required="" onchange="recalculatePrice();" name="passType">
              <option value="" selected="">Select pass type ... </option>
              <?php if ( (strtolower($eventDataEarlyBirdsRegistrationEnabled) === "yes" ) ) { echo "<option value='1 - Early birds pass leader/follower - " . $eventDataEarlyBirdsTicketPriceSingle . ",-Kč' aria-valuenow='" . $eventDataEarlyBirdsTicketPriceSingle . "'>Early birds pass leader/follower - " . $eventDataEarlyBirdsTicketPriceSingle . ",-Kč</option>"; } ?>
              <?php if ( (strtolower($eventDataEarlyBirdsRegistrationEnabled) === "yes" ) && (strtolower($eventDataEnableCoupleTicket) === "yes" ) ) { echo "<option value='2 - Early birds couple - " . $eventDataEarlyBirdsTicketPriceCouple . ",-Kč' aria-valuenow='" . $eventDataEarlyBirdsTicketPriceCouple . "'>Early birds couple - " . $eventDataEarlyBirdsTicketPriceCouple . ",-Kč</option>"; } ?>
              <?php if ( (strtolower($eventDataRegularRegistrationEnabled) === "yes" ) ) { echo "<option value='1 - Fullpass leader/follower - ".$eventDataRegularTicketPriceSingle.",-Kč' aria-valuenow='".$eventDataRegularTicketPriceSingle."'>Fullpass leader/follower - " . $eventDataRegularTicketPriceSingle . ",-Kč</option>"; } ?>
              <?php if ( (strtolower($eventDataRegularRegistrationEnabled) === "yes" ) && (strtolower($eventDataEnableCoupleTicket) === "yes" ) ) { echo "<option value='2 - Fullpass couple - ".$partyTicketPriceCouple.",-Kč' aria-valuenow='".$partyTicketPriceCouple."'>Fullpass couple - " . $partyTicketPriceCouple . ",-Kč</option>"; } ?>
              <?php if ( (strtolower($partyRegistrationEnabled) === "yes" ) ) { echo "<option value='1 - Partypass leader/follower - ".$partyTicketPriceSingle.",-Kč' aria-valuenow='".$partyTicketPriceSingle."'>Partypass leader/follower - " . $partyTicketPriceSingle . ",-Kč</option>"; } ?>
              <?php if ( (strtolower($partyRegistrationEnabled) === "yes" ) && (strtolower($eventDataEnableCoupleTicket) === "yes" ) ) { echo "<option value='2 - Partypass couple - ".$partyTicketPriceCouple.",-Kč' aria-valuenow='".$partyTicketPriceCouple."'>Partypass couple - " . $partyTicketPriceCouple . ",-Kč</option>"; } ?>
            </select>
            <div class="form-select-customLabel">
              Pass type
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please select some valid option.
            </div>
            <div class="hidden passTypePriceBackup">
              <!-- TODO - set prices from variables -->
              <span class="priceBackup-option-1">1500</span>
              <span class="priceBackup-option-2">2600</span>
              <span class="priceBackup-option-3">1000</span>
              <span class="priceBackup-option-4">1600</span>
              <span class="priceBackup-option-5">1100</span>
              <span class="priceBackup-option-6">1800</span>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 padding-small hidden">
          <div class="mb-3 full-width full-height div-select">
            <select id="lengthType" class="form-select" aria-label="Pass type" onchange="recalculatePrice();" name="lengthType">
              <option value="" aria-valuenow="1.0" selected="">Select length ...</option>
              <option value="1 - Friday till Sunday" aria-valuenow="1.0">Friday till Sunday</option>
              <option value="2 - Friday" aria-valuenow="0.6">Friday</option>
              <option value="3 - Saturday" aria-valuenow="0.6">Saturday</option>
              <option value="4 - Sunday" aria-valuenow="0.6">Sunday</option>
              <option value="5 - Friday, Saturday" aria-valuenow="0.75">Friday, Saturday</option>
              <option value="6 - Saturday, Sunday" aria-valuenow="0.7">Saturday, Sunday</option>
            </select>
            <div class="form-select-customLabel">
              Event length
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please select some valid option.
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
          <div class="mb-3 full-width full-height div-select">
            <select id="competitionParticipation" class="form-select" aria-label="Pass type" required="" onchange="recalculatePrice();" name="competitionParticipation">
              <option value="" selected="">Select competition option ...</option>
              <option value="1 - Participate in Jack and Jill - 500,- Kč" aria-valuenow="500">Participate in Jack and Jill - 500,- Kč</option>
              <option value="0 - No participation in competition - 0,- Kč" aria-valuenow="0">No participation in competition - 0,- Kč</option>
            </select>
            <div class="form-select-customLabel">
              Competition option
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please select some valid option.
            </div>
            <div class="hidden merchandisePriceBackup">
              <!-- TODO - set prices from variables -->
              <span class="competitionPriceBackup-option-1">500</span>
              <span class="competitionPriceBackup-option-2">0</span>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
          <div class="mb-3 full-width full-height div-select">
            <select id="merchandise" class="form-select" aria-label="Pass type" required="" onchange="recalculatePrice();" name="merchandise">
              <option value="" selected="">Select merchandise option ...</option>
              <option value="0 - No merchandise" aria-valuenow="0">No merchandise</option>
              <option value="1 - Shirt 500,- Kč" aria-valuenow="500">Shirt 500,- Kč</option>
              <!--
              <option value="2 - Towel 400,- Kč" aria-valuenow="400">Towel 400,- Kč</option>
              <option value="3 - Dancing shoes bag 300,- Kč" aria-valuenow="300">Dancing shoes bag 300,- Kč</option>
              -->
            </select>

            <div class="form-select-customLabel">
              Merchandise
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please select some valid option.
            </div>
            <div class="hidden merchandisePriceBackup">
              <span class="merchandisePriceBackup-option-1">0</span>
              <span class="merchandisePriceBackup-option-2">500</span>
              <span class="merchandisePriceBackup-option-3">400</span>
              <span class="merchandisePriceBackup-option-4">300</span>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12  padding-small">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="formPrice" value="... ,- Kč" aria-label="readonly input example" readonly="" name="formPrice">
            <label for="formPrice">Your full price is </label>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 padding-small text-center">
          <h3>Customer contact details</h3>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="clientName" required="" name="clientName" maxlength="250">
            <label for="clientName">Name</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="clientEmail" placeholder="name@example.com" required="" name="clientEmail" maxlength="250">
              <label for="clientEmail">Email address</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in email.
              </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
          <div class="form-floating">
            <input type="phone" class="form-control" id="clientPhone" required="" name="clientPhone" minlength="6" value="+420" maxlength="250">
            <label for="clientPhone">Phone (with your national predial)</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in phone.
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="clientCountry" required="" name="clientCountry" maxlength="250">
            <label for="clientCountry">Your country</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in the text field.
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="confirmPrivateInformation" required="" name="confirmPrivateInformation">
          <label class="form-check-label" for="confirmPrivateInformation">I agree with storing the information I am providing you and I agree with your company GDP policy/therms</label> <a href="#">GDP policy/therms</a>
          <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in the text field.
            </div>
        </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="confirmCovid" required="" name="confirmCovid">
          <label class="form-check-label" for="confirmCovid">I am vaccinated against COVID-19 or I have valid COVID-19 test</label> <a href="#">COVID-19 policy</a>
          <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in the text field.
            </div>
        </div>
        </div>


        <div class="col-lg-12 col-md-12 col-sm-12 padding-small">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="clientComments" style="height: 100px" name="clientComments" maxlength="250"></textarea>
            <label for="clientComments">Comments</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

      </div>
  </form>

</div>