<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<?php
/*
* JS libraries listing and loading
*/

$scriptsBasePath ='js/';
$scriptsCatalog = array(
    "email" => "email.js",
    "email-modal" => "email-modal.js",
    "pagepiling" => "jquery.pagepiling.js",
    "slideout" => "slideout.js",
    "odometer" => "odometer.js",
);

$scripts = array('email');

//Ask for the scripts each page should load that were declared locally on it's constructor file
if(!empty($localScripts)){$scripts=array_merge($scripts,$localScripts);}

// iterate the scripts list and echo the corresponding <script> tag
if(!empty($scripts)){
    foreach ($scripts as $script){
        $script = $scriptsBasePath.$scriptsCatalog[$script];
        echo "<script type='text/javascript' src='".$script."'></script>\n";
    }
}

?>
<script type='text/javascript' src='js/script.js'></script>