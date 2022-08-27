<form id="form-establish-newevent" class="needs-validation bts-form padding-regular full-width" method="post" action="#" novalidate>

  <div class="row full-width">

    <div class="col-sm-12 col-md-6 col-lg-3"> 
      <div class="form-floating">
        <input type="text" class="form-control bg-disabled" id="eventId" name="eventId" maxlength="250" value="" disabled >
        <label for="eventId">Event ID</label>
        <div class="valid-feedback text-left">
          Looks good!
        </div>
        <div class="invalid-feedback text-left">
          Please fill in valid value.
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3"> 
      <div class="form-floating">
        <input type="text" class="form-control" id="eventName" required name="eventName" maxlength="250" value="" >
        <label for="eventName">Event Name</label>
        <div class="valid-feedback text-left">
          Looks good!
        </div>
        <div class="invalid-feedback text-left">
          Please fill in valid value.
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3"> 
      <div class="form-floating">
        <input type="date" class="form-control" id="eventStartDate" required name="eventStartDate" maxlength="250" value="" >
        <label for="eventStartDate">Event Start Date</label>
        <div class="valid-feedback text-left">
          Looks good!
        </div>
        <div class="invalid-feedback text-left">
          Please fill in valid value.
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-3"> 
      <div class="form-floating">
        <input type="date" class="form-control" id="eventEndDate" required name="eventEndDate" maxlength="250" value="" >
        <label for="eventEndDate">Event End Date</label>
        <div class="valid-feedback text-left">
          Looks good!
        </div>
        <div class="invalid-feedback text-left">
          Please fill in valid value.
        </div>
      </div>
    </div>

    <div class="col-12 padding-small-topBottom"> 
      <button id="send-new-event" class="btn btn-lg btn-primary float-left text-left"> Send </button> 
      <span id="status" class="padding-small float-left hidden" > </span>
    </div>

  </div>

</form>