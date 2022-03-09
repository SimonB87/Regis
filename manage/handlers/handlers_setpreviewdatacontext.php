<?php 
$preview_date = (isset($_POST["preview_date"])) ? mysqli_real_escape_string($connector, $_POST["preview_date"]) : null;

$preview_earlybirdssold = (isset($_POST["preview_earlybirdssold"])) ? mysqli_real_escape_string($connector, $_POST["preview_earlybirdssold"]) : null;
$preview_regularsold = (isset($_POST["preview_regularsold"])) ? mysqli_real_escape_string($connector, $_POST["preview_regularsold"]) : null;
$preview_partysold = (isset($_POST["preview_partysold"])) ? mysqli_real_escape_string($connector, $_POST["preview_partysold"]) : null;
$preview_spec1sold = (isset($_POST["preview_spec1sold"])) ? mysqli_real_escape_string($connector, $_POST["preview_spec1sold"]) : null;
$preview_spec2sold = (isset($_POST["preview_spec2sold"])) ? mysqli_real_escape_string($connector, $_POST["preview_spec2sold"]) : null;

?>