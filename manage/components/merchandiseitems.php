<div class="col-sm-12 col-md-6 col-xl-3 padding-regular-topBottom ">

  <div class="card full-width shadow-light">
    <div class="card_top_shade"></div>
    <div class="card-body">
      <h5 class="card-title"> Merch Item 1 </h5>
      <form id="set_merch1" class="needs-validation bts-form full-width" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
        <div class="row full-width">

          <div class="col-12">
            <div class="form-floating padding-small-topBottom">
              <input type="text" class="form-control" id="merch_name_item1" name="merch_name_item1" maxlength="250" <?php /*if(isset($eventDataPreviewDate)) {echo "value='" . $eventDataPreviewDate . "'"; } */ ?> >
              <label for="merch_name_item1"> Merch Item 1 Name</label>
              <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-floating padding-small-topBottom">
              <input type="text" class="form-control" id="merch_price_item1" name="merch_price_item1" maxlength="250" <?php /*if(isset($eventDataPreviewDate)) {echo "value='" . $eventDataPreviewDate . "'"; } */ ?> >
              <label for="merch_price_item1"> Merch Item 1 Price</label>
              <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
            </div>
          </div>

          <div class="col-12">
            <div class="mb-3 full-width full-height div-select">
              <select id="merch_available_item1" class="form-select" aria-label="Pass type" required name="merch_available_item1" >
                <option value="" selected>Select item status ...</option>
                <option value="0 - Item not offered" aria-valuenow="0" <?php if(isset($isEventEdited)) { if( $eventDataEventStatus == "0 - Registrations closed") { echo "selected"; } } ?> > Item not offered </option>
                <option value="1 - Item available" aria-valuenow="0" <?php if(isset($isEventEdited)) { if( $eventDataEventStatus == "1 - Registrations open") { echo "selected"; } } ?> > Item available </option>
              </select>
              <div class="form-select-customLabel">
                Item Available
              </div>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please select some valid option.
              </div>
            </div>
          </div>


          <div class="col-12 margin-small-topBottom">
            <input class="btn btn-primary full-height full-width" type="submit" name="safe_form_data1" value="Update Merch Item 1">
          </div>

          <div class="col-12 margin-small-topBottom">
            <button type="button full-width padding-small-topBottom full-width" class="btn btn-danger">Delete Item</button>
          </div>

        </div>
      </form>

    </div>
  </div>

</div>

<div class="col-sm-12 col-md-6 col-xl-3 padding-regular-topBottom">

  <div class="card full-width shadow-light">
    <div class="card_top_shade"></div>
    <div class="card-body">
      <h5 class="card-title"> Merch Item 2 </h5>
      <form id="set_merch1" class="needs-validation bts-form full-width" method="post" action="<?php /*echo $_SERVER['PHP_SELF']; */ ?>" novalidate>
        <div class="row full-width">

          <div class="col-12">

            <div class="form-floating padding-small-topBottom">
              <input type="text" class="form-control" id="merch_name_item2" name="merch_name_item2" maxlength="250" <?php if(isset($eventDataPreviewDate)) {echo "value='" . $eventDataPreviewDate . "'"; } ?> >
              <label for="merch_name_item2"> Merch Item 2 Name</label>
              <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-floating padding-small-topBottom">
              <input type="text" class="form-control" id="merch_price_item2" name="merch_price_item2" maxlength="250" <?php /*if(isset($eventDataPreviewDate)) {echo "value='" . $eventDataPreviewDate . "'"; } */ ?> >
              <label for="merch_price_item2"> Merch Item 2 Price</label>
              <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please fill in valid value.
                </div>
            </div>
          </div>

          <div class="col-12">
            <div class="mb-3 full-width full-height div-select">
              <select id="merch_available_item2" class="form-select" aria-label="Pass type" required name="merch_available_item2" >
                <option value="" selected>Select item status ... </option>
                <option value="0 - Item not offered" aria-valuenow="0" <?php if(isset($isEventEdited)) { if( $eventDataEventStatus == "0 - Registrations closed") { echo "selected"; } } ?> > Item not offered </option>
                <option value="1 - Item available" aria-valuenow="0" <?php if(isset($isEventEdited)) { if( $eventDataEventStatus == "1 - Registrations open") { echo "selected"; } } ?> > Item available </option>
              </select>
              <div class="form-select-customLabel">
                Item Available
              </div>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please select some valid option.
              </div>
            </div>
          </div>

          <div class="col-12 margin-small-topBottom">
            <input class="btn btn-primary full-height full-width padding-small-topBottom" type="submit" name="safe_form_data2" value="Update Merch Item 2">
          </div>

          <div class="col-12 margin-small-topBottom">
            <button type="button full-width padding-small-topBottom full-width" class="btn btn-danger" >Delete Item</button>
          </div>

        </div>
      </form>

    </div>
  </div>

</div>