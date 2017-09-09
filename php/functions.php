<?PHP 
// Sniff browser via Mobile Detect Library
require_once 'php/Mobile_Detect.php';
$detect = new Mobile_Detect;

//Serve the coherent content
//if ( $detect->isMobile() ) {
//    require 'index-mobile.php';
//}elseif ( $detect->isTablet() ){
//    require 'index-mobile.php';
//}else{
//    require 'index-desktop.php' ;
//}
require 'index-desktop.php' ;

?>