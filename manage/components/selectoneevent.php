<div class="col-12">
  <form  id="selectevent" class="needs-validation" method="post" action="" novalidate="">
    <div class="row full-width">

      <div class='col-lg-6 col-md-12 col-sm-12 padding-small'>
        <div class="full-width full-height div-select">
          <select id="listetedevents" class="form-select" aria-label="Listed events" required="" name="listetedevents">
                <option value="" > All events selected, choose one event ...</option>

                <?php 
                include("./handlers/handler_getlidtedeventsasoption.php");
                ?>

          </select>
          <div class="form-select-customLabel">
              Listed events
          </div>
          <div class="valid-feedback">
                Looks good!
          </div>
          <div class="invalid-feedback">
                Please select some valid option.
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
        <button type="button" class="btn btn-primary save-button full-height" onclick=";">
            <span class='save-button-text margin-small-right'>Select event </span>
            <span class='spinner-border text-info hidden' role='status'> </span>
        </button>
      </div>

    </div>

  </form>
<div>