
<div class="bg-white padding-regular-topBottom">
  <div class="container">
    <div class="row">
    <div class="col-12"> <div class='padding-small'> <div class='alert alert-secondary col-lg-12 col-md-12 col-sm-12 padding-small' role='alert'><h4 class=''> THIS IS WEB TEST ENVIRONMENT ! </h4> <p> Registrations only for test purpose ! </p><span class='alert-hide'>
      <span class="alert-hide">
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check' viewBox='0 0 16 16'>
          <path d='M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z'></path>
        </svg>
      </span>
    </div></div></div>
      <div class="col-12">  
        <h1 class="text-center padding-small">Saved registrations</h1>
      </div>
      <div class="col-12">

      <table id="orders" class="table search_project_table" data-sorting="true" data-paging="true">
        <thead class="bg-info">
          <tr class="text-white">
            <th class="footable-sortable"> Order ID </th>
            <th class="footable-sortable" data-breakpoints="xs sm"> Event name </th>
            <th class="footable-sortable"> Registration date </th>
            <th class="footable-sortable"> Client name </th>
            <th class="footable-sortable" data-breakpoints="xs sm md"> Pass type </th>
            <th class="footable-sortable"> Price </th>
            <th class="footable-sortable" data-breakpoints="xs sm md"> Client email </th>
            <th class="footable-sortable" data-breakpoints="xs sm md"> Dancer kind </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Registration type </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md"> Client phone </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Length type </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client country </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client comments </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client GDRP confirm </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client COVID policy confirm </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Competition participation </th>
            <th class="footable-sortable" data-breakpoints="xs sm md"> Merchandise </th>
            <th class="footable-sortable" data-breakpoints="xs sm"> Payment status </th>
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> ID (in database) </th>
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

            $sql = "SELECT * FROM registrations ORDER BY id DESC";

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

            $paymentStatus = "<form><select class='form-select' aria-label='Default select example'>
                                <option selected selected>TODO - finish</option>
                                <option value='1 - unpaid'>Unpaid</option>
                                <option value='2 - paid'>Paid</option>
                                <option value='3 - reminder sent'>Reminder sent</option>
                              </select></form>";

            //function to fatch the data
            if ($results-> num_rows > 0 ) {
              while ($row = $results-> fetch_assoc()) {

                  echo "<tr><td>" . $row["orderID"] . "</td><td>" . $row["eventName"] . "</td><td>" . $row["registrationdate"]  . "</td><td>" . $row["clientName"] ."</td><td>" . $row["passType"] . "</td> <td>" . $row["formPrice"] . "</td> <td>" . $row["clientEmail"]  . "</td> <td>" . $row["dancerKind"] . "</td><td>" . 
                        $row["registrationType"] . "</td><td>" . $row["clientPhone"] . "</td><td>" . $row["lengthType"] . "</td><td>" . $row["clientCountry"] . "</td><td>" . $row["clientComments"] . "</td><td>" . $row["confirmPrivateInformation"] . "</td><td>" .
                        $row["confirmCovid"] . "</td><td>" . $row["competitionParticipation"] . "</td><td>" . $row["merchandise"] . "</td><td>" . $paymentStatus . "</td><td>" . $row["id"] . "</td>" . "</tr>";
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
    </div>
  </div>
</div>