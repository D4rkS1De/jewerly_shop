<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
	file_put_contents('files/orderscurrentdates_k8U1bN43Hbs7qJ5nE.txt', '');
    file_put_contents('files/orderslogins_k8U1bN43Hbs7qJ5nE.txt', '');
    file_put_contents('files/ordersfullnames_k8U1bN43Hbs7qJ5nE.txt', '');
    file_put_contents('files/ordersphonenumbers_k8U1bN43Hbs7qJ5nE.txt', '');
    file_put_contents('files/ordersemails_k8U1bN43Hbs7qJ5nE.txt', '');
    file_put_contents('files/ordersaddresses_k8U1bN43Hbs7qJ5nE.txt', '');
    file_put_contents('files/ordersitems_k8U1bN43Hbs7qJ5nE.txt', '');
    echo '<script>location.href="new_orders.php"</script>';
} else
    header('Location:index.php');
?>