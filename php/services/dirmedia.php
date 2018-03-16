<?php

//The directory (relative to this file) that holds the images
$dir = $_GET['dir'];

//This array will hold all the image addresses
$result = array();

//Get all the files in the specified directory


$files = scandir("../../img/".$dir);

//echo "dir = $dir<br />\n";
//print_r ($files);


if(isset($files)&&$files!= null&& $files>0 ){
    foreach($files as $file) {
        switch(ltrim(strstr($file, '.'), '.')) {

                //If the file is an image, add it to the array
            case "jpg": case "jpeg": case "png": case "gif":
                $path = "../../img/".$dir."/".$file;
                $exif = exif_read_data($path);
                $img = getImageInfo($path);
                //print_r($img);
                //exit;
                if ($exif && $exif!=false){
                    $width= $exif[COMPUTED][Width];
                    $height= $exif[COMPUTED][Height];
                }else $exifdata = "No header data found";
                //$result[] = ["dir" => $dir. "/" .$file,"width" => $width,"height" => $height,"description" => $desc,"title" => $title];
                $img['dir'] = "img/".$dir. "/" .$file;
                $img['width'] = $width;
                $img['height'] = $height;
                //$result[] = ["dir" => $dir. "/" .$file,$img];
                $result[] = $img;
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


/*FUNCTIONS BY frankyfish @ http://snipplr.com */

function getImageInfo($img) {
    $ret = array("title"=>"","description"=>"");
    if(!file_exists($img)) return $ret;
    $size = getimagesize($img, $info);
    if(!isset($info['APP13'])) return $ret;
    $iptc = iptcparse($info['APP13']);

    if(is_array($iptc["2#025"]) && count($iptc["2#025"])>0) $ret["tag"] = implode(", ", $iptc["2#025"]);
    if($iptc["2#005"][0] != null) $ret["title"] = $iptc["2#005"][0];
    if($iptc["2#080"][0] != null) $ret["author"] = $iptc["2#080"][0];
    if($iptc["2#085"][0] != null) $ret["credit"] = $iptc["2#085"][0];
    if($iptc["2#090"][0] != null) $ret["city"] = $iptc["2#090"][0];
    if($iptc["2#095"][0] != null) $ret["state"] = $iptc["2#095"][0];
    if($iptc["2#101"][0] != null) $ret["country"] = $iptc["2#101"][0];
    if($iptc["2#105"][0] != null) $ret["title"] = $iptc["2#105"][0];
    if($iptc["2#116"][0] != null) $ret["copyright"] = $iptc["2#116"][0];
    if($iptc["2#120"][0] != null) $ret["description"] = $iptc["2#120"][0];
    if($iptc["2#122"][0] != null) $ret["author"] = $iptc["2#122"][0];

    $xmp = getImageXMP($img);
    foreach($xmp as $key => $value) {
        if($value != null && $value != "") $ret[$key] = $value;
    }
    return $ret;
}

function getImageXMP($filename) {
    $file = fopen($filename, 'r');
    $source = fread($file, filesize($filename));
    $xmpdata_start = strpos($source,"<x:xmpmeta");
    $xmpdata_end = strpos($source,"</x:xmpmeta>");
    $xmplenght = $xmpdata_end-$xmpdata_start;
    $xmpdata = substr($source,$xmpdata_start,$xmplenght+12);
    fclose($file);
    $xmp_parsed = array();
    $regexps = array(
        array("name" => "copyright", "regexp" => "/<dc:rights>\s*<rdf:Alt>\s*<rdf:li xml:lang=\"x-default\">(.+)<\/rdf:li>\s*<\/rdf:Alt>\s*<\/dc:rights>/"),
        array("name" => "author", "regexp" => "/<dc:creator>\s*<rdf:Seq>\s*<rdf:li>(.+)<\/rdf:li>\s*<\/rdf:Seq>\s*<\/dc:creator>/"),
        array("name" => "title", "regexp" => "/<dc:title>\s*<rdf:Alt>\s*<rdf:li xml:lang=\"x-default\">(.+)<\/rdf:li>\s*<\/rdf:Alt>\s*<\/dc:title>/"),
        array("name" => "description", "regexp" => "/<dc:description>\s*<rdf:Alt>\s*<rdf:li xml:lang=\"x-default\">(.+)<\/rdf:li>\s*<\/rdf:Alt>\s*<\/dc:description>/"),
        array("name" => "camera model", "regexp" => "/tiff:Model=\"(.[^\"]+)\"/"),
        array("name" => "maker", "regexp" => "/tiff:Make=\"(.[^\"]+)\"/"),
        array("name" => "width", "regexp" => "/tiff:ImageWidth=\"(.[^\"]+)\"/"),
        array("name" => "height", "regexp" => "/tiff:ImageLength=\"(.[^\"]+)\"/"),
        array("name" => "exposure time", "regexp" => "/exif:ExposureTime=\"(.[^\"]+)\"/"),
        array("name" => "f number", "regexp" => "/exif:FNumber=\"(.[^\"]+)\"/"),
        array("name" => "iso", "regexp" => "/<exif:ISOSpeedRatings>\s*<rdf:Seq>\s*<rdf:li>(.+)<\/rdf:li>\s*<\/rdf:Seq>\s*<\/exif:ISOSpeedRatings>/"),
        array("name" => "focal lenght", "regexp" => "/exif:FocalLength=\"(.[^\"]+)\"/"),
        array("name" => "user comment", "regexp" => "/<exif:UserComment>\s*<rdf:Alt>\s*<rdf:li xml:lang=\"x-default\">(.+)<\/rdf:li>\s*<\/rdf:Alt>\s*<\/exif:UserComment>/"),
        array("name" => "datetime original", "regexp" => "/xmp:CreateDate=\"(.[^\"]+)\"/"),
        array("name" => "lens", "regexp" => "/aux:Lens=\"(.[^\"]+)\"/")
    );
    foreach ($regexps as $key => $k) {
        unset($r);
        preg_match ($k["regexp"], $xmpdata, $r);
        $xmp_item = @$r[1];
        if(in_array($k["name"], array("f number", "focal lenght"))) eval("\$xmp_item = ".$xmp_item.";");
        $xmp_parsed[$k["name"]] = str_replace("&#xA;", "\n", $xmp_item);
    }
    return $xmp_parsed;
}


?>
