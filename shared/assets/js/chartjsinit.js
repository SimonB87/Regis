let myData = {
  datasets: [{
    data: [10, 20, 30, 5],
    backgroundColor: ['#198754', '#ff7846', '#ff5719', '#ff7d9b'],
    borderColor: ['#16794b', '#ff7846', '#ff5719', '#f67391']
  }],

  // These labels appear in the legend and in the tooltips when hovering different arcs
  labels: [
    'Paid',
    'Unpaid',
    'Unpaid (reminder sent)',
    'Cancelled'
  ],
};

let ctx = document.getElementById("myPieChart");
let myDoughnutChart = new Chart(ctx, {
  type: 'doughnut',
  data: myData,
  options: {
    borderColor: '#000',
    legend: {
      display: true,
      labels: {
        fontColor: '#000',
        usePointStyle: true
      }
    }
  }
});