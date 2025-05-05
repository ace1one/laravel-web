"use strict";

// Simple Pie
var options1 = {
    series: [44, 55, 13, 43, 22],
    chart: {
        width: 380,
        height: 350,
        type: "pie",
    },
    colors: [
        colorPalette.primary,
        colorPalette.orange,
        colorPalette.success,
        colorPalette.info,
        colorPalette.warning,
    ],
    labels: ["Marketing", "Development", "Sales", "Support", "Operations"],
    responsive: [
        {
            breakpoint: 480,
            options: {
                chart: {
                    width: 200,
                },
                legend: {
                    position: "bottom",
                },
            },
        },
    ],
};

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
chart1.render();

// Simple Donut
var options2 = {
    series: [44, 55, 41, 17, 15],
    chart: {
        type: "donut",
    },
    title: {
        text: "Segmented Data by Series Numbers",
    },
    colors: [
        colorPalette.primary,
        colorPalette.orange,
        colorPalette.success,
        colorPalette.info,
        colorPalette.warning,
    ],
    plotOptions: {
        pie: {
            donut: {
                size: "45%",
            },
        },
    },
    responsive: [
        {
            breakpoint: 420,
            options: {
                chart: {
                    width: 200,
                },
                legend: {
                    position: "bottom",
                },
            },
        },
    ],
};

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

// update donut
var options3 = {
    series: [44, 55, 13, 33],
    chart: {
        width: 380,
        type: "donut",
    },
    labels: [
        "Irrigated Farming",
        "Livestock Production",
        "Agri-Tech Solutions",
        "Sustainable Agriculture",
    ],
    colors: [
        colorPalette.primary,
        colorPalette.orange,
        colorPalette.success,
        colorPalette.info,
    ],
    dataLabels: {
        enabled: false,
    },
    title: {
        text: "Agriculture Sector Breakdown",
    },
    responsive: [
        {
            breakpoint: 480,
            options: {
                chart: {
                    width: 200,
                },
                legend: {
                    show: false,
                },
            },
        },
    ],
    legend: {
        position: "right",
        offsetY: 0,
        height: 230,
    },
};

var pie_chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
pie_chart3.render();

function appendData() {
    var arr = pie_chart3.w.globals.series.slice();
    arr.push(Math.floor(Math.random() * (100 - 1 + 1)) + 1);
    return arr;
}

function removeData() {
    var arr = pie_chart3.w.globals.series.slice();
    arr.pop();
    return arr;
}

function randomize() {
    return pie_chart3.w.globals.series.map(function () {
        return Math.floor(Math.random() * (100 - 1 + 1)) + 1;
    });
}

function reset() {
    return options.series;
}

document.querySelector("#randomize").addEventListener("click", function () {
    pie_chart3.updateSeries(randomize());
});

document.querySelector("#add").addEventListener("click", function () {
    pie_chart3.updateSeries(appendData());
});

document.querySelector("#remove").addEventListener("click", function () {
    pie_chart3.updateSeries(removeData());
});

document.querySelector("#reset").addEventListener("click", function () {
    pie_chart3.updateSeries(reset());
});

// Monochrome pie

var options4 = {
    series: [25, 15, 44, 55, 41, 17],
    chart: {
        width: "100%",
        height: 350,
        type: "pie",
    },
    labels: [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
    ],
    theme: {
        monochrome: {
            enabled: true,
        },
    },
    plotOptions: {
        pie: {
            dataLabels: {
                offset: -5,
            },
        },
    },
    dataLabels: {
        formatter(val, opts) {
            const name = opts.w.globals.labels[opts.seriesIndex];
            return [name, val.toFixed(1) + "%"];
        },
    },
    legend: {
        show: false,
    },
};

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();

// Gradient Donut

