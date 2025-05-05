"use strict";
// basic line chart
var options1 = {
    series: [
        {
            name: "Spotify MAU",
            data: [489, 515, 551, 574, 606, 645, 675], // in millions
        },
    ],
    chart: {
        height: 350,
        type: "line",
        zoom: {
            enabled: false,
        },
    },
    dataLabels: {
        enabled: true,
        formatter: function (val) {
            return val + "M";
        },
    },
    stroke: {
        curve: "smooth",
    },
    colors: [colorPalette.info],
    title: {
        text: "Spotify Monthly Active Users (in Millions)",
        align: "left",
    },
    grid: {
        row: {
            colors: ["#f3f3f3", "transparent"],
            opacity: 0.5,
        },
    },
    xaxis: {
        categories: [
            "Q1 2023",
            "Q2 2023",
            "Q3 2023",
            "Q4 2023",
            "Q1 2024",
            "Q2 2024",
            "Q3 2024",
        ],
    },
    yaxis: {
        min: 400,
        max: 700,
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " Million Users";
            },
        },
    },
};

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);

chart1.render();

// Line chart with data labels
var options2 = {
    series: [
        {
            name: "Samsung",
            data: [60.2, 62.5, 63.0, 65.0],
        },
        {
            name: "Apple",
            data: [58.0, 57.5, 56.0, 55.0],
        },
        {
            name: "Xiaomi",
            data: [40.0, 41.0, 42.0, 43.0],
        },
    ],
    chart: {
        height: 350,
        type: "line",
        dropShadow: {
            enabled: true,
            color: "#000",
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.5,
        },
        zoom: {
            enabled: false,
        },
        toolbar: {
            show: false,
        },
    },
    colors: [colorPalette.info, colorPalette.orange, colorPalette.success],
    dataLabels: {
        enabled: true,
        formatter: function (val) {
            return val + "M";
        },
    },
    stroke: {
        curve: "smooth",
    },
    title: {
        text: "Smartphone Sales by Quarter in 2024",
        align: "left",
    },
    grid: {
        borderColor: "#e7e7e7",
        row: {
            colors: ["#f3f3f3", "transparent"],
            opacity: 0.5,
        },
    },
    markers: {
        size: 4,
    },
    xaxis: {
        categories: ["Q1", "Q2", "Q3", "Q4"],
        title: {
            text: "Quarter",
        },
    },
    yaxis: {
        title: {
            text: "Sales (in millions)",
        },
        min: 30,
        max: 70,
        labels: {
            formatter: function (val) {
                return val + "M";
            },
        },
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " Million";
            },
        },
    },
    legend: {
        position: "top",
        horizontalAlign: "right",
        floating: true,
        offsetY: -25,
        offsetX: -5,
    },
};
var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

// Zoomable Timeseries

var options3 = {
    series: [
        {
            name: "Samsung",
            data: [
                { x: "2024-01-01", y: 20.8 },
                { x: "2024-04-01", y: 19.5 },
                { x: "2024-07-01", y: 18.0 },
                { x: "2024-10-01", y: 19.0 },
            ],
        },
        {
            name: "Apple",
            data: [
                { x: "2024-01-01", y: 20.0 },
                { x: "2024-04-01", y: 18.5 },
                { x: "2024-07-01", y: 17.0 },
                { x: "2024-10-01", y: 18.0 },
            ],
        },
        {
            name: "Xiaomi",
            data: [
                { x: "2024-01-01", y: 14.1 },
                { x: "2024-04-01", y: 14.5 },
                { x: "2024-07-01", y: 15.0 },
                { x: "2024-10-01", y: 14.8 },
            ],
        },
    ],
    chart: {
        type: "area",
        stacked: false,
        height: 350,
        zoom: {
            type: "x",
            enabled: true,
            autoScaleYaxis: true,
        },
        toolbar: {
            autoSelected: "zoom",
        },
    },
    dataLabels: {
        enabled: false,
    },
    markers: {
        size: 0,
    },
    title: {
        text: "Global Smartphone Market Share Trends in 2024",
        align: "left",
    },
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            inverseColors: false,
            opacityFrom: 0.5,
            opacityTo: 0,
            stops: [0, 90, 100],
        },
    },
    yaxis: {
        labels: {
            formatter: function (val) {
                return val.toFixed(1) + "%";
            },
        },
        title: {
            text: "Market Share (%)",
        },
    },
    xaxis: {
        type: "datetime",
        title: {
            text: "Quarter",
        },
    },
    tooltip: {
        shared: false,
        y: {
            formatter: function (val) {
                return val.toFixed(1) + "%";
            },
        },
    },
};

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();

