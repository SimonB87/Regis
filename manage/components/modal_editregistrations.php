<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit order ID : <span id="orderId" class="text-blue"></span> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section>
          <h4> Order Data </h4>

            <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
              <div class=" full-width full-height div-select">
                <select id="dancerKind" class="form-select" aria-label="Pass type" onchange="recalculatePrice();" required="" name="dancerKind">
                  <option value="" selected="" >Select dancer kind ...</option>
                  <option value="1 - Leader" >Leader</option>
                  <option value="2 - Follower" >Follower</option>
                  <option value='3 - Couple' >Couple</option>

                </select>
                <div class="form-select-customLabel">
                  Dancer kind
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
              <div id="passType--parent" class=" full-width full-height div-select">
                <select id="passType" class="form-select" aria-label="Pass type" required="" onchange="recalculatePrice();" name="passType">
                  <option value="" selected="">Select pass type ... </option>
                  <?php echo "<option value='1 - Early birds pass leader/follower' >Early birds pass leader/follower " . "</option>"; ?>
                  <?php echo "<option value='2 - Early birds couple'>Early birds couple " . "</option>"; ?>
                  <?php echo "<option value='3 - Fullpass leader/follower'>Fullpass leader/follower " . "</option>"; ?>
                  <?php echo "<option value='4 - Fullpass couple'>Fullpass couple " . "</option>";  ?>
                  <?php echo "<option value='5 - Partypass leader/follower'>Partypass leader/follower " . "</option>";  ?>
                  <?php echo "<option value='6 - Partypass couple'>Partypass couple " . "</option>"; ?>
                  <option value="0 - None" aria-valuenow="0.0">None</option>
                </select>
                <div class="form-select-customLabel">
                  Pass type
                </div>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please select some valid option.
                </div>
              </div>
            </div>

              <div class='col-lg-6 col-md-12 col-sm-12 padding-small '>
                  <div class=" full-width full-height div-select">
                    <select id="otherTicketOptions" class="form-select" aria-label="Pass type" required="" onchange="recalculatePrice();" name="otherTicketOptions">
                      <option value="" selected=""> Other tickets options ...</option>
                      <?php 
                      echo "<option value='1 - " . $eventDataSpecialType1RegistrationName . "'>" . $eventDataSpecialType1RegistrationName . " - Single " . "</option>";
                      echo "<option value='2 - " . $eventDataSpecialType1RegistrationName . "'>" . $eventDataSpecialType1RegistrationName . " - Couple " . "</option>";
                      echo "<option value='3 - " . $eventDataSpecialType2RegistrationName . "'>" . $eventDataSpecialType2RegistrationName . " - Single " . "</option>";
                      echo "<option value='4 - " . $eventDataSpecialType2RegistrationName . "'>" . $eventDataSpecialType2RegistrationName . " - Couple " . "</option>";
                      ?>
                      <option value="0 - None" aria-valuenow="0.0">None</option>
                    </select>
                    <div class="form-select-customLabel">
                      Other tickets options
                    </div>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please select some valid option.
                    </div>
                  </div>

                </div>
        </section>

        <section>

          <h4> Personal Data </h4>

            <div class="row">


              <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
                <div class="form-floating">
                  <input type="text" class="form-control" id="clientName" required="" name="clientName" maxlength="250">
                  <label for="clientName">Name</label>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Please fill in name.
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
                <div class="form-floating ">
                  <input type="email" class="form-control" id="clientEmail" placeholder="name@example.com" required="" name="clientEmail" maxlength="250">
                  <label for="clientEmail">Email address</label>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Please fill in email.
                  </div>
                </div>
              </div>


              <div class="col-lg-6 col-md-12 col-sm-12  padding-small">
                <div class="form-floating">
                  <input type="phone" class="form-control" id="clientPhone" required="" name="clientPhone" minlength="6" value="+420" maxlength="250">
                  <label for="clientPhone">Phone (with your national predial)</label>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Please fill in phone.
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12 padding-small">
                <div class="form-floating">
                  <input type="text" class="form-control" id="clientCountry" required="" name="clientCountry" maxlength="250">
                  <label for="clientCountry">Your country</label>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Please fill in the text field.
                  </div>
                </div>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 padding-small">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="clientComments" style="height: 100px" name="clientComments" maxlength="250"></textarea>
                  <label for="clientComments">Comments</label>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Please fill in name.
                  </div>
                </div>
              </div>

            </div>

        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>0