<?PHP 

require_once 'php/Mobile_Detect.php';
$detect = new Mobile_Detect;

if ( $detect->isMobile() ) {
    echo "is mobile!";
}elseif ( $detect->isTablet() ){
    echo "is tablet, I think";
}else{
    require 'index-desktop.php' ;
}

?>