<div class="col-sm-12 col-md-6 col-xl-3 padding-regular">

  <div class="card full-width shadow-light">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> Merch Item 1 </h5>
      <form id="set_merch1" class="needs-validation bts-form full-width" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
        <div class="row full-width">

          <div class="col-12">
            <div class="form-floating">
              <input type="text" class="form-control" id="merch_name_item1" name="merch_name_item1" maxlength="250" <?php /*if(isset($eventDataPreviewDate)) {echo "value='" . $eventDataPreviewDate . "'"; } */ ?> >
              <label for="merch_name_item1"> Merch item 1 name</label>
              <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-floating">
              <input type="text" class="form-control" id="merch_name_item2" name="merch_name_item2" maxlength="250" <?php /*if(isset($eventDataPreviewDate)) {echo "value='" . $eventDataPreviewDate . "'"; } */ ?> >
              <label for="merch_name_item2"> Merch item 1 Price</label>
              <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
            </div>
          </div>

          <div class="col-12">
            <input class="btn btn-primary full-height full-width" type="submit" name="safe_form_data1" value="Set merch item 1">
          </div>

        </div>
      </form>

    </div>
  </div>

</div>

<div class="col-sm-12 col-md-6 col-xl-3 padding-regular">

  <div class="card full-width shadow-light">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> Merch Item 2 </h5>
      <form id="set_merch1" class="needs-validation bts-form full-width" method="post" action="<?php /*echo $_SERVER['PHP_SELF']; */ ?>" novalidate>
        <div class="row full-width">

          <div class="col-12">

            <div class="form-floating">
              <input type="text" class="form-control" id="merch_item1" name="merch_item1" maxlength="250" <?php if(isset($eventDataPreviewDate)) {echo "value='" . $eventDataPreviewDate . "'"; } ?> >
              <label for="merch_item1"> Merch item 2 name</label>
              <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
            </div>
          </div>

          <div class="col-12">
            <input class="btn btn-primary full-height full-width" type="submit" name="safe_form_data2" value="Set merch item 2">
          </div>

        </div>
      </form>

    </div>
  </div>

</div>