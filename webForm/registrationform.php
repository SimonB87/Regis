<div class="bg-white padding-regular-topBottom">

    <div class="container">
      <div class="row text-center">
        <h1 class="padding-small color-main" id="formSection">
          Tester & Testie Easter Prague Bachata Weekend
        </h1>
        <h2 class="padding-small">
          Event registration form
        </h2>
        <h4 class='padding-small text-warning'>
          THIS IS WEB TEST ENVIRONMENT ! Registrations only for test purpose !
        </h4>
      </div>

    </div>
</div>

<div class="bg-white padding-regular-topBottom">

    <div class="container">
      <div class="row">
      <div class="col-12">

        <form id="form" class="needs-validation"  method="post" action="processform.php" novalidate>

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 padding-small">
<!--              <option value="1" selected class="1.0">Early bird - till 1st April</option>
                  <option value="2" class="1.2">Regular ticket - since 2nd April</option>  -->
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="registrationType" value="Early bird - till 1st April" aria-label="readonly Registration type" readonly name="registrationType" aria-placeholder="1.0" maxlength="250">
                <label for="registrationType">Registration type (hidden in browser)</label>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 padding-small hidden">
<!--              <option value="1" selected class="1.0">Early bird - till 1st April</option>
                  <option value="2" class="1.2">Regular ticket - since 2nd April</option>  -->
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="eventName" value="2021 - Tester & Testie testing weekend" aria-label="readonly Registration type" readonly name="eventName" aria-placeholder="1.0" maxlength="250">
                <label for="eventName">Event name (hidden in browser)</label>
              </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="location" value="Prague" aria-label="readonly input example" readonly name="location" maxlength="250">
                <label for="location">Location</label>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 padding-small hidden">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="registrationdate" value="" aria-label="readonly Registration date" readonly name="registrationdate" maxlength="250">
                <label for="registrationdate">Registration date (hidden in browser)</label>
              </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
              <div class="mb-3 full-width full-height div-select">
                <select id="passType" class="form-select" aria-label="Pass type" required onchange="recalculatePrice();" name="passType">
                  <option value="" selected>Select pass type ... </option>
                  <option value="1 - Fullpass leader/follower - 1500,-Kč" aria-valuenow="1500">Fullpass leader/follower - 1500,-Kč</option>
                  <option value="2 - Fullpass couple - 2600,-Kč" aria-valuenow="2600">Fullpass couple - 2600,-Kč</option>
                  <option value="3 - Partypass leader/follower - 1000,-Kč" aria-valuenow="1000">Partypass leader/follower - 1000,-Kč</option>
                  <option value="4 - Partypass couple - 1600,-Kč" aria-valuenow="1600">Partypass couple - 1600,-Kč</option>
                  <option value="5 - Workshoppass leader/follower - 1100,-Kč" aria-valuenow="1100">Workshoppass leader/follower - 1100,-Kč</option>
                  <option value="6 - Workshoppass couple - 1800,-Kč" aria-valuenow="1800">Workshoppass couple - 1800,-Kč</option>
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
              </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
              <div class="mb-3 full-width full-height div-select">
                <select id="dancerKind" class="form-select" aria-label="Pass type" onchange="recalculatePrice();" required name="dancerKind" >
                  <option value="" selected aria-valuenow="1.0">Select dancer kind ...</option>
                  <option value="1 - Leader" aria-valuenow="1.0">Leader</option>
                  <option value="2 - Follower" aria-valuenow="1.0">Follower</option>
                  <option value="3 - Couple" aria-valuenow="1.75">Couple</option>
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

            <div class="col-lg-6 col-md-12 col-sm-12 padding-small hidden">
              <div class="mb-3 full-width full-height div-select">
                <select id="lengthType" class="form-select" aria-label="Pass type" onchange="recalculatePrice();" name="lengthType">
                  <option value="" aria-valuenow="1.0" selected>Select length ...</option>
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
                <select id="competitionParticipation" class="form-select" aria-label="Pass type" required onchange="recalculatePrice();" name="competitionParticipation">
                  <option value="" selected>Select competition option ...</option>
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
              </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
              <div class="mb-3 full-width full-height div-select">
                <select id="merchandise" class="form-select" aria-label="Pass type" required onchange="recalculatePrice();" name="merchandise">
                  <option value="" selected>Select merchandise option ...</option>
                  <option value="0 - No merchandise" aria-valuenow="0">No merchandise</option>
                  <option value="1 - Shirt 500,- Kč" aria-valuenow="500">Shirt 500,- Kč</option>
                  <option value="2 - Towel 400,- Kč" aria-valuenow="400">Towel 400,- Kč</option>
                  <option value="3 - Dancing shoes bag 300,- Kč" aria-valuenow="300">Dancing shoes bag 300,- Kč</option>
                </select>
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
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12  padding-small">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="formPrice" value="... ,- Kč" aria-label="readonly input example" readonly name="formPrice">
                <label for="formPrice">Your full price is </label>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 padding-small text-center">
              <h3>Customer contact details</h3>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="clientName" required name="clientName" maxlength="250">
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
                  <input type="email" class="form-control" id="clientEmail" placeholder="name@example.com" required name="clientEmail" maxlength="250">
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
                <input type="phone" class="form-control" id="clientPhone" required name="clientPhone" minlength="6" value="+420" maxlength="250">
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
                <input type="text" class="form-control" id="clientCountry" required name="clientCountry" maxlength="250">
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
              <input type="checkbox" class="form-check-input" id="confirmPrivateInformation" required name="confirmPrivateInformation">
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
              <input type="checkbox" class="form-check-input" id="confirmCovid" required name="confirmCovid">
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

            <div class="col-lg-12 col-md-12 col-sm-12 padding-small">
                <button type="submit" class="btn btn-primary ">Submit registration</button>
            </div>

          </div>
        </form>
        </div>
      </div>

    </div>

</div>