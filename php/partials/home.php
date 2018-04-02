<?
/* Home main structure */
$title = 'WM4'; 
$localScripts = array('pagepiling','unslider');
$header = 'full'; 
$role = 'home';
$localclass = 'ppd';
include 'header-desktop.php'; 

?>
<div id="pagepiling">
    <section id="home"><?php include 'home_main.php'; ?></section>
    <section id="modelo"><?php include 'home_modelo.php'; ?></section>
    <section id="contacto"></section>
</div>    