<?php require_once('symbol.php') ?>
<style>
    .logo {
        top: 11vh;
        align-items: center;
        justify-content: center;
        background-color: transparent;
    }

    .logo img {
        width: 4rem;
    }
</style>
<div class="main_login">
    <div class="logo"><img src="img/logo.png" alt="logo"></div>
    <div class="cont">
        <div class="form" id="login">
            <label class="label-v2">شماره همراه خود را وارد کنید</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $tel; ?> </span>
                </div>
                <input type="tel" class="form-control" id="tel" maxlength="11">
                <input type="hidden" class="form-control" id="os" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>">
                <input type="hidden" class="form-control" id="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
            </div>
            <button class="btn btn-info" id="btn_login" onclick="sendSMS()">ورود</button>
        </div>

        <div class="form" id="sms">
            <label class="label-v2">کد ارسال شده را وارد کنید</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sms; ?> </span>
                </div>
                <input type="number" class="form-control" id="sms_code">
            </div>
            <button class="btn btn-info" id="chk_login" onclick="chkLogin()">تایید</button>
        </div>
    </div>
</div>