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
    include('jdf.php');
    $timestamp = strtotime(date("Ymd"));
    $jalali_date = jdate("Ymd", $timestamp) . ' ' . date("H:i:s");

    db();
    $ip = $_POST['ip'];
    $os = $_POST['os'];

    $last_Login = date("Y-m-d H:i:s");
    if ($pos == 'signup') {
        $sql = "SELECT * FROM `users` WHERE `mtel` LIKE '%" . $mtel . "%' ORDER BY `uid` DESC";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        $num = mysqli_num_rows($result);
        if ($num < 1) {
            $sqlp = "INSERT INTO `users`(`uid`,`mtel`,`zaman`,`sms`,`ip`,`os`) VALUES(NULL, '" . $mtel . "', '" . $jalali_date . "','" . $active_code . "','" . $ip . "','" . $os . "')";
            $resultt = mysqli_query($GLOBALS['conn'], $sqlp);
            return 1;
        } else {
            $sqlp = "UPDATE `users` SET `sms` = '" . $active_code . "',`zaman` = '" . $jalali_date . "',`ip` = '" . $ip . "',`os`= '" . $os . "' WHERE `mtel` = '" . $mtel . "'";
            $resultt = mysqli_query($GLOBALS['conn'], $sqlp);
            return 1;
        }
    } elseif ($pos == 'login') {
        $sql = "SELECT * FROM `users` WHERE `mtel` LIKE '%" . $mtel . "%' ORDER BY `uid` DESC";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        $rr = mysqli_fetch_assoc($result);
        if ($rr['sms'] == $active_code) {
            $id = $rr['uid'];
            setcookie('uid', $id, time() + 86900, '/');
            return $id;
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

function check_os($page)
{
    $agent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($agent, 'Android') > 0 || strpos($agent, 'IPhone') > 0) {
        require_once($page . '.php');
    } else {
        require_once('windows.php');
    }
}

function INSERT_INTO_DB($db_name, $p, $s)
{

    db();
    $sql = "INSERT INTO $db_name($p) VALUES($s)";
    $r = mysqli_query($GLOBALS['conn'], $sql);
    if ($r) {
        return 1;
    } else {
        return 0;
    }
}
function SELECT__FROM($table, $col, $cond, $find)
{

    db();
    $sql = "SELECT * FROM $table WHERE $col $cond $find";
    $r = mysqli_query($GLOBALS['conn'], $sql);
    if ($r) {
        return $r;
    } else {
        return 0;
    }
}

function add_new_home($uid, $type, $usage, $name, $unit, $fee, $pic)
{
    db();
    $tarikh = date("Y-m-d H:i:s");
    $p = "`id`,`esm`,`type`,`usage`,`unit`,`fee_pay`,`users`,`managers`,`show`,`tarikh`,`pic`";
    $s = 'NULL,"' . $name . '","' . $type . '","' . $usage . '","' . $unit . '",
    "' . $fee . '","' . $uid . ',","' . $uid . ',","1","' . $tarikh . '","' . $pic . '"';

    $result = INSERT_INTO_DB('build', $p, $s);
    return $result;
}

function get_saken_list($uid)
{
    db();
    include('symbol.php');
    $saken = SELECT__FROM('build', 'users', 'LIKE', "'%$uid%'");
    $num = mysqli_num_rows($saken);
    for ($i = 0; $i < $num; $i++) {
        $row = mysqli_fetch_assoc($saken);
        $pic = $row['pic'];
        $id = $row['id'];
        if (is_null($pic) || $pic == '') {
            $pic = 'build/default.jpg';
        }
        echo '
            <div class="saken-items">
                <div class="saken-build">
                    <div class="saken-info">
                        <span class="name">
                            <span>' . $sym_arrow_left_ . 'ساختمان : ' . $row["esm"] . '</span>
                            <span class="debt" style="color:limegreen">' . $sym_arrow_left_ . '<span>بدهکاری : 0 ریال</span></span>
                        </span>
                    </div>
                    <div class="saken-pic">
                        <img src="' . $pic . '" style="width:64px;height:64px"/>
                    </div>
                </div>
                <div class="items-button">
                    <a class="btn btn-info w-100 br-tl" href="reports.php?id=' . $id . '">' . $sym_door . ' ورود</a>
                </div>
            </div>
        ';
    }
}
function get_manager_list($uid)
{
    db();
    include('symbol.php');
    $saken = SELECT__FROM('build', 'managers', 'LIKE', "'%$uid%'");
    $num = mysqli_num_rows($saken);
    for ($i = 0; $i < $num; $i++) {
        $row = mysqli_fetch_assoc($saken);
        $pic = $row['pic'];

        if (is_null($pic) || $pic == '') {
            $pic = 'build/default.jpg';
        }

        $id = $row['id'];
        echo '
        <div class="saken-items">
            <div class="saken-build">
                <div class="saken-info">
                    <span class="name">
                        <span>' . $sym_arrow_left_ . 'ساختمان : ' . $row["esm"] . '</span>
                        <span>' . $sym_arrow_left_ . 'تعداد واحدها: ' . $row["unit"] . '</span>
                        <span class="debt" style="color:limegreen">' . $sym_arrow_left_ . '
                            <span>صندوق: </span>- ریال
                        </span>
                        <span class="debt" style="color:orangered">
                            ' . $sym_arrow_left_ . '<span>بدهی واحدها: - ریال</span>
                        </span>
                    </span>
                </div>
                <div class="saken-pic">
                <img src="' . $pic . '" style="width:64px;height:64px"/>
                </div>
            </div>
            <div class="items-button">
                <a class="btn btn-info w-100 br-tl" href="manager.php?id=' . $id . '">' . $sym_door . ' ورود</a>
            </div>
        </div>
        ';
    }
}

function get__info($table, $condition, $sign, $id)
{
    db();
    include('symbol.php');
    $saken = SELECT__FROM("$table", "$condition", "$sign", "$id");
    $row = mysqli_fetch_assoc($saken);
    return $row;
}


function sep3($number)
{

    // english notation (default)
    $english_format_number = number_format($number);
    // 1,235

    // French notation
    $nombre_format_francais = number_format($number, 0, null, '/');
    // 1 234,56

    // english notation with a decimal point and without thousands seperator
    $english_format_number = number_format($number, 2, '.', '');
    // 1234.57

    return $nombre_format_francais;
}
