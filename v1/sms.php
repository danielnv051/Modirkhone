<div class="logo">
    <img src="img/en-logo.png" alt="modir khone" style="width: 5rem;margin-bottom: 1rem;">
    <img src="img/fa-logo.png" alt="مدیر خونه" style="margin-top:-1.8rem">
</div>

<div class="login">
    <div class="active_code">
        <input type="tel" maxlength="1" id="act1" class="form-control" onkeyup="nextcell(1)" tabindex="1">
        <input type="tel" maxlength="1" id="act2" class="form-control" onkeyup="nextcell(2)" tabindex="2">
        <input type="tel" maxlength="1" id="act3" class="form-control" onkeyup="nextcell(3)" tabindex="3">
        <input type="tel" maxlength="1" id="act4" class="form-control" onkeyup="nextcell(4)" tabindex="4">
    </div>
    <span>کد فعالسازی به شماره <span id="tel_num"> <?php echo $_GET['tel']; ?> </span>ارسال گردید </span>
    <button class="btn btn-info" onclick="chkLogin()" id="save">ثبت</button><br />
</div>