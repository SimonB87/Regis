<div class="col-12"> 
  <form id="form_setdate" class="needs-validation bts-form full-width" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
    <div class="row full-width">

      <div class="col-6">

        <div class="form-floating">
          <input type="date" class="form-control" id="previewdate" name="previewdate" maxlength="250" <?php if(isset($eventDataPreviewDate)) {echo "value='" . $eventDataPreviewDate . "'"; } ?> >
          <label for="previewdate"> Set Preview Date</label>
           <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please fill in valid value.
            </div>
        </div>
      </div>

      <div class="col-2">
        <input class="btn btn-primary full-height full-width" type="submit" name="safe_form_data" value="Set date">
      </div>

    </div>
  </form>
</div>