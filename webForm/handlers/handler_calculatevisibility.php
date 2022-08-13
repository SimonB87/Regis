<script> let eventStateSetUp = { "singlesParity" : null }; </script>

<?php 

$preview_date = date("Y-m-d");
// ! oprava logiky - $isVisible_dancerKind_couple - tento boolean jsem nahradil za "MaintainSinglesParity"
$isVisible_dancerKind_couple = true; // ( (isset($eventDataMaintainSinglesParity) ) && ( $maintainParity ) );

$maintainParity = (strtolower($eventDataMaintainSinglesParity) === "yes" ) ? true : false;

if ( isset($eventDataMaintainSinglesParity) && ( $maintainParity ) ) {
  echo "<script> eventStateSetUp.singlesParity = true; </script>";
}

$isVisible_passType_earlyBirdsTicketSingle = ( (strtolower($eventDataEarlyBirdsRegistrationEnabled) === "yes" ) && ($earlybirdsSingleSold <= $eventDataTicketsAmountEarlyBirdsRegistrationsSingle) && ( $preview_date >= $eventDataEarlyBirdsRegistrationsStartDate ) && ( $preview_date <= $eventDataEarlyBirdsRegistrationsEndDate ) );

if ( isset($eventDataMaintainSinglesParity) && ( $maintainParity ) && (strtolower($eventDataEarlyBirdsRegistrationEnabled) === "yes" ) ) {
  $ticketLimit = $eventDataTicketsAmountEarlyBirdsRegistrationsSingle * 0.5;
  echo "<script> eventStateSetUp.earlyBirdsSingles = {}; </script>";
  if ( $ticketLimit <=  $earlybirdsSingleSold_leader ) {
    echo "<script> eventStateSetUp.earlyBirdsSingles.leader = false; </script>";
  } elseif ($ticketLimit > $earlybirdsSingleSold_leader) {
    echo "<script> eventStateSetUp.earlyBirdsSingles.leader = true; </script>";
  }

  if ( $ticketLimit <= $earlybirdsSingleSold_follower ) {
    echo "<script> eventStateSetUp.earlyBirdsSingles.follower = false; </script>";
  } elseif ($ticketLimit > $earlybirdsSingleSold_follower) {
    echo "<script> eventStateSetUp.earlyBirdsSingles.follower = true; </script>";
  }
}

$isVisible_passType_earlyBirdsTicketCouple = ((strtolower($eventDataEarlyBirdsRegistrationEnabled) === "yes" ) && ($earlybirdsCoupleSold <= $eventDataEarlyBirdsTicketAmountCouple) && ( $preview_date >= $eventDataEarlyBirdsRegistrationsStartDate ) && ( $preview_date <= $eventDataEarlyBirdsRegistrationsEndDate ) );

$isVisible_passType_regularTicketSingle = ((strtolower($eventDataRegularRegistrationEnabled) === "yes" ) && ($regularSingleSold <= $eventDataRegularTicketAmountSingle) && ( $preview_date >= $eventDataRegularRegistrationsStartDate ) && ( $preview_date <= $eventDataRegularRegistrationsEndDate ) );

if ( isset($eventDataMaintainSinglesParity) && ( $maintainParity ) && (strtolower($eventDataRegularRegistrationEnabled) === "yes" ) ) {
  $ticketLimit = $eventDataRegularTicketAmountSingle* 0.5;
  echo "<script> eventStateSetUp.regularSingles = {}; </script>";
  if ( $ticketLimit <=  $regularSingleSold_leader) {
    echo "<script> eventStateSetUp.regularSingles.leader = false; </script>";
  } elseif ($ticketLimit > $regularSingleSold_leader) {
    echo "<script> eventStateSetUp.regularSingles.leader = true; </script>";
  }

  if ( $ticketLimit <= $regularSingleSold_follower ) {
    echo "<script> eventStateSetUp.regularSingles.follower = false; </script>";
  } elseif ($ticketLimit > $regularSingleSold_follower) {
    echo "<script> eventStateSetUp.regularSingles.follower = true; </script>";
  }

}

$isVisible_passType_regularTicketCouple = ( (strtolower($eventDataRegularRegistrationEnabled) === "yes" ) && ($regularCoupleSold <= $eventDataRegularTicketAmountCouple) && ( $preview_date >= $eventDataRegularRegistrationsStartDate ) && ( $preview_date <= $eventDataRegularRegistrationsEndDate ) );

$isVisible_passType_partyPassSingle = ( (strtolower($partyRegistrationEnabled) === "yes" )&& ($partySingleSold <= $partyTicketAmountSingle) && ( $preview_date >= $partyRegistrationsStartDate ) && ( $preview_date <= $partyRegistrationsEndDate ) );

