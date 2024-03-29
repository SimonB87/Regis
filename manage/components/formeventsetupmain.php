<?php

  $hostName = $_SERVER['SERVER_NAME'];
  if ( ($hostName == "localhost") || ($hostName == "127.0.0.1") || ($isTestDevelopment == true)) {
    echo "<div class='row full-width'><div class='col-12'><button type='button' class='btn btn-warning t-test' style='float:right;' onclick='prefillForm();'>Prefill form with test data</button></div></div>";
  } else {
    echo "<!-- JS prefillForm(); --->";
  }

?>
<!-- section : Event Main Characteristics -->
<div class="row full-width">

<form id="form" class="needs-validation bts-form full-width" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>

  <div class="row full-width">

    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3 padding-regular-top section-form-title"> 
      <strong> <span class="formSectionIndex"> 1 </span> Event Main Characteristics</strong> 

      <span class="show-segmen padding-regular-left" style="float:right;">
        <span class="show-segment--icon section-icon-1"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
        <span class="show-segment--icon section-icon-1"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
      </span>

    </div>
    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-8 padding-regular-top "> &nbsp; &nbsp;
    </div>



    <div class="col-12 section-form-1"> 
      <div class="row"> 

      <div class="col-12 padding-topBottom-medium-0x5">
        <div class="row rounded padding-small shadow-light padding-top-medium-1x3">

          <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
            <div class="form-floating disabled">
              <input type="number" class="form-control bg-disabled prefill-auto" id="eventID" name="eventID" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataId . "'"; } ?> >
              <label for="eventID">Event ID (Filled automatically)</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
            <div class="mb-3 full-width full-height div-select">
              <select id="eventStatus" class="form-select" aria-label="Pass type" required name="eventStatus" >
                <option value="" selected>Select event status option ...</option>
                <option value="0 - Registrations closed" aria-valuenow="0" <?php if($isEventEdited) { if( $eventDataEventStatus == "0 - Registrations closed") { echo "selected"; } } ?> >Registrations closed</option>
                <option value="1 - Registrations open" aria-valuenow="0" <?php if($isEventEdited) { if( $eventDataEventStatus == "1 - Registrations open") { echo "selected"; } } ?> >Registrations open</option>
                <option value="2 - Event passed" aria-valuenow="0" <?php if($isEventEdited) { if( $eventDataEventStatus == "2 - Event passed" ) { echo "selected"; } } ?> >Event passed</option>
                <option value="3 - Event cancelled" aria-valuenow="0" <?php if($isEventEdited) { if( $eventDataEventStatus == "3 - Event cancelled") { echo "selected"; } } ?> >Event cancelled</option>
              </select>
              <div class="form-select-customLabel">
                Event Status
              </div>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please select some valid option.
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-12 col-sm-12 padding-small border-dark disabled">
            <div class="form-check mb-3 rounded bg-disabled height-60px">
            <?php
                //find URL of the current page
                $url = $_SERVER["REQUEST_URI"];
                $findpage = "createneweventsetupmain.php";
                $position = strpos($url, $findpage);
            ?>
              <input class="form-check-input push-down prefill-auto" type="checkbox" id="newEventBoolean" name="newEventBoolean" 
                <?php if ($position === false) { } else {echo "checked";} ?> 
                onclick="return false;" onkeydown="return false;">
              <label class="form-check-label push-down" for="newEventBoolean">
                Creating new event (controlled automatically)
              </label>
            </div>
          </div>

          </div>
        </div>

        <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">

            <div class="col-12  padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="eventName" required name="eventName" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataEventName . "'"; } ?> >
                <label for="eventName">Event Name</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">

            <div class="col-6 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="eventPlace" required name="eventName" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataPlace . "'"; } ?> >
                <label for="eventName">Event place</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
            </div>

            <div class="col-6 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="eventLanguage" required name="eventName" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataLanguage . "'"; } ?> >
                <label for="eventName">Event language</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">

            <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
              <div class="form-floating">
                <input type="date" class="form-control" id="eventStartDate" required name="eventStartDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataEventStartDate . "'"; } ?> >
                <label for="eventStartDate">Event Start Date</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="date" class="form-control" id="eventEndDate" required name="eventEndDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataEventEndDate . "'"; } ?>>
                <label for="eventEndDate">Event End Date</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">

            <!-- TODO enable couple tickets -> dynamical with JS opens couple prices -->
              <div class="col-12 padding-small">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="maintainSinglesParity" name="maintainSinglesParity" <?php if($isEventEdited) { if($eventDataMaintainSinglesParity == "Yes") { echo "checked"; } } ?>>
                    <label class="form-check-label" for="maintainSinglesParity">
                      Enable parity for singles tickets - Each kind of leader/follow can have at maximum 50 % of registrations
                    </label>
                </div>
              </div>

            <!-- TODO Enable promocodes for discounts -> dynamical with JS opens promo codes for discounts -->
