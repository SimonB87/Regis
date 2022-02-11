/*
function toggleVisibility(icon, section) {

  const elements = document.querySelectorAll(`.${icon}, .${section}`);

  elements.forEach(function(item) {
    item.classList.toggle("hiddenSection");
  });
}*/

$(document).ready(function(){

  $(".section-icon-1:nth-child(1), .section-icon-2:nth-child(2), .section-icon-3:nth-child(2), .section-icon-4:nth-child(2), .section-icon-5:nth-child(2)").hide();
  $(".section-form-2, .section-form-3, .section-form-4, .section-form-5").hide();
//"slow"
  $(".section-icon-1").click(function(){
    $(".section-form-1").slideToggle();
    $(".section-icon-1").toggle();
  });
//"slow"
  $(".section-icon-2").click(function(){
    $(".section-form-2").slideToggle();
    $(".section-icon-2").toggle();
  });
//"slow"
  $(".section-icon-3").click(function(){
    $(".section-form-3").slideToggle();
    $(".section-icon-3").toggle();
  });
//"slow"
  $(".section-icon-4").click(function(){
    $(".section-form-4").slideToggle();
    $(".section-icon-4").toggle();
  });
//"slow"
  $(".section-icon-5").click(function(){
    $(".section-form-5").slideToggle();
    $(".section-icon-5").toggle();
  });

});