const exitIcons = document.querySelectorAll(".alert-hide");

exitIcons.forEach(function (item) {
  item.addEventListener('click', function () {
      item.parentElement.style.display = "none";
  });
});