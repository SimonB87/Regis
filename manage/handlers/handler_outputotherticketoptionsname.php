<?php

$sp1 = array("1 - special type1 single", "2 - special type1 couple");
$otherOption1 = (in_array($otherTicketOptions, $sp1) == 1) ? true : false;

$sp2 = array("3 - special type2 single","4 - special type2 couple");
$otherOption2 = (in_array($otherTicketOptions, $sp2) == 1) ? true : false;

$spSingle = array("1 - special type1 single", "3 - special type2 single");
$otherOptionSingle = (in_array($otherTicketOptions, $spSingle) == 1 ) ? true : false;

$spCouple = array("2 - special type1 couple","4 - special type2 couple");
$otherOptionCouple = (in_array($otherTicketOptions, $spCouple) == 1) ? true : false;

$otherTicketOptionsText1 = ($otherOption1 ) ? $eventDataSpecialType1RegistrationName : (($otherOption2) ? $eventDataSpecialType2RegistrationName : "" );
$otherTicketOptionsText2 = ($otherOptionSingle ) ? " - Single " : (($otherOptionCouple ) ? " - Couple " : "" );

?>