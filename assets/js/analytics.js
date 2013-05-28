(function() {
  var code, _gaq;

  code = '### Your Analytics Code Here ###';

  _gaq = [['_setAccount', code], ['_trackPageview']];

  (function() {
    var ga, _proto;

    _proto = 'http://www';
    if (location.protocol === 'https') {
      _proto = 'https://ssl';
    }
    ga = document.createElement('script');
    ga.async = true;
    ga.src = _proto + '.google-analytics.com/ga.js';
    return document.getElementsByTagName('script')[0].parentNode.insertBefore(ga);
  })();

}).call(this);
