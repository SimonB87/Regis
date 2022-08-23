<div id="pill-paymentinfo-section" class="row padding-regular-top padding-regular-bottom tab-section hidden">
      <div class="col-12">
        <h3 class="display-7 fw-bold"> Edit main app texts </h3> 
        <div class="text-gray"> Edit information regarding bank transfer, organizer name, other </div> 
      </div>

      <div class="col-12 padding-small-topBottom"> 
        <div class="row border bg-light rounded">


        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="mb-3 form-check" data-bs-toggle="tooltip" data-bs-placement="right" title="The form is closed for registration, there is a notice on public page ''Under construction mode'' ">
            <input type="checkbox" class="form-check-input" id="appUnderDevelopment" name="appUnderDevelopment" >
            <label class="form-check-label" for="appUnderDevelopment"> Public app is in "Under construction mode" * </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in the text field.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="organizerName" required="" name="organizerName" maxlength="250">
            <label for="organizerName"> Organizer name </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="nationalBankAccount" required="" name="nationalBankAccount" maxlength="250">
            <label for="nationalBankAccount"> National bank account </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="accountIBAN" required="" name="accountIBAN" maxlength="250">
            <label for="accountIBAN"> IBAN bank account </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="accountBIC" required="" name="accountBIC" maxlength="250">
            <label for="accountBIC"> Account BIC </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="accountHolderName" required="" name="accountHolderName" maxlength="250">
            <label for="accountHolderName"> Account holder name </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="accountHolderAddress" required="" name="accountHolderAddress" maxlength="250" data-bs-toggle="tooltip" data-bs-placement="right" title="If not used, leave empty">
            <label for="accountHolderAddress"> Account holder address * </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="accountHolderAddress" required="" name="accountHolderAddress" maxlength="250" data-bs-toggle="tooltip" data-bs-placement="right" title="The physical address of the bank institution">
            <label for="accountHolderAddress"> Bank address * </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        </div>
      </div>

      <div class="col-12">
        <div class="bg-light rounded border margin-small-topBottom">
          <div class="padding-small">
            <button class="btn btn-primary btn-lg"> Update </button>
          </div>
        </div>
      </div>

</div>