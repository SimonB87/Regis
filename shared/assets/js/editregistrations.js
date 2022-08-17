"use strict";
function editRegistration(orderNum) {
  const targetOrderIdHeading = document.getElementById("orderId");
  targetOrderIdHeading.innerText = orderNum;

  const orderRowSelector = "#orders tr.orderId" + orderNum;
  const orderRowSelectorDetail = ".footable-details tr.orderId" + orderNum;

  const orderDancerKindVal = document.querySelector(orderRowSelector + " td[title=dancerKind]").innerText;
  const orderPriceVal = document.querySelector(orderRowSelector + " td[title=price]").innerText;
  const orderPassTypeVal = document.querySelector(orderRowSelector + " td[title=passType]").innerText;
  const orderOtherTicketOptionsVal = document.querySelector(orderRowSelector + " td[title=otherTicketOptions] .code").innerText;
  const orderOtherDancerKindVal = document.querySelector(orderRowSelector + " td[title=otherDancerKind]").innerText;
  const orderClientNameVal = document.querySelector(orderRowSelector + " td[title=clientName]").innerText;
  const orderClientEmailVal = document.querySelector(orderRowSelector + " td[title=clientEmail]").innerText;
  const orderClientPhoneVal = document.querySelector(orderRowSelector + " td[title=clientPhone]").innerText;
  const orderClientCountryVal = document.querySelector(orderRowSelector + " td[title=clientCountry]").innerText;
  const orderClientCommentsVal = document.querySelector(orderRowSelector + " td[title=clientComments]").innerText;

  if (orderDancerKindVal.length > 1) {
    selectOptions(orderDancerKindVal, "dancerKind");
  }

  if (orderOtherDancerKindVal.length > 1) {
    selectOptions(orderOtherDancerKindVal, "otherDancerKind");
  }

  if (orderPassTypeVal.length > 1) {
    selectOptions(orderPassTypeVal, "passType");
  }

  if (orderOtherTicketOptionsVal.length > 1) {
    selectOptions(orderOtherTicketOptionsVal, "otherTicketOptions");
  }

  document.getElementById("clientName").value = orderClientNameVal;
  document.getElementById("clientEmail").value = orderClientEmailVal;
  document.getElementById("clientPhone").value = orderClientPhoneVal;
  document.getElementById("clientCountry").value = orderClientCountryVal;
  document.getElementById("clientComments").value = orderClientCommentsVal;
  document.getElementById("clientComments").innerText = orderClientCommentsVal;
  document.getElementById("price").value = orderPriceVal;

  function selectOptions(valueOfSource, targetSelectId) {
    const selectOptions = document.querySelectorAll("#" + targetSelectId + " option");
    selectOptions.forEach((element, index) => {
      element.removeAttribute("selected");
      if (element.value[0] == valueOfSource[0]) {
        selectOptions[index].setAttribute("selected", "");
      }
    });
  }

}

document.getElementById("orders").addEventListener("click", function () {
  setTimeout(enableEditBtns, 600);

  function enableEditBtns() {
    let detail = "";
    const editButtons = document.querySelectorAll(".editReg");

    try {
      detail = document.querySelector(".footable-detail-row"); //detail je otevřen, nemáme data v řádku
    } catch {
      detail = false; //detail je zavřen, nemáme data v řádku
    }
    // case when no ".footable-detail-row" is found
    if (detail == null) {
      detail = false;
    }

    editButtons.forEach((element) => {
      if (detail !== false) {
        element.classList.add("disabledBtn");
      } else {
        element.classList.remove("disabledBtn");
      }
    });
  }

});
