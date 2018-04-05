<?php  
$d = $_GET['d'];
$target = $d.'.php';

!$d && $target='m-home.php';
if (! @include_once($target)){include_once("404.php");}
if (! @include_once('m-footer.php')){echo "couldn't include footer<br /> \n";}

?>