<div id="pill-footerlinks-section" class="row padding-regular-top padding-regular-bottom tab-section hidden">
  <div class="row margin-small-topBottom">
      <div class="col-12 margin-small-topBottom"> 
        <h3 class="display-7 fw-bold"> Links in page footer </h3> 
        <div class="text-gray padding-regular-bottom"> Edit link in the footer of the public page with registration form </div> 
      </div>


    <div class="accordion" id="accordionPageLinks">
      <!-- Section Contact Information -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <p><strong>Category</strong> <span>contact information</span></p>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionPageLinks">
          <div class="accordion-body">

            <div class="row">
              <!-- Item 1 -->
              <div class="col-12 padding-small-topBottom"> 
                <div class="row border bg-light rounded">

                <div class="col-lg-1 col-md-1 col-sm-1 padding-small text-center">
                  <strong> Item 1 </strong>
                </div>

                <div class="col-lg-3 col-md-5 col-sm-11 padding-small">
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="footeritem1_allowed" required="" name="footeritem1_allowed" <?php if ( ( $items[1]->isAllowed ) == "on") { echo "checked='checked'"; } ?> >
                    <label class="form-check-label" for="footeritem1_allowed"> Navigation Item is allowed </label>
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
                    <input type="text" class="form-control" id="footeritem1_name" required="" name="footeritem1_name" maxlength="250" value=<?php echo $items[1]->displayName; ?> >
                    <label for="footeritem1_name"> Display name</label>
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
                    <input type="text" class="form-control" id="footeritem1_link" required="" name="footeritem1_link" maxlength="250" value=<?php echo $items[1]->weblink; ?> >
                    <label for="footeritem1_link"> Item web link </label>
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
              <!-- Item 2 -->
              <div class="col-12 padding-small-topBottom"> 
                <div class="row border bg-light rounded">

                  <div class="col-lg-1 col-md-1 col-sm-1 padding-small text-center">
                    <strong> Item 2 </strong>
                  </div>

                  <div class="col-lg-3 col-md-5 col-sm-11 padding-small">
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="footeritem2_allowed" required="" name="footeritem2_allowed">
                      <label class="form-check-label" for="footeritem2_allowed"> Navigation Item is allowed </label>
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
                      <input type="text" class="form-control" id="footeritem2_name" required="" name="footeritem2_name" maxlength="250">
                      <label for="footeritem2_name"> Display name</label>
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
                      <input type="text" class="form-control" id="footeritem2_link" required="" name="footeritem2_link" maxlength="250">
                      <label for="footeritem2_link"> Item web link </label>
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
              <!-- Item 3 -->
            <div class="col-12 padding-small-topBottom"> 
              <div class="row border bg-light rounded">

                <div class="col-lg-1 col-md-1 col-sm-1 padding-small text-center">
                  <strong> Item 3 </strong>
                </div>

                <div class="col-lg-3 col-md-5 col-sm-11 padding-small">
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="footeritem3_allowed" required="" name="footeritem3_allowed">
                    <label class="form-check-label" for="footeritem3_allowed"> Navigation Item is allowed </label>
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
                    <input type="text" class="form-control" id="footeritem3_name" required="" name="footeritem3_name" maxlength="250">
                    <label for="footeritem3_name"> Display name</label>
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
                    <input type="text" class="form-control" id="footeritem3_link" required="" name="footeritem3_link" maxlength="250">
                    <label for="footeritem3_link"> Item web link </label>
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
              <!-- Item 4 -->
            <div class="col-12 padding-small-topBottom"> 
              <div class="row border bg-light rounded">

                <div class="col-lg-1 col-md-1 col-sm-1 padding-small text-center">
                  <strong> Item 4 </strong>
                </div>

                <div class="col-lg-3 col-md-5 col-sm-11 padding-small">
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="footeritem4_allowed" required="" name="footeritem4_allowed">
                    <label class="form-check-label" for="footeritem4_allowed"> Navigation Item is allowed </label>
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
                    <input type="text" class="form-control" id="footeritem4_name" required="" name="footeritem4_name" maxlength="250">
                    <label for="footeritem4_name"> Display name</label>
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
                    <input type="text" class="form-control" id="footeritem4_link" required="" name="footeritem4_link" maxlength="250">
                    <label for="footeritem4_link"> Item web link </label>
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
      </div>

      <!-- Section Social Media Links -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <p><strong>Category</strong> <span>social media links</span></p>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionPageLinks">
          <div class="accordion-body">

            <div class="row">
        <!-- Item 5 -->
        <div class="col-12 padding-small-topBottom"> 
          <div class="row border bg-light rounded">

            <div class="col-lg-1 col-md-1 col-sm-1 padding-small text-center">
              <strong> Item 5 </strong>
            </div>

            <div class="col-lg-2 col-md-5 col-sm-11 padding-small">
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="footeritem5_allowed" required="" name="footeritem5_allowed">
                <label class="form-check-label" for="footeritem5_allowed"> Navigation Item is allowed </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in the text field.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem5_name" required="" name="footeritem5_name" maxlength="250">
                <label for="footeritem5_name"> Display name</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem5_link" required="" name="footeritem5_link" maxlength="250">
                <label for="footeritem5_link"> Item web link </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem5_icon" required="" name="footeritem5_icon" maxlength="250">
                <label for="footeritem5_icon"> F.A. Icon class name </label>
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

        <!-- Item 6 -->
        <div class="col-12 padding-small-topBottom"> 
          <div class="row border bg-light rounded">

            <div class="col-lg-1 col-md-1 col-sm-1 padding-small text-center">
              <strong> Item 6 </strong>
            </div>

            <div class="col-lg-2 col-md-5 col-sm-11 padding-small">
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="footeritem6_allowed" required="" name="footeritem6_allowed">
                <label class="form-check-label" for="footeritem6_allowed"> Navigation Item is allowed </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in the text field.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem6_name" required="" name="footeritem6_name" maxlength="250">
                <label for="footeritem6_name"> Display name</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem6_link" required="" name="footeritem6_link" maxlength="250">
                <label for="footeritem6_link"> Item web link </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem6_icon" required="" name="footeritem6_icon" maxlength="250">
                <label for="footeritem6_icon"> F.A. Icon class name </label>
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

        <!-- Item 7 -->
        <div class="col-12 padding-small-topBottom"> 
          <div class="row border bg-light rounded">

            <div class="col-lg-1 col-md-1 col-sm-1 padding-small text-center">
              <strong> Item 7 </strong>
            </div>

            <div class="col-lg-2 col-md-5 col-sm-11 padding-small">
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="footeritem7_allowed" required="" name="footeritem7_allowed">
                <label class="form-check-label" for="footeritem7_allowed"> Navigation Item is allowed </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in the text field.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem7_name" required="" name="footeritem7_name" maxlength="250">
                <label for="footeritem7_name"> Display name</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem7_link" required="" name="footeritem7_link" maxlength="250">
                <label for="footeritem7_link"> Item web link </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem7_icon" required="" name="footeritem7_icon" maxlength="250">
                <label for="footeritem7_icon"> F.A. Icon class name </label>
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

        <!-- Item 8 -->
        <div class="col-12 padding-small-topBottom"> 
          <div class="row border bg-light rounded">

            <div class="col-lg-1 col-md-1 col-sm-1 padding-small text-center">
              <strong> Item 8 </strong>
            </div>

            <div class="col-lg-2 col-md-5 col-sm-11 padding-small">
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="footeritem8_allowed" required="" name="footeritem8_allowed">
                <label class="form-check-label" for="footeritem8_allowed"> Navigation Item is allowed </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in the text field.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem8_name" required="" name="footeritem8_name" maxlength="250">
                <label for="footeritem8_name"> Display name</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem8_link" required="" name="footeritem8_link" maxlength="250">
                <label for="footeritem8_link"> Item web link </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem8_icon" required="" name="footeritem8_icon" maxlength="250">
                <label for="footeritem8_icon"> F.A. Icon class name </label>
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

        <!-- Item 9 -->
        <div class="col-12 padding-small-topBottom"> 
          <div class="row border bg-light rounded">

            <div class="col-lg-1 col-md-1 col-sm-1 padding-small text-center">
              <strong> Item 9 </strong>
            </div>

            <div class="col-lg-2 col-md-5 col-sm-11 padding-small">
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="footeritem9_allowed" required="" name="footeritem9_allowed">
                <label class="form-check-label" for="footeritem9_allowed"> Navigation Item is allowed </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in the text field.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem9_name" required="" name="footeritem9_name" maxlength="250">
                <label for="footeritem9_name"> Display name</label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem9_link" required="" name="footeritem9_link" maxlength="250">
                <label for="footeritem9_link"> Item web link </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small">
              <div class="form-floating">
                <input type="text" class="form-control" id="footeritem9_icon" required="" name="footeritem9_icon" maxlength="250">
                <label for="footeritem9_icon"> F.A. Icon class name </label>
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
      </div>


    </div>

    <div class="padding-small">
      <div class="bg-light rounded border margin-small-topBottom">
        <div class="padding-small">
          <button class="btn btn-primary btn-lg"> Update </button>
        </div>
      </div>
    </div>

  </div>
</div>