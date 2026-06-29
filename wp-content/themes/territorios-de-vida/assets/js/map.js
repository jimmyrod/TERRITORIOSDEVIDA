(function () {
  'use strict';

  const panel = document.querySelector('[data-map-enhanced]');
  if (!panel || !window.tdvMapConfig) {
    return;
  }

  panel.setAttribute('data-geojson-base', window.tdvMapConfig.geojsonBase || '');
})();
