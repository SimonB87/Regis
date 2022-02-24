<div class="col-12">
  <form id="eventdescriptionform" class="needs-validation bts-form eventdescriptionform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
    <div class="form-floating">
      <label for="exampleFormControlTextarea1">Event description part 1</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
    </div>
    <div class="form-floating">
      <label for="exampleFormControlTextarea2">Event description part 2</label>
      <textarea class="form-control" id="exampleFormControlTextarea2" rows="10"></textarea>
    </div>
    <div class="form-floating">
      <label for="exampleFormControlTextarea3">Event description part 3</label>
      <textarea class="form-control" id="exampleFormControlTextarea3" rows="10"></textarea>
    </div>
    <div class="col-12">
      <input class="btn btn-primary" type="submit" name="safe_form_data" value=<?php if ($isEventEdited == false) { echo "Update"; } else {echo "Submit";} ?> >
    </div>
  </form>
</div>