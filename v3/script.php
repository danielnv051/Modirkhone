<script src="./js/jquery-3.4.1.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script>
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
            window.open(masir);
        } else {
            $(".main").load(x + ".php");
            window.open(masir);
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
            success: function(result) {
                if (Number(result) > 0) {
                    $("mtel").val('');
                    $("family").val('');
                    $("pass").val('');
                    $("uid").val('');
                    open_page('panel', 'uid', String(result));
                    //window.location.reload();
                } else {
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
        var os = $('#os').val();
        var ip = $('#ip').val();
        if (tel == '') {
            alert('شماره موبایل خود را وارد کنید');
        } else if (tel.length < 11) {
            alert('شماره موبایل را به درستی وارد کنید');
        } else {
            $.ajax({
                url: 'server.php',
                data: 'tel=' + tel + '&pos=signup&ip=' + ip + '&os=' + os,
                type: 'POST',
                success: function(result) {
                    $('#login').slideUp();
                    $('#sms').show();
                    $('#sms').slideDown();
                }
            });
        }

    }

    function chkLogin() {
        tel_num = $('#tel').val().trim();
        //        sms_code = $('#sms_code').val().trim();
        c1 = $('.input1').val();
        c2 = $('.input2').val();
        c3 = $('.input3').val();
        c4 = $('.input4').val();
        ramz = c1 + c2 + c3 + c4
        $.ajax({
            url: 'server.php',
            data: 'tel=' + tel_num + '&act=' + ramz + '&pos=login',
            type: 'POST',
            success: function(result) {
                if (parseInt(result) > 0) {
                    window.location.reload();
                } else {
                    alert('کد فعالسازی نادرست است');
                    $('.input1').val('');
                    $('.input2').val('');
                    $('.input3').val('');
                    $('.input4').val('');
                    $('.input1').focus();
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

    function new_build() {
        window.location.assign('new_build.php');
    }
</script>