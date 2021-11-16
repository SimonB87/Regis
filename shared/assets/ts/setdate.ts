(function () {

  const elDate = (<HTMLInputElement>document.getElementById("registrationdate"));

  const currentDate = new Date(); 

  const intDate = currentDate.getDate();
  const stringDate = editStringDateValue(intDate);

  const intMonth = (currentDate.getMonth()+1);
  const stringMonth = editStringDateValue(intMonth);

  const stringYear = currentDate.getFullYear().toString();

  let intHour = currentDate.getHours();
  let stringHour = editStringDateValue(intHour);

  let intMinutes = currentDate.getMinutes();
  let stringMinutes = editStringDateValue(intMinutes);

  let intSeconds = currentDate.getSeconds();
  let stringSeconds = editStringDateValue(intSeconds);

  const dateTime = "Datum: " + stringDate + ". "
                  + stringMonth + ". " 
                  + stringYear + " - "  
                  + stringHour + ":"  
                  + stringMinutes + ":" 
                  + stringSeconds;

  elDate.value = dateTime;

  function editStringDateValue(inputValue : number ) {
    if ((inputValue > 0) && (inputValue < 10)) {
      const editedValue = "0" + inputValue.toString();
      return editedValue;
    } else {
      return inputValue;
    }
  }

})()