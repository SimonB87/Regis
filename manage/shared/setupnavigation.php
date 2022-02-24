
<div class="row padding-regular rounded-3 bg-light border">

  <div class="col-12 text-center">
    <span> Event set-up links : </span>
  </div>

  <div class="col-12 text-center">
    <a href=<?php if($isEventEdited) {echo "eventsetupmain.php"; } else {echo "createneweventsetupmain.php"; } ?> class="weblink padding-small "> Event main set up </a>
    <a href=<?php if($isEventEdited) {echo "eventdescription.php"; } else {echo "createneweventeventdescription.php"; } ?> class="weblink padding-small"> Event description </a>
    <a href=<?php if($isEventEdited) {echo "eventform.php"; } else {echo "createneweventeventform.php"; } ?> class="weblink padding-small"> Event register form </a>
  </div>

</div>