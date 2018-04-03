<?php  
$d = $_GET['d'];
$target = $d.'.php';

!$d && $target='home.php';
if (! @include_once($target)){include_once("404.php");}
if (! @include_once('php/components/modal_contacto.php')){echo "couldn't include modal";}
if (! @include_once('footer.php')){echo "couldn't include modal";}

?>