// Helper function to get a CSS variable's value
function getCSSVariable(name) {
    return getComputedStyle(document.documentElement)
        .getPropertyValue(name)
        .trim();
}

// Create an object to hold CSS color variables
const colorPalette = {
    primary: getCSSVariable("--bs-primary"),
    primarySubtle: getCSSVariable("--bs-primary-bg-subtle"),
    primaryEmphasis: getCSSVariable("--bs-primary-text-emphasis"),
    success: getCSSVariable("--bs-success"),
    successSubtle: getCSSVariable("--bs-success-bg-subtle"),
    successEmphasis: getCSSVariable("--bs-success-text-emphasis"),
    info: getCSSVariable("--bs-info"),
    infoSubtle: getCSSVariable("--bs-info-bg-subtle"),
    infoEmphasis: getCSSVariable("--bs-info-text-emphasis"),
    warning: getCSSVariable("--bs-warning"),
    warningSubtle: getCSSVariable("--bs-warning-bg-subtle"),
    warningEmphasis: getCSSVariable("--bs-warning-text-emphasis"),
    danger: getCSSVariable("--bs-danger"),
    dangerSubtle: getCSSVariable("--bs-danger-bg-subtle"),
    dangerEmphasis: getCSSVariable("--bs-danger-text-emphasis"),
    secondary: getCSSVariable("--bs-secondary"),
    secondarySubtle: getCSSVariable("--bs-secondary-bg-subtle"),
    secondaryEmphasis: getCSSVariable("--bs-secondary-text-emphasis"),
    orange: getCSSVariable("--bs-orange"),
    teal: getCSSVariable("--bs-teal"),
    cyan: getCSSVariable("--bs-cyan"),
    purple: getCSSVariable("--bs-purple"),
    pink: getCSSVariable("--bs-pink"),
    yellow: getCSSVariable("--bs-yellow"),
    gray: getCSSVariable("--bs-gray"),
    light: getCSSVariable("--bs-light"),
    dark: getCSSVariable("--bs-dark"),
    white: getCSSVariable("--bs-white"),
    black: getCSSVariable("--bs-black"),
};
