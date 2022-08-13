<?php
//find URL of the current page
$urlink = $_SERVER["REQUEST_URI"];
$createPage = "createneweventsetupmain.php";
$createPagePosition = strpos($urlink, $createPage);

$registrationsPage = "registrations.php";
$registrationsPagePosition = strpos($urlink, $registrationsPage);

$isEventEdited = ($createPagePosition == false) 
                  ? true 
                  : ($registrationsPagePosition == true) 
                    ? true :
                      false;
?>