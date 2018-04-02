<?PHP 
// Sniff browser via Mobile Detect Library
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

//Serve the coherent content
if ( $detect->isMobile() ) {
    require 'partials/index-mobile.php';
}elseif ( $detect->isTablet() ){
    require 'partials/index-mobile.php';
}else{
    echo"is desktop!<br/>\n";
    require_once('partials/index-desktop.php');
}
/*require 'index-desktop.php' ;*/

?>