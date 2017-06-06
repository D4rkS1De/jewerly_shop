<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    echo header('Location:index.php');
} else {
	$productarticles  = file('files/productarticles.txt', FILE_IGNORE_NEW_LINES);
    $productnames  = file('files/productnames.txt', FILE_IGNORE_NEW_LINES);
    $productprices = file('files/productprices.txt', FILE_IGNORE_NEW_LINES);
    $productnumber = '';
    for ($i = 0; $i < count($productarticles); $i++) {
        if (!empty($_GET['product' . $i])) {
            $productnumber = $_GET['product' . $i];
            if ($productnumber != '') {
                $productnumber = $i;
                break;
            }
        } else {
            continue;
        }
    }
	$_SESSION['item' . $_SESSION['basketcounter']]     = $productarticles[$productnumber];
    $_SESSION['item_name' . $_SESSION['basketcounter']]     = $productnames[$productnumber];
    $_SESSION['price' . $_SESSION['basketcounter']]    = $productprices[$productnumber];
    $_SESSION['quantity' . $_SESSION['basketcounter']] = 1;
    $_SESSION['basketcounter']++;
    echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
}
?>