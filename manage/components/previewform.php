<!-- component : preview form - see the visualised registration in admin test mode -->

<?php 
// ! oprava logiky - $isVisible_dancerKind_couple - tento boolean jsem nahradil za "MaintainSinglesParity"
$isVisible_dancerKind_couple = ( (isset($eventDataMaintainSinglesParity) ) && ( strtolower($eventDataMaintainSinglesParity) === "yes" ) );
$isVisible_passType_earlyBirdsTicketSingle = ( (strtolower($eventDataEarlyBirdsRegistrationEnabled) === "yes" ) && ($preview_earlybirdsSingleSold <= $eventDataTicketsAmountEarlyBirdsRegistrationsSingle) && ( $preview_date >= $eventDataEarlyBirdsRegistrationsStartDate ) && ( $preview_date <= $eventDataEarlyBirdsRegistrationsEndDate ) );

$isVisible_passType_earlyBirdsTicketCouple = ((strtolower($eventDataEarlyBirdsRegistrationEnabled) === "yes" ) && (strtolower($eventDataMaintainSinglesParity) === "yes" ) && ($preview_earlybirdsCoupleSold <= $eventDataEarlyBirdsTicketAmountCouple) && ( $preview_date >= $eventDataEarlyBirdsRegistrationsStartDate ) && ( $preview_date <= $eventDataEarlyBirdsRegistrationsEndDate ) );

$isVisible_passType_regularTicketSingle = ((strtolower($eventDataRegularRegistrationEnabled) === "yes" ) && ($preview_regularSingleSold <= $eventDataRegularTicketAmountSingle) && ( $preview_date >= $eventDataRegularRegistrationsStartDate ) && ( $preview_date <= $eventDataRegularRegistrationsEndDate ) );

$isVisible_passType_regularTicketCouple = ( (strtolower($eventDataRegularRegistrationEnabled) === "yes" ) && (strtolower($eventDataMaintainSinglesParity) === "yes" ) && ($preview_regularCoupleSold <= $eventDataRegularTicketAmountCouple) && ( $preview_date >= $eventDataRegularRegistrationsStartDate ) && ( $preview_date <= $eventDataRegularRegistrationsEndDate ) );

$isVisible_passType_partyPassSingle = ( (strtolower($partyRegistrationEnabled) === "yes" )&& ($preview_partySingleSold <= $partyTicketAmountSingle) && ( $preview_date >= $partyRegistrationsStartDate ) && ( $preview_date <= $partyRegistrationsEndDate ) );

$isVisible_passType_partyPassCouple = ( (strtolower($partyRegistrationEnabled) === "yes" ) && (strtolower($eventDataMaintainSinglesParity) === "yes" ) && ($preview_partyCoupleSold <= $partyTicketAmountCouple) && ( $preview_date >= $partyRegistrationsStartDate ) && ( $preview_date <= $partyRegistrationsEndDate ) );

$isVisible_passType_specialType1Single = ( (strtolower($eventDataSpecialType1RegistrationEnabled) === "yes" ) && ($preview_spec1SingleSold <= $eventDataSpecialType1TicketAmountSingle) && ( $preview_date >= $eventDataSpecialType1RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType1RegistrationsEndDate ) );

$isVisible_passType_specialType1Couple = ( (strtolower($eventDataSpecialType1RegistrationEnabled) === "yes" ) && (strtolower($eventDataMaintainSinglesParity) === "yes" ) && ($preview_spec1CoupleSold <= $eventDataSpecialType1TicketAmountCouple) && ( $preview_date >= $eventDataSpecialType1RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType1RegistrationsEndDate ) );

$isVisible_passType_specialType2Single = ( (strtolower($eventDataSpecialType2RegistrationEnabled) === "yes" ) && ($preview_spec2SingleSold <= $eventDataSpecialType2TicketAmountSingle) && ( $preview_date >= $eventDataSpecialType2RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType2RegistrationsEndDate ) );

