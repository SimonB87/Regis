<div class="col-12 padding-regular">
  <form class="full-width" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" novalidate>
    <div class="row full-width">

      <div class="col-12 padding-small">
          <div class="form-floating">
            <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required>
            <label for="eventName">Event Poster</label>
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please fill in valid value. </div>
          </div>
      </div>

      <div class="col-12 padding-small">
        <div class="form-floating">
          <input class="btn btn-primary" type="submit" value="Upload Poster" name="submit_poster">
        </div>
      </div>

    </div>
  </form>
</div>