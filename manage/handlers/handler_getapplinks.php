<?php 


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

      $sql = "SELECT * FROM bottomcontent";
      
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

      class itemObject
      {
          public $id;
          public $isAllowed;
          public $displayName;
          public $weblink;
          public $textOdkazu;
          public $iconFontAwesome;
      }
      
      $itemsFooterLinks = array();


    //function to fatch the data
    if ($results-> num_rows > 0 ) {
      while ($row = $results-> fetch_assoc()) {

        $newItem = new itemObject();

        $newItem->id = $row["id"];
        $newItem->isAllowed = $row["isAllowed"];
        $newItem->displayName = $row["displayName"];
        $newItem->weblink = $row["weblink"];
        $newItem->textOdkazu = $row["itemContent"];
        $newItem->iconFontAwesome = $row["iconFontAwesome"];

        array_push($itemsFooterLinks,$newItem);

      }
      echo "";
    }
    else {
        echo "There are 0 results in DB table";
    }


    ?>