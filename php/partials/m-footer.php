<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once(dirname(__FILE__).'/../components/modal_contacto.php');

if (isset($footer) && $footer == "full"): /*echo "full footer";*/
?>
<footer class="fullwidth">
    <div class="container">
        <figure data-target="#main" class="fa fa-arrow-up gotop">arriba</figure>
        <figure data-target="<?php echo $root;?>" class="wm4"></figure>
        <h3>Hacemos estrategias | entregamos resultados</h3>
    </div>
</footer>
<?php elseif(isset($footer) && $footer =="minimal"): /*echo "minimal footer";*/ ?>
<footer class="fullwidth">
    <div class="container">
        <figure data-target="<?php echo $root;?>" class="wm4"></figure>
        <?php 
        include_once('nav_contactPoints_footer.php'); 
        ?>
    </div>
</footer>
<?php   
    endif;
    require_once(dirname(__FILE__)."/../s.php");
?>

