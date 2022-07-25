function postUpdatePayment(infonum) {

  const targetOrderId = document.querySelector("form.orderId" + infonum + " input[name=orderID]").value;
  const targetName = document.querySelector("form.orderId" + infonum + " input[name=clientName]").value;
  const targetPaymentOption = document.querySelector("form.orderId" + infonum + " select[name=paymentoption]").value;
  var targetEl = $('.update-pay--parent[title=id' + targetOrderId + '] .update-pay--resultnotice');

  var targetEl = $('.update-pay--parent[title=id' + targetOrderId + '] .update-pay--resultnotice');
  targetEl.text("Updating ...");
  $(".update-pay--parent[title=id" + targetOrderId + "] .spinner-border").removeClass("hidden");

  $.ajax({
    url: "updatepayment.php",
    type: "POST",
    data: {
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
      //console.log(dataResult.content);
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
  $(".update-pay--parent[title=id" + targetOrderId + "] .spinner-border").addClass("hidden");
}
