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

        echo "<tr>" . 
                "<td>" . $row["id"] . "</td>" .
                "<td>" . $row["email"] . "</td>" .
                "<td>" . $row["first_name"] . "</td>" .
                "<td>" . $row["last_name"] . "</td>" .
                "<td> <input type='number' min='0' min='9' id='user-level-" . $row["id"] . "' class='form-control' value='" . $row["user_level"] . "'>" . "</td>" .
                "<td><button class='btn btn-primary' onclick='adminUpdateUserRights(\"" .  $row["id"] . "\")'> Update rights </button> </td>" .
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