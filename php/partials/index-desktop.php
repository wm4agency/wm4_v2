<?php  
    $target_destination = $_GET['d'];
    !$target_destination?$target_destination='undefined':$target_destination=$target_destination;
    echo $target_destination."<br>\n ";

/*function getContents($target_file){
    if (!file_exists($target_file))
        throw new Exception ('target file does not exists, can´t retrieve content');
    else
        require_once($target_file); 
}*/

/*switch ($target_destination){
    case "marketing-digital":
        //echo 'case "marketing-digital" <br />\n';
        echo getContents('marketing-digital.php');
        break;
    default: 
        echo 'no destination';
        break;
}*/
    /*switch ($target_destination){
        case "marketing-digital":
            //getContents('marketing-digital.php');
            $target_file='marketing-digita.php';
            if (!file_exists($target_file))
                throw new Exception ('target file does not exists, can´t retrieve content');
            else
                require_once($target_file); 
            catch(Exception $e) {    
                echo "Message : " . $e->getMessage();
                echo "Code : " . $e->getCode();
            }
            break;
        default: 
            getContents('home.php');
            break;
    }*/

$target_file='marketing-digita.php';
if (! @include_once($target_file)){
    echo "fuck!<br> \n";
    throw new Exception ("target file does not exists, can´t retrieve content");
}
else
    require_once($target_file);
catch(Exception $e) {    
    echo "Message : " . $e->getMessage();
    echo "Code : " . $e->getCode();
}
echo "fuck twice!";

    require_once('../components/modal_contacto.php');
    include 'footer.php'; 
?>