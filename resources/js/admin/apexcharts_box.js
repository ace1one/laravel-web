"use strict";

// basic
var options1 = {
    series: [
        {
            type: "boxPlot",
            data: [
                {
                    x: "Jan 2015",
                    y: [54, 66, 69, 75, 88],
                },
                {
                    x: "Jan 2016",
                    y: [43, 65, 69, 76, 81],
                },
                {
                    x: "Jan 2017",
                    y: [31, 39, 45, 51, 59],
                },
                {
                    x: "Jan 2018",
                    y: [39, 46, 55, 65, 71],
                },
                {
                    x: "Jan 2019",
                    y: [29, 31, 35, 39, 44],
                },
                {
                    x: "Jan 2020",
                    y: [41, 49, 58, 61, 67],
                },
                {
                    x: "Jan 2021",
                    y: [54, 59, 66, 71, 88],
                },
            ],
        },
    ],
    chart: {
        type: "boxPlot",
        height: 350,
    },
    title: {
        text: "Basic BoxPlot Chart",
        align: "left",
    },
    plotOptions: {
        boxPlot: {
            colors: {
                upper: colorPalette.primary,
                lower: colorPalette.primarySubtle,
            },
        },
    },
};

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
chart1.render();

// box-plot scatter

var options2 = {
    series: [
        {
            name: "box",
            type: "boxPlot",
            data: [
                {
                    x: new Date("2017-01-01").getTime(),
                    y: [54, 66, 69, 75, 88],
                },
                {
                    x: new Date("2018-01-01").getTime(),
                    y: [43, 65, 69, 76, 81],
                },
                {
                    x: new Date("2019-01-01").getTime(),
                    y: [31, 39, 45, 51, 59],
                },
                {
                    x: new Date("2020-01-01").getTime(),
                    y: [39, 46, 55, 65, 71],
                },
                {
                    x: new Date("2021-01-01").getTime(),
                    y: [29, 31, 35, 39, 44],
                },
            ],
        },
        {
            name: "outliers",
            type: "scatter",
            data: [
                {
                    x: new Date("2017-01-01").getTime(),
                    y: 32,
                },
                {
                    x: new Date("2018-01-01").getTime(),
                    y: 25,
                },
                {
                    x: new Date("2019-01-01").getTime(),
                    y: 64,
                },
                {
                    x: new Date("2020-01-01").getTime(),
                    y: 27,
                },
                {
                    x: new Date("2020-01-01").getTime(),
                    y: 78,
                },
                {
                    x: new Date("2021-01-01").getTime(),
                    y: 15,
                },
            ],
        },
    ],
    chart: {
        type: "boxPlot",
        height: 350,
    },
    colors: [colorPalette.success, colorPalette.successSubtle],
    title: {
        text: "BoxPlot - Scatter Chart",
        align: "left",
    },
    xaxis: {
        type: "datetime",
        tooltip: {
            formatter: function (val) {
                return new Date(val).getFullYear();
            },
        },
    },
    tooltip: {
        shared: false,
        intersect: true,
    },
    plotOptions: {
        boxPlot: {
            colors: {
                upper: colorPalette.success,
                lower: colorPalette.successSubtle,
            },
        },
    },
};

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

// horizontal box plot

var options3 = {
    series: [
        {
            data: [
                {
                    x: "Category A",
                    y: [54, 66, 69, 75, 88],
                },
                {
                    x: "Category B",
                    y: [43, 65, 69, 76, 81],
                },
                {
                    x: "Category C",
                    y: [31, 39, 45, 51, 59],
                },
                {
                    x: "Category D",
                    y: [39, 46, 55, 65, 71],
                },
                {
                    x: "Category E",
                    y: [29, 31, 35, 39, 44],
                },
                {
                    x: "Category F",
                    y: [41, 49, 58, 61, 67],
                },
                {
                    x: "Category G",
                    y: [54, 59, 66, 71, 88],
                },
            ],
        },
    ],
    chart: {
        type: "boxPlot",
        height: 350,
    },
    title: {
        text: "Horizontal BoxPlot Chart",
        align: "left",
    },
    plotOptions: {
        bar: {
            horizontal: true,
            barHeight: "50%",
        },
        boxPlot: {
            colors: {
                upper: colorPalette.secondary,
                lower: colorPalette.secondarySubtle,
            },
        },
    },
    stroke: {
        colors: ["#6c757d"],
    },
};

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();
