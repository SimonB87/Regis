"use strict";
document.addEventListener("DOMContentLoaded", function (event) {

  const pills = document.querySelectorAll(".pill-linkitem");
  pills.forEach((element) => {
    element.addEventListener("click", function () {

      const isDisabled = element.classList.contains("disabled");

      if (isDisabled == false) {
        const navId = element.id;
        const targetSection = navId + "-section";
        const allSections = document.querySelectorAll(".tab-section");

        pills.forEach((elementPill) => {
          elementPill.classList.remove("active");
        });

        element.classList.add("active");

        allSections.forEach((elementiSection) => {
          elementiSection.classList.add("hidden");
        });

        document.getElementById(targetSection).classList.remove("hidden");
      }

    });
  });

});