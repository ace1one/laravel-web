var lastDate = 0;
var data = [];
var TICKINTERVAL = 86400000;
let XAXISRANGE = 777600000;
function getDayWiseTimeSeries(baseval, count, yrange) {
    var i = 0;
    while (i < count) {
        var x = baseval;
        var y =
            Math.floor(Math.random() * (yrange.max - yrange.min + 1)) +
            yrange.min;

        data.push({
            x,
            y,
        });
        lastDate = baseval;
        baseval += TICKINTERVAL;
        i++;
    }
}

getDayWiseTimeSeries(new Date("11 Feb 2017 GMT").getTime(), 10, {
    min: 10,
    max: 90,
});

function getNewSeries(baseval, yrange) {
    var newDate = baseval + TICKINTERVAL;
    lastDate = newDate;

    for (var i = 0; i < data.length - 10; i++) {
        data[i].x = newDate - XAXISRANGE - TICKINTERVAL;
        data[i].y = 0;
    }

    data.push({
        x: newDate,
        y:
            Math.floor(Math.random() * (yrange.max - yrange.min + 1)) +
            yrange.min,
    });
}

var options9 = {
    series: [
        {
            data: data.slice(),
        },
    ],
    chart: {
        id: "realtime",
        height: 350,
        type: "line",
        animations: {
            enabled: true,
            easing: "linear",
            dynamicAnimation: {
                speed: 1000,
            },
        },
        toolbar: {
            show: false,
        },
        zoom: {
            enabled: false,
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        curve: "smooth",
    },
    title: {
        text: "Real-Time Mobile Sales Data",
        align: "left",
    },
    markers: {
        size: 0,
    },
    xaxis: {
        type: "datetime",
        range: XAXISRANGE,
    },
    yaxis: {
        max: 100,
    },
    legend: {
        show: false,
    },
};

var chart9 = new ApexCharts(document.querySelector("#chart9"), options9);
chart9.render();

var intervalRuns = 0;
var interval = window.setInterval(function () {
    intervalRuns++;
    getNewSeries(lastDate, {
        min: 10,
        max: 90,
    });

    chart9.updateSeries([
        {
            data: data,
        },
    ]);

    if (intervalRuns === 2 && window.isATest === true) {
        clearInterval(interval);
    }
}, 1000);