$isVisible_passType_specialType2Couple = ( (strtolower($eventDataSpecialType2RegistrationEnabled) === "yes" ) && (strtolower($eventDataMaintainSinglesParity) === "yes" ) && ($preview_spec2CoupleSold <= $eventDataSpecialType2TicketAmountCouple) && ( $preview_date >= $eventDataSpecialType2RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType2RegistrationsEndDate ) );
?>

<div class="col-12 padding-regular-topBottom my-5">
  <h3 class="text-center"> Preview registration form </h3>
</div>

<div class="col-12"> 
  <div class="bg-gray content-body padding-regular-topBottom">
    <div class="text-center padding-small text-white"> 

      <div>
        <h1 class="padding-small color-main">
          <?php echo $eventDataEventName ?>
        </h1>
      </div>

      <?php
      if ($eventDataPosterName) {
        if (strlen($eventDataPosterName) > 4) {
          if (file_exists($eventDataPosterName)) {
            echo "<div> <img src='" . $eventDataPosterName . "' alt='Event poster picture' class='full-width'> </div>";
          }
        }
      }
      ?>


      <div class="padding-regular text-center">
        <a href="#formSection">
          <button type="button" class="btn btn-primary">
            REGISTER NOW
          </button>
        </a>
      </div>

      <div>
        <h2 class="padding-small color-secondary">
          Description
        </h2>
      </div>

      <div>
        <?php echo $dataEventDescription1 ?>
      </div>

      <div class="padding-regular text-center">
        <a href="#formSection">
          <button type="button" class="btn btn-primary">
            REGISTER NOW
          </button>
        </a>
      </div>

      <div>
        <?php echo $dataEventDescription2 ?>
      </div>

      <div class="padding-regular text-center">
        <a href="#formSection">
          <button type="button" class="btn btn-primary">
            REGISTER NOW
          </button>
        </a>
      </div>

      <div>
        <?php echo $dataEventDescription3 ?>
      </div>

    </div>
  </div>
</div>