// Line with annotation

var options4 = {
    series: [
        {
            name: "Global Mobile Data Traffic",
            data: [
                { x: new Date("2017-01-01").getTime(), y: 9.68 },
                { x: new Date("2018-01-01").getTime(), y: 20.0 },
                { x: new Date("2019-01-01").getTime(), y: 39.56 },
                { x: new Date("2020-01-01").getTime(), y: 60.0 },
                { x: new Date("2021-01-01").getTime(), y: 84.16 },
                { x: new Date("2022-01-01").getTime(), y: 100.0 },
                { x: new Date("2023-01-01").getTime(), y: 130.0 },
                { x: new Date("2024-01-01").getTime(), y: 152.14 },
            ],
        },
    ],
    chart: {
        height: 350,
        type: "line",
        id: "mobile-data-traffic-chart",
    },
    annotations: {
        yaxis: [
            {
                y: 100,
                borderColor: "#00E396",
                label: {
                    borderColor: "#00E396",
                    style: {
                        color: "#fff",
                        background: "#00E396",
                    },
                    text: "100 EB Threshold",
                },
            },
        ],
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        curve: "straight",
    },
    grid: {
        padding: {
            right: 30,
            left: 20,
        },
    },
    title: {
        text: "Global Mobile Data Traffic (2017-2024)",
        align: "left",
    },
    xaxis: {
        type: "datetime",
        title: {
            text: "Year",
        },
    },
    yaxis: {
        title: {
            text: "Data Traffic (Exabytes)",
        },
    },
    tooltip: {
        x: {
            format: "yyyy",
        },
        y: {
            formatter: function (val) {
                return val + " EB";
            },
        },
    },
};

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();

// Brush Chart

function generateDayWiseTimeSeries(baseval, count, yrange) {
    var i = 0;
    var series = [];
    while (i < count) {
        var x = baseval;
        var y =
            Math.floor(
                (Math.random() * (yrange.max - yrange.min + 1) * i) / count
            ) + yrange.min;

        series.push([x, y]);
        baseval += 86400000;
        i++;
    }
    return series;
}

var data1 = generateDayWiseTimeSeries(new Date("11 Feb 2017").getTime(), 185, {
    min: 20,
    max: 100,
});
var data2 = generateDayWiseTimeSeries(new Date("11 Feb 2017").getTime(), 185, {
    min: 5,
    max: 50,
});

var options5 = {
    series: [
        {
            name: "Flies",
            data: data1,
        },
        {
            name: "Spiders",
            data: data2,
        },
    ],
    chart: {
        id: "chart2",
        type: "line",
        height: 230,
        dropShadow: {
            enabled: true,
            enabledOnSeries: [1],
        },
        toolbar: {
            autoSelected: "pan",
            show: false,
        },
    },
    colors: [colorPalette.info, colorPalette.teal],
    stroke: {
        width: 3,
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: [2, 6],
        curve: ["straight", "monotoneCubic"],
    },
    fill: {
        opacity: [1, 0.75],
    },
    markers: {
        size: 0,
    },
    yaxis: [
        {
            seriesName: "Flies",
            axisTicks: {
                show: true,
                color: colorPalette.info,
            },
            axisBorder: {
                show: true,
                color: colorPalette.info,
            },
            labels: {
                style: {
                    colors: colorPalette.info,
                },
            },
            title: {
                text: "Flies",
                style: {
                    color: colorPalette.info,
                },
            },
        },
        {
            seriesName: "Spiders",
            opposite: true,
            axisTicks: {
                show: true,
                color: colorPalette.teal,
            },
            axisBorder: {
                show: true,
                color: colorPalette.teal,
            },
            labels: {
                style: {
                    colors: colorPalette.teal,
                },
            },
            title: {
                text: "Spiders",
                style: {
                    color: colorPalette.teal,
                },
            },
        },
    ],
    xaxis: {
        type: "datetime",
    },
};

