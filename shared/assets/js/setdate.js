const elDate = document.getElementById("registrationdate");

const currentDate = new Date(); 

let stringDate = currentDate.getDate();
stringDate = editStringDateValue(stringDate);

let stringMonth = (currentDate.getMonth()+1);
stringMonth = editStringDateValue(stringMonth);

const stringYear = currentDate.getFullYear();

let stringHour = currentDate.getHours();
stringHour = editStringDateValue(stringHour);

let stringMinutes = currentDate.getMinutes();
stringMinutes = editStringDateValue(stringMinutes);

let stringSeconds = currentDate.getSeconds();
stringSeconds = editStringDateValue(stringSeconds);

const dateTime = "Datum: " + stringDate + ". "
                + stringMonth + ". " 
                + stringYear + " - "  
                + stringHour + ":"  
                + stringMinutes + ":" 
                + stringSeconds;

elDate.value = dateTime;

function editStringDateValue(inputValue) {
  if ((inputValue > 0) && (inputValue < 10)) {
    const editedValue = "0" + inputValue;
    return editedValue;
  } else {
    return inputValue;
  }
}