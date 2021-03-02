'use strict';
let browsers;

if (process.env.CORBER) {
  browsers = [`last 1 ${process.env.CORBER_PLATFORM} versions`];
} else {
  browsers = [
    'last 1 Chrome versions',
    'last 1 Firefox versions',
    'last 1 Safari versions',
  ];
}

const isCI = Boolean(process.env.CI);
const isProduction = process.env.EMBER_ENV === 'production';

if (isCI || isProduction) {
  browsers.push('ie 11');
}

module.exports = {
  browsers,
};
