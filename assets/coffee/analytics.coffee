# ------------------------------------------------------

code = '### Your Analytics Code Here ###'

# ------------------------------------------------------

_gaq = [
    ['_setAccount', code],
    ['_trackPageview']
]

do ->
    _proto = 'http://www'
    _proto = 'https://ssl' if location.protocol == 'https'

    ga = document.createElement 'script'
    ga.async = true
    ga.src = _proto + '.google-analytics.com/ga.js'

    document.getElementsByTagName('script')[0].parentNode.insertBefore(ga)
