<?PHP 

require_once 'php/Mobile_Detect.php';
$detect = new Mobile_Detect;

if ( $detect->isMobile() ) {
    require 'index-mobile.php';
}elseif ( $detect->isTablet() ){
    require 'index-mobile.php';
}else{
    require 'index-desktop.php' ;
}

?>