<!--
            <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="maintainSinglesParity" name="maintainSinglesParity" required >
                <label class="form-check-label" for="maintainSinglesParity">
                  Enable promo codes for discounts
                </label>
              </div>
            </div> 
-->
          </div>
        </div>

      </div>
    </div>

<!-- section : Agreements Options -->

    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3 padding-regular-top section-form-title"> 
      <strong> <span class="formSectionIndex"> 2 </span> Agreements Options </strong> 
      <span class="show-segment">
       <span class="show-segment--icon section-icon-2"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
        <span class="show-segment--icon section-icon-2"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
      </span>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-9 padding-regular-top">
      <div class="form-check mb-3">
        <input class="form-check-input checkbox-enablesection" type="checkbox" id="agreementsEnabled" name="agreementsEnabled" <?php if($isEventEdited) { if( $eventDataAgreementsEnabled == "Yes") { echo "checked"; } } ?> aria-rowindex="2">
          <label class="form-check-label" for="agreementsEnabled">
              Enable Agreement options part
          </label>
      </div>
    </div>

    <div class="col-12 section-form-2"> 
      <div class="row">

        <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">

            <div class="col-lg-4 col-md-4 col-sm-12 padding-small">
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="agreement1Enabled" name="agreement1Enabled" <?php if($isEventEdited) { if($eventDataAgreement1Enabled == "Yes") { echo "checked"; } } ?>>
                <label class="form-check-label" for="agreement1Enabled">
                     Enable Agreement 1
                </label>
              </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="agreement1Text" name="agreement1Text" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataAgreement1Text . "'"; } ?> >
                <label for="agreement1Text">Agreement 1 text </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>

    <div class="col-12 section-form-2"> 
      <div class="row">

        <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">

            <div class="col-lg-4 col-md-4 col-sm-12 padding-small">
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="agreement2Enabled" name="agreement2Enabled" <?php if($isEventEdited) { if( $eventDataAgreement2Enabled == "Yes") { echo "checked"; } } ?>>
                <label class="form-check-label" for="agreement2Enabled">
                     Enable Agreement 2
                </label>
              </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="agreement2Text" name="agreement2Text" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataAgreement2Text . "'"; } ?> >
                <label for="agreement2Text">Agreement 2 text </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>


    <div class="col-12 section-form-2"> 
      <div class="row">

        <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">

            <div class="col-lg-4 col-md-4 col-sm-12 padding-small">
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="agreement3Enabled" name="agreement3Enabled" <?php if($isEventEdited) { if( $eventDataAgreement3Enabled == "Yes") { echo "checked"; } } ?>>
                <label class="form-check-label" for="agreement3Enabled">
                     Enable Agreement 3
                </label>
              </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="agreement3Text" name="agreement3Text" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataAgreement3Text. "'"; } ?> >
                <label for="agreement3Text">Agreement 3 text </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
            </div>

          </div>
        </div>


      </div>
    </div>

