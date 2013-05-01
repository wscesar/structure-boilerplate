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

    <?php

        // Your code here…

    ?>


    <!-- Js -->
    <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>

    <!-- Analytics -->
    <script>

        _gaq = [['_setAccount', '### Your Analytics Code Here ###'], ['_trackPageview']];

        (function() {
            var ga = document.createElement('script');
                ga.async = true;
                ga.src = (location.protocol == 'https:' ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            document.getElementsByTagName('script')[0].parentNode.insertBefore(ga);
        })();

    </script>

</body>
</html>