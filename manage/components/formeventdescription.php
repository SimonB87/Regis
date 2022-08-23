<div class="bg-light rounded border col-12">
  <div class="padding-regular">
    <h3> Note - formating code </h3>
    <div class="row">

      <div class="col-lg-3 col-md-6 col-sm-12">
        <h4><strong>Bold text</strong></h4>
        <!-- <p> <strong>Some bold text here</strong> </p> -->

        <div>
          <code>
            <<span class="code-space"> </span>strong<span class="code-space"></span>>Some bold text here<<span class="code-space"></span>/<span class="code-space"></span>strong<span class="code-space"></span>>
          </code>
        </div>

      </div>

      <div class="col-lg-3 col-md-6 col-sm-12">
        <h4> <i>Italic text</i> </h4>
          <div>
            <code>
              <<span class="code-space"></span>i<span class="code-space"></span>>Some italic text here<<span class="code-space"></span>/<span class="code-space"></span>i<span class="code-space"></span>> 
            </code>
          </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12">
        <h4>End of line</h4>
        <div>
          <code>
          Text on line one.<<span class="code-space"></span>br<span class="code-space"></span>> <br> Text on line 2.
          </code>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12">
        <h4>Paragraph</h4>
          <div>
            <code>
              <<span class="code-space"></span>p<span class="code-space"></span>>Text in par. 1<<span class="code-space"></span>/<span class="code-space"></span>p<span class="code-space"></span>><br>
              <<span class="code-space"></span>p<span class="code-space"></span>>Text in par. 2<<span class="code-space"></span>/<span class="code-space"></span>p<span class="code-space"></span>>
            </code>
          </div>
      </div>

    </div>
  </div>
</div>

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