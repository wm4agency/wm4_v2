<?php 
    // Sniff browser via Mobile Detect Library
    require_once 'php/f.php';
    require_once 'php/Mobile_Detect.php';
    $detect = new Mobile_Detect;

    //Serve the coherent content
    if ( $detect->isMobile() ) {
        require_once('php/partials/index-mobile.php');
    }elseif ( $detect->isTablet() ){
        require_once('php/partials/index-mobile.php');
    }else{
        require_once('php/partials/index-desktop.php');
    }
?>