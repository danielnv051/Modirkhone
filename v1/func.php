<?php
$rule = 0;
$sum_total = 0;
$sum_less = 0;
$shop_manager_name = '';

function db()
{
    global $conn;
    $host = 'localhost';
    $username = 'qndomtoj_admin';
    $password = 'pgpWK-2caaUv';
    $db = 'qndomtoj_modirkhone';
    date_default_timezone_set('Asia/Tehran');
    $conn = mysqli_connect($host, $username, $password, $db);
    mysqli_set_charset($conn, "utf8");
}

function checkStates($mtel, $active_code, $pos)
{
    db();

    if ($pos == 'signup') {
        $sql = "SELECT * FROM `users` WHERE `mtel` LIKE '%" . $mtel . "%' ORDER BY `uid` DESC";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        $num = mysqli_num_rows($result);
        if ($num < 1) {
            $last_Login = date("Y-m-d H:i:s");
            $sqlp = "INSERT INTO `users`(`uid`,`mtel`,`zaman`,`sms`) VALUES(NULL, '" . $mtel . "', '" . $last_Login . "','" . $active_code . "')";
            $resultt = mysqli_query($GLOBALS['conn'], $sqlp);
            return 1;
        } else {
            return 1;
        }
    } elseif ($pos == 'login') {
        $sql = "SELECT * FROM `users` WHERE `mtel` LIKE '%" . $mtel . "%' ORDER BY `uid` DESC";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        $rr = mysqli_fetch_assoc($result);
        if ($rr['sms'] == $active_code) {
            $id = $rr['uid'];
            setcookie('uid', $id, time() + 86900, '/');
            return 2;
        } else {
            return 0;
        }
    }
}

function convertPersianToEnglish($string)
{
    $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];


    $output = str_replace($persian, $english, $string);
    return substr($output, 1);
}