if ( isset($eventDataMaintainSinglesParity) && ( $maintainParity ) && (strtolower($partyRegistrationEnabled) === "yes" ) ) {
  $ticketLimit = $partyTicketAmountSingle* 0.5;
  echo "<script> eventStateSetUp.partySingles = {}; </script>";
  if ( $ticketLimit <=  $partySingleSold_leader) {
    echo "<script> eventStateSetUp.partySingles.leader = false; </script>";
  } elseif ($ticketLimit > $partySingleSold_leader) {
    echo "<script> eventStateSetUp.partySingles.leader = true; </script>";
  }

  if ( $ticketLimit <= $partySingleSold_follower ) {
    echo "<script> eventStateSetUp.partySingles.follower = false; </script>";
  } elseif ($ticketLimit > $partySingleSold_follower) {
    echo "<script> eventStateSetUp.partySingles.follower = true; </script>";
  }

}

$isVisible_passType_partyPassCouple = ( (strtolower($partyRegistrationEnabled) === "yes" ) && ($partyCoupleSold <= $partyTicketAmountCouple) && ( $preview_date >= $partyRegistrationsStartDate ) && ( $preview_date <= $partyRegistrationsEndDate ) );

$isVisible_passType_specialType1Single = ( (strtolower($eventDataSpecialType1RegistrationEnabled) === "yes" ) && ($spec1SingleSold <= $eventDataSpecialType1TicketAmountSingle) && ( $preview_date >= $eventDataSpecialType1RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType1RegistrationsEndDate ) );

if ( isset($eventDataMaintainSinglesParity) && ( $maintainParity ) && (strtolower($eventDataSpecialType1RegistrationEnabled) === "yes" ) ) {
  $ticketLimit = $eventDataSpecialType1TicketAmountSingle * 0.5;
  echo "<script> eventStateSetUp.specialType1Singles = {}; </script>";
  if ( $ticketLimit <= $spec1SingleSold_leader) {
    echo "<script> eventStateSetUp.specialType1Singles.leader = false; </script>";
  } elseif ($ticketLimit > $spec1SingleSold_leader) {
    echo "<script> eventStateSetUp.specialType1Singles.leader = true; </script>";
  }

  if ( $ticketLimit <= $spec1SingleSold_follower ) {
    echo "<script> eventStateSetUp.specialType1Singles.follower = false; </script>";
  } elseif ($ticketLimit > $spec1SingleSold_follower) {
    echo "<script> eventStateSetUp.specialType1Singles.follower = true; </script>";
  }

}


$isVisible_passType_specialType1Couple = ( (strtolower($eventDataSpecialType1RegistrationEnabled) === "yes" ) && ($spec1CoupleSold <= $eventDataSpecialType1TicketAmountCouple) && ( $preview_date >= $eventDataSpecialType1RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType1RegistrationsEndDate ) );

$isVisible_passType_specialType2Single = ( (strtolower($eventDataSpecialType2RegistrationEnabled) === "yes" ) && ($spec2SingleSold <= $eventDataSpecialType2TicketAmountSingle) && ( $preview_date >= $eventDataSpecialType2RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType2RegistrationsEndDate ) );

if ( isset($eventDataMaintainSinglesParity) && ( $maintainParity ) && (strtolower($eventDataSpecialType2RegistrationEnabled) === "yes" ) ) {
  $ticketLimit = $eventDataSpecialType2TicketAmountSingle * 0.5;
  echo "<script> eventStateSetUp.specialType2Singles = {}; </script>";
  if ( $ticketLimit <= $spec2SingleSold_leader) {
    echo "<script> eventStateSetUp.specialType2Singles.leader = false; </script>";
  } elseif ($ticketLimit > $spec2SingleSold_leader) {
    echo "<script> eventStateSetUp.specialType2Singles.leader = true; </script>";
  }

  if ( $ticketLimit <= $spec2SingleSold_follower ) {
    echo "<script> eventStateSetUp.specialType2Singles.follower = false; </script>";
  } elseif ($ticketLimit > $spec2SingleSold_follower ) {
    echo "<script> eventStateSetUp.specialType2Singles.follower = true; </script>";
  }

}


$isVisible_passType_specialType2Couple = ( (strtolower($eventDataSpecialType2RegistrationEnabled) === "yes" ) && ($spec2CoupleSold <= $eventDataSpecialType2TicketAmountCouple) && ( $preview_date >= $eventDataSpecialType2RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType2RegistrationsEndDate ) );

?>


<script> 
  const eventState = Object.freeze(eventStateSetUp); 
  eventStateSetUp = {}; 
</script>