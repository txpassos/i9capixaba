// v3.1.0
//Docs at http://simpleweatherjs.com
$(document).ready(function() {
  $.simpleWeather({
    location: 'Rio Branco, AC',
    woeid: '',
    unit: 'C',
    success: function(weather) {
      html = '<h2><i class="icom-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      html += '<span class="white-text">'+weather.city+', '+weather.region+'</span>';

      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});
