<?php 

$preview_date = date("Y-m-d");
// ! oprava logiky - $isVisible_dancerKind_couple - tento boolean jsem nahradil za "MaintainSinglesParity"
$isVisible_dancerKind_couple = ( (isset($eventDataMaintainSinglesParity) ) && ( strtolower($eventDataMaintainSinglesParity) === "yes" ) );

$isVisible_passType_earlyBirdsTicketSingle = ( (strtolower($eventDataEarlyBirdsRegistrationEnabled) === "yes" ) && ($earlybirdsSingleSold <= $eventDataTicketsAmountEarlyBirdsRegistrationsSingle) && ( $preview_date >= $eventDataEarlyBirdsRegistrationsStartDate ) && ( $preview_date <= $eventDataEarlyBirdsRegistrationsEndDate ) );

$isVisible_passType_earlyBirdsTicketCouple = ((strtolower($eventDataEarlyBirdsRegistrationEnabled) === "yes" ) && (strtolower($eventDataMaintainSinglesParity) === "yes" ) && ($earlybirdsCoupleSold <= $eventDataEarlyBirdsTicketAmountCouple) && ( $preview_date >= $eventDataEarlyBirdsRegistrationsStartDate ) && ( $preview_date <= $eventDataEarlyBirdsRegistrationsEndDate ) );

$isVisible_passType_regularTicketSingle = ((strtolower($eventDataRegularRegistrationEnabled) === "yes" ) && ($regularSingleSold <= $eventDataRegularTicketAmountSingle) && ( $preview_date >= $eventDataRegularRegistrationsStartDate ) && ( $preview_date <= $eventDataRegularRegistrationsEndDate ) );

$isVisible_passType_regularTicketCouple = ( (strtolower($eventDataRegularRegistrationEnabled) === "yes" ) && (strtolower($eventDataMaintainSinglesParity) === "yes" ) && ($regularCoupleSold <= $eventDataRegularTicketAmountCouple) && ( $preview_date >= $eventDataRegularRegistrationsStartDate ) && ( $preview_date <= $eventDataRegularRegistrationsEndDate ) );

$isVisible_passType_partyPassSingle = ( (strtolower($partyRegistrationEnabled) === "yes" )&& ($partySingleSold <= $partyTicketAmountSingle) && ( $preview_date >= $partyRegistrationsStartDate ) && ( $preview_date <= $partyRegistrationsEndDate ) );

$isVisible_passType_partyPassCouple = ( (strtolower($partyRegistrationEnabled) === "yes" ) && (strtolower($eventDataMaintainSinglesParity) === "yes" ) && ($partyCoupleSold <= $partyTicketAmountCouple) && ( $preview_date >= $partyRegistrationsStartDate ) && ( $preview_date <= $partyRegistrationsEndDate ) );

$isVisible_passType_specialType1Single = ( (strtolower($eventDataSpecialType1RegistrationEnabled) === "yes" ) && ($spec1SingleSold <= $eventDataSpecialType1TicketAmountSingle) && ( $preview_date >= $eventDataSpecialType1RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType1RegistrationsEndDate ) );

$isVisible_passType_specialType1Couple = ( (strtolower($eventDataSpecialType1RegistrationEnabled) === "yes" ) && (strtolower($eventDataMaintainSinglesParity) === "yes" ) && ($spec1CoupleSold <= $eventDataSpecialType1TicketAmountCouple) && ( $preview_date >= $eventDataSpecialType1RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType1RegistrationsEndDate ) );

$isVisible_passType_specialType2Single = ( (strtolower($eventDataSpecialType2RegistrationEnabled) === "yes" ) && ($spec2SingleSold <= $eventDataSpecialType2TicketAmountSingle) && ( $preview_date >= $eventDataSpecialType2RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType2RegistrationsEndDate ) );

$isVisible_passType_specialType2Couple = ( (strtolower($eventDataSpecialType2RegistrationEnabled) === "yes" ) && (strtolower($eventDataMaintainSinglesParity) === "yes" ) && ($spec2CoupleSold <= $eventDataSpecialType2TicketAmountCouple) && ( $preview_date >= $eventDataSpecialType2RegistrationsStartDate ) && ( $preview_date <= $eventDataSpecialType2RegistrationsEndDate ) );
?>