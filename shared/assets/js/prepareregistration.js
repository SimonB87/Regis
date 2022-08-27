"use strict";
document.addEventListener("DOMContentLoaded", function (event) {

  const date = new Date();

  let day = date.getDate();
  let month = date.getMonth() + 1;
  const year = date.getFullYear();
  let hour = date.getHours();
  let minute = date.getMinutes();
  let second = date.getSeconds();

  day = (day < 10) ? `0${day}` : `${day}`;
  month = (month < 10) ? `0${month}` : `${month}`;
  hour = (hour < 10) ? `0${hour}` : `${hour}`;
  minute = (minute < 10) ? `0${minute}` : `${minute}`;
  second = (second < 10) ? `0${second}` : `${second}`;

  const currentDateTime = `${year}-${month}-${day} ${hour}:${minute}:${second}`; //"Datum: 14. 08. 2022 - 23:06:29"
  document.getElementById("registrationdate").value = currentDateTime;

});