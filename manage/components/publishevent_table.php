<!--
<div class="col-sm-6 col-md-4 col-lg-3"> 
  <strong> Set Page Length </strong>
</div>
<div class="col-sm-6 col-md-8 col-lg-9" style="float: right;"> 
  <button type="button" data-page-size="50" type="button" class="btn btn-primary margin-verysmall" style="float: right;">50</button>
  <button type="button" data-page-size="20" type="button" class="btn btn-primary margin-verysmall" style="float: right;">20</button>
  <button type="button" data-page-size="15" type="button" class="btn btn-primary margin-verysmall" style="float: right;">15</button>
  <button type="button" data-page-size="10" type="button" class="btn btn-primary margin-verysmall" style="float: right;">10</button>
  <button type="button" data-page-size="5" type="button" class="btn btn-primary margin-verysmall" style="float: right;">5</button>
</div>
-->

<div class="col-12 my-2">

<table id="events" class="table search_project_table" data-sorting="true" data-paging="true">
  <thead class="bg-info text-white">
    <tr>
      <th class="footable-sortable"> <span class="sectionIndex">1</span> Event ID </th>
      <th class="footable-sortable"> <span class="sectionIndex">1</span> Event status </th>
      <th class="footable-sortable" data-breakpoints="xs sm"> <span class="sectionIndex">1</span> Event name </th>
      <th class="footable-sortable" data-breakpoints="xs sm"> <span class="sectionIndex">1</span> Event start date </th>
      <th class="footable-sortable" data-breakpoints="xs sm"> <span class="sectionIndex">1</span> Event end date </th>

    </tr>
  </thead>

  <tbody>

  <?php

  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

  /* debug
  if (!mysqli_query($connector, "SET a=1")) {
    printf("Error message: %s\n", mysqli_error($link));
  }*/

  if (!mysqli_set_charset($connector, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($con));
    exit();
    } else {
            //printf("Current character set: %s\n", mysqli_character_set_name($con));//used only for testing
    }

    $sql = "SELECT * FROM events ORDER BY id DESC";

    $results = $connector-> query($sql);
    //Error case
    if (!$sql ) {
      echo "Failed! <br> Error sql: " . mysql_error();
    }
    
    if (mysqli_query($connector, $sql)) {
      //debug echo json_encode(array("statusCode"=>200));
    } 
    else {
      echo json_encode(array("sql - statusCode"=>418));
    }

    //function to fatch the data
    if ($results-> num_rows > 0 ) {
      while ($row = $results-> fetch_assoc()) {

          $status0 = ($row["eventStatus"] === "0 - Registrations closed") ? true : false;
          $status1 = ($row["eventStatus"] === "1 - Registrations open") ? true : false;
          $status2 = ($row["eventStatus"] === "2 - Event passed") ? true : false;
          $status3 = ($row["eventStatus"] === "3 - Event cancelled") ? true : false;

          $eventStatusOtionsComponent =             "<div class='mb-3 full-width full-height div-select'>
          <select id='eventStatus' class='form-select' aria-label='Pass type' required name='eventStatus' >
            <option value='' selected>Select event status option ...</option>
            <option value='0 - Registrations closed' " . ( $status1  ? 'selected' : '' ) . " >Registrations closed</option>
            <option value='1 - Registrations open'" . ( $status1  ? 'selected' : '' ) . ">Registrations open</option>
            <option value='2 - Event passed'" . ( $status2  ? 'selected' : '' ) . ">Event passed</option>
            <option value='3 - Event cancelled' " . ( $status3  ? 'selected' : '' ) . " >Event cancelled</option>
          </select>
          <div class='valid-feedback'>
            Looks good!
          </div>
          <div class='invalid-feedback'>
            Please select some valid option.
          </div>
        </div>";

          $formStart = "<div class='form-change-status'><form id='form' class='needs-validation bts-form' method='post' action=" . $_SERVER['PHP_SELF'] . " novalidate>";
          $idInputValue = "<div class='form-floating hidden'><input type='text' class='form-control' id='eventId' required='' name='eventId' maxlength='250' value=" . $row["id"] . "></div>";
          $submitButton = "<div class='form-floating'><input class='btn btn-primary' type='submit' name='safe_publish_data' value='Submit'></div>";
          $formEnd = "</form></div>";
          $wholeForm = $formStart . $eventStatusOtionsComponent . $idInputValue . $submitButton . $formEnd;

          $output = "<tr>" . "<td>" . $row["id"] . "</td><td>" . $wholeForm . "</td><td>" . $row["eventName"]  . "</td><td>" . $row["eventStartDate"] ."</td><td>" . $row["eventEndDate"] . "</td>" . "</tr>";

          echo $output;
      }
      echo "";
  } else {
      echo "There are 0 results in DB table";
  }

  mysqli_close($connector);
  ?>

  </tbody>
</table>

</div>


</form>