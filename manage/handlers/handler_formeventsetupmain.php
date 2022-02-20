<?php
$hostName = $_SERVER['SERVER_NAME'];

if ( ($hostName == "localhost") || ($hostName == "127.0.0.1")) {
  //include("handler_formeventsetupmain_savetest.php");
  include("handler_formeventsetupmain_saveproduction.php");
} else {
  include("handler_formeventsetupmain_saveproduction.php");
}

?>