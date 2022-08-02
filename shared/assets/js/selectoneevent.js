const listEvents = document.getElementById("listetedevents");

listEvents.addEventListener('change', (event) => {
  const result = listEvents.value;
  const selectEventLink = document.getElementById("selectoneeventlink");
  const downloadRegistrationsLink = document.getElementById("download-registrations");

  const id = result.slice(1, result.indexOf(";"));

  const currentSite = window.location.href;
  const currentSiteStringStart = currentSite.indexOf("?id=");
  const currentSiteString = currentSite.slice(0,(currentSiteStringStart+4));

  const setHrefLink = currentSiteString + id;

  selectEventLink.href = setHrefLink;

  downloadRegistrationsLink.href = "downloadregistrations.php" + "?id=" + id;
  
});