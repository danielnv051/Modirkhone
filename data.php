<!DOCTYPE html>
<html lang="fa">

<head>
    <title>سامانه ثبت اطلاعات مرجع تبلیغات</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        @font-face {
            font-family: 'iransans';
            src: url('app2/font/IRANSansWebFaNum.ttf');
        }

        *,
        ::after,
        ::before {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: currentColor;
            font-family: 'iransans';
            font-size: 1rem;
            direction: rtl;
        }

        .container {
            width: 80%;
            margin-top: 1rem;
        }

        .row {
            padding: 1rem;
        }

        input,
        select {
            margin-bottom: 1rem;
        }

        label {
            font-size: 1.3rem;
            color: #fff;
        }

        select,
        optgroup,
        option {
            color: #000;
            text-align: center;
        }

        .btn-success {
            width: 100%;
            margin: 1rem auto;
        }

        .text-success {
            color: #FFEB3B;
            font-size: 2rem;
            width: 100%;
            display: block;
            text-align: center;
            padding: 0.6rem;
            background: #000;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <form action="data.php" class="form" method="post" enctype="multipart/form-data">
                <label for="name">نام: </label>
                <input type="text" class="form-control" id="esm" name="esm" required>

                <label for="name">دسته بندی: </label>
                <select name="cat" id="cat" class="form-control">
                    <optgroup label="----------------- پیام رسان ----------------- "></optgroup>
                    <option value="telegram">تلگرام</option>
                    <option value="instagram">اینستاگرام</option>
                    <option value="whatsapp">واتساپ</option>
                    <option value="soroush">سروش</option>
                    <option value="bale">بله</option>
                    <option value="robika">روبیکا</option>
                    <option value="igap">آی گپ</option>
                    <option value="gap">گپ</option>
                    <optgroup label="----------------- روزنامه ----------------- "></optgroup>
                    <option value="khorasan">خراسان</option>
                    <optgroup label="----------------- وب سایت ----------------- "></optgroup>
                    <option value="soft98">سافت 98</option>
                    <optgroup label="----------------- اپلیکیشن ----------------- "></optgroup>
                    <option value="otherapp">سایر</option>
                    <optgroup label="----------------- بیلبورد ----------------- "></optgroup>
                    <option value="otherbil">سایر</option>
                </select>

                <label for="name">صنف کاری: </label>
                <input type="text" class="form-control" id="senf" name="senf" required>

                <label for="name">لینک اصلی: </label>
                <input type="text" class="form-control" id="link" name="link" required>

                <label for="name">لینک تبلیغات: </label>
                <input type="text" class="form-control" id="ads" name="ads" required>

                <label for="name">آدرس: </label>
                <input type="text" class="form-control" id="addr" name="addr" required>

                <label for="name">موبایل: </label>
                <input type="tel" class="form-control" id="mobile" name="mobile" required>

                <label for="name">تصویر پروفایل: </label>
                <input type="file" class="form-control" id="profile" name="profile" required>

                <input type="submit" value="ذخیره" class="btn btn-success">

            </form>
        </div>
    </div>
</body>

<?php
if (isset($_POST['esm'])) {

    /* VAR */
    $esm = $_POST['esm'];
    $cat = $_POST['cat'];
    $senf = $_POST['senf'];
    $link = $_POST['link'];
    $ads = $_POST['ads'];
    $addr = $_POST['addr'];
    $mobile = $_POST['mobile'];
    $profile = $_POST['profile'];
    $tarikh = date('Y-m-d H:i:s');

    /* DB */
    $host = 'localhost';
    $username = 'qndomtoj_modir';
    $password = 'mSkqaAdIqO7M';
    $db = 'qndomtoj_data';
    date_default_timezone_set('Asia/Tehran');
    $conn = mysqli_connect($host, $username, $password, $db);
    mysqli_set_charset($conn, "utf8");

    /* UPLOAD FILE */
    $target_dir = "uploads/";
    $t = time();
    $target_file = $target_dir . $t . '_' . basename($_FILES["profile"]["name"]);
    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
        /* ADD TO DB */
        $sql = "INSERT INTO `data`(`id`,`esm`,`cat`,`senf`,`link`,`ads`,`addr`,`mobile`,`profile`,`tarikh`) VALUES(NULL,'" . $esm . "','" . $cat . "','" . $senf . "','" . $link . "','" . $ads . "','" . $addr . "','" . $mobile . "','" . $target_file . "','" . $tarikh . "')";
        $r = mysqli_query($conn, $sql);

        echo '<span class="text-success">اطلاعات با موفقیت ثبت شد</span>';
    }
}
?>

<script>
    setTimeout(function() {
        $('.text-success').hide();
    }, 3000);
</script>

</html>