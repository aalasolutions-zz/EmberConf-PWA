'use strict';

module.exports = function (/* environment, appConfig */) {
  // See https://zonkyio.github.io/ember-web-app for a list of
  // supported properties

  return {
    name: 'Ember Conf - PWA',
    short_name: 'EmberPWA',
    description: '',
    start_url: '/',
    scope: '/',
    display: 'fullscreen',
    background_color: '#f00',
    theme_color: '#0f0',
    orientation: 'portrait',
    icons: [
      {
        src: '/assets/logo.png',
        sizes: '512x512',
        type: 'image/png',
      },
    ],
    ms: {
      tileColor: '#0f0',
    },
  };
};
