"use strict";

// basic

var options1 = {
    series: [
        {
            name: "Series 1",
            data: [80, 50, 30, 40, 100, 20],
        },
    ],
    chart: {
        height: 350,
        type: "radar",
    },
    title: {
        text: "Basic Radar Chart",
    },
    yaxis: {
        stepSize: 20,
    },
    xaxis: {
        categories: ["January", "February", "March", "April", "May", "June"],
    },
};

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
chart1.render();

// radar multiple-series
var options2 = {
    series: [
        {
            name: "Series 1",
            data: [80, 50, 30, 40, 100, 20],
        },
        {
            name: "Series 2",
            data: [20, 30, 40, 80, 20, 80],
        },
        {
            name: "Series 3",
            data: [44, 76, 78, 13, 43, 10],
        },
    ],
    chart: {
        height: 350,
        type: "radar",
        dropShadow: {
            enabled: true,
            blur: 1,
            left: 1,
            top: 1,
        },
    },
    title: {
        text: "Radar Chart - Multi Series",
    },
    stroke: {
        width: 2,
    },
    fill: {
        opacity: 0.1,
    },
    markers: {
        size: 0,
    },
    yaxis: {
        stepSize: 20,
    },
    xaxis: {
        categories: ["2011", "2012", "2013", "2014", "2015", "2016"],
    },
};

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

// radar with polygon-fill

var options3 = {
    series: [
        {
            name: "Series 1",
            data: [20, 100, 40, 30, 50, 80, 33],
        },
    ],
    chart: {
        height: 350,
        type: "radar",
    },
    dataLabels: {
        enabled: true,
    },
    plotOptions: {
        radar: {
            size: 140,
            polygons: {
                strokeColors: "#e9e9e9",
                fill: {
                    colors: ["#f8f8f8", "#fff"],
                },
            },
        },
    },
    title: {
        text: "Radar with Polygon Fill",
    },
    colors: [colorPalette.danger],
    markers: {
        size: 4,
        colors: ["#fff"],
        strokeColor: colorPalette.danger,
        strokeWidth: 2,
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val;
            },
        },
    },
    xaxis: {
        categories: [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
        ],
    },
    yaxis: {
        labels: {
            formatter: function (val, i) {
                if (i % 2 === 0) {
                    return val;
                } else {
                    return "";
                }
            },
        },
    },
};

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();
