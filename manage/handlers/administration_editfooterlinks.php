<?

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

  /* DATA
  messagename: administration_editfooterlinks
  itemId: 6
  itemAllowed: on
  itemName: phone
  itemLink: #
  itemIcon: fb-cosi
  */

  $messageName = (isset($_POST["messagename"])) ? mysqli_real_escape_string($connector, $_POST["messagename"]) : null;
  $itemId = (isset($_POST["itemId"])) ? mysqli_real_escape_string($connector, $_POST["itemId"]) : null;
  $itemAllowed = (isset($_POST["itemAllowed"])) ? mysqli_real_escape_string($connector, $_POST["itemAllowed"]) : null;
  $itemName = (isset($_POST["itemName"])) ? mysqli_real_escape_string($connector, $_POST["itemName"]) : null;
  $itemLink = (isset($_POST["itemLink"])) ? mysqli_real_escape_string($connector, $_POST["itemLink"]) : null;
  $itemIcon = (isset($_POST["itemIcon"])) ? mysqli_real_escape_string($connector, $_POST["itemIcon"]) : null;

  $content = "";
  if ($connector -> connect_errno) {
    $content = $content . " Failed to connect to MySQL: " . $mysqli -> connect_error . " ;";
    //exit();
  } else {
    $content = $content . " Connected to database. ";
  }

  if ($messageName == "administration_editfooterlinks") {
    $sql_update = "UPDATE `footerlinks` SET `isAllowed`='$itemAllowed', `displayName`='$itemName', `weblink`='$itemLink', `iconFontAwesome`='$itemIcon' WHERE `id`='$itemId'";
  }

  // Perform a query, check for error
  if (!$connector -> query($sql_update)) {
    $content = $content . ( "Error description: " . $connector -> error) .";";
  } else {
    $content = $content . " Information updated. ";
  }

  if (mysqli_query($connector, $sql_update)) {
    echo json_encode(array("statusCode"=>200, "content"=> $content, "debug" => ".." ));
  } 
  else {
    echo json_encode(array("statusCode"=>418, "content"=> $content, "debug" => ".." ));
  }

  mysqli_close($connector);

}


?>