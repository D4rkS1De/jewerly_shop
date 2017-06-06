<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    file_put_contents('files/bannernames.txt', '');
    file_put_contents('files/bannerimgs.txt', '');
    file_put_contents('files/bannersrcs.txt', '');
    $bannername = $_POST['bannername'];
    $bannerimg  = $_FILES['bannerimg']['name'];
    $bannersrc  = $_POST['bannersrc'];
    copy($_FILES['bannerimg']['tmp_name'], 'banner/' . $_FILES['bannerimg']['name']);
    file_put_contents('files/bannernames.txt', $bannername . "\n", FILE_APPEND);
    file_put_contents('files/bannerimgs.txt', $bannerimg . "\n", FILE_APPEND);
    file_put_contents('files/bannersrcs.txt', $bannersrc . "\n", FILE_APPEND);
    echo '<script>location.href="index.php"</script>';
} else
    header('Location:index.php');
?>