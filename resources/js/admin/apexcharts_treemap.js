"use strict";

// basic
var options1 = {
    series: [
        {
            data: [
                {
                    x: "New Delhi",
                    y: 218,
                },
                {
                    x: "Kolkata",
                    y: 149,
                },
                {
                    x: "Mumbai",
                    y: 184,
                },
                {
                    x: "Ahmedabad",
                    y: 55,
                },
                {
                    x: "Bangaluru",
                    y: 84,
                },
                {
                    x: "Pune",
                    y: 31,
                },
                {
                    x: "Chennai",
                    y: 70,
                },
                {
                    x: "Jaipur",
                    y: 30,
                },
                {
                    x: "Surat",
                    y: 44,
                },
                {
                    x: "Hyderabad",
                    y: 68,
                },
                {
                    x: "Lucknow",
                    y: 28,
                },
                {
                    x: "Indore",
                    y: 19,
                },
                {
                    x: "Kanpur",
                    y: 29,
                },
            ],
        },
    ],
    legend: {
        show: false,
    },
    chart: {
        height: 350,
        type: "treemap",
    },
    title: {
        text: "Basic Treemap",
    },
};

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
chart1.render();

// multiple series
var options2 = {
    series: [
        {
            name: "Desktops",
            data: [
                {
                    x: "ABC",
                    y: 10,
                },
                {
                    x: "DEF",
                    y: 60,
                },
                {
                    x: "XYZ",
                    y: 41,
                },
            ],
        },
        {
            name: "Mobile",
            data: [
                {
                    x: "ABCD",
                    y: 10,
                },
                {
                    x: "DEFG",
                    y: 20,
                },
                {
                    x: "WXYZ",
                    y: 51,
                },
                {
                    x: "PQR",
                    y: 30,
                },
                {
                    x: "MNO",
                    y: 20,
                },
                {
                    x: "CDE",
                    y: 30,
                },
            ],
        },
    ],
    legend: {
        show: false,
    },
    chart: {
        height: 350,
        type: "treemap",
    },
    title: {
        text: "Multi-dimensional Treemap",
        align: "center",
    },
};

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

// color range
var options3 = {
    series: [
        {
            data: [
                {
                    x: "INTC",
                    y: 1.2,
                },
                {
                    x: "GS",
                    y: 0.4,
                },
                {
                    x: "CVX",
                    y: -1.4,
                },
                {
                    x: "GE",
                    y: 2.7,
                },
                {
                    x: "CAT",
                    y: -0.3,
                },
                {
                    x: "RTX",
                    y: 5.1,
                },
                {
                    x: "CSCO",
                    y: -2.3,
                },
                {
                    x: "JNJ",
                    y: 2.1,
                },
                {
                    x: "PG",
                    y: 0.3,
                },
                {
                    x: "TRV",
                    y: 0.12,
                },
                {
                    x: "MMM",
                    y: -2.31,
                },
                {
                    x: "NKE",
                    y: 3.98,
                },
                {
                    x: "IYT",
                    y: 1.67,
                },
            ],
        },
    ],
    legend: {
        show: false,
    },
    chart: {
        height: 350,
        type: "treemap",
    },
    title: {
        text: "Treemap with Color scale",
    },
    dataLabels: {
        enabled: true,
        style: {
            fontSize: "12px",
        },
        formatter: function (text, op) {
            return [text, op.value];
        },
        offsetY: -4,
    },
    plotOptions: {
        treemap: {
            enableShades: true,
            shadeIntensity: 0.5,
            // reverseNegativeShade: true,
            colorScale: {
                ranges: [
                    {
                        from: 0.001,
                        to: 6,
                        color: colorPalette.success,
                    },
                    {
                        from: 0.001,
                        to: 6,
                        color: colorPalette.warning,
                    },
                ],
            },
        },
    },
};

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();

// distributed

var options4 = {
    series: [
        {
            data: [
                {
                    x: "New Delhi",
                    y: 218,
                },
                {
                    x: "Kolkata",
                    y: 149,
                },
                {
                    x: "Mumbai",
                    y: 184,
                },
                {
                    x: "Ahmedabad",
                    y: 55,
                },
                {
                    x: "Bangaluru",
                    y: 84,
                },
                {
                    x: "Pune",
                    y: 31,
                },
                {
                    x: "Chennai",
                    y: 70,
                },
                {
                    x: "Jaipur",
                    y: 30,
                },
                {
                    x: "Surat",
                    y: 44,
                },
                {
                    x: "Hyderabad",
                    y: 68,
                },
                {
                    x: "Lucknow",
                    y: 28,
                },
                {
                    x: "Indore",
                    y: 19,
                },
                {
                    x: "Kanpur",
                    y: 29,
                },
            ],
        },
    ],
    legend: {
        show: false,
    },
    chart: {
        height: 350,
        type: "treemap",
    },
    title: {
        text: "Distibuted Treemap (different color for each cell)",
        align: "center",
    },
    colors: [
        colorPalette.primary,
        colorPalette.warning,
        colorPalette.info,
        colorPalette.danger,
        colorPalette.success,
        colorPalette.orange,
        colorPalette.pink,
        colorPalette.yellow,
        colorPalette.cyan,
        colorPalette.teal,
        colorPalette.purple,
    ],
    plotOptions: {
        treemap: {
            distributed: true,
            enableShades: false,
        },
    },
};

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();
