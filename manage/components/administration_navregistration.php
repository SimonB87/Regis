<div id="pill-navregistration-section" class="row padding-regular-topBottom tab-section hidden">
  <div class="row">

    <div class="col-12"> 
      <h3 class="display-7 fw-bold"> Registration page menu </h3> 
      <div class="text-gray padding-regular-bottom"> Edit navigation items in the navigation menu of the public page with registration form </div> 
    </div>

    <!-- Item 1 -->
    <div class="col-12 padding-small-topBottom"> 
      <div class="row border bg-light rounded">

        <div class="col-lg-1 col-md-1 col-sm-1 padding-small text-center">
          <strong> Item 1 </strong>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-11 padding-small">

          <div class="mb-3 form-check custom-label-parent padding-small-left">
            <select id="navitem1_allowed" class="form-select" aria-label="Pass type" required="" name="navitem1_allowed">
              <option value="" >Choose ...</option>
              <option value="on" <?php if(isset($itemsNavLinks[0]->itemAllowed)) { if (($itemsNavLinks[0]->itemAllowed) == "on") { echo " selected='' "; } } ?> > On </option>
              <option value="off" <?php if(isset($itemsNavLinks[0]->itemAllowed)) { if (($itemsNavLinks[0]->itemAllowed) == "off") { echo " selected='' "; } } ?> > Off </option>
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

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="navitem1_name" required="" name="navitem1_name" maxlength="250" value=<?php echo $itemsNavLinks[0]->displayName; ?> >
            <label for="navitem1_name"> Display name</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>

        </div>

        <div class="col-lg-5 col-md-6 col-sm-12 padding-small inline-display">
          <div class="form-floating">
            <input type="text" class="form-control" id="navitem1_link" required="" name="navitem1_link" maxlength="250" value=<?php echo $itemsNavLinks[0]->itemWebLink; ?> >
            <label for="navitem1_link"> Item web link </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>

          <div class="padding-small save-btn-parent">
            <button class="btn btn-primary btn-lg" onclick="updateNavMenu('1');"> <i class="fa-solid fa-floppy-disk"></i> </button>
            <div id="statusNavLinks1" class="status hidden"> </div>
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

        <div class="col-lg-2 col-md-4 col-sm-11 padding-small">
          <div class="mb-3 form-check custom-label-parent padding-small-left">
            <select id="navitem2_allowed" class="form-select" aria-label="Pass type" required="" name="navitem2_allowed">
              <option value="" >Choose ...</option>
              <option value="on" <?php if(isset($itemsNavLinks[1]->itemAllowed)) { if (($itemsNavLinks[1]->itemAllowed) == "on") { echo " selected='' "; } } ?> > On </option>
              <option value="off" <?php if(isset($itemsNavLinks[1]->itemAllowed)) { if (($itemsNavLinks[1]->itemAllowed) == "off") { echo " selected='' "; } } ?> > Off </option>
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

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="navitem2_name" required="" name="navitem2_name" maxlength="250" value=<?php echo $itemsNavLinks[1]->displayName; ?> >
            <label for="navitem2_name"> Display name</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-6 col-sm-12 padding-small inline-display">
          <div class="form-floating">
            <input type="text" class="form-control" id="navitem2_link" required="" name="navitem2_link" maxlength="250" value=<?php echo $itemsNavLinks[1]->itemWebLink; ?> >
            <label for="navitem2_link"> Item web link </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>

          <div class="padding-small save-btn-parent">
            <button class="btn btn-primary btn-lg" onclick="updateNavMenu('2');"> <i class="fa-solid fa-floppy-disk"></i> </button>
            <div id="statusNavLinks2" class="status hidden"> </div>
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

        <div class="col-lg-2 col-md-4 col-sm-11 padding-small">
          <div class="mb-3 form-check custom-label-parent padding-small-left">
            <select id="navitem3_allowed" class="form-select" aria-label="Pass type" required="" name="navitem3_allowed">
              <option value="" >Choose ...</option>
              <option value="on" <?php if(isset($itemsNavLinks[2]->itemAllowed)) { if (($itemsNavLinks[2]->itemAllowed) == "on") { echo " selected='' "; } } ?> > On </option>
              <option value="off" <?php if(isset($itemsNavLinks[2]->itemAllowed)) { if (($itemsNavLinks[2]->itemAllowed) == "off") { echo " selected='' "; } } ?> > Off </option>
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

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="navitem3_name" required="" name="navitem3_name" maxlength="250" value=<?php echo $itemsNavLinks[2]->displayName; ?> >
            <label for="navitem3_name"> Display name</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-6 col-sm-12 padding-small inline-display">
          <div class="form-floating">
            <input type="text" class="form-control" id="navitem3_link" required="" name="navitem3_link" maxlength="250" value=<?php echo $itemsNavLinks[2]->itemWebLink; ?> >
            <label for="navitem3_link"> Item web link </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>

          <div class="padding-small save-btn-parent">
            <button class="btn btn-primary btn-lg" onclick="updateNavMenu('3');"> <i class="fa-solid fa-floppy-disk"></i> </button>
            <div id="statusNavLinks3" class="status hidden"> </div>
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

        <div class="col-lg-2 col-md-4 col-sm-11 padding-small">
          <div class="mb-3 form-check custom-label-parent padding-small-left">
            <select id="navitem4_allowed" class="form-select" aria-label="Pass type" required="" name="navitem4_allowed">
              <option value="" >Choose ...</option>
              <option value="on" <?php if(isset($itemsNavLinks[3]->itemAllowed)) { if (($itemsNavLinks[3]->itemAllowed) == "on") { echo " selected='' "; } } ?> > On </option>
              <option value="off" <?php if(isset($itemsNavLinks[3]->itemAllowed)) { if (($itemsNavLinks[3]->itemAllowed) == "off") { echo " selected='' "; } } ?> > Off </option>
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

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="navitem4_name" required="" name="navitem4_name" maxlength="250" value=<?php echo $itemsNavLinks[3]->displayName; ?> >
            <label for="navitem4_name"> Display name</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-6 col-sm-12 padding-small inline-display">
          <div class="form-floating">
            <input type="text" class="form-control" id="navitem4_link" required="" name="navitem4_link" maxlength="250" value=<?php echo $itemsNavLinks[3]->itemWebLink; ?> >
            <label for="navitem4_link"> Item web link </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>

          <div class="padding-small save-btn-parent">
            <button class="btn btn-primary btn-lg" onclick="updateNavMenu('4');"> <i class="fa-solid fa-floppy-disk"></i> </button>
            <div id="statusNavLinks4" class="status hidden"> </div>
          </div>

        </div>

      </div>
    </div>

    <!-- Item 5 -->
    <div class="col-12 padding-small-topBottom"> 
      <div class="row border bg-light rounded">

        <div class="col-lg-1 col-md-1 col-sm-1 padding-small text-center">
          <strong> Item 5 </strong>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-11 padding-small">
          <div class="mb-3 form-check custom-label-parent padding-small-left">
            <select id="navitem5_allowed" class="form-select" aria-label="Pass type" required="" name="navitem5_allowed">
              <option value="" >Choose ...</option>
              <option value="on" <?php if(isset($itemsNavLinks[4]->itemAllowed)) { if (($itemsNavLinks[4]->itemAllowed) == "on") { echo " selected='' "; } } ?> > On </option>
              <option value="off" <?php if(isset($itemsNavLinks[4]->itemAllowed)) { if (($itemsNavLinks[4]->itemAllowed) == "off") { echo " selected='' "; } } ?> > Off </option>
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

        <div class="col-lg-4 col-md-6 col-sm-12 padding-small">
          <div class="form-floating">
            <input type="text" class="form-control" id="navitem5_name" required="" name="navitem5*_name" maxlength="250" value=<?php echo $itemsNavLinks[4]->displayName; ?> >
            <label for="navitem5_name"> Display name</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-6 col-sm-12 padding-small inline-display">
          <div class="form-floating">
            <input type="text" class="form-control" id="navitem5_link" required="" name="navitem5_link" maxlength="250" value=<?php echo $itemsNavLinks[4]->itemWebLink; ?> >
            <label for="navitem5_link"> Item web link </label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in name.
            </div>
          </div>

          <div class="padding-small save-btn-parent">
            <button class="btn btn-primary btn-lg" onclick="updateNavMenu('5');"> <i class="fa-solid fa-floppy-disk"></i> </button>
            <div id="statusNavLinks5" class="status hidden"> </div>
          </div>

        </div>

      </div>
    </div>


  </div>
</div>