<?php 
include("manage/handlers/handler_editdate.php");
?>

<div class="container">
  <div class="row">
    <!-- Header -->
    <div class="col-12 padding-correction padding"> 
      <div class="content-body padding-regular-topBottom">
        <div class="text-center padding-small text-white"> 
          <h1> Kurzy Wim Hof Method </h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-white">
  <div class="container bg-white">
    <div class="row padding-small-topBottom">

  <!-- List events -->
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

   //select one open event, where registrations are open
  $sql = "SELECT * FROM events WHERE eventStatus='1 - Registrations open' ORDER BY id DESC";

  if ((isset($selectByEventId)) || (isset( $selectedEventId))) {
      if ($selectByEventId == true) {
        $sql = "SELECT * FROM events WHERE id='$selectByEventId' ORDER BY id DESC LIMIT 1";
      }
      if (isset($selectedEventId)) {
        $sql = "SELECT * FROM events WHERE id='$selectedEventId' ORDER BY id DESC LIMIT 1";
      }
  }

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

        $eventDataId = $row["id"] ;
        $eventDataEventStatus = $row["eventStatus"] ;
        $eventDataEventName = $row["eventName"] ;
        $eventDataEventStartDate = $row["eventStartDate"] ;
        $eventDataEventEndDate = $row["eventEndDate"] ;
        $eventDataMaintainSinglesParity = $row["maintainSinglesParity"] ;
        $eventLocation = $row["eventLocation"] ; //
        $eventLanguage = $row["eventLanguage"] ; //

        $eventDataAgreementsEnabled = $row["agreementsEnabled"] ;
        $eventDataAgreement1Enabled = $row["agreement1Enabled"] ;
        $eventDataAgreement1Text = $row["agreement1Text"] ;
        $eventDataAgreement2Enabled = $row["agreement2Enabled"] ;
        $eventDataAgreement2Text = $row["agreement2Text"] ;
        $eventDataAgreement3Enabled = $row["agreement3Enabled"] ;
        $eventDataAgreement3Text = $row["agreement3Text"] ;

        $eventDataEarlyBirdsRegistrationEnabled = $row["earlyBirdsRegistrationEnabled"] ;
        $eventDataEarlyBirdsRegistrationName = $row["earlyBirdsRegistrationName"] ;
        $eventDataEarlyBirdsRegistrationsStartDate = $row["earlyBirdsRegistrationsStartDate"] ;
        $eventDataEarlyBirdsRegistrationsEndDate = $row["earlyBirdsRegistrationsEndDate"] ;
        $eventDataTicketsAmountEarlyBirdsRegistrationsSingle = $row["ticketsAmountEarlyBirdsRegistrationsSingle"] ;
        $eventDataEarlyBirdsTicketPriceSingle = $row["earlyBirdsTicketPriceSingle"] ;
        $eventDataEarlyBirdsTicketPriceCouple = $row["earlyBirdsTicketPriceCouple"] ;
        $eventDataEarlyBirdsTicketAmountCouple = $row["earlyBirdsTicketAmountCouple"] ;

        $eventDataRegularRegistrationEnabled = $row["regularRegistrationEnabled"] ;
        $eventDataRegularRegistrationName = $row["regularRegistrationName"] ;
        $eventDataRegularRegistrationsStartDate = $row["regularRegistrationsStartDate"] ;
        $eventDataRegularRegistrationsEndDate = $row["regularRegistrationsEndDate"] ;
        $eventDataRegularTicketPriceSingle = $row["regularTicketPriceSingle"] ;
        $eventDataRegularTicketAmountSingle = $row["regularTicketAmountSingle"] ;
        $eventDataRegularTicketPriceCouple = $row["regularTicketPriceCouple"] ;
        $eventDataRegularTicketAmountCouple = $row["regularTicketAmountCouple"] ;

        $partyRegistrationEnabled = $row["partyRegistrationEnabled"] ;
        $partyRegistrationName = $row["partyRegistrationName"] ;
        $partyRegistrationsStartDate = $row["partyRegistrationsStartDate"] ;
        $partyRegistrationsEndDate = $row["partyRegistrationsEndDate"] ;
        $partyTicketPriceSingle = $row["partyTicketPriceSingle"] ;
        $partyTicketAmountSingle = $row["partyTicketAmountSingle"] ;
        $partyTicketPriceCouple = $row["partyTicketPriceCouple"] ;
        $partyTicketAmountCouple = $row["partyTicketAmountCouple"] ;

        $eventDataSpecialType1RegistrationEnabled = $row["specialType1RegistrationEnabled"] ;
        $eventDataSpecialType1RegistrationName = $row["specialType1RegistrationName"] ;
        $eventDataSpecialType1RegistrationsStartDate = $row["specialType1RegistrationsStartDate"] ;
        $eventDataSpecialType1RegistrationsEndDate = $row["specialType1RegistrationsEndDate"] ;
        $eventDataSpecialType1TicketPriceSingle = $row["specialType1TicketPriceSingle"] ;
        $eventDataSpecialType1TicketAmountSingle = $row["specialType1TicketAmountSingle"] ;
        $eventDataSpecialType1TicketPriceCouple = $row["specialType1TicketPriceCouple"] ;
        $eventDataSpecialType1TicketAmountCouple = $row["specialType1TicketAmountCouple"] ;
      
        $eventDataSpecialType2RegistrationEnabled = $row["specialType2RegistrationEnabled"] ;
        $eventDataSpecialType2RegistrationName = $row["specialType2RegistrationName"] ;
        $eventDataSpecialType2RegistrationsStartDate = $row["specialType2RegistrationsStartDate"] ;
        $eventDataSpecialType2RegistrationsEndDate = $row["specialType2RegistrationsEndDate"] ;
        $eventDataSpecialType2TicketPriceSingle = $row["specialType2TicketPriceSingle"] ; 
        $eventDataSpecialType2TicketAmountSingle = $row["specialType2TicketAmountSingle"] ;
        $eventDataSpecialType2TicketPriceCouple = $row["specialType2TicketPriceCouple"] ;
        $eventDataSpecialType2TicketAmountCouple = $row["specialType2TicketAmountCouple"] ;

        $posterFileName = $row["posterFileName"] ;

        $description_place = ( strtolower($eventLanguage) == "cz" ) ? "Místo: " : (( strtolower($eventLanguage) == "en" ) ? "Place: " : ""); 
        $description_startDate = ( strtolower($eventLanguage) == "cz" ) ? "Od: " : (( strtolower($eventLanguage) == "en" ) ? "From: " : "");
        $description_endDate = ( strtolower($eventLanguage) == "cz" ) ? " do: " : (( strtolower($eventLanguage) == "en" ) ? " to: " : ""); ;

        echo "<div class='col-sm-12 col-md-6 col-lg-6'>";
        echo "<div class='event-picture'> <img src='manage/" . $posterFileName . "' alt='Event picture'> </div>";
        echo "<div class='padding-regular'>";
        //echo $eventDataId . "<br>" ; //test - show event data
        echo $eventDataEventName . "<br>" ; 
        echo $description_place . "<strong>" . $eventLocation . "</strong><br>" ;
        echo $description_startDate . "<strong>" . editDate($eventDataEventStartDate) . "</strong>" . $description_endDate . "<strong>" . editDate($eventDataEventEndDate) . "</strong><br>" ; 
        echo "</div>" . "</div>";

      }
      echo "";
  }
  else {
      echo "There are 0 results in DB table";
  }
  
  // Comment out DB close
  // mysqli_close($connector);

  ?>

    </div>
  </div>
</div>