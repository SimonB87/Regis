<?php 

$ticketsAvailable = true;

$passTypeAvailable = null;
$otherTicketOptionsAvailable = null;


if ( $dancerKind <> "0 - None" ) { 

  $passTypeAvailable = checkMain($passType, $dancerKind, 
  $earlybirdsSingleSold_leader, $earlybirdsSingleSold_follower, $earlybirdsCoupleSold, 
  $regularSingleSold_leader, $regularSingleSold_follower, $regularCoupleSold, 
  $partySingleSold_leader, $partySingleSold_follower, $partyCoupleSold );

} elseif ($dancerKind == "0 - None" ) {
  $passTypeAvailable = null;
} else {
  $passTypeAvailable = false;
}

if ( $otherDancerKind <> "0 - None" ) { 

  $otherTicketOptionsAvailable = checkMain($otherTicketOptions, $otherDancerKind, 
  $spec1SingleSold_leader, $spec1SingleSold_follower, $spec1CoupleSold, 
  $spec2SingleSold_leader, $spec2SingleSold_follower, $spec2CoupleSold, 
  null, null, null );

} elseif ( $otherDancerKind == "0 - None" ) {
  $otherTicketOptionsAvailable = null;
} else {
  $otherTicketOptionsAvailable = false;
}

if ( ($passTypeAvailable == true) && ($otherTicketOptionsAvailable == true) ) {
  $ticketsAvailable = true;
} elseif ( ($passTypeAvailable == true) && ($otherTicketOptionsAvailable == null) ) {
  $ticketsAvailable = true;
} elseif ( ($passTypeAvailable == null) && ($otherTicketOptionsAvailable == true) ) {
  $ticketsAvailable = true;
} else {
  $ticketsAvailable = false;
}

//test
//echo "- passTypeAvailable " . $passTypeAvailable . " <br>"; //test
if ($passTypeAvailable === null) {
  //echo "passTypeAvailable in NULL <br>"; //test
}
if ($otherTicketOptionsAvailable === null) {
  //echo "otherTicketOptionsAvailable in NULL <br>"; //test
}
if ($ticketsAvailable === null) {
  //echo "ticketsAvailable in NULL <br>"; //test
}
//test

function checkMain($ticketType, $ticketTypeKind, 
$singleType1lead, $singleType1follow, $singleType1couple, 
$singleType2lead, $singleType2follow, $singleType2couple, 
$singleType3lead, $singleType3follow, $singleType3couple ) {

  $ticketType = $ticketType[0];
  $ticketTypeKind = $ticketTypeKind[0];

  if ( ($ticketType == "1") && ($ticketTypeKind == "1") ) {
    $resultSell = ($singleType1lead > 0) ? true : false;
    //echo "test singleType1lead ". $singleType1lead . "<br>"; //test
    //echo "resultSell" . $resultSell  . "<br>"; //test
    return $resultSell;
  }

  if ( ($ticketType == "1") && ($ticketTypeKind == "2") ) {
    $resultSell = ($singleType1follow > 0) ? true : false;
    //echo "test singleType1follow ". $singleType1follow . "<br>"; //test
    //echo "resultSell" . $resultSell  . "<br>"; //test
    return $resultSell;
  }

  if ( ($ticketType == "2") && ($ticketTypeKind == "3") ) {
    $resultSell = ($singleType1couple > 0) ? true : false;
    //echo "test singleType1couple ". $singleType1couple . "<br>"; //test
    //echo "resultSell" . $resultSell  . "<br>"; //test
    return $resultSell;
  }

  if ( ($ticketType == "3") && ($ticketTypeKind == "1") ) {
    $resultSell = ($singleType2lead > 0) ? true : false;
    //echo "test singleType2lead". $singleType2lead . "<br>"; //test
    //echo "resultSell" . $resultSell  . "<br>"; //test
    return $resultSell;
  }

  if ( ($ticketType == "3") && ($ticketTypeKind == "2") ) {
    $resultSell = ($singleType2follow > 0) ? true : false;
    //echo "test singleType2follow ". $singleType2follow . "<br>"; //test
    //echo "resultSell" . $resultSell  . "<br>"; //test
    return $resultSell;
  }

  if ( ($ticketType == "4") && ($ticketTypeKind == "3") ) {
    $resultSell = ($singleType2couple > 0) ? true : false;
    //echo "test singleType2couple ". $singleType2couple . "<br>";
    //echo "resultSell" . $resultSell  . "<br>";
    return $resultSell;
  }

  if ($singleType3lead != null) {
    if ( ($ticketType == "5") && ($ticketTypeKind == "1") ) {
      $resultSell = ($singleType3lead > 0) ? true : false;
      //echo "test singleType3lead ". $singleType3lead . "<br>"; //test
      //echo "resultSell" . $resultSell  . "<br>"; //test
      return $resultSell;
    }
  
    if ( ($ticketType == "5") && ($ticketTypeKind == "2") ) {
      $resultSell = ($singleType3follow > 0) ? true : false;
      //echo "test singleType3follow ". $singleType3follow . "<br>"; //test
      //echo "resultSell" . $resultSell  . "<br>"; //test
      return $resultSell;
    }
  
    if ( ($ticketType == "6") && ($ticketTypeKind == "3") ) {
      $resultSell = ($singleType3couple > 0) ? true : false;
      //echo "test singleType3couple ". $singleType3couple . "<br>"; //test
      //echo "resultSell" . $resultSell  . "<br>"; //test
      return $resultSell;
    }
  }

}

?>