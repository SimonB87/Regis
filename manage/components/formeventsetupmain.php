<form id="form" class="needs-validation bts-form"  method="post" action="eventsetupmain.php" novalidate>

  <div class="row full-width">

    <div class="col-12"> <strong>Event Main Characteristics</strong> <i class="fa fa-plus-square"></i> &nbsp; <i class="fa fa-minus-square"></i> </div>

    <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
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

    <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
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
        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
        <label class="form-check-label" for="flexCheckDefault">
          Enable couple ticket
        </label>
      </div>
    </div>

    <div class="col-12 padding-regular-top"> <strong>Early Birds Registration dates</strong> </div>

    <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
      <div class="form-floating">
        <input type="text" class="form-control" id="earlyBirdsRegistrationName" required name="earlyBirdsRegistrationName" maxlength="250" value="Early Birds Registrations">
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
        <input type="number" class="form-control" id="ticketsAmountEarlyBirdsRegistrations" required name="ticketsAmountEarlyBirdsRegistrations" maxlength="250">
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
        <input type="date" class="form-control" id="earlyBirdsRegistrationsStartDate" required name="earlyBirdsRegistrationsStartDate" maxlength="250">
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
        <input type="date" class="form-control" id="earlyBirdsRegistrationsEndDate" required name="earlyBirdsRegistrationsEndDate" maxlength="250">
        <label for="earlyBirdsRegistrationsEndDate">Tickets - Early Birds Registrations End Date</label>
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
          <input type="text" class="form-control" id="earlyBirdsTicketPriceSingle" required name="earlyBirdsTicketPriceSingle" maxlength="250" value="">
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
          <input type="text" class="form-control" id="earlyBirdsTicketPriceCouple" required name="earlyBirdsTicketPriceCouple" maxlength="250" value="">
          <label for="earlyBirdsTicketPriceCouple">Early Birds Registration Ticket Price - Couple</label>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please fill in valid value.
          </div>
        </div>
    </div>


    <div class="col-12 padding-regular-top"> <strong>Regulart Registration Data</strong> </div>

    <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
      <div class="form-floating">
        <input type="text" class="form-control" id="regularRegistrationName" required name="regularRegistrationName" maxlength="250" value="Full pass registrations">
        <label for="regularRegistrationName"> Regulart Registration Name</label>
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
        <input type="number" class="form-control" id="ticketsAmountEarlyBirdsRegistrations" required name="ticketsAmountEarlyBirdsRegistrations" maxlength="250">
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
        <input type="date" class="form-control" id="regularRegistrationsStartDate" required name="regularRegistrationsStartDate" maxlength="250">
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
        <input type="date" class="form-control" id="regularRegistrationsEndDate" required name="regularRegistrationsEndDate" maxlength="250">
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
          <input type="text" class="form-control" id="regularTicketPriceSingle" required name="regularTicketPriceSingle" maxlength="250" value="">
          <label for="regularTicketPriceSingle">Regular Registration Ticket Price - Single</label>
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
          <input type="text" class="form-control" id="regularTicketPriceCouple" required name="regularTicketPriceCouple" maxlength="250" value="">
          <label for="regularTicketPriceCouple">Regular Registration Ticket Price - Couple</label>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please fill in valid value.
          </div>
        </div>
    </div>

    <div class="col-12 padding-regular-top"> <strong> Special type 1 Registrations </strong> </div>

    <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
      <div class="form-floating">
        <input type="text" class="form-control" id="specialType1RegistrationsName" required name="specialType1RegistrationsName" maxlength="250">
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
        <input type="number" class="form-control" id="ticketsAmountSpecialType1Registrations" required name="ticketsAmountSpecialType1Registrations" maxlength="250">
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
        <input type="date" class="form-control" id="specialType1RegistrationsStartDate" required name="specialType1RegistrationsStartDate" maxlength="250">
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
        <input type="date" class="form-control" id="specialType1RegistrationsEndDate" required name="specialType1RegistrationsEndDate" maxlength="250">
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
          <input type="text" class="form-control" id="specialType1TicketPriceSingle" required name="specialType1TicketPriceSingle" maxlength="250" value="">
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
          <input type="text" class="form-control" id="specialType1TicketPriceCouple" required name="specialType1TicketPriceCouple" maxlength="250" value="">
          <label for="specialType1TicketPriceCouple">Special type 1 Registration Ticket Price - Couple</label>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please fill in valid value.
          </div>
        </div>
    </div>

    <div class="col-12 padding-regular-top"> <strong> Special type 2 Registrations </strong> </div>

    <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
      <div class="form-floating">
        <input type="text" class="form-control" id="specialType2RegistrationsName" required name="specialType2RegistrationsName" maxlength="250">
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
        <input type="number" class="form-control" id="ticketsAmountSpecialType2Registrations" required name="ticketsAmountSpecialType2Registrations" maxlength="250">
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
        <input type="date" class="form-control" id="specialType2RegistrationsStartDate" required name="specialType2RegistrationsStartDate" maxlength="250">
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
        <input type="date" class="form-control" id="specialType2RegistrationsEndDate" required name="specialType2RegistrationsEndDate" maxlength="250">
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
          <input type="text" class="form-control" id="specialType2TicketPriceSingle" required name="specialType2TicketPriceSingle" maxlength="250" value="">
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
          <input type="text" class="form-control" id="specialType2TicketPriceCouple" required name="specialType2TicketPriceCouple" maxlength="250" value="">
          <label for="specialType2TicketPriceCouple">Special type 2 Registration Ticket Price - Couple</label>
          <div class="valid-feedback">
            Looks good!
          </div>
          <div class="invalid-feedback">
            Please fill in valid value.
          </div>
        </div>
    </div>


  </div>

</form>