<!-- section : Early Birds Registration -->

    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3 padding-regular-top section-form-title"> 
      <strong> <span class="formSectionIndex"> 3 </span> Early Birds Registration</strong> 
      <span class="show-segment">
          <span class="show-segment--icon section-icon-3"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
          <span class="show-segment--icon section-icon-3"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
        </span>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-9 padding-regular-top">
      <div class="form-check mb-3">
        <input class="form-check-input checkbox-enablesection" type="checkbox" id="earlyBirdsRegistrationEnabled" name="earlyBirdsRegistrationEnabled" <?php if($isEventEdited) { if( $eventDataEarlyBirdsRegistrationEnabled == "Yes") { echo "checked"; } } ?> aria-rowindex="3">
        <label class="form-check-label" for="earlyBirdsRegistrationEnabled">
             Enable Early Birds Registration
        </label>
      </div>
    </div>

    <div class="col-12 section-form-3"> 
      <div class="row">

        <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">
            <div class="col-12 rounded padding-small-topBottom">
              <div class="form-floating">
                <input type="text" class="form-control" id="earlyBirdsRegistrationName" name="earlyBirdsRegistrationName" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataEarlyBirdsRegistrationName . "'"; } ?> >
                <label for="earlyBirdsRegistrationName"> Registration Name </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">

            <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="date" class="form-control" id="earlyBirdsRegistrationsStartDate" name="earlyBirdsRegistrationsStartDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataEarlyBirdsRegistrationsStartDate . "'"; } ?> >
                <label for="earlyBirdsRegistrationsStartDate">Tickets - Registrations Start Date</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
              <input type="date" class="form-control" id="earlyBirdsRegistrationsEndDate" name="earlyBirdsRegistrationsEndDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataEarlyBirdsRegistrationsEndDate . "'"; } ?> >
              <label for="earlyBirdsRegistrationsEndDate"> Tickets - Registrations End Date</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

          </div>
        </div>

        <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">

            <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="number" class="form-control" id="earlyBirdsTicketPriceSingle" name="earlyBirdsTicketPriceSingle" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataEarlyBirdsTicketPriceSingle . "'"; } ?> >
                <label for="earlyBirdsTicketPriceSingle"> Ticket Price - Single</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

            <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
             <div class="form-floating">
                <input type="number" class="form-control" id="ticketsAmountEarlyBirdsRegistrationsSingle" name="ticketsAmountEarlyBirdsRegistrationsSingle" maxlength="1000" <?php if($isEventEdited) {echo "value='" . $eventDataTicketsAmountEarlyBirdsRegistrationsSingle . "'"; } ?>>
                <label for="ticketsAmountEarlyBirdsRegistrationsSingle"> Ticket Amount - Single</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          </div>
        </div>

        <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
              <input type="number" class="form-control" id="earlyBirdsTicketPriceCouple" name="earlyBirdsTicketPriceCouple" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataEarlyBirdsTicketPriceCouple . "'"; } ?> >
              <label for="earlyBirdsTicketPriceCouple"> Ticket Price - Couple</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
        </div>

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="earlyBirdsTicketAmountCouple" name="earlyBirdsTicketAmountCouple" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataEarlyBirdsTicketAmountCouple . "'"; } ?> >
                <label for="earlyBirdsTicketAmountCouple"> Amount Price - Couple</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          </div>
        </div>

<!--
        <div class="col-12 padding-medium-1x3"> 
          <div class="row rounded padding-small shadow-light">
            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="earlyBirdsRegistrationPromoCodeEnabled" name="earlyBirdsRegistrationPromoCodeEnabled" required >
                <label class="form-check-label" for="earlyBirdsRegistrationPromoCodeEnabled">
                  Enable Early Birds Promo Codes
                </label>
              </div>
          </div>


          <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
            <div class="form-floating">
              <input type="text" class="form-control" id="earlyBirdsRegistrationPromoCode" name="earlyBirdsRegistrationPromoCode" maxlength="250">
              <label for="earlyBirdsRegistrationPromoCode">Promo Code - Word</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
            <div class="form-floating">
              <input type="number" class="form-control" id="earlyBirdsRegistrationPromoCount" name="earlyBirdsRegistrationPromoCount" maxlength="1000">
                <label for="earlyBirdsRegistrationPromoCount">Promo code - Amount</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="earlyBirdsRegistrationPromoCount" name="earlyBirdsRegistrationPromoCount" maxlength="1000">
                <label for="earlyBirdsRegistrationPromoCount"> Discount in number of %</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          </div>
        </div>
