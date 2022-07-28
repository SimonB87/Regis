function postUpdatePayment(infonum) {

  const targetOrderId = document.querySelector("form.orderId" + infonum + " input[name=orderID]").value;
  const targetName = document.querySelector("form.orderId" + infonum + " input[name=clientName]").value;
  const targetPaymentOption = document.querySelector("form.orderId" + infonum + " select[name=paymentoption]").value;
  var targetEl = $('.update-pay--parent[title=id' + targetOrderId + '] .update-pay--resultnotice');

  targetEl.text("Updating ...");
  document.querySelector("tr.orderId" + infonum + " .updatebutton .spinner-border").classList.remove("hidden");
  //$(".update-pay--parent[title=id" + targetOrderId + "] .spinner-border").removeClass("hidden");

  if (targetPaymentOption == "0 - error") {

    targetEl.text("You can not save this option.");

  } else {

    $.ajax({
      url: "updateorder.php",
      type: "POST",
      data: {
        messagename: "updatepayment",
        orderid: targetOrderId,
        ordername: targetName,
        paymentoption: targetPaymentOption
      },
      error: function (xhr, status, error) {
        console.error(xhr);
        console.error(status);
        console.error(error);
        targetEl.text(status + " - " + error);
      },
      cache: false,
      success: function (dataResult) {
        var dataResult = JSON.parse(dataResult);
        if (dataResult.statusCode == 200) {
          targetEl.text(dataResult.content);
          var targetSelector = $('.update-pay--parent[title=id' + targetOrderId + '] select[name=paymentoption]');
          targetSelector.removeClass("bg-info");
          targetSelector.removeClass("bg-success");
          targetSelector.removeClass("bg-warning");
          targetSelector.removeClass("text-white");
          targetSelector.addClass("bg-info");
        }
        else if (dataResult.statusCode == 418) {
          targetEl.text("Error occured - code 418");
        }
        else if (dataResult.statusCode == 404) {
          targetEl.text("Error occured - code 404");
        }
      }
    });

  }

  document.querySelector("tr.orderId" + infonum + " .updatebutton .spinner-border").classList.add("hidden");
}

function updateOrderData() {

  document.querySelector(".modal.show .save-button .save-button-text").innerText = "Updating ...";
  document.querySelector(".modal.show .save-button .spinner-border").classList.remove("hidden");
  const targetEl = document.getElementById("post-status");
  targetEl.classList.remove("text-success");

  // get data for posting
  const dancerKindVal = document.getElementById("dancerKind").value;
  const orderId = document.getElementById("orderId").innerText;
  const passType = document.getElementById("passType").value;
  const otherTicketOptions = document.getElementById("otherTicketOptions").value;
  const clientName = document.getElementById("clientName").value;
  const clientEmail = document.getElementById("clientEmail").value;
  const clientPhone = document.getElementById("clientPhone").value;
  const clientCountry = document.getElementById("clientCountry").value;
  const clientComments = document.getElementById("clientComments").value;

  console.log("updateorder - clientComments : " + clientComments);

  $.ajax({
    url: "updateorder.php",
    type: "POST",
    data: {
      messagename: "updateorder",
      orderid: orderId,
      dancerkind: dancerKindVal,
      passType: passType,
      otherTicketOptions: otherTicketOptions,
      clientName: clientName,
      clientEmail: clientEmail,
      clientPhone: clientPhone,
      clientCountry: clientCountry,
      clientComments: clientComments
    },
    error: function (xhr, status, error) {
      console.error(xhr);
      console.error(status);
      console.error(error);
      targetEl.innerText = (status + " - " + error);
      targetEl.classList.add("text-warning");
    },
    cache: false,
    success: function (dataResult) {
      var dataResult = JSON.parse(dataResult);
      //console.log(dataResult.content);
      if (dataResult.statusCode == 200) {
        targetEl.innerText = "Sucess - updated order data.";
        targetEl.classList.add("text-success");
        //updateDataOfOrdersData(orderId); //TODO - finish
      }
      else if (dataResult.statusCode == 418) {
        targetEl.innerText = ("Error occured - code 418");
      }
      else if (dataResult.statusCode == 404) {
        targetEl.innerText = ("Error occured - code 404");
      }
    }
  });

  document.querySelector(".modal.show .save-button .save-button-text").innerText = "Save";
  document.querySelector(".modal.show .save-button .spinner-border").classList.add("hidden");

  function updateDataOfOrdersData(orderIdNumber) {
    $.ajax({
      url: "getregistrationsdata.php",
      type: "POST",
      data: {
        messagename: "getregistrationsdata",
        orderid: orderIdNumber
      },
      error: function (xhr, status, error) {
        console.error(xhr);
        console.error(status);
        console.error(error);
        targetEl.innerText = targetEl.innerText + (" ." + status + " - " + error);
        targetEl.classList.add("text-warning");
      },
      cache: false,
      success: function (updateDataResult) {
        var myUpdateDataResult = JSON.parse(updateDataResult);
        //console.log(dataResult.content);
        if (myUpdateDataResult.statusCode == 200) {
          targetEl.innerText = targetEl.innerText + " Data refreshed.";
          targetEl.classList.add("text-success");
          console.log(myUpdateDataResult.content);
        }
        else if (myUpdateDataResult.statusCode == 418) {
          targetEl.innerText = ("Error occured - code 418");
        }
        else if (myUpdateDataResult.statusCode == 404) {
          targetEl.innerText = ("Error occured - code 404");
        }
      }
    });
  };

}