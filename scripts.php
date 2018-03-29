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
    "photoswipe" => ["photoswipe.js","photoswipe-ui-default.js"],
    "unslider" => "unslider.js"
);

$scripts = array('email');

//Ask for the scripts each page should load that were declared locally on it's constructor file
if(!empty($localScripts)){$scripts=array_merge($scripts,$localScripts);}
// iterate the scripts list and echo the corresponding <script> tag
if(!empty($scripts)){
    foreach ($scripts as $script){
        $script = $scriptsCatalog[$script];
        if (is_array($script)){
            foreach($script as $component){
                $scriptPath = $scriptsBasePath.$component;
                echo "<script type='text/javascript' src='".$scriptPath."'></script>\n";
            }
        }else{
            $scriptPath = $scriptsBasePath.$script;
            echo "<script type='text/javascript' src='".$scriptPath."'></script>\n";
        }
    }
}

?>
<script type='text/javascript' src='js/script.js'></script>