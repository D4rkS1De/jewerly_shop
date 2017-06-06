<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
	$names  = file('files/quest_name.txt', FILE_IGNORE_NEW_LINES);
    $mails  = file('files/quest_text.txt', FILE_IGNORE_NEW_LINES);
    $mails_dates  = file('files/quest_date.txt', FILE_IGNORE_NEW_LINES);
    $mails_times = file('files/quest_time.txt', FILE_IGNORE_NEW_LINES);
    $questnumber = '';
    for ($i = 0; $i < count($names); $i++) {
        if (!empty($_GET['quest' . $i])) {
            $questnumber = $_GET['quest' . $i];
            if ($questnumber != '') {
                $questnumber = $i;
                break;
            }
        } else {
            continue;
        }
    }
    
    file_put_contents('files/quest_name.txt', '');
	file_put_contents('files/quest_text.txt', '');
    file_put_contents('files/quest_date.txt', '');
    file_put_contents('files/quest_time.txt', '');
    for ($i = $questnumber; $i < count($names); $i++) {
		if(!empty($names[$i])  && !empty($names[$i + 1])){
            $names[$i]  = $names[$i + 1];
        }
        if(!empty($mails[$i])  && !empty($mails[$i + 1])){
			$mails[$i]   = $mails[$i + 1];
        }
        if(!empty($mails_dates[$i])  && !empty($mails_dates[$i + 1])){
			$mails_dates[$i] = $mails_dates[$i + 1];
        }
        if(!empty($mails_times[$i])  && !empty($mails_times[$i + 1])){
			$mails_times[$i]   = $mails_times[$i + 1];
        }
    }
    for ($i = 0; $i < count($names) - 1; $i++) {
		file_put_contents('files/quest_name.txt', $names[$i] . "\n", FILE_APPEND);
        file_put_contents('files/quest_text.txt', $mails[$i] . "\n", FILE_APPEND);
        file_put_contents('files/quest_date.txt', $mails_dates[$i] . "\n", FILE_APPEND);
        file_put_contents('files/quest_time.txt', $mails_times[$i] . "\n", FILE_APPEND);
    }
    echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
} else
    header('Location:index.php');
?>