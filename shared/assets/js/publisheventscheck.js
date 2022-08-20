"use strict";
document.addEventListener("DOMContentLoaded", function (event) {

  checkEventStatus();

});

function checkEventStatus() {
  const statusSelects = document.querySelectorAll(".form-select");
  let openEvents = 0;
  const statusBackground = document.querySelector("#status-background");
  const statusNotification = document.querySelector("#status-notification");


  for (let i = 0; i < statusSelects.length; i++) {
    if (statusSelects[i].value == "1 - Registrations open") {
      openEvents = openEvents + 1;
    }

    if (openEvents == 1) {

      statusBackground.classList.remove("bg-success", "bg-warning", "bg-info");
      statusBackground.classList.add("bg-success");
      statusNotification.innerText = "Success - One event is published, all is correct";
      statusNotification.classList.add("text-white");

    } else if (openEvents > 1) {

      statusBackground.classList.remove("bg-success", "bg-warning", "bg-info");
      statusBackground.classList.add("bg-warning");
      statusNotification.innerText = "Error - There are too many events published. Publis only one event!";
      statusNotification.classList.remove("text-white");

    } else if (openEvents == 0) {

      statusBackground.classList.remove("bg-success", "bg-warning", "bg-info");
      statusBackground.classList.add("bg-info");
      statusNotification.innerText = "Info - There is no event published, pick an event to publish or create a new one!";
      statusNotification.classList.add("text-white");

    }

  }

}