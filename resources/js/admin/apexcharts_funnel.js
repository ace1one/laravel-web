"use strict";

// funnel
var options1 = {
    series: [
        {
            name: "Funnel Series",
            data: [1380, 1100, 990, 880, 740, 548, 330, 200],
        },
    ],
    chart: {
        type: "bar",
        height: 350,
    },
    plotOptions: {
        bar: {
            borderRadius: 0,
            horizontal: true,
            barHeight: "80%",
            isFunnel: true,
        },
    },
    dataLabels: {
        enabled: true,
        formatter: function (val, opt) {
            return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val;
        },
        dropShadow: {
            enabled: true,
        },
    },
    title: {
        text: "Recruitment Funnel",
        align: "middle",
    },
    xaxis: {
        categories: [
            "Sourced",
            "Screened",
            "Assessed",
            "HR Interview",
            "Technical",
            "Verify",
            "Offered",
            "Hired",
        ],
    },
    legend: {
        show: false,
    },
};

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
chart1.render();

// marslow hierarchy of needs (pyramid)

var options2 = {
    series: [
        {
            name: "Needs",
            data: [740, 880, 990, 1100, 1380],
        },
    ],
    chart: {
        type: "bar",
        height: 350,
    },
    plotOptions: {
        bar: {
            borderRadius: 0,
            horizontal: true,
            distributed: true,
            barHeight: "80%",
            isFunnel: true,
        },
    },
    colors: [
        colorPalette.danger,
        colorPalette.orange,
        colorPalette.warning,
        colorPalette.info,
        colorPalette.success,
    ],
    dataLabels: {
        enabled: true,
        formatter: function (val, opt) {
            return opt.w.globals.labels[opt.dataPointIndex] + " Needs";
        },
        dropShadow: {
            enabled: false,
        },
    },
    title: {
        text: "Marslow Hierarchy of Needs",
        align: "middle",
    },
    xaxis: {
        categories: [
            "Self-actualization",
            "Esteem",
            "Love and belonging",
            "Safety",
            "Physiological",
        ],
    },
    legend: {
        show: false,
    },
    tooltip: {
        enabled: false,
    },
};

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();
