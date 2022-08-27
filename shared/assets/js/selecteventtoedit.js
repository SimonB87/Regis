"use strict";
document.addEventListener("DOMContentLoaded", function (event) {

  document.getElementById("listetedevents").addEventListener("change", function (event) {

    const chosenEventId = document.getElementById("listetedevents").value;
    const chosenEventId_stringStart = chosenEventId.indexOf("#");
    const chosenEventId_stringEnd = chosenEventId.indexOf(";");
    const eventToChoose = chosenEventId.substring((chosenEventId_stringStart + 1), chosenEventId_stringEnd);

    const newLocation =  window.location.protocol + "//" + window.location.hostname + window.location.pathname + "?id=" + eventToChoose;

    document.getElementById("select-event-toedit-link").href = newLocation;

  });

  const params = (new URL(document.location)).searchParams;
  const eventId = parseInt(params.get('id'), 10);

  const listEventOptions = document.querySelectorAll("#listetedevents option");

  listEventOptions.forEach((element, index) => { 
    if (element.title == eventId) {
      element.setAttribute("selected", "selected");
    }
  });
  
});