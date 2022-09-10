<div class="col-12">
  <form id="eventdescriptionform" class="needs-validation bts-form eventdescriptionform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
    <div class="form-floating disabled hidden">
      <input type="number" class="form-control bg-disabled prefill-auto" id="eventID" name="eventID" maxlength="250" value=<?php echo $eventDataId ; ?> >
      <label for="eventID">Event ID (Filled automatically)</label>
    </div>

    <div class="form-floating">
      <label for="eventDescription1">Event description part 1</label>
      <textarea class="form-control" id="eventDescription1" name="eventDescription1" rows="10"><?php if($isEventEdited) {echo $dataEventDescription1; } ?></textarea>
    </div>
    <div class="form-floating">
      <label for="eventDescription2">Event description part 2</label>
      <textarea class="form-control" id="eventDescription2" name="eventDescription2" rows="10"><?php if($isEventEdited) {echo $dataEventDescription2; } ?></textarea>
    </div>
    <div class="form-floating">
      <label for="eventDescription3">Event description part 3</label>
      <textarea class="form-control" id="eventDescription3" name="eventDescription3" rows="10"><?php if($isEventEdited) {echo $dataEventDescription3; } ?></textarea>
    </div>
    <div class="col-12">
      <input class="btn btn-primary" type="submit" name="safe_event_description" value=<?php if ($isEventEdited == true) { echo "Update"; } else {echo "Submit";} ?> >
    </div>
  </form>
</div>