<div id="pill-mailtexts-section" class="row padding-regular-topBottom tab-section hidden">

  <div class="row padding-regular-bottom">


    <div class="col-12"> 
      <h3 class="display-7 fw-bold"> Edit texts in emaile </h3> 
      <div class="text-gray padding-regular-bottom"> Edit information regarding bak transfer for ticket purchase </div> 
    </div>

    <?php
      include("htmlformatingnote.php");
    ?>

  </div>

  <div class="accordion textareas-email" id="accordionEmail">
    <!-- accordion item 1 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="emailText_headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#emailText_collapseOne" aria-expanded="true" aria-controls="emailText_collapseOne">
          Email - registration notice
        </button>
      </h2>
      <div id="emailText_collapseOne" class="accordion-collapse collapse show" aria-labelledby="emailText_headingOne" data-bs-parent="#accordionEmail">
        <div class="accordion-body">

          <div class="row">
            <!-- accordion item content -->
            <div class="col-12">

              <div class="form-floating">
                <label for="emailTextRegistrationNotice">Text in email</label>
                <textarea class="form-control" id="emailTextRegistrationNotice" name="emailTextRegistrationNotice" rows="4"><?php if(isset($dataEmailTextRegistrationNotice)) {echo $dataEmailTextRegistrationNotice; } ?></textarea>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
              <img />
            </div>
            
          </div>

        </div>
      </div>
    </div>

    <!-- accordion item 2 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="emailText_headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#emailText_collapseTwo" aria-expanded="false" aria-controls="emailText_collapseTwo">
          Email - order paid
        </button>
      </h2>
      <div id="emailText_collapseTwo" class="accordion-collapse collapse" aria-labelledby="emailText_headingTwo" data-bs-parent="#accordionEmail">
        <div class="accordion-body">

          <div class="row">
            <!-- accordion item content -->
            <div class="col-12">

              <div class="form-floating">
                <label for="emailTextOrderPaid">Text in email</label>
                <textarea class="form-control" id="emailTextOrderPaid" name="emailTextOrderPaid" rows="4"> <?php if(isset($dataEmailTextOrderPaid)) {echo $dataEmailTextOrderPaid; } ?> </textarea>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
              <img />
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- accordion item 3 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="emailText_headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#emailText_collapseThree" aria-expanded="false" aria-controls="emailText_collapseThree">
          Email - payment reminder
        </button>
      </h2>
      <div id="emailText_collapseThree" class="accordion-collapse collapse" aria-labelledby="emailText_headingThree" data-bs-parent="#accordionEmail">
        <div class="accordion-body">

          <div class="row">
            <!-- accordion item content -->
            <div class="col-12">

              <div class="form-floating">
                <label for="emailTextPaymentReminder">Text in email</label>
                <textarea class="form-control" id="emailTextPaymentReminder" name="emailTextPaymentReminder" rows="4"> <?php if(isset($dataEmailTextPaymentReminder)) {echo $dataEmailTextPaymentReminder; } ?> </textarea>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
              <img />
            </div>

          </div>

        </div>
      </div>
    </div>

    <!-- accordion item 4 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="emailText_headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#emailText_collapseFour" aria-expanded="false" aria-controls="emailText_collapseFour">
          Email - registration cancelled
        </button>
      </h2>
      <div id="emailText_collapseFour" class="accordion-collapse collapse" aria-labelledby="emailText_headingFour" data-bs-parent="#accordionEmail">
        <div class="accordion-body">

          <div class="row">
            <!-- accordion item content -->
            <div class="col-12">

              <div class="form-floating">
                <label for="emailTextRegistrationCancelled">Text in email</label>
                <textarea class="form-control" id="emailTextRegistrationCancelled" name="emailTextRegistrationCancelled" rows="4"> <?php if(isset($dataEmailTextRegistrationCancelled)) {echo $dataEmailTextRegistrationCancelled; } ?> </textarea>
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

        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="bg-light rounded border margin-small-topBottom">
        <div class="padding-small">
          <button class="btn btn-primary btn-lg" onclick="updateEmailTexts();"> Update </button> &nbsp; <span id="status-emailtexts"> </span>
        </div>
      </div>
    </div>

  </div>


</div>