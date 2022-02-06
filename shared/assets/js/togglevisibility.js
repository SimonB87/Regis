"use strict";
function toggleVisibility(hideEl, showEl) {
    var willBeHidden = document.querySelector(hideEl);
    var willBeShown = document.querySelector(showEl);
    willBeHidden.classList.remove("visibility-visible");
    willBeHidden.classList.add("visibility-hidden");
    willBeShown.classList.remove("visibility-hidden");
    willBeShown.classList.add("visibility-visible");
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