"use strict";

// basic
var options1 = {
    series: [70],
    chart: {
        height: 350,
        type: "radialBar",
    },
    plotOptions: {
        radialBar: {
            hollow: {
                size: "70%",
            },
        },
    },
    labels: ["Cricket"],
};

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
chart1.render();

// multiple
var options2 = {
    series: [44, 55, 67, 83],
    chart: {
        height: 350,
        type: "radialBar",
    },
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: "22px",
                },
                value: {
                    fontSize: "16px",
                },
                total: {
                    show: true,
                    label: "Total",
                    formatter: function (w) {
                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                        return 249;
                    },
                },
            },
        },
    },
    labels: ["Apples", "Oranges", "Bananas", "Berries"],
};

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

// custom-angle-circle
var options3 = {
    series: [76, 67, 61, 90],
    chart: {
        height: 390,
        type: "radialBar",
    },
    plotOptions: {
        radialBar: {
            offsetY: 0,
            startAngle: 0,
            endAngle: 270,
            hollow: {
                margin: 5,
                size: "30%",
                background: "transparent",
                image: undefined,
            },
            dataLabels: {
                name: {
                    show: false,
                },
                value: {
                    show: false,
                },
            },
            barLabels: {
                enabled: true,
                useSeriesColors: true,
                margin: 8,
                fontSize: "16px",
                formatter: function (seriesName, opts) {
                    return (
                        seriesName +
                        ":  " +
                        opts.w.globals.series[opts.seriesIndex]
                    );
                },
            },
        },
    },
    colors: ["#1ab7ea", "#0084ff", "#39539E", "#0077B5"],
    labels: ["Vimeo", "Messenger", "Facebook", "LinkedIn"],
    responsive: [
        {
            breakpoint: 480,
            options: {
                legend: {
                    show: false,
                },
            },
        },
    ],
};

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();

// Gradient

var options4 = {
    series: [75],
    chart: {
        height: 350,
        type: "radialBar",
        toolbar: {
            show: true,
        },
    },
    plotOptions: {
        radialBar: {
            startAngle: -135,
            endAngle: 225,
            hollow: {
                margin: 0,
                size: "70%",
                background: "#fff",
                image: undefined,
                imageOffsetX: 0,
                imageOffsetY: 0,
                position: "front",
                dropShadow: {
                    enabled: true,
                    top: 3,
                    left: 0,
                    blur: 4,
                    opacity: 0.24,
                },
            },
            track: {
                background: "#fff",
                strokeWidth: "67%",
                margin: 0, // margin is in pixels
                dropShadow: {
                    enabled: true,
                    top: -3,
                    left: 0,
                    blur: 4,
                    opacity: 0.35,
                },
            },

            dataLabels: {
                show: true,
                name: {
                    offsetY: -10,
                    show: true,
                    color: "#888",
                    fontSize: "17px",
                },
                value: {
                    formatter: function (val) {
                        return parseInt(val);
                    },
                    color: "#111",
                    fontSize: "36px",
                    show: true,
                },
            },
        },
    },
    fill: {
        type: "gradient",
        gradient: {
            shade: "dark",
            type: "horizontal",
            shadeIntensity: 0.5,
            gradientToColors: [colorPalette.success],
            inverseColors: true,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100],
        },
    },
    stroke: {
        lineCap: "round",
    },
    labels: ["Percent"],
};

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();

// radial bars with image

var options5 = {
    series: [67],
    chart: {
        height: 350,
        type: "radialBar",
    },
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 15,
                size: "70%",
                image: "../../img/apexcharts/clock.png",
                imageWidth: 64,
                imageHeight: 64,
                imageClipped: false,
            },
            dataLabels: {
                name: {
                    show: false,
                    color: "#fff",
                },
                value: {
                    show: true,
                    color: "#333",
                    offsetY: 70,
                    fontSize: "22px",
                },
            },
        },
    },
    fill: {
        type: "image",
        image: {
            src: ["../../img/apexcharts/apexchart_bar.jpg"],
        },
    },
    stroke: {
        lineCap: "round",
    },
    labels: ["Volatility"],
};

var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
chart5.render();

// stroked gauge

var options6 = {
    series: [67],
    chart: {
        height: 350,
        type: "radialBar",
        offsetY: -10,
    },
    plotOptions: {
        radialBar: {
            startAngle: -135,
            endAngle: 135,
            dataLabels: {
                name: {
                    fontSize: "16px",
                    color: undefined,
                    offsetY: 120,
                },
                value: {
                    offsetY: 76,
                    fontSize: "22px",
                    color: undefined,
                    formatter: function (val) {
                        return val + "%";
                    },
                },
            },
        },
    },
    fill: {
        type: "gradient",
        gradient: {
            shade: "dark",
            shadeIntensity: 0.15,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 65, 91],
        },
    },
    stroke: {
        dashArray: 4,
    },
    labels: ["Median Ratio"],
};

var chart6 = new ApexCharts(document.querySelector("#chart6"), options6);
chart6.render();

// semi circle gauge
var options7 = {
    series: [76],
    chart: {
        type: "radialBar",
        offsetY: -20,
        sparkline: {
            enabled: true,
        },
    },
    plotOptions: {
        radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
                background: colorPalette.gray,
                strokeWidth: "97%",
                margin: 5, // margin is in pixels
                dropShadow: {
                    enabled: true,
                    top: 2,
                    left: 0,
                    color: colorPalette.gray,
                    opacity: 1,
                    blur: 2,
                },
            },
            dataLabels: {
                name: {
                    show: false,
                },
                value: {
                    offsetY: -2,
                    fontSize: "22px",
                },
            },
        },
    },
    grid: {
        padding: {
            top: -10,
        },
    },
    fill: {
        type: "gradient",
        gradient: {
            shade: "light",
            shadeIntensity: 0.4,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 53, 91],
        },
    },
    labels: ["Average Results"],
};

var chart7 = new ApexCharts(document.querySelector("#chart7"), options7);
chart7.render();
