<div class="row"> 

<?php 
if ($isVisible_passType_earlyBirdsTicketSingle) {
  echo "<div class='padding-regular-topBottom text-center col-sm-12 col-md-6 col-lg-4'>
  <div class='card full-width shadow-light'>
    <div class='card_top_shade'></div>
    <div class='card-body'>
      <h5 class='card-title'> Early birds leader/follower ticket </h5>
    </div>
    <div class='card-foooter'> " . $eventDataEarlyBirdsTicketPriceSingle . ",- Kč
    </div>
  </div>
</div>";
}

if ($isVisible_passType_earlyBirdsTicketCouple) {
  echo "<div class='padding-regular-topBottom  text-center col-sm-12 col-md-6 col-lg-4'>
  <div class='card full-width shadow-light'>
    <div class='card_top_shade'></div>
    <div class='card-body'>
      <h5 class='card-title'> Early birds couple ticket </h5>
    </div>
    <div class='card-foooter'> " . $eventDataEarlyBirdsTicketPriceCouple . ",- Kč
    </div>
  </div>
</div>";
}

if ($isVisible_passType_regularTicketSingle) {
  echo "<div class='padding-regular-topBottom text-center col-sm-12 col-md-6 col-lg-4'>
  <div class='card full-width shadow-light'>
    <div class='card_top_shade'></div>
    <div class='card-body'>
      <h5 class='card-title'> Regular leader/follower ticket </h5>
    </div>
    <div class='card-foooter'> " . $eventDataRegularTicketPriceSingle . ",- Kč
    </div>
  </div>
</div>";
}

if ($isVisible_passType_regularTicketCouple) {
  echo "<div class='padding-regular-topBottom text-center col-sm-12 col-md-6 col-lg-4'>
  <div class='card full-width shadow-light'>
    <div class='card_top_shade'></div>
    <div class='card-body'>
      <h5 class='card-title'> Regular couple ticket </h5>
    </div>
    <div class='card-foooter'> " . $eventDataRegularTicketPriceCouple . ",- Kč
    </div>
  </div>
</div>";
}

?>