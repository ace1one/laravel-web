"use strict";

var options1 = {
    series: [
        {
            data: [82, 76, 73, 71, 70, 68, 67, 65, 63, 61],
        },
    ],
    chart: {
        type: "bar",
        height: 400,
    },
    colors: [colorPalette.primary],
    plotOptions: {
        bar: {
            borderRadius: 4,
            borderRadiusApplication: "end",
            horizontal: true,
        },
    },
    dataLabels: {
        enabled: false,
    },
    xaxis: {
        categories: [
            "United States",
            "China",
            "Japan",
            "Germany",
            "United Kingdom",
            "France",
            "India",
            "South Korea",
            "Brazil",
            "Canada",
        ],
    },
    title: {
        text: "Global Reading Engagement Rate (%) - 2024",
        align: "center",
    },
};

var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
chart1.render();

// Book Sales Comparison
var options2 = {
    series: [
        {
            name: "Print Books",
            data: [892, 825, 784, 756, 722, 698, 675],
        },
        {
            name: "E-Books",
            data: [485, 420, 385, 352, 310, 275, 248],
        },
    ],
    chart: {
        type: "bar",
        height: 400,
    },
    plotOptions: {
        bar: {
            horizontal: true,
            dataLabels: {
                position: "top",
            },
        },
    },
    dataLabels: {
        enabled: true,
        offsetX: -6,
        style: {
            fontSize: "12px",
            colors: ["#fff"],
        },
        formatter: function (val) {
            return val + "M";
        },
    },
    stroke: {
        show: true,
        width: 1,
        colors: ["#fff"],
    },
    colors: [colorPalette.primary, colorPalette.info],
    tooltip: {
        shared: true,
        intersect: false,
    },
    xaxis: {
        categories: [2024, 2023, 2022, 2021, 2020, 2019, 2018],
    },
    title: {
        text: "Global Book Sales by Format (Millions)",
        align: "center",
    },
};

var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
chart2.render();

// Stacked
// Book Genre Sales
var options3 = {
    series: [
        {
            name: "Fiction",
            data: [48, 45, 52, 38, 45, 39, 43],
        },
        {
            name: "Non-Fiction",
            data: [38, 35, 41, 36, 42, 31, 38],
        },
        {
            name: "Children's Books",
            data: [32, 28, 32, 30, 35, 27, 31],
        },
        {
            name: "Academic",
            data: [18, 15, 18, 17, 21, 14, 17],
        },
        {
            name: "Others",
            data: [14, 12, 14, 13, 15, 11, 13],
        },
    ],
    chart: {
        type: "bar",
        height: 400,
        stacked: true,
    },
    plotOptions: {
        bar: {
            horizontal: true,
            dataLabels: {
                total: {
                    enabled: true,
                    offsetX: 0,
                    style: {
                        fontSize: "13px",
                        fontWeight: 900,
                    },
                },
            },
        },
    },
    stroke: {
        width: 1,
        colors: ["#fff"],
    },
    title: {
        text: "Book Sales by Genre (Billion USD)",
    },
    colors: [
        colorPalette.primary,
        colorPalette.success,
        colorPalette.orange,
        colorPalette.info,
        colorPalette.teal,
    ],
    xaxis: {
        categories: [2024, 2023, 2022, 2021, 2020, 2019, 2018],
        labels: {
            formatter: function (val) {
                return val + "B";
            },
        },
    },
    yaxis: {
        title: {
            text: undefined,
        },
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + "B";
            },
        },
    },
    fill: {
        opacity: 1,
    },
    legend: {
        position: "top",
        horizontalAlign: "left",
        offsetX: 40,
    },
};

var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
chart3.render();

// Market Share Distribution
var options4 = {
    series: [
        {
            name: "Traditional Publishers",
            data: [42, 45, 48, 46, 44, 47, 43],
        },
        {
            name: "Self-Published",
            data: [15, 13, 11, 12, 14, 10, 9],
        },
        {
            name: "Independent Publishers",
            data: [25, 24, 23, 25, 26, 27, 28],
        },
        {
            name: "Digital Only",
            data: [10, 9, 8, 7, 6, 6, 5],
        },
        {
            name: "Others",
            data: [8, 9, 10, 10, 10, 10, 15],
        },
    ],
    chart: {
        type: "bar",
        height: 400,
        stacked: true,
        stackType: "100%",
    },
    plotOptions: {
        bar: {
            horizontal: true,
        },
    },
    stroke: {
        width: 1,
        colors: ["#fff"],
    },
    title: {
        text: "Book Publishing Market Share Distribution (%)",
    },
    colors: [
        colorPalette.primary,
        colorPalette.success,
        colorPalette.orange,
        colorPalette.info,
        colorPalette.teal,
    ],
    xaxis: {
        categories: [2024, 2023, 2022, 2021, 2020, 2019, 2018],
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + "%";
            },
        },
    },
    fill: {
        opacity: 1,
    },
    legend: {
        position: "top",
        horizontalAlign: "left",
        offsetX: 40,
    },
};

