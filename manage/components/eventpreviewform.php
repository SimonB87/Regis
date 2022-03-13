<!-- component : event preview form -->
<div class="col-12"> 
  <form id="form_setdate" class="needs-validation bts-form full-width" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
    <div class="row full-width">

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
          <input type="number" class="form-control" id="preview_earlybirdssold" name="preview_earlybirdssold" maxlength="250" <?php if(isset($preview_earlybirdssold)) {echo "value='" . $preview_earlybirdssold . "'"; } ?> >
          <label for="preview_earlybirdssold"> Number of early birds tickets sold </label>
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
          <input type="number" class="form-control" id="preview_regularsold" name="preview_regularsold" maxlength="250" <?php if(isset($preview_regularsold)) {echo "value='" . $preview_regularsold . "'"; } ?> >
          <label for="preview_regularsold"> Number of regular tickets sold </label>
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
          <input type="number" class="form-control" id="preview_partysold" name="preview_partysold" maxlength="250" <?php if(isset($preview_partysold)) {echo "value='" . $preview_partysold . "'"; } ?> >
          <label for="preview_partysold"> Number of party tickets sold </label>
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
          <input type="number" class="form-control" id="preview_spec1sold" name="preview_spec1sold" maxlength="250" <?php if(isset($preview_spec1sold)) {echo "value='" . $preview_spec1sold . "'"; } ?> >
          <label for="preview_spec1sold"> Number of Special tickets type 1 sold </label>
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
          <input type="number" class="form-control" id="preview_spec1sold" name="preview_spec2sold" maxlength="250" <?php if(isset($preview_spec2sold)) {echo "value='" . $preview_spec2sold . "'"; } ?> >
          <label for="preview_spec2sold"> Number of Special tickets type 2 sold </label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-6 padding-1x25rem">
        <input class="btn btn-primary full-height full-width" type="submit" name="safe_form_data" value="Set date">
      </div>

    </div>
  </form>
</div>