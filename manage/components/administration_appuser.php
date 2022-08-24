<div id="pill-appuser-section" class="row padding-regular-topBottom tab-section">

  <div class="col-12"> 
    <h3 class="display-7 fw-bold"> App users </h3> 
    <div class="text-gray padding-regular-bottom"> Edit user rights for each of 4 app users </div> 
  </div>

  <div class="col-12"> 
    <p> </p>
  </div>

  <div class="col-12">

    <table id="app-users" class="table">
      <thead class="bg-info">
        <tr class="text-white">
          <th class=""> ID </th>
          <th class=""> Email </th>
          <th class=""> First name </th>
          <th class=""> Last name </th>
          <th class=""> Rights </th>
          <th class=""> Action </th>
        </tr>
      <thead>
      <tbody>

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

      $sql = "SELECT * FROM users ORDER BY id DESC";
      
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

        echo "<tr id=\"user_" . $row["id"] . "\">" . 
                "<td > <span id='user_" . $row["id"] . "_id' >" . $row["id"] . " </span> </td>" .
                "<td > <span id='user_" . $row["id"] . "_emailaddress' title='user_email'>" . $row["email"] . " </span> </td>" .
                "<td > <span id='user_" . $row["id"] . "_first_name' >" . $row["first_name"] . " </span> </td>" .
                "<td > <span id='user_" . $row["id"] . "_last_name' >" . $row["last_name"] . " </span> </td>" .
                "<td > <input type='number' class='user_right' min='0' max='19' id=\"user_" . $row["id"] . "_user_right\" class='form-control' value='" . $row["user_level"] . "'>" . " </span> </td>" .
                "<td class='flex-column'><button class='btn btn-primary' onclick='adminUpdateUserRights(\"" .  $row["id"] . "\")'> Update rights </button> <span id='user_" . $row["id"] . "_status' class='hidden'> </span> </td>" .
              "</tr>";

      }
      echo "";
    }
    else {
        echo "There are 0 results in DB table";
    }

    ?>

      </tbody>
    </table>

  </div>

</div>