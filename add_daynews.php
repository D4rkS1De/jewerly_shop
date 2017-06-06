<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    file_put_contents('files/daynews.txt', '');
    $daynews = $_POST['daynews'];
    file_put_contents('files/daynews.txt', $daynews . "\n", FILE_APPEND);
    echo '<script>location.href="cabinet.php"</script>';
} else
    header('Location:index.php');
?>