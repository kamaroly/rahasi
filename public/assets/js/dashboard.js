var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [

        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86, 27, 90]
        }
    ]
};
// Get the context of the canvas element we want to select
var ctx = document.getElementById("dashboard").getContext("2d");

var myLineChart = new Chart(ctx).Line(data);