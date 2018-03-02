<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php echo $title ?></title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#000000">
    
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/base.css">

<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script>
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
</head>
<body>

    <?php  if ($header == 'full'): ?>
    <header class="centered-navigation" role="banner">
    <div class="centered-navigation-wrapper">
        <nav role="navigation">
            <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
                <li class="nav-link">
                    <a href="https://www.google.com.mx/maps/place/Vito+Alessio+Robles+101,+Agr%C3%ADcola,+Chimalistac,+01030+Ciudad+de+M%C3%A9xico,+CDMX/@19.3511402,-99.1850127,17z/data=!4m5!3m4!1s0x85d1fff0e0e33ca7:0x4355e17e0a3580dd!8m2!3d19.351135!4d-99.182824?hl=en"><span class="fa fa-map-marker"></span></a>
                </li>
                <li class="nav-link"><a href="javascript:void(0)"><span class="fa fa-phone"></span></a></li>
                <li class="nav-link"><a href="mailto:contacto@wm4.mx"><span class="fa fa-envelope"></span></a></li>
                <li class="nav-link logo">
                    <a class="logo">
                        <div id="contacto_head"><span>contacto</span></div>
                    </a>
                </li>
                <li class="nav-link"><a href="https://twitter.com/wm4mx"><span class="fa fa-twitter"></span></a></li>
                <li class="nav-link"><a href="https://www.facebook.com/webmedia4/?fref=ts"><span class="fa fa-facebook"></span></a></li>
                <li class="nav-link"><a href="https://www.instagram.com/wm4agency/"><span class="fa fa-instagram"></span></a></li>
            </ul>
        </nav>
    </div>

</header><!--/.container-->
    
    <?php elseif ($header == 'minimal'): ?>
    <header class="minimal-navigation fullwidth">
        <nav class="container">
            <ul class="nav-left span-3">
                <li>home</li>
            </ul>
            <ul class="nav-right span-9 omega">
                <li>marketing político</li>
                <li>marketing deportivo</li>
                <li>agencia</li>
                <li>contacto</li>
            </ul>
        </nav>
        <div class="container"><figure class="logo"><a href="index.php"><img src="img/wm4.png"></a></figure></div>
        <div class="hexa-tip-right"><figure>&nbsp;</figure></div>
    </header>
    <?php endif; ?>