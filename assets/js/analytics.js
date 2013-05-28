_gaq = [['_setAccount', 'UA-7409092-9'], ['_trackPageview']];

(function() {
    var ga = document.createElement('script');
        ga.async = true;
        ga.src = (location.protocol == 'https:' ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    document.getElementsByTagName('script')[0].parentNode.insertBefore(ga);
})();