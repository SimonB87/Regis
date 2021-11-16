"use strict";
(function () {
    var elDate = document.getElementById("registrationdate");
    var currentDate = new Date();
    var intDate = currentDate.getDate();
    var stringDate = editStringDateValue(intDate);
    var intMonth = (currentDate.getMonth() + 1);
    var stringMonth = editStringDateValue(intMonth);
    var stringYear = currentDate.getFullYear().toString();
    var intHour = currentDate.getHours();
    var stringHour = editStringDateValue(intHour);
    var intMinutes = currentDate.getMinutes();
    var stringMinutes = editStringDateValue(intMinutes);
    var intSeconds = currentDate.getSeconds();
    var stringSeconds = editStringDateValue(intSeconds);
    var dateTime = "Datum: " + stringDate + ". "
        + stringMonth + ". "
        + stringYear + " - "
        + stringHour + ":"
        + stringMinutes + ":"
        + stringSeconds;
    elDate.value = dateTime;
    function editStringDateValue(inputValue) {
        if ((inputValue > 0) && (inputValue < 10)) {
            var editedValue = "0" + inputValue.toString();
            return editedValue;
        }
        else {
            return inputValue;
        }
    }
})();
