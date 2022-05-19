<?php

  $eventDataId = null;
  $eventDataEventStatus = null;
  $eventDataEventName = null;
  $eventDataEventStartDate = null;
  $eventDataEventEndDate = null;
  $eventDataEnableCoupleTicket = null;

  $eventDataAgreementsEnabled = null;
  $eventDataAgreement1Enabled = null;
  $eventDataAgreement1Text = null;
  $eventDataAgreement2Enabled = null;
  $eventDataAgreement2Text = null;
  $eventDataAgreement3Enabled = null;
  $eventDataAgreement3Text = null;

  $eventDataEarlyBirdsRegistrationEnabled = null;
  $eventDataEarlyBirdsRegistrationName = null;
  $eventDataEarlyBirdsRegistrationsStartDate = null;
  $eventDataEarlyBirdsRegistrationsEndDate = null;
  $eventDataTicketsAmountEarlyBirdsRegistrationsSingle = null;
  $eventDataEarlyBirdsTicketPriceSingle = null;
  $eventDataEarlyBirdsTicketPriceCouple = null;
  $eventDataEarlyBirdsTicketAmountCouple = null;

  $eventDataRegularRegistrationEnabled = null; 
  $eventDataRegularRegistrationName = null;
  $eventDataRegularRegistrationsStartDate = null; 
  $eventDataRegularRegistrationsEndDate = null; 
  $eventDataRegularTicketPriceSingle = null;
  $eventDataRegularTicketAmountSingle = null;
  $eventDataRegularTicketPriceCouple = null;
  $eventDataRegularTicketAmountCouple = null;

  $partyRegistrationEnabled = null;
  $partyRegistrationName = null;
  $partyRegistrationsStartDate = null;
  $partyRegistrationsEndDate = null;
  $partyTicketPriceSingle = null;
  $partyTicketAmountSingle = null;
  $partyTicketPriceCouple = null;
  $partyTicketAmountCouple = null;

  $eventDataSpecialType1RegistrationEnabled = null;
  $eventDataSpecialType1RegistrationName = null;
  $eventDataSpecialType1RegistrationsStartDate = null;
  $eventDataSpecialType1RegistrationsEndDate = null;
  $eventDataSpecialType1TicketPriceSingle = null; 
  $eventDataSpecialType1TicketAmountSingle = null;
  $eventDataSpecialType1TicketPriceCouple = null; 
  $eventDataSpecialType1TicketAmountCouple = null;

  $eventDataSpecialType2RegistrationEnabled = null;
  $eventDataSpecialType2RegistrationName = null;
  $eventDataSpecialType2RegistrationsStartDate = null;
  $eventDataSpecialType2RegistrationsEndDate = null;
  $eventDataSpecialType2TicketPriceSingle = null; 
  $eventDataSpecialType2TicketAmountSingle = null;
  $eventDataSpecialType2TicketPriceCouple = null; 
  $eventDataSpecialType2TicketAmountCouple = null;

  $eventDataPosterName = null;


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

    $sql = "SELECT * FROM events WHERE id=(SELECT max(id) FROM events)";

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
        $eventDataEnableCoupleTicket = $row["enableCoupleTicket"] ;

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

        $eventDataPosterName = $row["posterFileName"] ;

      }
      echo "";
  }
  else {
      echo "There are 0 results in DB table";
  }
    
    // Comment out DB close
    // mysqli_close($connector);


?>