var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
chart4.render();

// Publishing Budget Distribution
var options5 = {
    series: [
        {
            name: "Q1 Budget",
            group: "budget",
            data: [2500, 1800, 1200, 900, 600],
        },
        {
            name: "Q1 Actual",
            group: "actual",
            data: [2300, 1650, 1100, 850, 580],
        },
        {
            name: "Q2 Budget",
            group: "budget",
            data: [2700, 2000, 1400, 1000, 700],
        },
        {
            name: "Q2 Actual",
            group: "actual",
            data: [2600, 1900, 1350, 950, 680],
        },
    ],
    chart: {
        type: "bar",
        height: 400,
        stacked: true,
    },
    stroke: {
        width: 1,
        colors: ["#fff"],
    },
    dataLabels: {
        formatter: (val) => {
            return val / 1000 + "K";
        },
    },
    plotOptions: {
        bar: {
            horizontal: true,
        },
    },
    xaxis: {
        categories: [
            "Marketing & Promotion",
            "Editorial Services",
            "Design & Production",
            "Distribution",
            "Author Events",
        ],
        labels: {
            formatter: (val) => {
                return val / 1000 + "K";
            },
        },
    },
    fill: {
        opacity: 1,
    },
    colors: [
        colorPalette.primary,
        colorPalette.success,
        colorPalette.primarySubtle,
        colorPalette.successSubtle,
    ],
    legend: {
        position: "top",
        horizontalAlign: "left",
    },
    title: {
        text: "Publishing Budget vs Actual Spending (USD)",
        align: "center",
    },
};

var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
chart5.render();

