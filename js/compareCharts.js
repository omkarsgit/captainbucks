var ctx = document.getElementById("compareCharts").getContext("2d");

var data = {
  labels: ["Gas", "Chicken Over Rice", "Electricity Bill"],
  datasets: [{
    label: "January",
    backgroundColor: "blue",
    data: [3, 7, 4]
  }, {
    label: "February",
    backgroundColor: "red",
    data: [4, 3, 5]
  }, {
    label: "March",
    backgroundColor: "green",
    data: [7, 2, 6]
  }]
};

var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: data,
  options: {
    barValueSpacing: 20,
    scales: {
      yAxes: [{
        ticks: {
          min: 0,
        }
      }]
    }
  }
});
