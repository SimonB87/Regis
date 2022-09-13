<div id="pill-footerlinks-section" class="row padding-regular-top padding-regular-bottom tab-section hidden">
  <div class="row margin-small-topBottom">
      <div class="col-12 margin-small-topBottom"> 
        <h3 class="display-7 fw-bold"> Links in page footer </h3> 
        <div class="text-gray padding-regular-bottom"> Edit link in the public page with registration form in the footer </div> 
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
                  <div class="mb-3 form-check custom-label-parent padding-small-left">
                    <select id="footeritem1_allowed" class="form-select" aria-label="Pass type" required="" name="footeritem1_allowed">
                      <option value="" >Choose ...</option>
                      <option value="on" <?php if(isset( $itemsFooterLinks[0]->isAllowed )) { if ($itemsFooterLinks[0]->isAllowed == "on") { echo " selected='' "; } } ?> > On </option>
                      <option value="off" <?php if(isset( $itemsFooterLinks[0]->isAllowed )) { if ($itemsFooterLinks[0]->isAllowed == "off") { echo " selected='' "; } } ?> > Off </option>
                    </select>
                    <div class="form-select-customLabel blueLabel padding-small-left ">
                      Item is allowed
		                </div>
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
                    <input type="text" class="form-control" id="footeritem1_name" required="" name="footeritem1_name" maxlength="250" value=<?php echo $itemsFooterLinks[0]->displayName; ?> >
                    <label for="footeritem1_name"> Display name</label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please fill in name.
                    </div>
                  </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12 padding-small">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="footeritem1_content" required="" name="footeritem1_content" maxlength="250" value=<?php echo $itemsFooterLinks[0]->textOdkazu; ?> >
                    <label for="footeritem1_content"> Text odkazu </label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please fill in name.
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 padding-small inline-display">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="footeritem1_link" required="" name="footeritem1_link" maxlength="250" data-bs-toggle="tooltip" data-bs-placement="top" title="Phone link in format ''tel:6031112298'' " value=<?php echo $itemsFooterLinks[0]->weblink; ?> >
                    <label for="footeritem1_link"> Item web link </label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please fill in name.
                    </div>
                  </div>
                  <div class="padding-small save-btn-parent">
                    <button class="btn btn-primary btn-lg" onclick="updateFooterLinks('1');"> <i class="fa-solid fa-floppy-disk"></i> </button>
                    <div id="statusLinks1" class="status hidden"> </div>
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
                    <div class="mb-3 form-check custom-label-parent padding-small-left">

                    <select id="footeritem2_allowed" class="form-select" aria-label="Pass type" required="" name="footeritem2_allowed">
                      <option value="" >Choose ...</option>
                      <option value="on" <?php if(isset( $itemsFooterLinks[1]->isAllowed )) { if ($itemsFooterLinks[1]->isAllowed == "on") { echo " selected='' "; } } ?> > On </option>
                      <option value="off" <?php if(isset( $itemsFooterLinks[1]->isAllowed )) { if ($itemsFooterLinks[1]->isAllowed == "off") { echo " selected='' "; } } ?> > Off </option>
                    </select>
                    <div class="form-select-customLabel blueLabel padding-small-left">
                      Item is allowed
		                </div>
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
                      <input type="text" class="form-control" id="footeritem2_name" required="" name="footeritem2_name" maxlength="250" value=<?php echo $itemsFooterLinks[1]->displayName; ?>  >
                      <label for="footeritem2_name"> Display name</label>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                        Please fill in name.
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-6 col-sm-12 padding-small">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="footeritem2_content" required="" name="footeritem2_content" maxlength="250" value=<?php echo $itemsFooterLinks[1]->textOdkazu; ?> >
                      <label for="footeritem2_content"> Text odkazu </label>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                        Please fill in name.
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12 padding-small inline-display">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="footeritem2_link" required="" name="footeritem2_link" maxlength="250" data-bs-toggle="tooltip" data-bs-placement="top" title="Email link in format ''mailto:someone@example.com'' " value=<?php echo $itemsFooterLinks[1]->weblink; ?>  >
                      <label for="footeritem2_link"> Item web link </label>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                        Please fill in name.
                      </div>
                    </div>
                    <div class="padding-small save-btn-parent">
                      <button class="btn btn-primary btn-lg" onclick="updateFooterLinks('2');"> <i class="fa-solid fa-floppy-disk"></i> </button>
                      <div id="statusLinks2" class="status hidden"> </div>
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
                  <div class="mb-3 form-check custom-label-parent padding-small-left">

                    <select id="footeritem3_allowed" class="form-select" aria-label="Pass type" required="" name="footeritem3_allowed">
                      <option value="" >Choose ...</option>
                      <option value="on" <?php if(isset( $itemsFooterLinks[2]->isAllowed )) { if ($itemsFooterLinks[2]->isAllowed == "on") { echo " selected='' "; } } ?> > On </option>
                      <option value="off" <?php if(isset( $itemsFooterLinks[2]->isAllowed )) { if ($itemsFooterLinks[2]->isAllowed == "off") { echo " selected='' "; } } ?> > Off </option>
                    </select>
                    <div class="form-select-customLabel blueLabel padding-small-left">
                      Item is allowed
                    </div>
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
                    <input type="text" class="form-control" id="footeritem3_name" required="" name="footeritem3_name" maxlength="250" value=<?php echo $itemsFooterLinks[2]->displayName; ?>  >
                    <label for="footeritem3_name"> Display name</label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please fill in name.
                    </div>
                  </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12 padding-small">
                  <div class="form-floating">
                      <input type="text" class="form-control" id="footeritem3_content" required="" name="footeritem3_content" maxlength="250" value=<?php echo $itemsFooterLinks[2]->textOdkazu; ?> >
                      <label for="footeritem3_content"> Text odkazu </label>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                        Please fill in name.
                      </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 padding-small inline-display">
                  <div class="form-floating ">
                    <input type="text" class="form-control" id="footeritem3_link" required="" name="footeritem3_link" maxlength="250" value=<?php echo $itemsFooterLinks[2]->weblink; ?> >
                    <label for="footeritem3_link"> Item web link </label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please fill in name.
                    </div>
                  </div>
                  <div class="padding-small save-btn-parent">
                    <button class="btn btn-primary btn-lg" onclick="updateFooterLinks('3');"> <i class="fa-solid fa-floppy-disk"></i> </button>
                    <div id="statusLinks3" class="status hidden"> </div>
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
                  <div class="mb-3 form-check custom-label-parent padding-small-left">

                  <select id="footeritem4_allowed" class="form-select" aria-label="Pass type" required="" name="footeritem4_allowed">
                    <option value="" >Choose ...</option>
                    <option value="on" <?php if(isset( $itemsFooterLinks[3]->isAllowed )) { if ($itemsFooterLinks[3]->isAllowed == "on") { echo " selected='' "; } } ?> > On </option>
                    <option value="off" <?php if(isset( $itemsFooterLinks[3]->isAllowed )) { if ($itemsFooterLinks[3]->isAllowed == "off") { echo " selected='' "; } } ?> > Off </option>
                  </select>
                  <div class="form-select-customLabel blueLabel padding-small-left">
                    Item is allowed
                  </div>
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
                    <input type="text" class="form-control" id="footeritem4_name" required="" name="footeritem4_name" maxlength="250" value=<?php echo $itemsFooterLinks[3]->displayName; ?>  >
                    <label for="footeritem4_name"> Display name</label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please fill in name.
                    </div>
                  </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12 padding-small">
                  <div class="form-floating">
                      <input type="text" class="form-control" id="footeritem4_content" required="" name="footeritem4_content" maxlength="250" value=<?php echo $itemsFooterLinks[3]->textOdkazu; ?> >
                      <label for="footeritem4_content"> Text odkazu </label>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                        Please fill in name.
                      </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 padding-small inline-display">
                  <div class="form-floating ">
                    <input type="text" class="form-control" id="footeritem4_link" required="" name="footeritem4_link" maxlength="250" value=<?php echo $itemsFooterLinks[3]->weblink; ?> >
                    <label for="footeritem4_link"> Item web link </label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please fill in name.
                    </div>
                  </div>
                  <div class="padding-small save-btn-parent">
                    <button class="btn btn-primary btn-lg" onclick="updateFooterLinks('4');"> <i class="fa-solid fa-floppy-disk"></i> </button>
                    <div id="statusLinks4" class="status hidden"> </div>
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
              <div class="mb-3 form-check custom-label-parent padding-small-left">

              <select id="footeritem5_allowed" class="form-select" aria-label="Pass type" required="" name="footeritem5_allowed">
                <option value="" >Choose ...</option>
                <option value="on" <?php if(isset( $itemsFooterLinks[4]->isAllowed )) { if ($itemsFooterLinks[4]->isAllowed == "on") { echo " selected='' "; } } ?> > On </option>
                <option value="off" <?php if(isset( $itemsFooterLinks[4]->isAllowed )) { if ($itemsFooterLinks[4]->isAllowed == "off") { echo " selected='' "; } } ?> > Off </option>
              </select>
              <div class="form-select-customLabel blueLabel padding-small-left">
                Item is allowed
              </div>
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
                <input type="text" class="form-control" id="footeritem5_name" required="" name="footeritem5_name" maxlength="250" value=<?php echo $itemsFooterLinks[4]->displayName; ?>  >
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
                <input type="text" class="form-control" id="footeritem5_link" required="" name="footeritem5_link" maxlength="250" value=<?php echo $itemsFooterLinks[4]->weblink; ?>  >
                <label for="footeritem5_link"> Item web link </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small inline-display">
              <div class="form-floating ">
                <input type="text" class="form-control" id="footeritem5_icon" required="" name="footeritem5_icon" maxlength="250" value=<?php echo $itemsFooterLinks[4]->iconFontAwesome; ?>  >
                <label for="footeritem5_icon"> F.A. Icon class name </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
              <div class="padding-small save-btn-parent">
                <button class="btn btn-primary btn-lg" onclick="updateFooterLinks('5');"> <i class="fa-solid fa-floppy-disk"></i> </button>
                <div id="statusLinks5" class="status hidden"> </div>
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
              <div class="mb-3 form-check custom-label-parent padding-small-left">

              <select id="footeritem6_allowed" class="form-select" aria-label="Pass type" required="" name="footeritem6_allowed">
                <option value="" >Choose ...</option>
                <option value="on" <?php if(isset( $itemsFooterLinks[5]->isAllowed )) { if ($itemsFooterLinks[5]->isAllowed == "on") { echo " selected='' "; } } ?> > On </option>
                <option value="off" <?php if(isset( $itemsFooterLinks[5]->isAllowed )) { if ($itemsFooterLinks[5]->isAllowed == "off") { echo " selected='' "; } } ?> > Off </option>
              </select>
              <div class="form-select-customLabel blueLabel padding-small-left">
                Item is allowed
              </div>
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
                <input type="text" class="form-control" id="footeritem6_name" required="" name="footeritem6_name" maxlength="250" value=<?php echo $itemsFooterLinks[5]->displayName; ?>  >
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
                <input type="text" class="form-control" id="footeritem6_link" required="" name="footeritem6_link" maxlength="250" value=<?php echo $itemsFooterLinks[5]->weblink; ?>  >
                <label for="footeritem6_link"> Item web link </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small inline-display">
              <div class="form-floating ">
                <input type="text" class="form-control" id="footeritem6_icon" required="" name="footeritem6_icon" maxlength="250" value=<?php echo $itemsFooterLinks[5]->iconFontAwesome; ?> >
                <label for="footeritem6_icon"> F.A. Icon class name </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
              <div class="padding-small save-btn-parent">
                <button class="btn btn-primary btn-lg" onclick="updateFooterLinks('6');"> <i class="fa-solid fa-floppy-disk"></i> </button>
                <div id="statusLinks6" class="status hidden"> </div>
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
              <div class="mb-3 form-check custom-label-parent padding-small-left">

              <select id="footeritem7_allowed" class="form-select" aria-label="Pass type" required="" name="footeritem7_allowed">
                <option value="" >Choose ...</option>
                <option value="on" <?php if(isset( $itemsFooterLinks[6]->isAllowed )) { if ($itemsFooterLinks[6]->isAllowed == "on") { echo " selected='' "; } } ?> > On </option>
                <option value="off" <?php if(isset( $itemsFooterLinks[6]->isAllowed )) { if ($itemsFooterLinks[6]->isAllowed == "off") { echo " selected='' "; } } ?> > Off </option>
              </select>
              <div class="form-select-customLabel blueLabel padding-small-left">
                Item is allowed
              </div>
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
                <input type="text" class="form-control" id="footeritem7_name" required="" name="footeritem7_name" maxlength="250" value=<?php echo $itemsFooterLinks[6]->displayName; ?> >
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
                <input type="text" class="form-control" id="footeritem7_link" required="" name="footeritem7_link" maxlength="250" value=<?php echo $itemsFooterLinks[6]->weblink; ?>  >
                <label for="footeritem7_link"> Item web link </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small inline-display">
              <div class="form-floating ">
                <input type="text" class="form-control" id="footeritem7_icon" required="" name="footeritem7_icon" maxlength="250" value=<?php echo $itemsFooterLinks[6]->iconFontAwesome; ?> >
                <label for="footeritem7_icon"> F.A. Icon class name </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
              <div class="padding-small save-btn-parent">
                <button class="btn btn-primary btn-lg" onclick="updateFooterLinks('7');"> <i class="fa-solid fa-floppy-disk"></i> </button>
                <div id="statusLinks7" class="status hidden"> </div>
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
              <div class="mb-3 form-check custom-label-parent padding-small-left">
                <select id="footeritem8_allowed" class="form-select" aria-label="Pass type" required="" name="footeritem8_allowed">
                  <option value="" >Choose ...</option>
                  <option value="on" <?php if(isset( $itemsFooterLinks[7]->isAllowed )) { if ($itemsFooterLinks[7]->isAllowed == "on") { echo " selected='' "; } } ?> > On </option>
                  <option value="off" <?php if(isset( $itemsFooterLinks[7]->isAllowed )) { if ($itemsFooterLinks[7]->isAllowed == "off") { echo " selected='' "; } } ?> > Off </option>
                </select>
                <div class="form-select-customLabel blueLabel padding-small-left">
                  Item is allowed
                </div>
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
                <input type="text" class="form-control" id="footeritem8_name" required="" name="footeritem8_name" maxlength="250" value=<?php echo $itemsFooterLinks[7]->displayName; ?>  >
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
                <input type="text" class="form-control" id="footeritem8_link" required="" name="footeritem8_link" maxlength="250" value=<?php echo $itemsFooterLinks[7]->weblink; ?>  >
                <label for="footeritem8_link"> Item web link </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small inline-display">
              <div class="form-floating ">
                <input type="text" class="form-control" id="footeritem8_icon" required="" name="footeritem8_icon" maxlength="250" value=<?php echo $itemsFooterLinks[7]->iconFontAwesome; ?>  >
                <label for="footeritem8_icon"> F.A. Icon class name </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
              <div class="padding-small save-btn-parent">
                <button class="btn btn-primary btn-lg" onclick="updateFooterLinks('8');"> <i class="fa-solid fa-floppy-disk"></i> </button>
                <div id="statusLinks8" class="status hidden"> </div>
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

             <div class="mb-3 form-check custom-label-parent padding-small-left">
                <select id="footeritem9_allowed" class="form-select" aria-label="Pass type" required="" name="footeritem9_allowed">
                  <option value="" >Choose ...</option>
                  <option value="on" <?php if(isset( $itemsFooterLinks[8]->isAllowed )) { if ($itemsFooterLinks[8]->isAllowed == "on") { echo " selected='' "; } } ?> > On </option>
                  <option value="off" <?php if(isset( $itemsFooterLinks[8]->isAllowed )) { if ($itemsFooterLinks[8]->isAllowed == "off") { echo " selected='' "; } } ?> > Off </option>
                </select>
                <div class="form-select-customLabel blueLabel padding-small-left">
                  Item is allowed
                </div>
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
                <input type="text" class="form-control" id="footeritem9_name" required="" name="footeritem9_name" maxlength="250" value=<?php echo $itemsFooterLinks[8]->displayName; ?>  >
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
                <input type="text" class="form-control" id="footeritem9_link" required="" name="footeritem9_link" maxlength="250" value=<?php echo $itemsFooterLinks[8]->weblink; ?>  >
                <label for="footeritem9_link"> Item web link </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 padding-small inline-display">
              <div class="form-floating ">
                <input type="text" class="form-control" id="footeritem9_icon" required="" name="footeritem9_icon" maxlength="250" value=<?php echo $itemsFooterLinks[8]->iconFontAwesome; ?>  >
                <label for="footeritem9_icon"> F.A. Icon class name </label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in name.
                </div>
              </div>
              <div class="padding-small save-btn-parent">
                <button class="btn btn-primary btn-lg" onclick="updateFooterLinks('9');"> <i class="fa-solid fa-floppy-disk"></i> </button>
                <div id="statusLinks9" class="status hidden"> </div>
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
</div>