<div class="col-12 padding-regular-topBottom bg-light rounded">

  <form id="form" class="needs-validation" method="post" action="processform.php" novalidate="">

    <div class="row">

      <div class="col-lg-6 col-md-6 col-sm-12 padding-small hidden">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="eventID" aria-label="readonly Registration type" readonly="" name="eventID" aria-placeholder="1.0" maxlength="250" <?php if ($eventDataId) { echo "value='" . $eventDataId . "'"; } ?> >
            <label for="eventID">Event ID (hidden in browser)</label>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 padding-small hidden">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="eventName" aria-label="readonly Registration type" readonly="" name="eventName" aria-placeholder="1.0" maxlength="250"  <?php if ($eventDataEventName) { echo "value='" . $eventDataEventName . "'"; } ?> >
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
              <?php if ( $isVisible_dancerKind_couple ) { echo "<option value='3 - Couple' aria-valuenow='1.75'>Couple</option>"; } ?>

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
              <?php if ( $isVisible_passType_earlyBirdsTicketSingle ) { echo "<option value='1 - Early birds pass leader/follower - " . $eventDataEarlyBirdsTicketPriceSingle . ",-Kč' aria-valuenow='" . $eventDataEarlyBirdsTicketPriceSingle . "'>Early birds pass leader/follower - " . $eventDataEarlyBirdsTicketPriceSingle . ",-Kč</option>"; } ?>
              <?php if ( $isVisible_passType_earlyBirdsTicketCouple ) { echo "<option value='2 - Early birds couple - " . $eventDataEarlyBirdsTicketPriceCouple . ",-Kč' aria-valuenow='" . $eventDataEarlyBirdsTicketPriceCouple . "'>Early birds couple - " . $eventDataEarlyBirdsTicketPriceCouple . ",-Kč</option>"; } ?>
              <?php if ( $isVisible_passType_regularTicketSingle ) { echo "<option value='3 - Fullpass leader/follower - ".$eventDataRegularTicketPriceSingle.",-Kč' aria-valuenow='" . $eventDataRegularTicketPriceSingle . "'>Fullpass leader/follower - " . $eventDataRegularTicketPriceSingle . ",-Kč</option>"; } ?>
              <?php if ( $isVisible_passType_regularTicketCouple ) { echo "<option value='4 - Fullpass couple - " . $eventDataRegularTicketPriceCouple . ",-Kč' aria-valuenow='" . $eventDataRegularTicketPriceCouple . "'>Fullpass couple - " . $eventDataRegularTicketPriceCouple . ",-Kč</option>"; } ?>
              <?php if ( $isVisible_passType_partyPassSingle ) { echo "<option value='5 - Partypass leader/follower - " . $partyTicketPriceSingle . ",-Kč' aria-valuenow='" . $partyTicketPriceSingle . "'>Partypass leader/follower - " . $partyTicketPriceSingle . ",-Kč</option>"; } ?>
              <?php if ( $isVisible_passType_partyPassCouple ) { echo "<option value='6 - Partypass couple - " . $partyTicketPriceCouple . ",-Kč' aria-valuenow='" . $partyTicketPriceCouple . "'>Partypass couple - " . $partyTicketPriceCouple . ",-Kč</option>"; } ?>
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
              <? if ( $isVisible_passType_earlyBirdsTicketSingle ) { echo "<span class='priceBackup-option-1'> " . $eventDataEarlyBirdsTicketPriceSingle . " </span>"; } ?>
              <? if ( $isVisible_passType_earlyBirdsTicketCouple ) { echo "<span class='priceBackup-option-2'> " . $eventDataEarlyBirdsTicketPriceCouple . " </span>"; } ?>
              <? if ( $isVisible_passType_regularTicketSingle ) { echo "<span class='priceBackup-option-3'> " . $eventDataRegularTicketPriceSingle . " </span>"; } ?>
              <? if ( $isVisible_passType_regularTicketCouple ) { echo "<span class='priceBackup-option-4'> " . $partyTicketPriceCouple . " </span>"; } ?>
              <? if ( $isVisible_passType_partyPassSingle ) { echo "<span class='priceBackup-option-5'> " . $partyTicketPriceSingle . " </span>"; } ?>
              <? if ( $isVisible_passType_partyPassCouple ) { echo "<span class='priceBackup-option-6'> " . $partyTicketPriceCouple . " </span>"; } ?>
            </div>
          </div>
        </div>

        <div <?php if    ((strtolower ($eventDataSpecialType1RegistrationEnabled) === "yes") or (strtolower ($eventDataSpecialType2RegistrationEnabled) === "yes") )
                         { echo "class='col-lg-6 col-md-12 col-sm-12 padding-small '" ; } 
                   else  { echo "class='col-lg-6 col-md-12 col-sm-12 padding-small hidden '" ; } ?> >
          <div class="mb-3 full-width full-height div-select">
            <select id="competitionParticipation" class="form-select" aria-label="Pass type" required="" onchange="recalculatePrice();" name="competitionParticipation">
              <option value="" selected=""> Other tickets options ...</option>
              <?php 
              if ($isVisible_passType_specialType1Single) { echo "<option value='1 - " . $eventDataSpecialType1RegistrationName . " - " . $eventDataSpecialType1TicketPriceSingle . ",- Kč' aria-valuenow='" . $eventDataSpecialType1TicketPriceSingle . "'>" . $eventDataSpecialType1RegistrationName . " Single - " .$eventDataSpecialType1TicketPriceSingle . ",- Kč</option>"; }
              if ($isVisible_passType_specialType1Couple) { echo "<option value='2 - " . $eventDataSpecialType1RegistrationName . " - " . $eventDataSpecialType1TicketPriceCouple . ",- Kč' aria-valuenow='" . $eventDataSpecialType1TicketPriceCouple . "'>" . $eventDataSpecialType1RegistrationName . " Couple - " .$eventDataSpecialType1TicketPriceCouple . ",- Kč</option>"; }
              if ($isVisible_passType_specialType2Single) { echo "<option value='3 - " . $eventDataSpecialType2RegistrationName . " - " . $eventDataSpecialType2TicketPriceSingle . ",- Kč' aria-valuenow='" . $eventDataSpecialType2TicketPriceSingle . "'>" . $eventDataSpecialType2RegistrationName . " Single - " .$eventDataSpecialType2TicketPriceSingle . ",- Kč</option>"; }
              if ($isVisible_passType_specialType2Couple) { echo "<option value='4 - " . $eventDataSpecialType2RegistrationName . " - " . $eventDataSpecialType2TicketPriceCouple . ",- Kč' aria-valuenow='" . $eventDataSpecialType2TicketPriceCouple . "'>" . $eventDataSpecialType2RegistrationName . " Couple - " .$eventDataSpecialType2TicketPriceCouple . ",- Kč</option>"; }
              ?>
            </select>
            <div class="form-select-customLabel">
              Other tickets
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please select some valid option.
            </div>
            <div class="hidden merchandisePriceBackup">
              <!-- TODO - set prices from variables -->
              <?php 
              if ($isVisible_passType_specialType1Single) { echo "<span class='competitionPriceBackup-option-1'>" . $eventDataSpecialType1TicketPriceSingle . "</span>"; }
              if ($isVisible_passType_specialType1Couple) { echo "<span class='competitionPriceBackup-option-2'>" . $eventDataSpecialType1TicketPriceCouple . "</span>"; }
              if ($isVisible_passType_specialType2Single) { echo "<span class='competitionPriceBackup-option-3'>" . $eventDataSpecialType2TicketPriceSingle . "</span>"; }
              if ($isVisible_passType_specialType2Couple) { echo "<span class='competitionPriceBackup-option-4'>" . $eventDataSpecialType2TicketPriceCouple . "</span>"; }
              ?>
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

        <?php 
        if ( $eventDataAgreementsEnabled && ($eventDataAgreement1Enabled == "Yes") ) {
          echo "
          <div class='col-lg-6 col-md-12 col-sm-12 padding-small'>
          <div class='mb-3 form-check'>
            <input type='checkbox' class='form-check-input' id='confirmPrivateInformation' required='' name='confirmPrivateInformation'>
            <label class='form-check-label' for='confirmPrivateInformation'> " . $eventDataAgreement1Text . "</label>
            <div class='valid-feedback'>
                Looks good!
              </div>
              <div class='invalid-feedback'>
                Please fill in the text field.
              </div>
          </div>
        </div>";
        }

        if ( $eventDataAgreementsEnabled && ($eventDataAgreement2Enabled == "Yes" ) ) {
          echo "
          <div class='col-lg-6 col-md-12 col-sm-12 padding-small'>
          <div class='mb-3 form-check'>
            <input type='checkbox' class='form-check-input' id='confirmPrivateInformation' required='' name='confirmPrivateInformation'>
            <label class='form-check-label' for='confirmPrivateInformation'> " . $eventDataAgreement2Text . "</label>
            <div class='valid-feedback'>
                Looks good!
              </div>
              <div class='invalid-feedback'>
                Please fill in the text field.
              </div>
          </div>
        </div>";
        }

        if ( $eventDataAgreementsEnabled && ($eventDataAgreement3Enabled == "Yes" ) ) {
          echo "
          <div class='col-lg-6 col-md-12 col-sm-12 padding-small'>
          <div class='mb-3 form-check'>
            <input type='checkbox' class='form-check-input' id='confirmPrivateInformation' required='' name='confirmPrivateInformation'>
            <label class='form-check-label' for='confirmPrivateInformation'> " . $eventDataAgreement3Text . "</label>
            <div class='valid-feedback'>
                Looks good!
              </div>
              <div class='invalid-feedback'>
                Please fill in the text field.
              </div>
          </div>
        </div>";
        }

        ?>


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