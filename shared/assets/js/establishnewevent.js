"use strict";
document.addEventListener("DOMContentLoaded", function(event) { 
  //fix after loading black background
  const navs = document.querySelectorAll("#setupnav a");
  navs.forEach((element, index) => { 
    element.classList.add("nav-disabled");
  });

  document.getElementById("send-new-event").addEventListener("click", establishNewEvent)

});

function establishNewEvent(event = event) {

  event.preventDefault();
  const status = document.getElementById("status");
  const newEventForm = document.getElementById("form-establish-newevent");

  newEventForm.classList.add('was-validated');

  // AJAX function for updattig user rights
  const eventName = document.getElementById("eventName").value;
  const eventStartDate = document.getElementById("eventStartDate").value;
  const eventEndDate = document.getElementById("eventEndDate").value;
  const formValid = newEventForm.checkValidity();

  status.innerText = "Updating ...";
  status.classList.remove("hidden");

  if (formValid == false) {

    //status.innerText = "Fill in all the requied fields.";

  } else {

    $.ajax({
      url: "handlers/createnewevent_addnewevent.php",
      type: "POST",
      data: {
        messageName: "createnewevent_addnewevent",
        eventName: eventName,
        eventStartDate: eventStartDate,
        eventEndDate: eventEndDate
      },
      error: function (xhr, status, error) { // Error case
        console.error(xhr);
        console.error(status);
        console.error(error);
        status.innerText = (status + " - " + error);
      },
      cache: false,
      success: function (dataResult) {
        var dataResult = JSON.parse(dataResult);
        if (dataResult.statusCode == 200) {

          status.innerText = (dataResult.content);
          document.getElementById("eventId").value = dataResult.newEventId;

          const navs = document.querySelectorAll("#setupnav a");
          navs.forEach((element, index) => { 

            element.classList.remove("nav-disabled");
            if (index < (navs.length -1 ) ) {
              element.href = (element.href + "?id=" + dataResult.newEventId);
            }
          });

        }
        else if (dataResult.statusCode == 418) {
          status.innerText = ("Error occured - code 418");
        }
        else if (dataResult.statusCode == 404) {
          status.innerText = ("Error occured - code 404");
        }
      }

    });
  }
}