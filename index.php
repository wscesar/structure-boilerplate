<?php include 'inc/controller.php'; ?>

<!doctype html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1280">
    <?=$metas?>

    <title><?=$title?></title>

    <!-- Base Link -->
    <base href="">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico">

    <!-- Css -->
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    

    <!-- Js -->
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>

    <!-- Analytics -->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '### YOUR-CODE-HERE ###']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

</body>
</html>