var chart5 = new ApexCharts(document.querySelector("#chart-line2"), options5);
chart5.render();

var optionsLine = {
    series: [
        {
            name: "Flies",
            data: data1,
        },
        {
            name: "Spiders",
            data: data2,
        },
    ],
    chart: {
        id: "chart1",
        height: 130,
        type: "area",
        brush: {
            target: "chart2",
            enabled: true,
        },
        selection: {
            enabled: true,
            xaxis: {
                min: new Date("24 April 2017").getTime(),
                max: new Date("29 May 2017").getTime(),
            },
        },
    },
    colors: ["#008FFB", "#00E396"],
    stroke: {
        width: [1, 3],
        curve: ["straight", "monotoneCubic"],
    },
    fill: {
        type: "gradient",
        gradient: {
            opacityFrom: 0.91,
            opacityTo: 0.1,
        },
    },
    xaxis: {
        type: "datetime",
        tooltip: {
            enabled: false,
        },
    },
    yaxis: {
        max: 100,
        tickAmount: 2,
    },
};

var chartLine = new ApexCharts(
    document.querySelector("#chart-line"),
    optionsLine
);
chartLine.render();

// Step line chart

var options6 = {
    series: [
        {
            name: "Apple Sales",
            data: [30, 45, 55, 60, 40, 70, 80, 75, 85, 90, 95, 100],
        },
        {
            name: "Samsung Sales",
            data: [40, 50, 45, 65, 55, 60, 85, 80, 75, 85, 95, 110],
        },
        {
            name: "Xiaomi Sales",
            data: [25, 35, 40, 50, 45, 55, 65, 70, 75, 80, 85, 95],
        },
    ],
    chart: {
        type: "line",
        height: 350,
    },
    stroke: {
        curve: "stepline", // Creates the step-like effect
        width: 3,
    },
    dataLabels: {
        enabled: false,
    },
    title: {
        text: "Monthly Smartphone Sales (2024)",
        align: "left",
    },
    markers: {
        hover: {
            sizeOffset: 4,
        },
    },
    xaxis: {
        categories: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ],
        title: {
            text: "Months",
        },
    },
    yaxis: {
        title: {
            text: "Units Sold (in Thousands)",
        },
        labels: {
            formatter: function (val) {
                return val + "K";
            },
        },
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + "K Units";
            },
        },
    },
    colors: [colorPalette.info, colorPalette.success, colorPalette.orange],
};

var chart6 = new ApexCharts(document.querySelector("#chart6"), options6);
chart6.render();

// Gradient Line

var options7 = {
    series: [
        {
            name: "Apple Sales",
            data: [
                20, 25, 30, 35, 40, 38, 42, 48, 50, 52, 55, 60, 63, 65, 70, 72,
                75, 80,
            ],
        },
        {
            name: "Samsung Sales",
            data: [
                18, 22, 28, 33, 36, 35, 40, 45, 47, 50, 53, 58, 60, 63, 68, 70,
                72, 78,
            ],
        },
        {
            name: "Xiaomi Sales",
            data: [
                15, 18, 22, 26, 30, 28, 32, 35, 38, 40, 43, 47, 50, 52, 55, 58,
                60, 65,
            ],
        },
    ],
    chart: {
        height: 350,
        type: "line",
    },
    forecastDataPoints: {
        count: 5, // Forecasting last 5 months
    },
    stroke: {
        width: 4,
        curve: "smooth",
    },
    xaxis: {
        type: "datetime",
        categories: [
            "1/11/2023",
            "2/11/2023",
            "3/11/2023",
            "4/11/2023",
            "5/11/2023",
            "6/11/2023",
            "7/11/2023",
            "8/11/2023",
            "9/11/2023",
            "10/11/2023",
            "11/11/2023",
            "12/11/2023",
            "1/11/2024",
            "2/11/2024",
            "3/11/2024",
            "4/11/2024",
            "5/11/2024",
            "6/11/2024",
        ],
        tickAmount: 10,
        labels: {
            formatter: function (value, timestamp, opts) {
                return opts.dateFormatter(new Date(timestamp), "MMM yyyy");
            },
        },
        title: {
            text: "Month & Year",
        },
    },
    yaxis: {
        title: {
            text: "Sales (in millions)",
        },
        labels: {
            formatter: function (val) {
                return val + "M";
            },
        },
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " Million";
            },
        },
    },
    title: {
        text: "Smartphone Sales Forecast",
        align: "left",
        style: {
            fontSize: "16px",
            color: colorPalette.dark,
        },
    },
    fill: {
        type: "gradient",
        gradient: {
            shade: "dark",
            gradientToColors: [colorPalette.warning],
            shadeIntensity: 1,
            type: "vertical",
            opacityFrom: 0.8,
            opacityTo: 0.2,
            stops: [0, 100, 100, 100],
        },
    },
    colors: [colorPalette.info, colorPalette.success, colorPalette.orange],
};

