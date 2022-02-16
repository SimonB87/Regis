/*
function toggleVisibility(icon, section) {

  const elements = document.querySelectorAll(`.${icon}, .${section}`);

  elements.forEach(function(item) {
    item.classList.toggle("hiddenSection");
  });
}*/

/** TODO - show / hide refactor -  **/
$(document).ready(function(){

  var segments = $(".show-segment--icon");
  var segmemtsAmount = Math.ceil(segments.length * 0.5);

  $(".section-icon-1:nth-child(1)").hide();

  for (var i = 0; i < segmemtsAmount; i++) {
    var c = i + 1;

    if (c > 1) {
      $(".section-icon-" + c +":nth-child(2)").hide();
      $(".section-form-" + c ).hide();
    }

  }

  // hode/show
  $(".section-icon-1").click(function(){
    $(".section-form-1").slideToggle();
    $(".section-icon-1").toggle();
  });

  $(".section-icon-2").click(function(){
    $(".section-form-2").slideToggle();
    $(".section-icon-2").toggle();
  });

  $(".section-icon-3").click(function(){
    $(".section-form-3").slideToggle();
    $(".section-icon-3").toggle();
  });

  $(".section-icon-4").click(function(){
    $(".section-form-4").slideToggle();
    $(".section-icon-4").toggle();
  });

  $(".section-icon-5").click(function(){
    $(".section-form-5").slideToggle();
    $(".section-icon-5").toggle();
  });

  $(".section-icon-6").click(function(){
    $(".section-form-6").slideToggle();
    $(".section-icon-6").toggle();
  });

});