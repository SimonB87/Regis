<div class="row padding-regular rounded-3 bg-light border">

  <div class="col-12 text-center">
    <span> Event set-up links : </span>
  </div>

  <?php 
  $urlpath = $_SERVER['REQUEST_URI'];
  $isModeEventCreate = strpos($urlpath, "createnewevent");
?>

  <div class="col-12 text-center">
    <a id="nav_eventsetupmain"
      href=<?php if($isModeEventCreate) {echo "createneweventsetupmain.php"; } else {echo "eventsetupmain.php"; } ?>
      class="weblink padding-small "> Event main set up </a>
    <a id="nav_eventdescription"
      href=<?php if($isModeEventCreate) {echo "createneweventeventdescription.php"; } else {echo "eventdescription.php"; } ?>
      class="weblink padding-small"> Event description </a>
<!--
    <a id="nav_merchandise" href="merchandisesetup.php" class="weblink padding-small"> Merchendase set-up </a>
-->
    <a id="nav_eventform"
      href=<?php if($isModeEventCreate) {echo "createneweventeventformpreview.php"; } else {echo "eventformpreview.php"; } ?>
      class="weblink padding-small"> Event register form </a>
  </div>

</div>