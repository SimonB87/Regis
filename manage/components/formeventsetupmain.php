<form id="form" class="needs-validation bts-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>

  <div class="row full-width">

    <div class="col-12"> 
      <strong>Event Main Characteristics</strong> 

      <span class="show-segment">
        <span class="show-segment--icon section-icon-1"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
        <span class="show-segment--icon section-icon-1"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
      </span>

    </div>


    <div class="col-12 section-form-1"> 
      <div class="row"> 

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="number" class="form-control" id="eventID" required name="eventID" maxlength="250">
            <label for="eventID">Event ID</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 padding-small">
          <div class="mb-3 full-width full-height div-select">
            <select id="eventStatus" class="form-select" aria-label="Pass type" required name="eventStatus">
              <option value="" selected>Select event status option ...</option>
              <option value="0 - Registrations closed" aria-valuenow="0">Registrations closed</option>
              <option value="1 - Registrations open" aria-valuenow="0">Registrations open</option>
              <option value="2 - Event passed" aria-valuenow="500">Event passed</option>
              <option value="3 - Event cancelled" aria-valuenow="500">Event cancelled</option>
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

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small bg-secondary border-dark rounded disabled">
          <div class="form-check mb-3 text-white">
          <?php
              //find URL of the current page
              $url = $_SERVER["REQUEST_URI"];
              $findpage = "createneweventsetupmain.php";
              $position = strpos($url, $findpage);
          ?>
            <input class="form-check-input" type="checkbox" id="newEventBoolean" name="newEventBoolean" 
              <?php if ($position === false) { } else {echo "checked";} ?> 
              onclick="return false;" onkeydown="return false;">
            <label class="form-check-label" for="newEventBoolean">
              Creating a new event
            </label>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12  padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="eventName" required name="eventName" maxlength="250">
            <label for="eventName">Event Name</label>
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
            <input type="date" class="form-control" id="eventStartDate" required name="eventStartDate" maxlength="250">
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
            <input type="date" class="form-control" id="eventEndDate" required name="eventEndDate" maxlength="250">
            <label for="eventEndDate">Event End Date</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
          </div>
        </div>

      <!-- TODO enable couple tickets -> opens couple prices -->
        <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
          
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="enableCoupleTicket" name="enableCoupleTicket" required>
            <label class="form-check-label" for="flexCheckDefault">
              Enable couple ticket
            </label>
          </div>
        </div>

      </div>
    </div>


    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3 padding-regular-top"> <strong>Early Birds Registration</strong> 
      <span class="show-segment">
          <span class="show-segment--icon section-icon-2"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
          <span class="show-segment--icon section-icon-2"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
        </span>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-9 padding-regular-top">
      <div class="form-check mb-3">
         <input class="form-check-input" type="checkbox" id="enableEarlyBirdsRegistration">
          <label class="form-check-label" for="flexCheckDefault">
             Enable Early Birds Registration
          </label>
        </div>
    </div>

    <div class="col-12 section-form-2"> 
      <div class="row">

        <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="earlyBirdsRegistrationName" name="earlyBirdsRegistrationName" maxlength="250" value="Early Birds Registrations">
            <label for="earlyBirdsRegistrationName">Early Birds Registration Name</label>
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
            <input type="number" class="form-control" id="ticketsAmountEarlyBirdsRegistrations" name="ticketsAmountEarlyBirdsRegistrations" maxlength="250">
            <label for="ticketsAmountEarlyBirdsRegistrations"> Tickets Amount - Early Birds Registrations </label>
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
            <input type="date" class="form-control" id="earlyBirdsRegistrationsStartDate" name="earlyBirdsRegistrationsStartDate" maxlength="250">
            <label for="earlyBirdsRegistrationsStartDate">Tickets - Early Birds Registrations Start Date</label>
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
            <input type="date" class="form-control" id="earlyBirdsRegistrationsEndDate" name="earlyBirdsRegistrationsEndDate" maxlength="250">
            <label for="earlyBirdsRegistrationsEndDate">Tickets - Early Birds Registrations End Date</label>
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
              <input type="number" class="form-control" id="earlyBirdsTicketPriceSingle" name="earlyBirdsTicketPriceSingle" maxlength="250" value="">
              <label for="earlyBirdsTicketPriceSingle">Early Birds Registration Ticket Price - Single</label>
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
              <input type="number" class="form-control" id="earlyBirdsTicketAmountSingle" name="earlyBirdsTicketAmountSingle" maxlength="1000" value="">
              <label for="earlyBirdsTicketAmountSingle">Early Birds Registration Ticket Amount - Single</label>
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
              <input type="number" class="form-control" id="earlyBirdsTicketPriceCouple" name="earlyBirdsTicketPriceCouple" maxlength="250" value="">
              <label for="earlyBirdsTicketPriceCouple">Early Birds Registration Ticket Price - Couple</label>
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
              <input type="number" class="form-control" id="earlyBirdsTicketAmountSingle" name="earlyBirdsTicketAmountSingle" maxlength="1000" value="">
              <label for="earlyBirdsTicketAmountSingle">Early Birds Registration Ticket Amount - Couple</label>
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

    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3 padding-regular-top"> <strong>Regular Registration Data</strong> 
      <span class="show-segment">
        <span class="show-segment--icon section-icon-3"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
        <span class="show-segment--icon section-icon-3"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
      </span>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-9 padding-regular-top">
      <div class="form-check mb-3">
         <input class="form-check-input" type="checkbox" id="rememberMe">
          <label class="form-check-label" for="flexCheckDefault">
             Enable Regular Registration
          </label>
        </div>
    </div>

    <div class="col-12 section-form-3"> 
      <div class="row">

        <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="regularRegistrationName" name="regularRegistrationName" maxlength="250" value="Full pass registrations">
            <label for="regularRegistrationName"> Regular Registration Name</label>
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
            <input type="number" class="form-control" id="ticketsAmountEarlyBirdsRegistrations" name="ticketsAmountEarlyBirdsRegistrations" maxlength="250">
            <label for="ticketsAmountEarlyBirdsRegistrations"> Tickets Amount - Regular Registrations </label>
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
            <input type="date" class="form-control" id="regularRegistrationsStartDate" name="regularRegistrationsStartDate" maxlength="250">
            <label for="regularRegistrationsStartDate">Tickets - Regular Registrations Start Date</label>
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
            <input type="date" class="form-control" id="regularRegistrationsEndDate" name="regularRegistrationsEndDate" maxlength="250">
            <label for="regularRegistrationsEndDate">Tickets - Regular Registrations End Date</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
          </div>
        </div>

        <!-- TODO ticket prices -->
        <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
          <div class="form-floating">
              <input type="number" class="form-control" id="RegularicketPriceSingle" name="RegularicketPriceSingle" maxlength="250" value="">
              <label for="RegularicketPriceSingle">Regular Registration Ticket Price - Single</label>
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
              <input type="number" class="form-control" id="regularicketAmountSingle" name="regularicketAmountSingle" maxlength="1000" value="">
              <label for="regularicketAmountSingle">Regular Registration Ticket Amount - Single</label>
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
              <input type="number" class="form-control" id="regularicketPriceCouple" name="RegularicketPriceCouple" maxlength="250" value="">
              <label for="RegularicketPriceCouple">Regular Registration Ticket Price - Couple</label>
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
              <input type="number" class="form-control" id="regularicketAmountCouple" name="regularicketAmountCouple" maxlength="1000" value="">
              <label for="regularicketAmountCouple">Regular Registration Ticket Amount - Couple</label>
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

    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3 padding-regular-top"> <strong> Special type 1 Registrations </strong> 
      <span class="show-segment">
        <span class="show-segment--icon section-icon-4"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
        <span class="show-segment--icon section-icon-4"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
      </span>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-9 padding-regular-top">
      <div class="form-check mb-3">
         <input class="form-check-input" type="checkbox" id="rememberMe">
          <label class="form-check-label" for="flexCheckDefault">
             Enable Special type 1 Registrations
          </label>
        </div>
    </div>

    <div class="col-12 section-form-4"> 
      <div class="row">

        <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="specialType1RegistrationsName" name="specialType1RegistrationsName" maxlength="250">
            <label for="specialType1RegistrationsName">Special type 1 Registrations Name</label>
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
            <input type="number" class="form-control" id="ticketsAmountSpecialType1Registrations" name="ticketsAmountSpecialType1Registrations" maxlength="250">
            <label for="ticketsAmountSpecialType1Registrations"> Tickets Amount - Special type 1 Registrations </label>
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
            <input type="date" class="form-control" id="specialType1RegistrationsStartDate" name="specialType1RegistrationsStartDate" maxlength="250">
            <label for="specialType1RegistrationsStartDate">Tickets - Special type 1 Registrations Start Date</label>
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
            <input type="date" class="form-control" id="specialType1RegistrationsEndDate" name="specialType1RegistrationsEndDate" maxlength="250">
            <label for="specialType1RegistrationsEndDate">Tickets - Special type 1 Registrations End Date</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
          </div>
        </div>

        <!-- TODO ticket prices -->
        <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
          <div class="form-floating">
              <input type="number" class="form-control" id="specialType1TicketPriceSingle" name="specialType1TicketPriceSingle" maxlength="250" value="">
              <label for="specialType1TicketPriceSingle">Special type 1 Registration Ticket Price - Single</label>
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
              <input type="number" class="form-control" id="specialType1TicketAmountSingle" name="specialType1TicketAmountSingle" maxlength="1000" value="">
              <label for="specialType1TicketAmountSingle">Special type 1 Registration Ticket Amount - Single</label>
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
              <input type="number" class="form-control" id="specialType1TicketPriceCouple" name="specialType1TicketPriceCouple" maxlength="250" value="">
              <label for="specialType1TicketPriceCouple">Special type 1 Registration Ticket Price - Couple</label>
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
              <input type="number" class="form-control" id="specialType1TicketAmountCouple" name="specialType1TicketAmountCouple" maxlength="1000" value="">
              <label for="specialType1TicketAmountCouple">Special type 1 Registration Ticket Amount - Couple</label>
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

    <div class="col-sm-12 col-md-6 col-lg-5 col-xl-3 padding-regular-top"> <strong> Special type 2 Registrations </strong> 
      <span class="show-segment">
        <span class="show-segment--icon section-icon-5"> <img src="../shared/assets/pics/eyeicon.png" alt="Icon eye" > </span>
        <span class="show-segment--icon section-icon-5"> <img class="" src="../shared/assets/pics/invisibleicon.png" alt="Icon eye closed" > </span> 
      </span>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-7 col-xl-9 padding-regular-top">
      <div class="form-check mb-3">
         <input class="form-check-input" type="checkbox" id="rememberMe">
          <label class="form-check-label" for="flexCheckDefault">
             Enable Special type 2 Registrations
          </label>
        </div>
    </div>

    <div class="col-12 section-form-5"> 
      <div class="row">

        <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="specialType2RegistrationsName" name="specialType2RegistrationsName" maxlength="250">
            <label for="specialType2RegistrationsName">Special type 2 Registrations Name</label>
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
            <input type="number" class="form-control" id="ticketsAmountSpecialType2Registrations" name="ticketsAmountSpecialType2Registrations" maxlength="250">
            <label for="ticketsAmountSpecialType2Registrations"> Tickets Amount - Special type 2 Registrations </label>
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
            <input type="date" class="form-control" id="specialType2RegistrationsStartDate" name="specialType2RegistrationsStartDate" maxlength="250">
            <label for="specialType2RegistrationsStartDate">Tickets - Special type 2 Registrations Start Date</label>
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
            <input type="date" class="form-control" id="specialType2RegistrationsEndDate" name="specialType2RegistrationsEndDate" maxlength="250">
            <label for="specialType2RegistrationsEndDate">Tickets - Special type 2 Registrations End Date</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
          </div>
        </div>

        <!-- TODO ticket prices -->
        <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
          <div class="form-floating">
              <input type="number" class="form-control" id="specialType2TicketPriceSingle" name="specialType2TicketPriceSingle" maxlength="250" value="">
              <label for="specialType2TicketPriceSingle">Special type 2 Registration Ticket Price - Single</label>
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
              <input type="number" class="form-control" id="specialType2TicketAmountSingle" name="specialType2TicketAmountSingle" maxlength="1000" value="">
              <label for="specialType2TicketAmountSingle">Special type 2 Registration Ticket Amount - Single</label>
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
              <input type="number" class="form-control" id="specialType2TicketPriceCouple" name="specialType2TicketPriceCouple" maxlength="250" value="">
              <label for="specialType2TicketPriceCouple">Special type 2 Registration Ticket Price - Couple</label>
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
              <input type="number" class="form-control" id="specialType2TicketAmountCouple" name="specialType2TicketAmountCouple" maxlength="1000" value="">
              <label for="specialType2TicketAmountCouple">Special type 2 Registration Ticket Amount - Couple</label>
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

    <div class="col-12">
      <input class="btn btn-primary" type="submit" name="safe_form_data" value="Save">
    </div>

  </div>

</form>