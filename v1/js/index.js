function telegram(link) {
    window.location.assign("tg://resolve?domain=" + link);
}

function tel(mtel) {
    window.location.assign("tel://" + mtel);
}

function makan() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function success(position) {
            let lat = position.coords.latitude;
            let long = position.coords.longitude;
        });
    }
}

function open_page(x, y = null, z = null) {
    if (y != null) {
        masir = x + ".php?" + y + "=" + z;
        $(".main").load(masir);
    } else {
        $(".main").load(x + ".php");
    }

}

function open_web(x) {
    window.location.assign('https://modirkhone.ir/app/' + x + '.php');
}

function Login() {
    mtel = $("#tel").val();
    pass = $("#pass").val();

    $.ajax({
        url: 'server.php',
        data: 'tel=' + mtel + '&pass=' + pass + '&type=login',
        type: 'POST',
        success: function (result) {
            if (Number(result) > 0) {
                $("mtel").val('');
                $("family").val('');
                $("pass").val('');
                $("uid").val('');
                open_page('panel', 'uid', String(result));
                //window.location.reload();
            }
            else {
                alert('شماره موبایل یا رمز عبور نادرست است');
            }
        }
    });
}

function myStopFunction(x) {
    clearTimeout(x);
}

function sendSMS() {
    var tel = $('#tel').val();
    if (tel == '') {
        alert('شماره موبایل خود را وارد کنید');
    } else if (tel.length < 11) {
        alert('شماره موبایل را به درستی وارد کنید');
    }
    else {
        open_page('sms', 'tel', tel);
        $.ajax({
            url: 'server.php',
            data: 'tel=' + tel + '&pos=signup',
            type: 'POST',
            success: function (result) {
            }
        });
    }

}

function chkLogin() {
    tel_num = $('#tel_num').text().trim();
    act1 = $('#act1').val();
    act2 = $('#act2').val();
    act3 = $('#act3').val();
    act4 = $('#act4').val();
    act = act1 + '' + act2 + '' + act3 + '' + act4;
    $.ajax({
        url: 'server.php',
        data: 'tel=' + tel_num + '&act=' + act + '&pos=login',
        type: 'POST',
        success: function (result) {
            if (result > 0) {
                open_page('panel', 'uid', tel_num);
            } else {
                $('#act1').val('');
                $('#act2').val('');
                $('#act3').val('');
                $('#act4').val('');
                alert('کد فعالسازی نادرست است');

            }
        }
    });
}

function nextcell(x) {
    if (x < 4) {
        nex = x + 1;
        $('#act' + nex).focus();
    } else {
        $('#save').click();
    }
}