var chart7 = new ApexCharts(document.querySelector("#chart7"), options7);
chart7.render();

// Missing/Null Values
var options8 = {
    series: [
        {
            name: "Apple Shipments (in millions)",
            data: [
                70,
                72,
                75,
                80,
                null,
                null,
                85,
                88,
                90,
                null,
                95,
                100,
                102,
                105,
                null,
                110,
            ],
        },
        {
            name: "Samsung Shipments (in millions)",
            data: [
                78,
                80,
                82,
                null,
                null,
                87,
                89,
                91,
                92,
                null,
                null,
                98,
                100,
                102,
                105,
                null,
            ],
        },
        {
            name: "Xiaomi Shipments (in millions)",
            data: [
                null,
                null,
                40,
                45,
                50,
                55,
                60,
                62,
                null,
                65,
                70,
                75,
                null,
                null,
                78,
                80,
            ],
        },
    ],
    chart: {
        height: 350,
        type: "line",
        zoom: {
            enabled: false,
        },
        animations: {
            enabled: false,
        },
    },
    stroke: {
        width: [5, 5, 4],
        curve: "smooth",
    },
    labels: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
        "Jan (Next Yr)",
        "Feb",
        "Mar",
        "Apr",
    ],
    title: {
        text: "Smartphone Shipments Over Time (with Missing Data)",
    },
    xaxis: {
        title: {
            text: "Months",
        },
    },
};

var chart8 = new ApexCharts(document.querySelector("#chart8"), options8);
chart8.render();

// don't use options9 because it's already used in line_realtimechart.js

// Dashed Line

