<?php  
$title = 'WM4'; 
$localScripts = array('pagepiling','unslider');
$header = 'full'; 
$role = 'home';
$localclass = 'ppd';
include 'header-desktop.php'; 
?>

<div id="pagepiling">
    <section id="home"><?php include 'php/partials/home_main.php'; ?></section>
    <section id="modelo"><?php include 'php/partials/home_modelo.php'; ?></section>
    <section id="contacto"></section>
</div>    
<?php 
    require_once('php/components/modal_contacto.php');
    include 'footer.php'; 
?>