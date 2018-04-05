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
        <?php if (! @include_once('m-home-main.php')){ throw new Exception("couldn't include main home section");}?>
    </section>
    <section id="modelo">
        <?php if (! @include_once('m-home-modelo.php')){ throw new Exception("couldn't include 'modelo' home section");}?>
    </section>
    <section id="contacto">
        <?php if (! @include_once('m-home-contacto.php')){ throw new Exception("couldn't include 'contacto' home section");}?>
    </section>
</main>

<?php 
include_once('m-footer.php');
?>