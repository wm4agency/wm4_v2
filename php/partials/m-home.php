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
    <!-- <figure class="fa fa-bars m-nav-toggler">&nbsp;</figure> -->
    <?php if (! @include_once('m-headers.php')){ throw new Exception("couldn't include header");}?>
</main>

<?php 
include_once('m-footer.php');
?>