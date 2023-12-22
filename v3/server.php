<?php
require_once('func.php');

/* login & signup */
if (isset($_POST['pos'])) {
    if ($_POST['pos'] == 'signup') {
        $sms = mt_rand(1111, 9999);
        $x = checkStates($_POST['tel'], $sms, 'signup');
        echo $x;
    } elseif ($_POST['pos'] == 'login') {
        $y = checkStates($_POST['tel'], $_POST['act'], 'login');
        echo $y;
    }
}
