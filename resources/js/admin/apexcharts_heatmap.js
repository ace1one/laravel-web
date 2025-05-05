"use strict";

function generateData(count, yrange) {
    var i = 0;
    var series = [];
    while (i < count) {
        var x = "w" + (i + 1).toString();
        var y =
            Math.floor(Math.random() * (yrange.max - yrange.min + 1)) +
            yrange.min;

        series.push({
            x: x,
            y: y,
        });
        i++;
    }
    return series;
}

var data = [
    { name: "Java", data: [90, 88, 85, 83, 80, 77, 75, 72, 70, 68, 65, 62, 60, 58, 55, 52] },
    { name: "JavaScript", data: [80, 82, 85, 87, 89, 91, 92, 94, 96, 97, 98, 99, 100, 100, 100, 100] },
    { name: "Python", data: [50, 55, 60, 65, 70, 75, 80, 85, 90, 93, 95, 97, 98, 99, 99, 100] },
    { name: "PHP", data: [85, 82, 78, 75, 72, 68, 65, 60, 55, 50, 45, 40, 38, 35, 33, 30] },
    { name: "Swift", data: [0, 0, 20, 50, 70, 75, 78, 80, 82, 83, 84, 85, 85, 86, 86, 86] },
    { name: "TypeScript", data: [0, 0, 10, 20, 30, 50, 60, 70, 80, 85, 88, 90, 93, 95, 96, 97] },
    { name: "Kotlin", data: [0, 0, 0, 20, 50, 70, 75, 78, 80, 82, 84, 85, 85, 85, 85, 85] },
    { name: "Rust", data: [0, 0, 0, 10, 20, 30, 50, 60, 70, 75, 80, 82, 84, 85, 86, 87] },
    { name: "R", data: [40, 45, 50, 55, 60, 65, 70, 72, 74, 75, 75, 74, 73, 72, 70, 68] },
];


data.reverse();

var colors = [
    colorPalette.primary,
    colorPalette.success,
    colorPalette.warning,
    colorPalette.info,
    colorPalette.danger,
    colorPalette.teal,
    colorPalette.orange,
    colorPalette.cyan,
    colorPalette.purple,
    colorPalette.pink,
    colorPalette.yellow,
    colorPalette.cyan,
    colorPalette.teal,
    colorPalette.secondary,
    colorPalette.dark,
    colorPalette.orange,
];

colors.reverse();


// basic
var options1 = {
    series: [
        {
            name: "Monday",
            data: generateData(18, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Tuesday",
            data: generateData(18, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Wednesday",
            data: generateData(18, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Thursday",
            data: generateData(18, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Friday",
            data: generateData(18, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Saturday",
            data: generateData(18, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Sunday",
            data: generateData(18, {
                min: 0,
                max: 90,
            }),
        },
        
    ],
    chart: {
        height: 350,
        type: "heatmap",
    },
    dataLabels: {
        enabled: false,
    },
    colors: [colorPalette.primary],
    title: {
        text: "Git Code Contribution",
    },
};

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
chart1.render();

// multiple color for each series
var options2 = {
    series: data,
    chart: {
        height: 350,
        type: "heatmap",
    },
    dataLabels: {
        enabled: false,
    },
    colors: colors,
    xaxis: {
        type: "category",
        categories: [
            "2010",
            "2011",
            "2012",
            "2013",
            "2014",
            "2015",
            "2016",
            "2017",
            "2018",
            "2019",
            "2020",
            "2021",
            "2022",
            "2023",
            "2024",
        ],
    },
    title: {
        text: "Language Popularity (over the last 15 years)",
    },
    grid: {
        padding: {
            right: 20,
        },
    },
};

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();



// color range

var options3 = {
    series: [
        {
            name: "Jan",
            data: generateData(20, {
                min: -30,
                max: 55,
            }),
        },
        {
            name: "Feb",
            data: generateData(20, {
                min: -30,
                max: 55,
            }),
        },
        {
            name: "Mar",
            data: generateData(20, {
                min: -30,
                max: 55,
            }),
        },
        {
            name: "Apr",
            data: generateData(20, {
                min: -30,
                max: 55,
            }),
        },
        {
            name: "May",
            data: generateData(20, {
                min: -30,
                max: 55,
            }),
        },
        {
            name: "Jun",
            data: generateData(20, {
                min: -30,
                max: 55,
            }),
        },
        {
            name: "Jul",
            data: generateData(20, {
                min: -30,
                max: 55,
            }),
        },
        {
            name: "Aug",
            data: generateData(20, {
                min: -30,
                max: 55,
            }),
        },
        {
            name: "Sep",
            data: generateData(20, {
                min: -30,
                max: 55,
            }),
        },
    ],
    chart: {
        height: 350,
        type: "heatmap",
    },
    plotOptions: {
        heatmap: {
            shadeIntensity: 0.5,
            radius: 0,
            useFillColorAsStroke: true,
            colorScale: {
                ranges: [
                    {
                        from: -30,
                        to: 5,
                        name: "low",
                        color: colorPalette.warning,
                    },
                    {
                        from: 6,
                        to: 20,
                        name: "medium",
                        color: colorPalette.dangerSubtle,
                    },
                    {
                        from: 21,
                        to: 45,
                        name: "high",
                        color: colorPalette.danger,
                    },
                    {
                        from: 46,
                        to: 55,
                        name: "extreme",
                        color: colorPalette.dangerEmphasis,
                    },
                ],
            },
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: 1,
    },
    title: {
        text: "HeatMap Chart with Color Range",
    },
};

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();

// rounded (without shades)
var options4 = {
    series: [
        {
            name: "Metric1",
            data: generateData(20, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Metric2",
            data: generateData(20, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Metric3",
            data: generateData(20, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Metric4",
            data: generateData(20, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Metric5",
            data: generateData(20, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Metric6",
            data: generateData(20, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Metric7",
            data: generateData(20, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Metric8",
            data: generateData(20, {
                min: 0,
                max: 90,
            }),
        },
        {
            name: "Metric8",
            data: generateData(20, {
                min: 0,
                max: 90,
            }),
        },
    ],
    chart: {
        height: 350,
        type: "heatmap",
    },
    stroke: {
        width: 0,
    },
    plotOptions: {
        heatmap: {
            radius: 30,
            enableShades: false,
            colorScale: {
                ranges: [
                    {
                        from: 0,
                        to: 50,
                        color: colorPalette.primary,
                    },
                    {
                        from: 51,
                        to: 100,
                        color: colorPalette.success,
                    },
                ],
            },
        },
    },
    dataLabels: {
        enabled: true,
        style: {
            colors: ["#fff"],
        },
    },
    xaxis: {
        type: "category",
    },
    title: {
        text: "Rounded (Range without Shades)",
    },
};

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();
