/*
function toggleVisibility(icon, section) {

  const elements = document.querySelectorAll(`.${icon}, .${section}`);

  elements.forEach(function(item) {
    item.classList.toggle("hiddenSection");
  });
}*/

$(document).ready(function(){

  $(".section-icon-1:nth-child(2), .section-icon-2:nth-child(2), .section-icon-3:nth-child(2), .section-icon-4:nth-child(2), .section-icon-5:nth-child(2)").hide();
  $(".section-form-2, .section-form-3, .section-form-4, .section-form-5").hide();
//"slow"
  $(".section-icon-1").click(function(){
    $(".section-form-1").slideToggle();
  });
//"slow"
  $(".section-icon-2").click(function(){
    $(".section-form-2").slideToggle();
  });
//"slow"
  $(".section-icon-3").click(function(){
    $(".section-form-3").slideToggle();
  });
//"slow"
  $(".section-icon-4").click(function(){
    $(".section-form-4").slideToggle();
  });
//"slow"
  $(".section-icon-5").click(function(){
    $(".section-form-5").slideToggle();
  });

});