var options10 = {
    series: [
        {
            name: "Average Screen Time (mins/day)",
            data: [180, 200, 220, 210, 190, 250, 230, 240, 210, 200, 220, 205],
        },
        {
            name: "App Usage (Apps Opened/day)",
            data: [15, 18, 20, 25, 22, 30, 28, 32, 29, 31, 27, 25],
        },
        {
            name: "Total Mobile Sessions",
            data: [95, 110, 120, 115, 105, 140, 135, 130, 125, 120, 118, 110],
        },
    ],
    chart: {
        height: 350,
        type: "line",
        zoom: {
            enabled: false,
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: [4, 4, 4],
        curve: "smooth",
        dashArray: [0, 8, 5],
    },
    title: {
        text: "Daily Mobile Usage Trends",
        align: "left",
        style: {
            fontSize: "16px",
            fontWeight: "bold",
        },
    },
    legend: {
        position: "top",
        horizontalAlign: "center",
    },
    markers: {
        size: 5,
    },
    xaxis: {
        categories: [
            "01 Mar",
            "02 Mar",
            "03 Mar",
            "04 Mar",
            "05 Mar",
            "06 Mar",
            "07 Mar",
            "08 Mar",
            "09 Mar",
            "10 Mar",
            "11 Mar",
            "12 Mar",
        ],
    },
    yaxis: {
        title: {
            text: "Usage Metrics",
        },
        labels: {
            formatter: function (val) {
                return val.toFixed(0);
            },
        },
    },
    tooltip: {
        y: {
            formatter: function (value, { seriesIndex }) {
                if (seriesIndex === 0) return value + " mins";
                if (seriesIndex === 1) return value + " apps";
                return value + " sessions";
            },
        },
    },
    grid: {
        borderColor: "#f1f1f1",
    },
};

var chart10 = new ApexCharts(document.querySelector("#chart10"), options10);
chart10.render();

// Synchronized Charts
{
    // Global Apex Configuration
    Apex.grid = {
        clipMarkers: false,
    };
    Apex.yaxis = {
        tickAmount: 2,
    };
    Apex.tooltip = {
        followCursor: false,
        theme: "dark",
    };
    Apex.chart = {
        height: 160,
    };
    Apex.stroke = {
        curve: "smooth",
    };
    Apex.dataLabels = {
        enabled: false,
    };
    Apex.toolbar = {
        tools: {
            selection: false,
        },
    };
    Apex.markers = {
        size: 6,
        hover: {
            size: 10,
        },
    };

    //  Chart 1 (Line Chart)
    var chart11_1 = new ApexCharts(document.querySelector("#chart-line3"), {
        series: [
            {
                data: generateDayWiseTimeSeries(
                    new Date("11 Feb 2025").getTime(),
                    20,
                    { min: 10, max: 60 }
                ),
            },
        ],
        chart: {
            id: "fb",
            group: "social",
            type: "line",
            height: 160,
        },
        xaxis: {
            type: "datetime",
            labels: {
                format: "dd MMM yyyy",
                rotate: -45,
                datetimeUTC: false,
            },
        },
        colors: [colorPalette.info],
    });
    chart11_1.render();

    // Chart 2 (Line Chart)
    var chart11_2 = new ApexCharts(document.querySelector("#chart-line4"), {
        series: [
            {
                data: generateDayWiseTimeSeries(
                    new Date("11 Feb 2025").getTime(),
                    20,
                    { min: 10, max: 30 }
                ),
            },
        ],
        chart: {
            id: "tw",
            group: "social",
            type: "line",
            height: 160,
        },
        xaxis: {
            type: "datetime",
            labels: {
                format: "dd MMM yyyy",
                rotate: -45,
                datetimeUTC: false,
            },
        },
        colors: [colorPalette.infoSubtle],
    });
    chart11_2.render();

    // Chart 3 (Area Chart)
    var chart11_3 = new ApexCharts(document.querySelector("#chart-area"), {
        series: [
            {
                data: generateDayWiseTimeSeries(
                    new Date("11 Feb 2025").getTime(),
                    20,
                    { min: 10, max: 60 }
                ),
            },
        ],
        chart: {
            id: "yt",
            group: "social",
            type: "area",
            height: 160,
        },
        xaxis: {
            type: "datetime",
            labels: {
                format: "dd MMM yyyy",
                rotate: -45,
                datetimeUTC: false,
            },
        },
        colors: [colorPalette.teal],
    });
    chart11_3.render();

    // Chart 4 (Small Area Chart)
    var chart11_4 = new ApexCharts(document.querySelector("#chart-small"), {
        series: [
            {
                data: generateDayWiseTimeSeries(
                    new Date("11 Feb 2025").getTime(),
                    20,
                    { min: 10, max: 60 }
                ),
            },
        ],
        chart: {
            id: "ig",
            group: "social",
            type: "area",
            height: 160,
            width: 300,
        },
        xaxis: {
            type: "datetime",
            labels: {
                format: "dd MMM yyyy",
                rotate: -45,
                datetimeUTC: false,
            },
        },
        colors: [colorPalette.infoSubtle],
    });
    chart11_4.render();

    // Chart 5 (Small Area Chart)
    var chart11_5 = new ApexCharts(document.querySelector("#chart-small2"), {
        series: [
            {
                data: generateDayWiseTimeSeries(
                    new Date("11 Feb 2025").getTime(),
                    20,
                    { min: 10, max: 60 }
                ),
            },
        ],
        chart: {
            id: "li",
            group: "social",
            type: "area",
            height: 160,
            width: 300,
        },
        xaxis: {
            type: "datetime",
            labels: {
                format: "dd MMM yyyy",
                rotate: -45,
                datetimeUTC: false,
            },
        },
        colors: [colorPalette.info],
    });
    chart11_5.render();
}
