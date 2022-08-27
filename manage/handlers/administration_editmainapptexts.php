<?php 

session_start();
require '../../config/config.php';

$username = $_SESSION['username'];
$usernamelevel = $_SESSION['user_level'];

if($usernamelevel == "9") {

  // change character set to utf8
  if (!mysqli_set_charset($connector, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($connector));
    exit();
  } else {
    //printf("Current character set: %s\n", mysqli_character_set_name($connector));//used only for testing
  }

  $messageName = (isset($_POST["messagename"])) ? mysqli_real_escape_string($connector, $_POST["messagename"]) : null;

  $appUnderDevelopment = (isset($_POST["appUnderDevelopment"])) ? mysqli_real_escape_string($connector, $_POST["appUnderDevelopment"]) : null;
  $organizerName = (isset($_POST["organizerName"])) ? mysqli_real_escape_string($connector, $_POST["organizerName"]) : null;
  $adminEmail = (isset($_POST["adminEmail"])) ? mysqli_real_escape_string($connector, $_POST["adminEmail"]) : null;
  $nationalBankAccount = (isset($_POST["nationalBankAccount"])) ? mysqli_real_escape_string($connector, $_POST["nationalBankAccount"]) : null;

  $accountIBAN = (isset($_POST["accountIBAN"])) ? mysqli_real_escape_string($connector, $_POST["accountIBAN"]) : null;
  $accountBIC = (isset($_POST["accountBIC"])) ? mysqli_real_escape_string($connector, $_POST["accountBIC"]) : null;
  $accountHolderName = (isset($_POST["accountHolderName"])) ? mysqli_real_escape_string($connector, $_POST["accountHolderName"]) : null;
  $accountHolderAddress = (isset($_POST["accountHolderAddress"])) ? mysqli_real_escape_string($connector, $_POST["accountHolderAddress"]) : null;
  $bankAddress = (isset($_POST["bankAddress"])) ? mysqli_real_escape_string($connector, $_POST["bankAddress"]) : null;

  $content = "";
  if ($connector -> connect_errno) {
    $content = $content . " Failed to connect to MySQL: " . $mysqli -> connect_error . " ;";
    //exit();
  } else {
    $content = $content . " Connected to database. ";
  }

  if ($messageName == "administration_editmainapptexts") {
    $sql_update = "UPDATE `settings` SET `appUnderDevelopment`='$appUnderDevelopment', `organizerName`='$organizerName', `adminEmail`='$adminEmail', `nationalBankAccount`='$nationalBankAccount', `accountIBAN`='$accountIBAN' , `accountBIC`='$accountBIC', `accountHolderName`='$accountHolderName' , `accountHolderAddress`='$accountHolderAddress', `bankAddress`='$bankAddress' WHERE id='1'";
  }

  // Perform a query, check for error
  if (!$connector -> query($sql_update)) {
    $content = $content . ( "Error description: " . $connector -> error) .";";
  } else {
    $content = $content . " Information updated. ";
  }

  if (mysqli_query($connector, $sql_update)) {
    echo json_encode(array("statusCode"=>200, "content"=> $content, "debug" => "..." ));
  } 
  else {
    echo json_encode(array("statusCode"=>418, "content"=> $content, "debug" => "..." ));
  }

  mysqli_close($connector);

}

?>