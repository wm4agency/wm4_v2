<?php 
echo "footer... meh<br /> \n";
require_once('/php/components/modal_contacto.php');
if (! @include_once($root.'/php/components/modal_contacto.php')){echo "couldn't include modal";}

if ($footer == "full"): /*echo "full footer"*/;
?>

<footer class="fullwidth">
    <div class="container">
    </div>
</footer>
<?php elseif($footer =="minimal"): /*echo "minimal footer";*/ ?>
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
        <?php include 'nav_contactPoints_footer.php'; ?>
    </div>
</footer>
<?php   
    endif;
    require_once('php/s.php'); 
?>

</body>
</html>
