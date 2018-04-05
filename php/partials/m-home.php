<?php  
/* Home main structure */
$title = 'WM4'; 
$localScripts = array('pagepiling','unslider');
$header = 'minimal'; 
$role = 'home';
$localclass = 'ppd';
if (! @include_once('m-head.php')){echo "couldn't include html head";}
if (! @include_once('m-headers.php')){echo "couldn't include header";}
?>


<?php include "m-footer.php"; ?>