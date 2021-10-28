<div class="bg-white padding-regular-topBottom">

    <div class="container">
      <div class="row text-center">
        <h1 class="padding-small color-main" id="formSection">
          Tester & Testie Easter Prague Bachata Weekend
        </h1>
        <h2 class="padding-small">
          Event registration form
        </h2>
      </div>

    </div>
</div>

<div class="bg-white padding-regular-topBottom">

    <div class="container">
      <div class="row">
      <div class="col-12">

        <form id="form" class="needs-validation"  method="post" action="processform.php" novalidate>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 padding-small">
              <div class="mb-3 full-width full-height div-select">
                <select id="registrationType" class="form-select" aria-label="Pass type" required readonly="true" disabled="true" name="registrationType">
                  <option value="1" selected class="1.0">Early bird - till 1st April</option>
                  <option value="2" class="1.2">Regular ticket - since 2nd April</option>
                </select>
                <div class="form-select-customLabel">
                  Registration type (Can be hidden in browser)
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
                <select id="passType" class="form-select" aria-label="Pass type" required onchange="recalculatePrice();" name="passType">
                  <option value="" selected>Select pass type ... </option>
                  <option value="1" class="1500">Fullpass</option>
                  <option value="2" class="1000">Partypass</option>
                  <option value="3" class="900">Workshoppass</option>
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

            <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
              <div class="mb-3 full-width full-height div-select">
                <select id="dancerKind" class="form-select" aria-label="Pass type" required onchange="recalculatePrice();" name="dancerKind">
                  <option value="" selected>Select dancer kind ...</option>
                  <option value="1" class="1.0">Leader</option>
                  <option value="2" class="1.0">Follower</option>
                  <option value="3" class="1.75">Couple</option>
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

            <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
              <div class="mb-3 full-width full-height div-select">
                <select id="lengthType" class="form-select" aria-label="Pass type" required onchange="recalculatePrice();" name="lengthType">
                  <option value="" selected>Select length ...</option>
                  <option value="1" class="1.0" >Friday till Sunday</option>
                  <option value="2" class="0.6">Friday</option>
                  <option value="3" class="0.6">Saturday</option>
                  <option value="4" class="0.6">Sunday</option>
                  <option value="5" class="0.75">Friday, Saturday</option>
                  <option value="6" class="0.70">Saturday, Sunday</option>
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
                  <option value="1" class="500">Participate in Jack and Jill</option>
                  <option value="2" class="0">No participation in competition</option>
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
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="location" value="Prague" aria-label="readonly input example" readonly name="location">
                <label for="location">Location</label>
              </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
              <div class="mb-3 full-width full-height div-select">
                <select id="merchandise" class="form-select" aria-label="Pass type" required onchange="recalculatePrice();" name="merchandise">
                  <option value="" selected>Select merchandise option ...</option>
                  <option value="0" class="0">No merchandise</option>
                  <option value="1" class="500">Shirt 500,- Kč</option>
                  <option value="2" class="400">Towel 400,- Kč</option>
                  <option value="3" class="300">Dancing shoes bag 300,- Kč</option>
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
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" required name="floatingEmail">
                  <label for="floatingEmail">Email address</label>
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
                <input type="text" class="form-control" id="floatingName" required name="floatingName">
                <label for="floatingName">Name</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
              <div class="form-floating">
                <input type="phone" class="form-control" id="floatingPhone" required name="floatingPhone">
                <label for="floatingPhone">Phone</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in phone.
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingOriginCountry" required name="floatingPhone">
                <label for="floatingOriginCountry">Your country</label>
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
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" name="floatingTextarea"></textarea>
                <label for="floatingTextarea">Comments</label>
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