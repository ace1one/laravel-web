// Ensure ApexCharts is available before overriding defaults
if (typeof Apex !== "undefined") {
    Apex.chart = {
      fontFamily: getCSSVariable("--bs-font-sans-serif") || "Inter, sans-serif", // Use Bootstrap font
      foreColor: getCSSVariable("--bs-body-color") || "#333" // Text color from Bootstrap
    };
  
    Apex.colors = [
      colorPalette.primary,
      colorPalette.success,
      colorPalette.warning,
      colorPalette.danger,
      colorPalette.info,
      colorPalette.dark,
    ];
  }