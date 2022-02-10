function toggleVisibility(icon, section) {

  const elements = document.querySelectorAll(`.${icon}, .${section}`);

  elements.forEach(function(item) {
    item.classList.toggle("hidden");
  });
}