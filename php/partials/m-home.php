<?php  
/* Home main structure */
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
    <section id="modelo">
        <?php include_once('m-home-modelo.php'); ?>
    </section>
    <section id="contacto">
        <?php include_once('m-home-contacto.php'); ?>
    </section>
</main>

<?php 
include_once('m-footer.php');
?>