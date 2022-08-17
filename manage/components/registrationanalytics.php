<div class="row">

  <div class="col-12">
    <h2 class="text-center display-7 fw-bold">Currently open event summary</h2>
  </div>

  <div class="col-lg-6 col-md-12">
  <!-- TODO - statistics about current event registrations - show data from DB-->
    <p><strong> Event name : </strong> <?php echo $eventDataEventName; ?> </p>
    <p><strong> Event start date : </strong> <?php echo $eventDataEventStartDate; ?> </p>
    <p><strong> Event end date : </strong> <?php echo $eventDataEventEndDate; ?> </p>
    <p><span class="fw-bold bg-info text-white padding-small rounded" id="reg-all"> </span> Number of all registrations <p>
    <p> <br></p>
    <p><span class="fw-bold bg-success text-white padding-small rounded" id="reg-paid"> </span> Paid registrations </p>
    <p><span class="fw-bold bg-secondary text-white padding-small rounded" id="reg-unpaid"> </span> Unpaid registrations </p>
    <p><span class="fw-bold bg-warning text-white padding-small rounded" id="reg-reminded"> </span> Payment reminders sent </p>
    <p><span class="fw-bold bg-danger text-white padding-small rounded" id="reg-cancelled"> </span> Cancelled registrations </p>
  </div>

  <div class="col-lg-6 col-md-12">
    <h4 class="text-center ">Registrations data</h4>
    <canvas id="myPieChart"></canvas>
  </div>

</div>

<div class="row">

</div>

<div class="row"> 
  <div class="col-6 center-margin text-center my-5">
      <a href="registrations.php">
        <button type="button" class="btn btn-primary">
          MANAGE REGISTRATIONS
        </button>
      </a>
  </div>
</div>