// Bar with Negative values
// Age Group Reading Distribution
var options6 = {
    series: [
        {
            name: "Male Readers",
            data: [
                4.2, 3.8, 3.6, 3.5, 3.2, 3.0, 2.8, 2.5, 2.2, 2.0, 1.8, 1.5, 1.2,
                1.0, 0.8, 0.6, 0.4, 0.2,
            ],
        },
        {
            name: "Female Readers",
            data: [
                -4.4, -4.1, -3.9, -3.7, -3.4, -3.2, -3.0, -2.7, -2.4, -2.2,
                -2.0, -1.7, -1.4, -1.2, -1.0, -0.8, -0.6, -0.3,
            ],
        },
    ],
    chart: {
        type: "bar",
        height: 400,
        stacked: true,
    },
    colors: [colorPalette.orange, colorPalette.teal],
    plotOptions: {
        bar: {
            borderRadius: 5,
            borderRadiusApplication: "end",
            borderRadiusWhenStacked: "all",
            horizontal: true,
            barHeight: "80%",
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: 1,
        colors: ["#fff"],
    },
    grid: {
        xaxis: {
            lines: {
                show: false,
            },
        },
    },
    yaxis: {
        stepSize: 1,
    },
    tooltip: {
        shared: false,
        x: {
            formatter: function (val) {
                return val;
            },
        },
        y: {
            formatter: function (val) {
                return Math.abs(val) + "%";
            },
        },
    },
    title: {
        text: "Reading Demographics by Age and Gender (2023)",
    },
    xaxis: {
        categories: [
            "65+",
            "60-64",
            "55-59",
            "50-54",
            "45-49",
            "40-44",
            "35-39",
            "30-34",
            "25-29",
            "20-24",
            "15-19",
            "10-14",
            "5-9",
            "0-4",
        ],
        title: {
            text: "Percentage of Readers",
        },
        labels: {
            formatter: function (val) {
                return Math.abs(Math.round(val)) + "%";
            },
        },
    },
};

var chart6 = new ApexCharts(document.querySelector("#chart6"), options6);
chart6.render();

// Bar with Markers - Book Industry Performance
var options7 = {
    series: [
        {
            name: "Actual Sales",
            data: [
                {
                    x: "Jan 2023",
                    y: 120,
                    goals: [
                        {
                            name: "Forecast",
                            value: 110,
                            strokeWidth: 5,
                            strokeColor: "#775DD0",
                        },
                    ],
                },
                {
                    x: "Feb 2023",
                    y: 135,
                    goals: [
                        {
                            name: "Forecast",
                            value: 125,
                            strokeWidth: 5,
                            strokeColor: "#775DD0",
                        },
                    ],
                },
                {
                    x: "Mar 2023",
                    y: 150,
                    goals: [
                        {
                            name: "Forecast",
                            value: 140,
                            strokeWidth: 5,
                            strokeColor: "#775DD0",
                        },
                    ],
                },
                {
                    x: "Apr 2023",
                    y: 130,
                    goals: [
                        {
                            name: "Forecast",
                            value: 135,
                            strokeWidth: 5,
                            strokeColor: "#775DD0",
                        },
                    ],
                },
                {
                    x: "May 2023",
                    y: 160,
                    goals: [
                        {
                            name: "Forecast",
                            value: 155,
                            strokeWidth: 5,
                            strokeColor: "#775DD0",
                        },
                    ],
                },
                {
                    x: "Jun 2023",
                    y: 145,
                    goals: [
                        {
                            name: "Forecast",
                            value: 140,
                            strokeWidth: 5,
                            strokeColor: "#775DD0",
                        },
                    ],
                },
            ],
        },
    ],
    chart: {
        height: 400,
        type: "bar",
    },
    plotOptions: {
        bar: {
            horizontal: true,
        },
    },
    colors: [colorPalette.primary],
    dataLabels: {
        formatter: function (val, opt) {
            const goals =
                opt.w.config.series[opt.seriesIndex].data[opt.dataPointIndex]
                    .goals;

            if (goals && goals.length) {
                return `${val}M / ${goals[0].value}M`;
            }
            return val + "M";
        },
    },
    title: {
        text: "Monthly Global Smartphone Sales Performance 2023 (Million Units)",
        align: "center",
    },
    legend: {
        show: true,
        showForSingleSeries: true,
        customLegendItems: ["Actual Sales", "Sales Forecast"],
        markers: {
            fillColors: [colorPalette.primary, colorPalette.primarySubtle],
        },
    },
};

var chart7 = new ApexCharts(document.querySelector("#chart7"), options7);
chart7.render();


// Reversed Bar chart
// Reversed Bar Chart - Most Sold Books by Month

var options8 = {
    series: [
        {
            data: [850, 780, 730, 690, 620, 580, 550], // Number of copies sold
        },
    ],
    chart: {
        type: "bar",
        height: 400,
    },
    title: {
        text: "Bestselling Books and Their Sales",
        align: "center",
        style: {
            fontSize: "16px",
            fontWeight: "bold",
        },
        offsetY: 10,
    },
    annotations: {
        xaxis: [
            {
                x: 700, // Threshold for bestsellers
                borderColor: "#00E396",
                label: {
                    borderColor: "#00E396",
                    style: {
                        color: "#fff",
                        background: "#00E396",
                    },
                    text: "Bestseller Threshold",
                },
            },
        ],
        yaxis: [
            {
                y: "July",
                y2: "September",
                label: {
                    text: "High Sales Period",
                    style: {
                        fontSize: "12px",
                        fontWeight: "bold",
                    },
                    position: "right",
                    offsetY: 10,
                    offsetX: 100,
                },
            },
        ],
    },
    plotOptions: {
        bar: {
            horizontal: true,
        },
    },
    dataLabels: {
        enabled: true,
    },
    xaxis: {
        categories: [
            "Atomic Habits",
            "The Psychology of Money",
            "The Alchemist",
            "1984",
            "Sapiens",
            "Ikigai",
            "The Subtle Art of Not Giving a F*ck",
        ],
    },
    grid: {
        xaxis: {
            lines: {
                show: true,
            },
        },
    },
    yaxis: {
        reversed: true,
        axisTicks: {
            show: true,
        },
    },
};

var chart8 = new ApexCharts(document.querySelector("#chart8"), options8);
chart8.render();

// Custom DataLabels Bar

var options9 = {
    series: [{
    data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
  }],
    chart: {
    type: 'bar',
    height: 380
  },
  plotOptions: {
    bar: {
      barHeight: '100%',
      distributed: true,
      horizontal: true,
      dataLabels: {
        position: 'bottom'
      },
    }
  },
  colors: [
    colorPalette.primary,
    colorPalette.warning,
    colorPalette.success,
    colorPalette.danger,
    colorPalette.purple,
    colorPalette.teal,
    colorPalette.pink,
    colorPalette.info,
    colorPalette.orange,
    colorPalette.yellow,
  ],
  dataLabels: {
    enabled: true,
    textAnchor: 'start',
    style: {
      colors: ['#fff']
    },
    formatter: function (val, opt) {
      return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val
    },
    offsetX: 0,
    dropShadow: {
      enabled: false
    }
  },
  stroke: {
    width: 1,
    colors: ['#fff']
  },
  xaxis: {
    categories: [
            "To Kill a Mockingbird",
            "1984",
            "The Great Gatsby",
            "Pride and Prejudice",
            "The Catcher in the Rye",
            "The Hobbit",
            "Moby Dick",
            "Harry Potter",
            "The Lord of the Rings",
            "The Alchemist",
    ],
  },
  yaxis: {
    labels: {
      show: false
    }
  },
  title: {
      text: 'Top Selling Books',
      align: 'center',
      floating: true
  },
  subtitle: {
      text: 'Book Titles as DataLabels inside bars',
      align: 'center',
  },
  tooltip: {
    theme: 'dark',
    x: {
      show: false
    },
    y: {
      title: {
        formatter: function () {
          return ''
        }
      }
    }
  }
  };

  var chart9 = new ApexCharts(document.querySelector("#chart9"), options9);
  chart9.render();

// Patterned

var options10 = {
    series: [
        {
            name: "Atomic Habits",
            data: [80, 85, 90, 95, 100, 110, 120],
        },
        {
            name: "The Psychology of Money",
            data: [75, 78, 82, 85, 90, 95, 105],
        },
        {
            name: "The Alchemist",
            data: [60, 65, 70, 75, 80, 85, 95],
        },
        {
            name: "Sapiens",
            data: [55, 60, 65, 70, 78, 80, 88],
        },
    ],
    chart: {
        type: "bar",
        height: 350,
        stacked: true,
        dropShadow: {
            enabled: true,
            blur: 1,
            opacity: 0.5,
        },
    },
    plotOptions: {
        bar: {
            horizontal: true,
            barHeight: "60%",
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: 2,
    },
    title: {
        text: "Bestselling Books Sales Over the Years",
    },
    xaxis: {
        categories: [2017, 2018, 2019, 2020, 2021, 2022, 2023],
    },
    yaxis: {
        title: {
            text: undefined,
        },
    },
    tooltip: {
        shared: false,
        y: {
            formatter: function (val) {
                return val + "K";
            },
        },
    },
    colors: [
        colorPalette.success,
        colorPalette.orange,
        colorPalette.info,
        colorPalette.teal,
    ],
    fill: {
        type: "pattern",
        opacity: 1,
        pattern: {
            style: [
                "circles",
                "slantedLines",
                "verticalLines",
                "horizontalLines",
            ],
        },
    },
    states: {
        hover: {
            filter: "none",
        },
    },
    legend: {
        position: "right",
        offsetY: 40,
    },
};

var chart10 = new ApexCharts(document.querySelector("#chart10"), options10);
chart10.render();

// Bar with Images

var options11 = {
    series: [
        {
            name: "Copies Sold (Millions)",
            data: [
                50, 40, 35, 33, 30, 28, 27, 25, 24, 22, 20, 19, 18, 17, 16, 15,
                14, 13, 12.5, 12, 11.5, 11, 10.5, 10, 9.5, 9, 8.5, 8, 7.5, 7,
                6.5, 6,
            ],
        },
    ],
    chart: {
        type: "bar",
        height: 400,
        animations: {
            enabled: false,
        },
    },
    plotOptions: {
        bar: {
            horizontal: true,
            barHeight: "100%",
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        colors: ["#fff"],
        width: 0.2,
    },
    labels: [
        "Don Quixote",
        "A Tale of Two Cities",
        "The Lord of the Rings",
        "Harry Potter and the Sorcerer's Stone",
        "And Then There Were None",
        "Dream of the Red Chamber",
        "The Hobbit",
        "She: A History of Adventure",
        "The Little Prince",
        "The Da Vinci Code",
        "The Catcher in the Rye",
        "The Alchemist",
        "Harry Potter and the Chamber of Secrets",
        "Harry Potter and the Prisoner of Azkaban",
        "Harry Potter and the Goblet of Fire",
        "Harry Potter and the Order of the Phoenix",
        "Harry Potter and the Half-Blood Prince",
        "Harry Potter and the Deathly Hallows",
        "The Lion, the Witch and the Wardrobe",
        "The Adventures of Pinocchio",
        "The Hobbit (Reprint)",
        "Alice's Adventures in Wonderland",
        "Anne of Green Gables",
        "Black Beauty",
        "The Name of the Rose",
        "Charlotte’s Web",
        "The Tale of Peter Rabbit",
        "One Hundred Years of Solitude",
        "The Very Hungry Caterpillar",
        "The Secret",
        "Angels & Demons",
        "To Kill a Mockingbird",
    ],
    yaxis: {
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        labels: {
            show: false,
        },
        title: {
            text: "Books",
        },
    },
    grid: {
        position: "back",
    },
    title: {
        text: "Bestselling Books of All Time (Copies Sold in Millions)",
        align: "right",
        offsetY: 30,
    },
    fill: {
        type: "image",
        opacity: 0.87,
        image: {
            src: ["../../img/apexcharts/apexchart_bar.jpg"],
            width: 466,
            height: 400,
        },
    },
};

var chart11 = new ApexCharts(document.querySelector("#chart11"), options11);
chart11.render();
