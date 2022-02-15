<div class="col-12 my-2">

<table id="events" class="table search_project_table" data-sorting="true" data-paging="true">
  <thead class="bg-info text-white">
    <tr>
      <th class="footable-sortable"> Event ID </th>
      <th class="footable-sortable"> Event status </th>
      <th class="footable-sortable" data-breakpoints="xs sm"> Event name </th>
      <th class="footable-sortable" data-breakpoints="xs sm"> Event start date </th>
      <th class="footable-sortable" data-breakpoints="xs sm"> Event end date </th>
      <th class="footable-sortable" data-breakpoints="xs sm"> Enable couple ticket </th>

      <th class="footable-sortable" data-breakpoints="xs sm md"> Early birds enabled </th>
      <th class="footable-sortable" data-breakpoints="xs sm md"> Early birds registrations name </th>
      <th class="footable-sortable" data-breakpoints="xs sm md lg"> Early birds registrations start date </th> 
      <th class="footable-sortable" data-breakpoints="xs sm md lg"> Early birds registrations end date </th>

      <th class="footable-sortable" data-breakpoints="all"> Early birds registrations price - single </th> 
      <th class="footable-sortable" data-breakpoints="all"> Early birds registrations amount - single </th> 
      <th class="footable-sortable" data-breakpoints="all"> Early birds registrations price - couple </th> 
      <th class="footable-sortable" data-breakpoints="all"> Early birds registrations amount - couple </th> 

      <th class="footable-sortable" data-breakpoints="all"> Special type 1 registrations enabled </th> 
      <th class="footable-sortable" data-breakpoints="all"> Special type 2 registrations enabled </th> 

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

          echo "<tr><td>" . $row["id"] . "</td><td>" . $row["eventStatus"] . "</td><td>" . $row["eventName"]  . "</td><td>" . $row["eventStartDate"] ."</td><td>" . $row["eventEndDate"] . "</td> <td>" . $row["enableCoupleTicket"] . "</td>" . 
              "<td>" . $row["earlyBirdsRegistrationEnabled"] . "</td> <td>" . $row["earlyBirdsRegistrationName"] . "</td> <td>" . $row["earlyBirdsRegistrationsStartDate"] . "</td> <td>" . $row["earlyBirdsRegistrationsEndDate"] . 
              "</td> <td>" . $row["earlyBirdsTicketPriceSingle"] . "</td> <td>" . $row["ticketsAmountEarlyBirdsRegistrationsSingle"] . "</td> <td>" . $row["earlyBirdsTicketPriceCouple"] . "</td> <td>" . $row["earlyBirdsTicketAmountCouple"] . "</td> <td> # </td> <td> # </td>" .
              "</tr>";
      }
      echo "";
  }
  else {
      echo "There are 0 results in DB table";
  }

  mysqli_close($connector);
  ?>

  </tbody>
</table>

</div>