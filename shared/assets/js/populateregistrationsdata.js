const paidRegistrationsShare = Math.floor(regData.paidRegistrations / regData.allRegistrations * 100);
const unpaidRegistrationsShare = Math.floor(regData.unpaidRegistrations / regData.allRegistrations * 100)
const remindedPaymentShare = Math.floor(regData.remindedPayment / regData.allRegistrations * 100)
const cancelledRegistrationsShare = Math.floor(regData.cancelledRegistrations / regData.allRegistrations * 100)

document.getElementById("reg-all").innerText = `${regData.allRegistrations}`; 
document.getElementById("reg-paid").innerText = `${regData.paidRegistrations} ( ${paidRegistrationsShare} %)`;
document.getElementById("reg-unpaid").innerText = `${regData.unpaidRegistrations} ( ${unpaidRegistrationsShare} %)`;
document.getElementById("reg-reminded").innerText = `${regData.remindedPayment} ( ${remindedPaymentShare} %)`;
document.getElementById("reg-cancelled").innerText = `${regData.cancelledRegistrations} ( ${cancelledRegistrationsShare} %)`;