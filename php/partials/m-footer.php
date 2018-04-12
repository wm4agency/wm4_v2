<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once(dirname(__FILE__).'/../components/modal_contacto.php');

if (isset($footer) && $footer == "full"): /*echo "full footer";*/
?>
<footer class="fullwidth">
    <div class="container">
        <figure data-target="#main" class="fa fa-arrow-up gotop">arriba</figure>
        <figure><?php include'logosvg.php'; ?></figure>
        <h3>Hacemos estrategias | entregamos resultados</h3>
    </div>
</footer>
<?php elseif(isset($footer) && $footer =="minimal"): /*echo "minimal footer";*/ ?>
<footer class="fullwidth">
    <div class="container">
        <div class="span-4">
            <figure class="span-4 logo"> <img src="img/wm4.png"></figure>
            <nav class="span-4">:
            </nav>
            <nav class="span-4 omega">
            </nav>
        </div>
        <span class="span-4">
        </span>
        <?php 
        include_once('nav_contactPoints_footer.php'); 
        ?>
    </div>
</footer>
<?php   
    endif;
    require_once(dirname(__FILE__)."/../s.php");
?>

