let myData = {
  datasets: [{
    data: [regData.paidRegistrations, regData.unpaidRegistrations, regData.remindedPayment, regData.cancelledRegistrations],
    backgroundColor: ['#26de81', '#fd9644', '#a55eea', '#fc5c65'],
    borderColor: ['#20bf6b', '#fa8231', '#8854d0', '#eb3b5a']
  }],

  // These labels appear in the legend and in the tooltips when hovering different arcs
  labels: [
    'Paid',
    'Unpaid',
    'Unpaid (reminder sent)',
    'Cancelled'
  ],
};

const ctx = document.getElementById("myPieChart");
const myDoughnutChart = new Chart(ctx, {
  type: 'doughnut',
  data: myData,
  options: {
    borderColor: '#000',
    tooltips: {
      backgroundColor : 'rgba(250, 250, 250, 0.9)',
      bodyFontColor : '#555'
    },
    legend: {
      display: true,
      labels: {
        fontColor: '#555',
        usePointStyle: true
      }
    }
  }
});