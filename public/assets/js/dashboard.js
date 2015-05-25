
jQuery.extend({
    getValues: function(url) {
        var result = null;
        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                result = data;
            }
        });
       return result;
    }
});
var chartData = $.getValues('/charges/amount');
var chartLebels = $.getValues('/charges/created_at');

console.log(chartLebels);
var data = {
    labels : chartLebels,
    datasets : [
        {
            fillColor : "rgba(155,210,230,.05)",
            strokeColor : "rgb(115,180,190)",
            pointColor : "#424647",
            pointStrokeColor : "rgb(115,180,190)",
            data : chartData
        }
    ]
};
var options =  { 
    scaleOverlay : true,
    scaleOverride : true,
    scaleSteps : 5,
    scaleStepWidth : 15000,
    scaleStartValue : 0,

    scaleLineColor : "rgba(0,0,0,o,.25)", 
    scaleLineWidth : 1,

    scaleShowLabels : true,
    scaleLabel : "<%=value%>",
    scaleFontFamily : "'Lato'", 
    scaleFontSize : 12, 
    scaleFontStyle : "800",
    scaleFontColor : "#222",    

    scaleShowGridLines : true,
    scaleGridLineColor : "rgba(0,0,0,.1)",
    scaleGridLineWidth : 1, 

    // bezierCurve : true,

    pointDot : true,
    pointDotRadius : 5,
    pointDotStrokeWidth : 1,

    datasetStroke : true,
    datasetStrokeWidth : 1,
    datasetFill : true,

    animation : true,
    animationSteps : 120,
    animationEasing : "easeOutQuart",
    onAnimationComplete : null
    };


var ctx = document.getElementById("gross").getContext("2d");
new Chart(ctx).Line(data,options);





