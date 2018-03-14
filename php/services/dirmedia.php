<?php
//The directory (relative to this file) that holds the images
$dir = $_GET['dir'];

//This array will hold all the image addresses
$result = array();

//Get all the files in the specified directory


$files = scandir("../../".$dir);

//echo "dir = $dir<br />\n";
//print_r ($files);


if(isset($files)&&$files!= null&& $files>0 ){
    foreach($files as $file) {
        switch(ltrim(strstr($file, '.'), '.')) {

                //If the file is an image, add it to the array
            case "jpg": case "jpeg": case "png": case "gif":
                $path = "../../".$dir."/".$file;
                $exif = exif_read_data($path,'IFD0');
                if ($exif && $exif!=false){
                    $width= $exif[COMPUTED][Width];
                    $height= $exif[COMPUTED][Height];
                    $desc= $exif[ImageDescription];
                }else $exifdata = "No header data found";
                $result[] = ["dir" => $dir. "/" .$file,"width" => $width,"height" => $height,"description" => $desc,];
        }
    }

    //Convert the array into JSON
    $diritems = json_encode($result);

    //Output the JSON object
    //This is what the AJAX request will see
    print_r($diritems);
}
else{
    echo(null);
}

?>
