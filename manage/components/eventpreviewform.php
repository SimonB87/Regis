<!-- component : event preview form to set data just to test visualisation -->
<div class="col-12"> 
  <form id="form_setdate" class="needs-validation bts-form full-width" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
    <div class="row full-width padding-small-topBottom shadow-light ">

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-floating preview-form  padding-small">
          <input type="date" class="form-control" id="preview_date" name="preview_date" maxlength="250" <?php if(isset($preview_date)) {echo "value='" . $preview_date . "'"; } ?> >
          <label for="preview_date"> Set preview date</label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-floating preview-form  padding-small">
          <input type="number" class="form-control" id="preview_earlybirdsSingleSold" name="preview_earlybirdsSingleSold" maxlength="250" <?php if(isset($preview_earlybirdsSingleSold)) {echo "value='" . $preview_earlybirdsSingleSold . "'"; } ?> >
          <label for="preview_earlybirdsSingleSold"> Number of single early birds single tickets sold </label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-floating preview-form  padding-small">
          <input type="number" class="form-control" id="preview_earlybirdsCoupleSold" name="preview_earlybirdsCoupleSold" maxlength="250" <?php if(isset($preview_earlybirdsCoupleSold)) {echo "value='" . $preview_earlybirdsCoupleSold . "'"; } ?> >
          <label for="preview_earlybirdsCoupleSold"> Number of single early birds couple tickets sold </label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-floating preview-form  padding-small">
          <input type="number" class="form-control" id="preview_regularSingleSold" name="preview_regularSingleSold" maxlength="250" <?php if(isset($preview_regularSingleSold)) {echo "value='" . $preview_regularSingleSold . "'"; } ?> >
          <label for="preview_regularSingleSold"> Number of regular single tickets sold </label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-floating preview-form  padding-small">
          <input type="number" class="form-control" id="preview_regularCoupleSold" name="preview_regularCoupleSold" maxlength="250" <?php if(isset($preview_regularCoupleSold)) {echo "value='" . $preview_regularCoupleSold . "'"; } ?> >
          <label for="preview_regularCoupleSold"> Number of regular couple tickets sold </label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-floating preview-form  padding-small">
          <input type="number" class="form-control" id="preview_partySingleSold" name="preview_partySingleSold" maxlength="250" <?php if(isset($preview_partySingleSold)) {echo "value='" . $preview_partySingleSold . "'"; } ?> >
          <label for="preview_partySingleSold"> Number of party single tickets sold </label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-floating preview-form  padding-small">
          <input type="number" class="form-control" id="preview_partyCoupleSold" name="preview_partyCoupleSold" maxlength="250" <?php if(isset($preview_partyCoupleSold)) {echo "value='" . $preview_partyCoupleSold . "'"; } ?> >
          <label for="preview_partyCoupleSold"> Number of party couple tickets sold </label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-floating preview-form  padding-small">
          <input type="number" class="form-control" id="preview_spec1SingleSold" name="preview_spec1SingleSold" maxlength="250" <?php if(isset($preview_spec1SingleSold)) {echo "value='" . $preview_spec1SingleSold . "'"; } ?> >
          <label for="preview_spec1SingleSold"> Number of Special single tickets type 1 sold </label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-floating preview-form  padding-small">
          <input type="number" class="form-control" id="preview_spec1CoupleSold" name="preview_spec1CoupleSold" maxlength="250" <?php if(isset($preview_spec1CoupleSold )) {echo "value='" . $preview_spec1CoupleSold  . "'"; } ?> >
          <label for="preview_spec1CoupleSold"> Number of Special couple tickets type 1 sold </label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-floating preview-form  padding-small">
          <input type="number" class="form-control" id="preview_spec2SingleSold" name="preview_spec2SingleSold" maxlength="250" <?php if(isset($preview_spec2SingleSold)) {echo "value='" . $preview_spec2SingleSold . "'"; } ?> >
          <label for="preview_spec2SingleSold"> Number of Special single tickets type 2 sold </label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-floating preview-form  padding-small">
          <input type="number" class="form-control" id="preview_spec2CoupleSold" name="preview_spec2CoupleSold" maxlength="250" <?php if(isset($preview_spec2CoupleSold)) {echo "value='" . $preview_spec2CoupleSold . "'"; } ?> >
          <label for="preview_spec2CoupleSold"> Number of Special couple tickets type 2 sold </label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-6 padding-1x25rem">
        <input class="btn btn-primary full-height full-width" type="submit" name="safe_form_data" value="Set preview data">
      </div>

    </div>
  </form>
</div>