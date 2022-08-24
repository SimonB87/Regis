<?php 

$settings_organizerName = "";
$settings_adminEmail = "";
$settings_nationalBankAccount  = "";
$settings_accountIBAN = "";
$settings_accountBIC = "";
$settings_accountHolderName  = "";
$settings_accountHolderAddress  = "";
$settings_bankAddress = "";
$settings_appUnderDevelopment = "";


      if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
      }

      /* //debug 
      if (!mysqli_query($connector, `DECLARE @a=1;`)) {
        printf("Error message: %s\n", mysqli_error($connector));
      }*/


      if (!mysqli_set_charset($connector, "utf8")) {
        printf("Error loading character set utf8: %s\n", mysqli_error($con));
        exit();
      } else {
        //printf("Current character set: %s\n", mysqli_character_set_name($con));//used only for testing
      }

      $sql = "SELECT * FROM settings LIMIT 1";
      
      $results = $connector-> query($sql);
      //Error case
      if (!$sql ) {
        echo "Failed! <br> Error sql: " . mysql_error();
      }
      
      
      if (mysqli_query($connector, $sql)) {
        //echo "sql - statusCode - 200<br>";
      } 
      else {
        echo "sql - statusCode - 400<br>";
      }


    //function to fatch the data
    if ($results-> num_rows > 0 ) {
      while ($row = $results-> fetch_assoc()) {

        $settings_organizerName = $row["organizerName"];
        $settings_adminEmail = $row["adminEmail"];
        $settings_nationalBankAccount = $row["nationalBankAccount"];
        $settings_accountIBAN = $row["accountIBAN"];
        $settings_accountBIC = $row["accountBIC"];
        $settings_accountHolderName  = $row["accountHolderName"];
        $settings_accountHolderAddress = $row["accountHolderAddress"];
        $settings_bankAddress = $row["bankAddress"];
        $settings_appUnderDevelopment = $row["appUnderDevelopment"];


      }
      echo "";
    }
    else {
        echo "There are 0 results in DB table";
    }

    ?>