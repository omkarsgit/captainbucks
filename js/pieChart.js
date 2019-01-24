$(function(){

    //get the pie chart canvas
    var ctx1 = $("#pie-chartcanvas-1");
    var ctx2 = $("#pie-chartcanvas-2");

    //pie chart data
    var data1 = {
        labels: ["Clothing", "Food", "Utilities", "Rent", "Credit Card Bills"],
        datasets: [
            {
                label: "TeamA Score",
                data: [10, 50, 25, 70, 40],
                backgroundColor: [
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C",
                    "#F4A460",
                    "#2E8B57"
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };

    //pie chart data
    var data2 = {
        labels: ["Clothing", "Food", "Utilities", "Rent", "Credit Card Bills"],
        datasets: [
            {
                label: "TeamB Score",
                data: [20, 35, 40, 60, 50],
                backgroundColor: [
                    "#FAEBD7",
                    "#DCDCDC",
                    "#E9967A",
                    "#F5DEB3",
                    "#9ACD32"
                ],
                borderColor: [
                    "#E9DAC6",
                    "#CBCBCB",
                    "#D88569",
                    "#E4CDA2",
                    "#89BC21"
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };

    //options
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Pie Chart",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Chart class object
    var chart1 = new Chart(ctx1, {
        type: "pie",
        data: data1,
        options: options
    });

    //create Chart class object
    var chart2 = new Chart(ctx2, {
        type: "pie",
        data: data2,
        options: options
    });
});