var options5 = {
    series: [44, 55, 41, 17, 15],
    chart: {
        width: 380,
        type: "donut",
    },
    labels: [
        "Cloud Computing",
        "AI & Machine Learning",
        "Cybersecurity",
        "FinTech",
        "E-commerce",
    ],
    plotOptions: {
        pie: {
            startAngle: -90,
            endAngle: 270,
        },
    },
    dataLabels: {
        enabled: false,
    },
    fill: {
        type: "gradient",
    },
    legend: {
        formatter: function (val, opts) {
            return val + " - " + opts.w.globals.series[opts.seriesIndex];
        },
    },
    title: {
        text: "Technology & Business Sector Distribution",
    },
    responsive: [
        {
            breakpoint: 480,
            options: {
                chart: {
                    width: 200,
                },
                legend: {
                    position: "bottom",
                },
            },
        },
    ],
};

var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
chart5.render();

// semi pie

var options6 = {
    series: [44, 55, 41, 17, 15],
    chart: {
        type: "donut",
    },
    labels: [
        "Cloud Services",
        "AI & Automation",
        "Cybersecurity",
        "Blockchain",
        "SaaS",
    ],
    plotOptions: {
        pie: {
            startAngle: -90,
            endAngle: 90,
            offsetY: 10,
        },
    },
    grid: {
        padding: {
            bottom: -80,
        },
    },
    legend: {
        show: true,
        position: "bottom",
    },
    title: {
        text: "Tech & Business Industry Distribution",
    },
    responsive: [
        {
            breakpoint: 480,
            options: {
                chart: {
                    width: 200,
                },
                legend: {
                    position: "bottom",
                },
            },
        },
    ],
};

var chart6 = new ApexCharts(document.querySelector("#chart6"), options6);
chart6.render();

// Donut with pattern

var options7 = {
    series: [44, 55, 41, 17, 15],
    chart: {
        width: 380,
        type: "donut",
        dropShadow: {
            enabled: true,
            color: "#111",
            top: -1,
            left: 3,
            blur: 3,
            opacity: 0.2,
        },
    },
    stroke: {
        width: 0,
    },
    plotOptions: {
        pie: {
            donut: {
                labels: {
                    show: true,
                    total: {
                        showAlways: true,
                        show: true,
                    },
                },
            },
        },
    },
    labels: ["Comedy", "Action", "SciFi", "Drama", "Horror"],
    dataLabels: {
        dropShadow: {
            blur: 3,
            opacity: 0.8,
        },
    },
    fill: {
        type: "pattern",
        opacity: 1,
        pattern: {
            enabled: true,
            style: [
                "verticalLines",
                "squares",
                "horizontalLines",
                "circles",
                "slantedLines",
            ],
        },
    },
    states: {
        hover: {
            filter: "none",
        },
    },
    theme: {
        palette: "palette2",
    },
    title: {
        text: "Favourite Movie Type",
    },
    responsive: [
        {
            breakpoint: 480,
            options: {
                chart: {
                    width: 200,
                },
                legend: {
                    position: "bottom",
                },
            },
        },
    ],
};

var chart7 = new ApexCharts(document.querySelector("#chart7"), options7);
chart7.render();

// pie with image
var options8 = {
    series: [44, 33, 54, 45],
    chart: {
        width: 380,
        type: "pie",
    },
    labels: [
        "Crop Farming",
        "Dairy Farming",
        "Agroforestry",
        "Organic Farming",
    ],
    colors: ["#93C3EE", "#E5C6A0", "#669DB5", "#94A74A"],
    fill: {
        type: "image",
        opacity: 0.85,
        image: {
            src: [
                "../../img/apexcharts/stripes1.jpg",
                "../../img/apexcharts/stripes2.png",
                "../../img/apexcharts/stripes3.jpg",
                "../../img/apexcharts/stripes4.jpg",
            ],
            width: 25,
            imagedHeight: 25,
        },
    },
    stroke: {
        width: 4,
    },
    dataLabels: {
        enabled: true,
        style: {
            colors: ["#111"],
        },
        background: {
            enabled: true,
            foreColor: "#fff",
            borderWidth: 0,
        },
    },
    title: {
        text: "Agricultural Sectors Distribution",
    },
    responsive: [
        {
            breakpoint: 480,
            options: {
                chart: {
                    width: 200,
                },
                legend: {
                    position: "bottom",
                },
            },
        },
    ],
};

var chart8 = new ApexCharts(document.querySelector("#chart8"), options8);
chart8.render();
