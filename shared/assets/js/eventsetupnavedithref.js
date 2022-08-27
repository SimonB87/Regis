"use strict";
document.addEventListener("DOMContentLoaded", function (event) {

  const params = (new URL(document.location)).searchParams;
  const eventId = params.get('id');
  const navs = document.querySelectorAll("#setupnav a");

  navs.forEach((element, index) => { 

    element.classList.remove("nav-disabled");
    if (index < (navs.length -1 ) ) {
      element.href = (element.href + "?id=" + eventId);
    }
  });
  
});