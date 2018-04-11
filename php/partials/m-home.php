<?php  
/* Home main structure */
ini_set('display_errors', 1);
error_reporting(E_ALL);

$title = 'WM4'; 
$localScripts = array('pagepiling','unslider');
$header = 'minimal'; 
$role = 'home';
$localclass = 'ppd';
include_once('m-head.php');
?>
<main id="panel" class="">
    <figure class="fa fa-bars m-nav-toggler">&nbsp;</figure>
    <section id="main">
        <?php include_once('m-home-main.php'); ?>
    </section>
    <section id="modelo" class="precontacto">
        <?php include_once('m-home-modelo.php'); ?>
    </section>
    <section id="contacto">
        <?php include_once('m-home-contacto.php'); ?>
    </section>
    <section id="unidades">
        <?php include_once('m-home-unidades.php'); ?>
    </section>
</main>

<?php 
include_once('m-footer.php');
?>