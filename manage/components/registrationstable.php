      <div class="col-12 text-center">
          <button type="button" class="btn btn-primary btn-lg margin-small padding-small ">
            <?php $downloadLink = isset($selectedEvent) ? ("downloadregistrations.php?id=" . $selectedEvent) : "downloadregistrations.php"; ?>
            <a id="download-registrations"  href=<?php echo $downloadLink ?> class="weblink text-center text-white padding-small margin-small" target="_blank"> Download registrations </a>
          </button>
      </div>

      <div class="col-12">

      <table id="orders" class="table search_project_table" data-sorting="true" data-paging="true">
        <thead class="bg-info">
          <tr class="text-white">
            <th class="footable-sortable"> Order ID </th>
            <th class="footable-sortable" data-breakpoints="xs sm"> Event name </th>
            <th class="footable-sortable"> Registration date </th>
            <th class="footable-sortable"> Client name </th>
            <th class="footable-sortable" data-breakpoints="xs sm"> Price </th>
            <th class="footable-sortable" data-breakpoints="xs sm md"> Pass type </th>
            <th class="footable-sortable" data-breakpoints="xs sm md"> Dancer kind </th> 

            <th class="footable-sortable" data-breakpoints="xs sm md "> Other ticket option </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md "> Other ticket option dancer kind </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client email </th>

            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client phone </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client country </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client comments </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client Confrimation 1 Description </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client Confrimation 1 </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client Confrimation 2 Description </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client Confrimation 2 </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client Confrimation 3 Description </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client Confrimation 3 </th> 
            <th class="footable-sortable"> Payment status </th>
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Client changes </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> Admin changes </th> 
            <th class="footable-sortable" data-breakpoints="xs sm md lg"> ID (in database) </th>
            <th class="footable-sortable"> Edit </th>
          </tr>
        </thead>

        <tbody>

        <?php

          if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
          }

          /* //debug 
          if (!mysqli_query($connector, `DECLARE @a=1;`)) {
            printf("Error message: %s\n", mysqli_error($connector));
          }*/


          if (!mysqli_set_charset($connector, "utf8")) {
            printf("Error loading character set utf8: %s\n", mysqli_error($con));
            exit();
            } else {
                    //printf("Current character set: %s\n", mysqli_character_set_name($con));//used only for testing
            }

            $sql = "";
            
            if ((isset($selectedEvent)) && (strlen($selectedEvent)) > 0) {
              $sql = "SELECT * FROM registrations WHERE eventID='$selectedEvent' ORDER BY id DESC";
            } else {
              $sql = "SELECT * FROM registrations ORDER BY id DESC";
            }


            $results = $connector-> query($sql);
            //Error case
            if (!$sql ) {
              echo "Failed! <br> Error sql: " . mysql_error();
            }
            
            
            if (mysqli_query($connector, $sql)) {
              //echo "sql - statusCode - 200";
            } 
            else {
              echo "sql - statusCode - 400";
            }



            //function to fatch the data
            if ($results-> num_rows > 0 ) {
              while ($row = $results-> fetch_assoc()) {

                  $paymentStatusUnpaid = ($row["paystatus"] == "1 - unpaid") ? true : false;
                  $paymentStatusPaid = ($row["paystatus"] == "2 - paid") ? true : false;
                  $paymentStatusReminder = ($row["paystatus"] == "3 - reminder sent") ? true : false;
                  $paymentStatusCancelled = ($row["paystatus"] == "4 - cancelled registration") ? true : false;
                  $paymentStatusError = ( $paymentStatusUnpaid == false ) && ( $paymentStatusPaid == false ) && ( $paymentStatusReminder == false ) && ( $paymentStatusCancelled == false );
                  $stylePaystatus = ($paymentStatusPaid == true) ? " bg-success text-white " : ( ($paymentStatusCancelled == true) ? " text-white bg-danger " : " bg-warning " );

                  $paymentStatus = "<div class='update-pay--parent' title='id".$row["orderID"]."' aria-value-now='".$row["orderID"]."'>
                    <div>
                      <form class='orderId".$row["orderID"]."' title='".$row["orderID"]."'>
                        <select class='form-select" . $stylePaystatus . "' aria-label='Select payment options' id='paymentoption".$row["orderID"]."' name='paymentoption'>
                        <option class='bg-white text-black' value='1 - unpaid' " . ( ($paymentStatusUnpaid == true) ? "selected" : "" ) . " >Unpaid</option>
                        <option class='bg-white text-black' value='2 - paid' " . ( ($paymentStatusPaid == true) ? "selected" : "" ) . ">Paid</option>
                        <option class='bg-white text-black' value='3 - reminder sent' " . ( ($paymentStatusReminder == true) ? "selected" : "" ) . ">Reminder sent</option>
                        <option class='bg-white text-black' value='4 - cancelled registration' " . ( ($paymentStatusCancelled == true) ? "selected" : "" ) . ">Cancelled registration</option>
                        <option class='bg-white text-black' value='0 - error' " . ( ($paymentStatusError == true) ? "selected" : "" ) . ">Error</option>
                        </select>
                      <input class='visibility-hidden' id='orderID".$row["orderID"]."' name='orderID' value='".$row["orderID"]."'>
                      <input class='visibility-hidden' id='clientName".$row["orderID"]."' name='clientName' value='".$row["clientName"]."'>
                      </form>
                    </div>
                    <div class='update-pay--button margin-small-top'> 
                      <button type='button' class='" . $row["orderID"] . " btn btn-secondary updatebutton' aria-value-now='".$row["orderID"]."' onclick='postUpdatePayment(\"" . $row["orderID"] . "\");'> 
                      <span>Update </span> 
                      <div class='spinner-border text-info hidden' role='status'> <span class='visually-hidden'>Loading...</span> </div>
                      </button>
                    </div>
                    <div class='update-pay--resultnotice'> </div>
                  </div>";

                  $otherTicketOptionName = "";
                  $rowOtherTicketOptions = $row["otherTicketOptions"];

                  $spec1 = array("1 - special type1 single","2 - special type1 couple");
                  $spec2 =array("3 - special type2 single","4 - special type2 couple");
                  if (in_array($rowOtherTicketOptions, $spec1)) {
                    $otherTicketOptionName = $eventDataSpecialType1RegistrationName;
                  } elseif (in_array($rowOtherTicketOptions, $spec2)) {
                    $otherTicketOptionName = $eventDataSpecialType2RegistrationName;
                  }

                  echo "<tr class='orderId" . $row["orderID"] . "'>" . 
                        "<td>" . $row["orderID"] . "</td>" .
                        "<td>" . $row["eventName"] . "</td>" .
                        "<td>" . $row["registrationdate"] . "</td>" .
                        "<td title='clientName'>" . $row["clientName"] . "</td>" .
                        "<td title='price'>" . $row["formPrice"] . "</td>" .
                        "<td title='passType'>" . $row["passType"] . "</td>" .
                        "<td title='dancerKind'>" . $row["dancerKind"] . "</td>" .
                        "<td title='otherTicketOptions' " . $otherTicketOptionName . "> <span class='name'> " . $otherTicketOptionName . " </span> <br> <span class='code text-info'> " . $row["otherTicketOptions"] . " </span> </td>" .
                        "<td title='otherDancerKind' >" . $row["otherDancerKind"] . "</td>" .
                        "<td title='clientEmail' >" . $row["clientEmail"] . "</td>" .
                        "<td title='clientPhone'>" . $row["clientPhone"] . "</td>" .
                        "<td title='clientCountry' >" . $row["clientCountry"] . "</td>" .
                        "<td title='clientComments'>" . $row["clientComments"] . "</td>" .
                        "<td>" . $row["confirmPrivateInformation1Description"] . "</td>".
                        "<td>" . $row["confirmPrivateInformation1"] . "</td>".
                        "<td>" . $row["confirmPrivateInformation2Description"] . "</td>".
                        "<td>" . $row["confirmPrivateInformation2"] . "</td>".
                        "<td>" . $row["confirmPrivateInformation3Description"] . "</td>".
                        "<td>" . $row["confirmPrivateInformation3"] . "</td>".
                        "<td>" . $paymentStatus . "</td>".
                        "<td>" . $row["clientTransferedOrder"] . "</td>".
                        "<td>" . $row["adminEditedOrder"] . "</td>".
                        "<td>" . $row["id"] . "</td>".
                        "<td><div><span class='glyphicon editReg' onclick='editRegistration(\"". $row["orderID"] ."\");' data-bs-toggle='modal' data-bs-target='#exampleModal'>&#x270f;</span></div><td/>" . 
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
