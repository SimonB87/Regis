'use strict'
function hideNotification(itemId) {
  const notificationEl = document.querySelector("#" + itemId);
  notificationEl.remove();
}

(function () {

  document.addEventListener("DOMContentLoaded", function(event) {

    const exitIcons = document.querySelectorAll(".alert-hide");

    exitIcons.forEach(function (item) {
      item.addEventListener('click', function () {
          item.parentElement.style.display = "none";
      });
    });

  });



})()