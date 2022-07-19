'use strict'
function recalculatePrice() {
  const passType = document.getElementById("passType");
  const dancerKind = document.getElementById("dancerKind");
  const otherTicketOptions = document.getElementById("otherTicketOptions");
  //const lengthType = document.getElementById("lengthType");
  //const merchandise = document.getElementById("merchandise");
  //const registrationType = document.getElementById("registrationType");

  //const allCustomerOptionsWereSelected = registrationType.checkValidity() && passType.checkValidity() && dancerKind.checkValidity() && lengthType.checkValidity() && competitionParticipation.checkValidity() && merchandise.checkValidity();
  const allCustomerOptionsWereSelected = passType.checkValidity() && dancerKind.checkValidity() && otherTicketOptions.checkValidity();

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

      const valueNotKnownA = String(otherTicketOptionsOutput) == "NaN";

      if (valueNotKnownA) {
        const selectorA = ".competitionPriceBackup-option-" + String(competitionParticipation.selectedIndex);
        const competitionBackUpValue = document.querySelector(selectorA).innerText;
        otherTicketOptionsOutput = competitionBackUpValue;
      }

      return otherTicketOptionsOutput;
    }

  } else {
    //console.log("Missing an option.");
  }

}