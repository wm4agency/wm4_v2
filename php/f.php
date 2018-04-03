<?PHP 

$my_root_dir = 'wm4_v2';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/' . $my_root_dir;

?>

<script>
    var rootpath = <?php echo json_encode($root); ?>;
    console.log(rootpath);
</script>