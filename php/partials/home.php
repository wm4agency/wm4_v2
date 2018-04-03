<?PHP
/* Home main structure */
$title = 'WM4'; 
$localScripts = array('pagepiling','unslider');
$header = 'full'; 
$role = 'home';
$localclass = 'ppd';
if (! @include_once('header-desktop.php')){echo "couldn't include header";}
?>
<div id="pagepiling">
    <section id="home"><?php include 'home_main.php'; ?></section>
    <section id="modelo"><?php include 'home_modelo.php'; ?></section>
    <section id="contacto"></section>
</div>    
