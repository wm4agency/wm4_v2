<?php  
try{
    if(isset($_GET['d'])){
        $d = $_GET['d'];
        switch($d){
            case "Marketing-Digital":
            case "marketing-digital":
                $target ="m-mkt_d.php";
                break;
            case "Marketing-Politico":
            case "marketing-politico":
                $target ="m-mkt_p.php";
                break;
            case "Marketing-Deportivo":
            case "marketing-deportivo":
                $target ="m-mkt_s.php";
                break;
        }
    }else{$target='m-home.php';}
    if (! @include_once($target)){include_once("404.php");}
}catch (Exception $e){echo $e->getMessage();} 
?>