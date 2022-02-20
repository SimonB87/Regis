'use strict'
function recalculatePrice() {
  const registrationType = document.getElementById("registrationType");
  const passType = document.getElementById("passType");
  const dancerKind = document.getElementById("dancerKind");
  const lengthType = document.getElementById("lengthType");
  const competitionParticipation = document.getElementById("competitionParticipation");
  const merchandise = document.getElementById("merchandise");


  //const allCustomerOptionsWereSelected = registrationType.checkValidity() && passType.checkValidity() && dancerKind.checkValidity() && lengthType.checkValidity() && competitionParticipation.checkValidity() && merchandise.checkValidity();
  const allCustomerOptionsWereSelected = registrationType.checkValidity() && passType.checkValidity() && competitionParticipation.checkValidity() && merchandise.checkValidity();


  if (allCustomerOptionsWereSelected) {

    const mainPrice = getMainPrice();
    const priceCoefficient = getPriceCoefficient();
    const additionalService = getAdditionalService();
    const finalPrice = parseFloat( ((mainPrice * priceCoefficient) + additionalService), 10);
    const finalPriceEur = parseFloat( ((mainPrice * priceCoefficient) + additionalService), 10)/ 25.6;
    const finalPriceEurWhole = parseInt(finalPriceEur, 10);

    document.getElementById("formPrice").value = finalPrice+",- Kč or " + finalPriceEurWhole + ",- EUR";

    function getMainPrice() {
      const passTypePrice = passType.options[passType.selectedIndex].ariaValueNow;
      let mainPriceOutput = parseFloat(passTypePrice, 10);

      const valueNotKnown = String(mainPriceOutput) == "NaN"; 

      if (valueNotKnown) { //mostly for firefox browser
        const selectedPriceIndex = passType.selectedIndex;
        const backUpOption = document.querySelector(".priceBackup-option-" + String(selectedPriceIndex));
        const backUpOptionPrice = backUpOption.innerText;
        mainPriceOutput = backUpOptionPrice;
      }

      return mainPriceOutput;
    }
  
    function getPriceCoefficient() {
      const registrationTypeValue = parseFloat(registrationType.ariaPlaceholder, 10);
      //const dancerKindValue = parseFloat(dancerKind.options[dancerKind.selectedIndex].ariaValueNow, 10);
      //const lengthTypeValue = parseFloat(lengthType.options[lengthType.selectedIndex].ariaValueNow, 10);

      //const priceCoefficientOutput = registrationTypeValue * dancerKindValue * lengthTypeValue;
      let priceCoefficientOutput = registrationTypeValue;

      const valueNotKnown = String(priceCoefficientOutput) == "NaN"; 

      if (valueNotKnown){
        const registrationTypePriceBackupValue = document.querySelector(".registrationTypePriceBackup").innerText;
        priceCoefficientOutput = registrationTypePriceBackupValue;
      }

      return priceCoefficientOutput;
    }
  
    function getAdditionalService() {
      const competitionParticipationValue = competitionParticipation.value;
      let competitionParticipationOutput = parseFloat(competitionParticipation.options[competitionParticipation.selectedIndex].ariaValueNow, 10);

      const valueNotKnownA = String(competitionParticipationOutput) == "NaN"; 

      if (valueNotKnownA) {
        const selectorA = ".competitionPriceBackup-option-" + String(competitionParticipation.selectedIndex);
        const competitionBackUpValue = document.querySelector(selectorA).innerText;
        competitionParticipationOutput = competitionBackUpValue;
      }

      const merchandiseValue = merchandise.value;
      let merchandiseOutput = parseFloat( merchandise.options[merchandise.selectedIndex].ariaValueNow, 10);

      const valueNotKnownB = String(merchandiseOutput) == "NaN"; 

      if (valueNotKnownB) {
        const selectorB = ".merchandisePriceBackup-option-" + String(merchandise.selectedIndex);
        const merchandiseBackUpValue = document.querySelector(selectorB).innerText;
        merchandiseOutput = merchandiseBackUpValue;
      }

  
      const sumAmount = parseFloat(competitionParticipationOutput, 10) + parseFloat(merchandiseOutput, 10);
      
      return sumAmount;
    }

  } else {
    //console.log("Missing an option.");
  }

}