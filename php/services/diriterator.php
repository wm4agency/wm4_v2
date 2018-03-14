<?php

//The directory (relative to this file) that holds the images
$dir = $_GET['dir'];

//This array will hold all the image addresses
$result = array();

//Get all the files in the specified directory


$files = scandir("../../".$dir);


if(isset($files)&&$files!= null&& $files>0 ){
    foreach($files as $file) {

        switch(ltrim(strstr($file, '.'), '.')) {

                //If the file is an image, add it to the array
            case "jpg": case "jpeg":case "png":case "gif":

                $result[] = $dir . "/" . $file;

        }
    }

    //Convert the array into JSON
    $diritems = json_encode($result);

    //Output the JSON object
    //This is what the AJAX request will see
    echo($diritems);
}
else{
    echo(null);
}

?>
