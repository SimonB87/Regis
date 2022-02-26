setCurrentNavigation();

function setCurrentNavigation() {
  const currentPage = window.location.pathname;
  
  const pathMain = "eventsetupmain.php";
  const pathDescription = "eventdescription.php";
  const pathEventForm = "eventform.php";

  const isPageMain = currentPage.search(pathMain);
  const isPageDescription = currentPage.search(pathDescription);
  const isPageEventForm = currentPage.search(pathEventForm);

  if (isPageMain > 0) {
    document.getElementById("nav_eventsetupmain").classList.add("fw-bold");
  }

  if (isPageDescription > 0) {
    document.getElementById("nav_eventdescription").classList.add("fw-bold");
  }

  if (isPageEventForm > 0) {
    document.getElementById("nav_eventform").classList.add("fw-bold");
  }
}