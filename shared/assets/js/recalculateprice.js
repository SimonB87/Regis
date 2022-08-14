"use strict";
function recalculatePrice() {
  const passType = document.getElementById("passType");
  const otherTicketOptions = document.getElementById("otherTicketOptions");
  const allCustomerOptionsWereSelected = passType.checkValidity() && otherTicketOptions.checkValidity();

  if (allCustomerOptionsWereSelected) {

    const mainPrice = getMainPrice();
    const additionalService = getAdditionalService();

    const finalPriceCzk = parseFloat(((mainPrice) + additionalService), 10);

    document.getElementById("formPrice").value = finalPriceCzk + ",- CZK";

    function getMainPrice() {
      const passTypePrice = passType.options[passType.selectedIndex].ariaValueNow;
      let mainPriceOutput = parseFloat(passTypePrice, 10);
      return mainPriceOutput;
    }

    function getAdditionalService() {

      let otherTicketOptionsOutput = parseFloat(otherTicketOptions.options[otherTicketOptions.selectedIndex].ariaValueNow, 10);

      return otherTicketOptionsOutput;
    }

  } else {

  }

}