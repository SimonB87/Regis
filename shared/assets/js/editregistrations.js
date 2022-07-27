function editRegistration(orderNum) {
  const targetOrderIdHeading = document.getElementById("orderId");
  targetOrderIdHeading.innerText = orderNum;

  const orderRowSelector = "#orders tr.orderId" + orderNum;

  const orderDancerKindVal = document.querySelector(orderRowSelector + " td[title=dancerKind]").innerText;
  const orderPassTypeVal = document.querySelector(orderRowSelector + " td[title = passType]").innerText;
  const orderOtherTicketOptionsVal = document.querySelector(orderRowSelector + " td[title=otherTicketOptions]").innerText;
  const orderClientNameVal = document.querySelector(orderRowSelector + " td[title=clientName]").innerText;
  const orderClientEmailVal = document.querySelector(orderRowSelector + " td[title=clientEmail]").innerText;
  const orderClientPhoneVal = document.querySelector(orderRowSelector + " td[title=clientPhone]").innerText;
  const orderClientCountryVal = document.querySelector(orderRowSelector + " td[title=clientCountry]").innerText;
  const orderClientCommentsVal = document.querySelector(orderRowSelector + " td[title=clientComments]").innerText;

  document.getElementById("clientName").value = orderClientNameVal;
  document.getElementById("clientEmail").value = orderClientEmailVal;
  document.getElementById("clientPhone").value = orderClientPhoneVal;
  document.getElementById("clientCountry").value = orderClientCountryVal;
  document.getElementById("clientComments").innerText = orderClientCommentsVal;

}