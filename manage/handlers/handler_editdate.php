<?php 

function editDate($inputDate) {
  $year = substr($inputDate, 0, 4 );
  $month = substr($inputDate, 5, 2 );
  $day = substr($inputDate, 8, 4 );

  if ($month == "01") {
    $month = "ledna";
  } elseif ($month == "02") {
    $month = "února";
  } elseif ($month == "03") {
    $month = "března";
  } elseif ($month == "04") {
    $month = "dubna";
  } elseif ($month == "05") {
    $month = "května";
  } elseif ($month == "06") {
    $month = "června";
  } elseif ($month == "07") {
    $month = "července";
  } elseif ($month == "08") {
    $month = "srpna";
  } elseif ($month == "09") {
    $month = "září";
  } elseif ($month == "10") {
    $month = "října";
  } elseif ($month == "11") {
    $month = "listopadu";
  } elseif ($month == "12") {
    $month = "prosince";
  }

  if (substr($day, 0, 1 ) == "0" ) {
    $day = substr($day, 1, 1 );
  }

  $newDate = $day . ". " . $month . " " . $year;
  return "$newDate";
}

?>