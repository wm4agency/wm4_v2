<?php  
try{
    if(isset($_GET['d'])){
        $d = $_GET['d'];
        $target = $d.'.php';
    }else{$target='m-home.php';}
    if (! @include_once($target)){include_once("404.php");}
}catch (Exception $e){echo $e->getMessage();} 
?>