<figure class="fa fa-bars m-nav-toggler">&nbsp;</figure>
<?php  if ($header == 'full'): ?>
<header class="centered-navigation" role="banner">
    <div class="centered-navigation-wrapper">
        <?php include 'nav_contactPoints.php'; ?>
    </div>

</header><!--/.container-->

<?php elseif ($header == 'minimal'): ?>
<header class="minimal-navigation fullwidth">
    <div class="container"><figure class="logo"><a href="index.php"><img src="img/wm4.png"></a></figure></div>
    <div class="hexa-tip-right"><figure>&nbsp;</figure></div>
</header>
<?php endif; ?>