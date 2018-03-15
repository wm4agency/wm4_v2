<?php
//echo "hello world";
//The directory (relative to this file) that holds the images
$file = $_GET['file'];
$filedump = file_get_contents($filename);
echo $filedump;
/*$exif = exif_read_data($file);
$fp = fopen($file, 'rb');
echo 'EXIF Headers:' . PHP_EOL;

echo "exif = <br />\n";
print_r($exif);
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}*/
?>