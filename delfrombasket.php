<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    echo header('Location:index.php');
} else {
    $itemnumber = '';
    for ($i = 0; $i < $_SESSION['basketcounter']; $i++) {
        if (!empty($_GET['item' . $i])) {
            $itemnumber = $_GET['item' . $i];
            if ($itemnumber != '') {
                $itemnumber = $i;
                break;
            }
        } else {
            continue;
        }
    }
    for ($i = $itemnumber; $i < $_SESSION['basketcounter']; $i++) {
    $next                       = $i + 1;
    if(!empty($_SESSION['item' . $i])  && !empty($_SESSION['item' . $next])){
        $_SESSION['item' . $i]      = $_SESSION['item' . $next];
    }
	if(!empty($_SESSION['item_name' . $i])  && !empty($_SESSION['item_name' . $next])){
        $_SESSION['item_name' . $i]      = $_SESSION['item_name' . $next];
    }
    if(!empty($_SESSION['price' . $i])  && !empty($_SESSION['price' . $next])){
        $_SESSION['price' . $i]     = $_SESSION['price' . $next];
    }
    if(!empty($_SESSION['quantity' . $i])  && !empty($_SESSION['quantity' . $next])){
        $_SESSION['quantity' . $i]  = $_SESSION['quantity' . $next];
    }
    
     
}
    $_SESSION['basketcounter']--;
    echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
}
?>