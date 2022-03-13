<?php 
$preview_date = (isset($_POST["preview_date"])) ? mysqli_real_escape_string($connector, $_POST["preview_date"]) : null;

$preview_earlybirdsSingleSold = (isset($_POST["preview_earlybirdsSingleSold"])) ? mysqli_real_escape_string($connector, $_POST["preview_earlybirdsSingleSold"]) : null;

$preview_earlybirdsCoupleSold = (isset($_POST["preview_earlybirdsCoupleSold"])) ? mysqli_real_escape_string($connector, $_POST["preview_earlybirdsCoupleSold"]) : null;

$preview_regularSingleSold = (isset($_POST["preview_regularSingleSold"])) ? mysqli_real_escape_string($connector, $_POST["preview_regularSingleSold"]) : null;

$preview_regularCoupleSold = (isset($_POST["preview_regularCoupleSold"])) ? mysqli_real_escape_string($connector, $_POST["preview_regularCoupleSold"]) : null;

$preview_partySingleSold = (isset($_POST["preview_partySingleSold"])) ? mysqli_real_escape_string($connector, $_POST["preview_partySingleSold"]) : null;

$preview_partyCoupleSold = (isset($_POST["preview_partyCoupleSold"])) ? mysqli_real_escape_string($connector, $_POST["preview_partyCoupleSold"]) : null;

$preview_spec1SingleSold = (isset($_POST["preview_spec1SingleSold"])) ? mysqli_real_escape_string($connector, $_POST["preview_spec1SingleSold"]) : null;

$preview_spec1CoupleSold = (isset($_POST["preview_spec1CoupleSold"])) ? mysqli_real_escape_string($connector, $_POST["preview_spec1CoupleSold"]) : null;

$preview_spec2SingleSold = (isset($_POST["preview_spec2SingleSold"])) ? mysqli_real_escape_string($connector, $_POST["preview_spec2SingleSold"]) : null;

$preview_spec2CoupleSold = (isset($_POST["preview_spec2CoupleSold"])) ? mysqli_real_escape_string($connector, $_POST["preview_spec2CoupleSold"]) : null;


?>