-->

      </div>
    </div>

    <!-- section : Regular Registration Data -->

    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3 padding-regular-top section-form-title"> 
      <strong> <span class="formSectionIndex"> 4 </span> Regular Registration </strong> 
      <span class="show-segment">
        <span class="show-segment--icon section-icon-4"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
        <span class="show-segment--icon section-icon-4"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
      </span>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-9 padding-regular-top">
      <div class="form-check mb-3">
         <input class="form-check-input checkbox-enablesection" type="checkbox" id="regularRegistrationEnabled" name="regularRegistrationEnabled" <?php if($isEventEdited) { if( $eventDataRegularRegistrationEnabled == "Yes") { echo "checked"; } } ?> aria-rowindex="4">
          <label class="form-check-label" for="regularRegistrationEnabled">
             Enable Regular Registration
          </label>
        </div>
    </div>

    <div class="col-12 section-form-4"> 
      <div class="row">

      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-12 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
              <input type="text" class="form-control" id="regularRegistrationName" name="regularRegistrationName" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataRegularRegistrationName . "'"; } ?> >
              <label for="regularRegistrationName"> Regular Registration Name</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
            <div class="form-floating">
              <input type="date" class="form-control" id="regularRegistrationsStartDate" name="regularRegistrationsStartDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataRegularRegistrationsStartDate . "'"; } ?> >
              <label for="regularRegistrationsStartDate"> Registrations Start Date </label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
            <div class="form-floating">
              <input type="date" class="form-control" id="regularRegistrationsEndDate" name="regularRegistrationsEndDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataRegularRegistrationsEndDate . "'"; } ?> >
              <label for="regularRegistrationsEndDate"> Registrations End Date </label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="regularTicketPriceSingle" name="regularTicketPriceSingle" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataRegularTicketPriceSingle . "'"; } ?> >
                <label for="regularTicketPriceSingle"> Ticket Price - Single </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="regularTicketAmountSingle" name="regularTicketAmountSingle" maxlength="1000" <?php if($isEventEdited) {echo "value='" . $eventDataRegularTicketAmountSingle . "'"; } ?> >
                <label for="regularTicketAmountSingle"> Ticket Amount - Single </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

        </div>
      </div>


      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="regularTicketPriceCouple" name="regularTicketPriceCouple" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataRegularTicketPriceCouple . "'"; } ?> >
                <label for="regularTicketPriceCouple"> Ticket Price - Couple</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="regularTicketAmountCouple" name="regularTicketAmountCouple" maxlength="1000" <?php if($isEventEdited) {echo "value='" . $eventDataRegularTicketAmountCouple . "'"; } ?> >
                <label for="regularTicketAmountCouple"> Ticket Amount - Couple</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

        </div>
      </div>



      </div>
    </div>

    <!-- TODO Section : Party Pass Registrations -->
    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3 padding-regular-top section-form-title"> 
      <strong> <span class="formSectionIndex"> 5 </span> Party Pass Registrations </strong> 
      <span class="show-segment">
        <span class="show-segment--icon section-icon-5"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
        <span class="show-segment--icon section-icon-5"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
      </span>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-9 padding-regular-top">
      <div class="form-check mb-3">
         <input class="form-check-input checkbox-enablesection" type="checkbox" id="partyRegistrationEnabled" name="partyRegistrationEnabled" <?php if($isEventEdited) { if( $partyRegistrationEnabled == "Yes") { echo "checked"; } } ?> aria-rowindex="5">
          <label class="form-check-label" for="partyRegistrationEnabled">
            Enable Party Pass Registrations
          </label>
        </div>
    </div>

    <div class="col-12 section-form-5"> 
      <div class="row">

      <div class="col-12 padding-topBottom-medium-0x5"> 
          <div class="row rounded padding-small shadow-light">

            <div class="col-lg-12 col-md-12 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="partyRegistrationName" name="partyRegistrationName" maxlength="250" <?php if($isEventEdited) {echo "value='" . $partyRegistrationName . "'"; } ?> >
                <label for="partyRegistrationName"> Party Pass Registration Name</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
            <div class="form-floating">
              <input type="date" class="form-control" id="partyRegistrationsStartDate" name="partyRegistrationsStartDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $partyRegistrationsStartDate . "'"; } ?> >
              <label for="partyRegistrationsStartDate"> Registrations Start Date</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
              <input type="date" class="form-control" id="partyRegistrationsEndDate" name="partyRegistrationsEndDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $partyRegistrationsEndDate . "'"; } ?> >
              <label for="partyRegistrationsEndDate"> Registrations End Date</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="partyTicketPriceSingle" name="partyTicketPriceSingle" maxlength="250" <?php if($isEventEdited) {echo "value='" . $partyTicketPriceSingle . "'"; } ?> >
                <label for="partyTicketPriceSingle"> Ticket Price - Single</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="partyTicketAmountSingle" name="partyTicketAmountSingle" maxlength="1000" <?php if($isEventEdited) {echo "value='" . $partyTicketAmountSingle . "'"; } ?> >
                <label for="partyTicketAmountSingle"> Ticket Amount - Single</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

        </div>
      </div>

      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="partyTicketPriceCouple" name="partyTicketPriceCouple" maxlength="250" <?php if($isEventEdited) {echo "value='" . $partyTicketPriceCouple . "'"; } ?> >
                <label for="partyTicketPriceCouple"> Ticket Price - Couple</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="partyTicketAmountCouple" name="partyTicketAmountCouple" maxlength="1000" <?php if($isEventEdited) {echo "value='" . $partyTicketAmountCouple . "'"; } ?> >
                <label for="partyTicketAmountCouple"> Ticket Amount - Couple</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

        </div>
      </div>

       </div>
    </div>

     <!-- Section : Special type 1 Registrations -->

    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3 padding-regular-top section-form-title"> 
      <strong> <span class="formSectionIndex"> 6 </span> Special type 1 Registrations </strong> 
      <span class="show-segment">
        <span class="show-segment--icon section-icon-6"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
        <span class="show-segment--icon section-icon-6"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
      </span>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-9 padding-regular-top">
      <div class="form-check mb-3">
         <input class="form-check-input checkbox-enablesection" type="checkbox" id="specialType1RegistrationEnabled" name="specialType1RegistrationEnabled" <?php if($isEventEdited) { if( $eventDataSpecialType1RegistrationEnabled == "Yes") { echo "checked"; } } ?> aria-rowindex="6">
          <label class="form-check-label" for="specialType1RegistrationEnabled">
             Enable Special type 1 Registrations
          </label>
        </div>
    </div>

    <div class="col-12 section-form-6"> 
      <div class="row">

      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-12 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
              <input type="text" class="form-control" id="specialType1RegistrationName" name="specialType1RegistrationName" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType1RegistrationName . "'"; } ?> >
              <label for="specialType1RegistrationName">Special type 1 Registrations Name</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

        <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
          <div class="form-floating">
            <input type="date" class="form-control" id="specialType1RegistrationsStartDate" name="specialType1RegistrationsStartDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType1RegistrationsStartDate . "'"; } ?> >
            <label for="specialType1RegistrationsStartDate"> Registrations Start Date</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
          <div class="form-floating">
            <input type="date" class="form-control" id="specialType1RegistrationsEndDate" name="specialType1RegistrationsEndDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType1RegistrationsEndDate . "'"; } ?> >
            <label for="specialType1RegistrationsEndDate"> Registrations End Date</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
          </div>
        </div>

        </div>
      </div>


      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="specialType1TicketPriceSingle" name="specialType1TicketPriceSingle" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType1TicketPriceSingle . "'"; } ?> >
                <label for="specialType1TicketPriceSingle"> Ticket Price - Single</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="specialType1TicketAmountSingle" name="specialType1TicketAmountSingle" maxlength="1000" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType1TicketAmountSingle . "'"; } ?> >
                <label for="specialType1TicketAmountSingle"> Ticket Amount - Single</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="specialType1TicketPriceCouple" name="specialType1TicketPriceCouple" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType1TicketPriceCouple . "'"; } ?> >
                <label for="specialType1TicketPriceCouple"> Ticket Price - Couple</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="specialType1TicketAmountCouple" name="specialType1TicketAmountCouple" maxlength="1000" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType1TicketAmountCouple . "'"; } ?> >
                <label for="specialType1TicketAmountCouple"> Ticket Amount - Couple</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

        </div>
      </div>


      </div>
    </div>

    <!-- Section : Special type 2 Registrations -->

    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3 padding-regular-top section-form-title"> 
      <strong> <span class="formSectionIndex"> 7 </span> Special type 2 Registrations </strong> 
      <span class="show-segment">
        <span class="show-segment--icon section-icon-7"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
        <span class="show-segment--icon section-icon-7"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
      </span>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-9 padding-regular-top">
      <div class="form-check mb-3">
         <input class="form-check-input checkbox-enablesection" type="checkbox" id="specialType2RegistrationEnabled" name="specialType2RegistrationEnabled" <?php if($isEventEdited) { if( $eventDataSpecialType2RegistrationEnabled == "Yes") { echo "checked"; } } ?> aria-rowindex="7" >
          <label class="form-check-label" for="specialType2RegistrationEnabled">
             Enable Special type 2 Registrations
          </label>
        </div>
    </div>

    <div class="col-12 section-form-7"> 
      <div class="row">

      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-12 col-md-12 col-sm-12  padding-small">
            <div class="form-floating">
              <input type="text" class="form-control" id="specialType2RegistrationName" name="specialType2RegistrationName" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType2RegistrationName . "'"; } ?> >
              <label for="specialType2RegistrationName">Special type 2 Registrations Name</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
            <div class="form-floating">
              <input type="date" class="form-control" id="specialType2RegistrationsStartDate" name="specialType2RegistrationsStartDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType2RegistrationsStartDate . "'"; } ?> >
              <label for="specialType2RegistrationsStartDate"> Registrations Start Date</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
            <div class="form-floating">
              <input type="date" class="form-control" id="specialType2RegistrationsEndDate" name="specialType2RegistrationsEndDate" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType2RegistrationsEndDate . "'"; } ?> >
              <label for="specialType2RegistrationsEndDate"> Registrations End Date</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please fill in valid value.
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="specialType2TicketPriceSingle" name="specialType2TicketPriceSingle" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType2TicketPriceSingle . "'"; } ?> >
                <label for="specialType2TicketPriceSingle"> Registration Ticket Price - Single</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="specialType2TicketAmountSingle" name="specialType2TicketAmountSingle" maxlength="1000" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType2TicketAmountSingle . "'"; } ?> >
                <label for="specialType2TicketAmountSingle"> Registration Ticket Amount - Single</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

        </div>
      </div>

      <div class="col-12 padding-topBottom-medium-0x5"> 
        <div class="row rounded padding-small shadow-light">

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="specialType2TicketPriceCouple" name="specialType2TicketPriceCouple" maxlength="250" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType2TicketPriceCouple . "'"; } ?> >
                <label for="specialType2TicketPriceCouple"> Registration Ticket Price - Couple</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
            <div class="form-floating">
                <input type="number" class="form-control" id="specialType2TicketAmountCouple" name="specialType2TicketAmountCouple" maxlength="1000" <?php if($isEventEdited) {echo "value='" . $eventDataSpecialType2TicketAmountCouple . "'"; } ?> >
                <label for="specialType2TicketAmountCouple"> Registration Ticket Amount - Couple</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
              </div>
          </div>

        </div>
      </div>


      </div>
    </div>

    <div class="col-12">
      <input class="btn btn-primary" type="submit" name="safe_form_data" value=<?php if ($position === false) { echo "Update"; } else {echo "Submit";} ?> >
    </div>

  </div>

</form>
</div>