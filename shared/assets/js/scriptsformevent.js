"use strict";
const revenueTable = document.getElementById("recount-revenue-data");

if (!(revenueTable == null)) {
  revenueTable.addEventListener("click", recountRevenueData);
}


function prefillForm() {
  const inputText = document.querySelectorAll("input[type=text]");
  const inputNumber = document.querySelectorAll("input[type=number]");
  const inputDate = document.querySelectorAll("input[type=date]");
  const inputCheckbox = document.querySelectorAll("input[type=checkbox]");

  inputText.forEach(function (element) {
    if (element.classList.contains('prefill-auto') == false) {

      element.value = randomString(9);

      function randomString(length) {
        let result = '';
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        const charactersLength = characters.length;
        for (let i = 0; i < length; i++) {
          result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return ("Demo A" + result);
      }

    }
  });

  inputNumber.forEach(function (element) {
    if (element.classList.contains('prefill-auto') == false) {
      const decimals = [10, 100, 300, 700, 1000];
      const randomInt = (Math.floor(Math.random() * decimals.length))
      element.value = (Math.floor(Math.random() * decimals[randomInt]));
    }
  });

  inputDate.forEach(function (element) {
    if (element.classList.contains('prefill-auto') == false) {
      const year = (Math.floor(Math.random() * 500)) + 2000;
      const month = (Math.floor(Math.random() * 8)) + 1;
      const day = (Math.floor(Math.random() * 8)) + 1;
      element.value = year + "-0" + month + "-0" + day;
    }
  });

  inputCheckbox.forEach(function (element) {
    if (element.classList.contains('prefill-auto') == false) {
      element.setAttribute("checked", "true");
    }
  });
}

function recountRevenueData() {
  const ticketsAmountEarlyBirdsRegistrationsSingle = getInputValue("ticketsAmountEarlyBirdsRegistrationsSingle");
  const earlyBirdsTicketAmountCouple = getInputValue("earlyBirdsTicketAmountCouple");
  const earlyBirdsTicketPriceSingle = getInputValue("earlyBirdsTicketPriceSingle");
  const earlyBirdsTicketPriceCouple = getInputValue("earlyBirdsTicketPriceCouple");

  const regularTicketAmountSingle = getInputValue("regularTicketAmountSingle");
  const regularTicketAmountCouple = getInputValue("regularTicketAmountCouple");
  const regularTicketPriceSingle = getInputValue("regularTicketPriceSingle");
  const regularTicketPriceCouple = getInputValue("regularTicketPriceCouple");

  const partyTicketAmountSingle = getInputValue("partyTicketAmountSingle");
  const partyTicketAmountCouple = getInputValue("partyTicketAmountCouple");
  const partyTicketPriceSingle = getInputValue("partyTicketPriceSingle");
  const partyTicketPriceCouple = getInputValue("partyTicketPriceCouple");

  const specialType1TicketAmountSingle = getInputValue("specialType1TicketAmountSingle");
  const specialType1TicketAmountCouple = getInputValue("specialType1TicketAmountCouple");
  const specialType1TicketPriceSingle = getInputValue("specialType1TicketPriceSingle");
  const specialType1TicketPriceCouple = getInputValue("specialType1TicketPriceCouple");

  const specialType2TicketAmountSingle = getInputValue("specialType2TicketAmountSingle");
  const specialType2TicketAmountCouple = getInputValue("specialType2TicketAmountCouple");
  const specialType2TicketPriceSingle = getInputValue("specialType2TicketPriceSingle");
  const specialType2TicketPriceCouple = getInputValue("specialType2TicketPriceCouple");

  document.querySelector("#earlybirds-people").innerText = numberWithSpaces(Number(ticketsAmountEarlyBirdsRegistrationsSingle) + (2 * Number(earlyBirdsTicketAmountCouple)));
  document.querySelector("#regular-people").innerText = numberWithSpaces(Number(regularTicketAmountSingle) + (2 * Number(regularTicketAmountCouple)));
  document.querySelector("#party-people").innerText = numberWithSpaces(Number(partyTicketAmountSingle) + (2 * Number(partyTicketAmountCouple)));
  document.querySelector("#special1-people").innerText = numberWithSpaces(Number(specialType1TicketAmountSingle) + (2 * Number(specialType1TicketAmountCouple)));
  document.querySelector("#special2-people").innerText = numberWithSpaces(Number(specialType2TicketAmountSingle) + (2 * Number(specialType2TicketAmountCouple)));

  document.querySelector("#earlybirds-money").innerText = numberWithSpaces(Number(Number(ticketsAmountEarlyBirdsRegistrationsSingle) * Number(earlyBirdsTicketPriceSingle)) + Number(Number(earlyBirdsTicketPriceCouple) * Number(earlyBirdsTicketAmountCouple)));
  document.querySelector("#regular-money").innerText = numberWithSpaces(Number(Number(regularTicketAmountSingle) * Number(regularTicketPriceSingle)) + Number(Number(regularTicketAmountCouple) * Number(regularTicketPriceCouple)));
  document.querySelector("#party-money").innerText = numberWithSpaces(Number(Number(partyTicketAmountSingle) * Number(partyTicketPriceSingle)) + Number(Number(partyTicketPriceCouple) * Number(partyTicketAmountCouple)));
  document.querySelector("#special1-money").innerText = numberWithSpaces(Number(Number(specialType1TicketAmountSingle) * Number(specialType1TicketPriceSingle)) + Number(Number(specialType1TicketAmountCouple) * Number(specialType1TicketPriceCouple)));
  document.querySelector("#special2-money").innerText = numberWithSpaces(Number(Number(specialType2TicketAmountSingle) * Number(specialType2TicketPriceSingle)) + Number(Number(specialType2TicketAmountCouple) * Number(specialType2TicketPriceCouple)));

  const totalPeopleCount = numberWithSpaces(Number(getInputValue("earlybirds-people", false)) + Number(getInputValue("regular-people", false)) + Number(getInputValue("party-people", false)) + Number(getInputValue("special1-people", false)) + Number(getInputValue("special2-people", false)));
  const summaryMoney = numberWithSpaces(Number(getInputValue("earlybirds-money", false)) + Number(getInputValue("regular-money", false)) + Number(getInputValue("party-money", false)) + Number(getInputValue("special1-money", false)) + Number(getInputValue("special2-money", false)));

  document.querySelector("#summary-people").innerText = totalPeopleCount;
  document.querySelector("#summary-money").innerText = summaryMoney;

  function getInputValue(name, valueType = true) {
    let result;
    if (valueType == true) {
      result = document.getElementById(name).value;
    } else {
      result = document.getElementById(name).innerText;
      result = Number(result.replace(' ', ''));
    }
    return result;
  }

  function numberWithSpaces(num) {
    const parts = num.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    return parts.join(".");
  }

}

/* //TODO - not really useful code ?
  $(function () {
  $('form.bts-form input[type=date]').datepicker({
    format: "dd/mm/yyyy"
  });
});*/

