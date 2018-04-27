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
    
    <!-- Google Tag Manager dataLayer-->
    <script>
        dataLayer = [];
    </script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                                                          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                                })(window,document,'script','dataLayer','GTM-M7Q6HD8');
    </script>
    <!-- End Google Tag Manager -->
    
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/base.css">

<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

</head>
    <body class="desktop <?php echo $role; echo " "; echo $localclass; ?>">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7Q6HD8"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
     <div id="preloader" class="se-pre-con"></div>
    <?php  if ($header == 'full'): ?>
    <header class="centered-navigation" role="banner">
    <div class="centered-navigation-wrapper">
        <?php include 'nav_contactPoints.php'; ?>
        <?php include 'nav_sections.php'; ?>
        <div id="logostrip" class="container"><figure data-target="home" class="wm4"></figure>
    </div>

</header><!--/.container-->
    
    <?php elseif ($header == 'minimal'): ?>
    <header class="minimal-navigation fullwidth">
        <?php include 'nav_sections.php'; ?>
        <div id="logostrip" class="container"><figure data-target="home" class="logo wm4"></figure>
        </div>
        <!--<div class="hexa-tip-right"><figure>&nbsp;</figure></div>-->
    </header>
    <?php endif; ?>