"use strict";
document.addEventListener("DOMContentLoaded", function (event) {

  const notice = document.getElementById("reg-notice");
  let idNum = "Selected last 5 events.";
  const queryString = window.location.search;

  try {

    const urlParams = new URLSearchParams(queryString);

    idNum = parseInt(urlParams.get("id"), 10);

    if ((idNum == NaN) || (idNum == "NaN")) {

    } else {
      notice.innerText = "Selected Event ID: " + idNum;
    }

  } catch (error) {

    console.log(error);
    notice.innerText = idNum;
  }

  if (queryString == "") {
    notice.innerText = "Selected last 5 events.";
  }

});