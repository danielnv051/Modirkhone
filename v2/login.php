<?php
if (isset($_COOKIE['uid'])) {
    require_once('panel.php');
} else {
    require('login_form.php');
}
