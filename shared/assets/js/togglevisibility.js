"use strict";
function toggleVisibility(hideEl, showEl) {
    var willBeHidden = document.querySelector(hideEl);
    var willBeShown = document.querySelector(showEl);
    willBeHidden.classList.remove("visibility-visible");
    willBeHidden.classList.add("visibility-hidden");
    willBeShown.classList.remove("visibility-hidden");
    willBeShown.classList.add("visibility-visible");
}
