<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">

    <script>
        window.addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar(){
            window.scrollTo(0,1);
        }
    </script>

</head>
<body>
    <?php include 'header.php';?>
    <div id="banner"></div>
    <div id="works"></div>
    <div id="services"></div>
    <div id="meet"></div>
    <div id="footer"></div>

<script src="js/require.js" data-main="js/index"></script>

</body>
</html>