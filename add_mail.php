<?
session_start();
$name      = htmlspecialchars($_POST['name']);
$mail      = htmlspecialchars($_POST['mail']);
$mail_date = date("d.m.y");
$mail_time = date("H:i:s");
file_put_contents('files/quest_name.txt', $name . "\n", FILE_APPEND);
file_put_contents('files/quest_text.txt', $mail . "\n", FILE_APPEND);
file_put_contents('files/quest_date.txt', $mail_date . "\n", FILE_APPEND);
file_put_contents('files/quest_time.txt', $mail_time . "\n", FILE_APPEND);
echo '<script>location.href="quest.php"</script>';
?>