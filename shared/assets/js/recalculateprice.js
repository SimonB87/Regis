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
      const mainPriceOutput = parseFloat(passTypePrice, 10);
      return mainPriceOutput;
    }
  
    function getPriceCoefficient() {
      const registrationTypeValue = parseFloat(registrationType.ariaPlaceholder, 10);
      //const dancerKindValue = parseFloat(dancerKind.options[dancerKind.selectedIndex].ariaValueNow, 10);
      //const lengthTypeValue = parseFloat(lengthType.options[lengthType.selectedIndex].ariaValueNow, 10);

      //const priceCoefficientOutput = registrationTypeValue * dancerKindValue * lengthTypeValue;
      const priceCoefficientOutput = registrationTypeValue;
  
      return priceCoefficientOutput;
    }
  
    function getAdditionalService() {
      const competitionParticipationValue = competitionParticipation.value;
      const competitionParticipationOutput = parseFloat(competitionParticipation.options[competitionParticipation.selectedIndex].ariaValueNow, 10);
  
      const merchandiseValue = merchandise.value;
      const merchandiseOutput = parseFloat( merchandise.options[merchandise.selectedIndex].ariaValueNow, 10);
  
      const sumAmount = competitionParticipationOutput + merchandiseOutput;
      
      return sumAmount;
    }

  } else {
    //console.log("Missing an option.");
  }

}