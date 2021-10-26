<div class="bg-white padding-regular-topBottom">
    <div class="container">
      <div class="row text-center">
        <h1 class="padding-small color-main" id="formSection">
          Janis & Zoe Xmas Prague Bachata Weekend
        </h1>
        <h2 class="padding-small">
          Event registration form
        </h2>
      </div>
      <div class="row">
        <form id="form" class="needs-validation" novalidate>

          <div class="col-lg-12 col-md-12 col-sm-12  padding-small">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingTicketType" value="Early bird - till 1st April" aria-label="readonly input example" readonly>
              <label for="floatingTicketType">Registration type</label>
            </div>
          </div>

            <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
              <div class="mb-3 full-width full-height div-select">
                <select id="passType" class="form-select" aria-label="Pass type" required>
                  <option value="" selected>Select pass type ... </option>
                  <option value="1">Fullpass</option>
                  <option value="2">Partypass</option>
                  <option value="3">Workshoppass</option>
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
                <select id="dancerKind" class="form-select" aria-label="Pass type" required>
                  <option value="" selected>Select dancer kind ...</option>
                  <option value="1">Leader</option>
                  <option value="2">Follower</option>
                  <option value="3">Couple</option>
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
                <select id="lengthType" class="form-select" aria-label="Pass type" required>
                  <option value="" selected>Select length ...</option>
                  <option value="1">Friday till Sunday</option>
                  <option value="2">Friday</option>
                  <option value="3">Saturday</option>
                  <option value="4">Sunday</option>
                  <option value="5">Friday, Saturday</option>
                  <option value="6">Saturday, Sunday</option>
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
                <select id="competitionParticipation" class="form-select" aria-label="Pass type" required>
                  <option value="" selected>Select competition option ...</option>
                  <option value="1">Participate in Jack and Jill</option>
                  <option value="2">No participation in competition</option>
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
                <input type="text" class="form-control" id="floatingLocation" value="Prague" aria-label="readonly input example" readonly>
                <label for="floatingLocation">Location</label>
              </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
              <div class="mb-3 full-width full-height div-select">
                <select id="merchandise" class="form-select" aria-label="Pass type" required>
                  <option value="" selected>Select merchandise option ...</option>
                  <option value="0">No merchandise</option>
                  <option value="1">Shirt 500,- Kč</option>
                  <option value="2">Towel 400,- Kč</option>
                  <option value="3">Dancing shoes bag 300,- Kč</option>
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

            <div class="col-lg-12 col-md-12 col-sm-12 padding-small text-center">
              <h3>Customer contact details</h3>
            </div>


            <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                  <label for="floatingInput">Email address</label>
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
                <input type="text" class="form-control" id="floatingName" value="Josh Smith" required>
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
                <input type="phone" class="form-control" id="floatingPhone" required>
                <label for="floatingPhone">Phone</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in phone.
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12  padding-small">
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12  padding-small">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingPrice" value="100,- EUR" aria-label="readonly input example" readonly>
                <label for="floatingPrice">Your full price is </label>
              </div>
            </div>

            <br>

            <span class="padding-small">
              <button type="submit" class="btn btn-primary ">Submit registration</button>
            </span>

        </form>
      </div>
    
    </div>
    
  </div>