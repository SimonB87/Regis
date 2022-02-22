"use strict";
function toggleVisibility(hideEl, showEl) {
    var willBeHidden = document.querySelector(hideEl);
    var willBeShown = document.querySelector(showEl);
    willBeHidden.classList.remove("visibility-visible");
    willBeHidden.classList.add("visibility-hidden");
    willBeShown.classList.remove("visibility-hidden");
    willBeShown.classList.add("visibility-visible");
}

function togglePassWord() {
  const passWords = document.querySelectorAll(".input-password");
  passWords.forEach(function(element) { 
    if (element.type == "password") {
      element.type = "text";
    } else {
      element.type = "password";
    }

   })
}

(function () {
  'use strict'
  document.addEventListener("DOMContentLoaded", function(event) { 

    const elementsArray = document.querySelectorAll(".registration_error_close");

    elementsArray.forEach(function(elem) {
        elem.addEventListener("click", function() {
           const _element = this;
           _element.parentElement.classList.add("hidden");
        });
    });
    
  });




})()

document.getElementById("hide-aside").addEventListener("click", rotateAsideIcon);
function rotateAsideIcon() {

  document.getElementById("hide-aside").classList.toggle("rotated");

  const icons = document.querySelectorAll(".toggleble");
  icons.forEach( (item) => {
    item.classList.toggle("hidden");
  })

}
