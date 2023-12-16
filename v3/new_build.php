<?php $title = 'ثبت ساختمان جدید';
require_once('header.php');
$return_link = ".";
require_once('page_header.php');
$show_pos1 = 'block';
$show_pos2 = 'none';

if (isset($_POST['esm'])) {
    if (isset($_FILES)) {

        /* UPLOAD FILE */
        $target_dir = "build/";
        $t = time();
        $target_file = $target_dir . $t . '_' . basename($_FILES["pic"]["name"]);
        if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
            $pic_addr = $target_file;
        }
    } else {
        $pic_addr = '';
    }

    add_new_home($_COOKIE['uid'], $_POST['type'], $_POST['usage'], $_POST['esm'], $_POST['unit'], $_POST['fee'], $pic_addr);
    $show_pos1 = 'none';
    $show_pos2 = 'block';
}
?>

<style>
    .saken-info .input-group input {
        border-bottom: 1px solid silver;
    }

    h3 {
        padding: 1rem;
        font-size: 1rem;
        width: 100%;
        text-align: center;
    }

    span.red {
        color: red;
        font-family: none;
        padding-right: 0.3rem;
    }
</style>

<div class="saken-items saken-alone" style="display:<?php echo $show_pos1; ?>">
    <form method="POST" enctype="multipart/form-data">
        <div class="saken-build">
            <div class="saken-info">
                <fieldset>
                    <legend>اطلاعات ساختمان</legend>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $building; ?> نوع ساختمان</span>
                        </div>
                        <select name="type" id="type" class="form-control" disabled>
                            <option value="1">آپارتمان</option>
                            <option value="2">بلوک</option>
                            <option value="3">مجتمع</option>
                            <option value="4">برج</option>
                            <option value="5">شهرک</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $building; ?> کاربری ساختمان</span>
                        </div>
                        <select name="usage" id="usage" class="form-control" disabled>
                            <option value="1">مسکونی</option>
                            <option value="2">تجاری</option>
                            <option value="3">ویلایی</option>
                        </select>

                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $building; ?> نام ساختمان <span class="red">*</span></span>
                        </div>
                        <input type="text" class="form-control" name="esm" required>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $unit; ?> تعداد واحدها <span class="red">*</span></span>
                        </div>
                        <input type="number" min="1" class="form-control" name="unit" required>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $building; ?>استان </span>
                        </div>
                        <select name="" id="province" onchange="updateCities()" class="form-control">

                        </select>

                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $building; ?> شهر </span>
                        </div>
                        <select name="" id="city" class="form-control">

                        </select>

                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $building; ?> آدرس </span>
                        </div>
                        <textarea name="" id="" class="form-control"></textarea>

                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $charge; ?> تصویر ساختمان</span>
                        </div>
                        <input type="file" class="form-control" name="pic">
                    </div>

                </fieldset>

                <fieldset>
                    <legend>اطلاعات مالی</legend>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $charge; ?>واحد پول</span>
                        </div>
                        <select name="money_unit" class="form-control">
                            <option value="rial">ریال</option>
                            <option value="toman">تومان</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $charge; ?> مبلغ شارژ ساختمان <span class="red">*</span></span>
                        </div>
                        <input type="number" min="0" class="form-control" name="fee" id="feeInput">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $charge; ?> شماره کارت<span class="red">*</span></span>
                        </div>
                        <input type="number" min="0" class="form-control" name="fee" id="feeInput">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $charge; ?> شماره شبا</span>
                        </div>
                        <input type="number" min="0" class="form-control" name="fee" id="feeInput">
                    </div>

                </fieldset>

            </div>
        </div>
        <div class="items-button">
            <input class="btn btn-info w-100" type="submit" value="<?php echo $door; ?> ذخیره">
        </div>
    </form>
</div>

<div class="saken-items saken-alone" style="display:<?php echo $show_pos2; ?>">
    <h3 class="text-success">
        <? echo $sym_check_ok; ?> ساختمان جدید با موفقیت ایجاد شد
    </h3>
</div>

<style>
    fieldset {
        width: 100%;
        border: 1px dashed #17a2b8;
        padding: 0.5rem;
        margin-bottom: 0.6rem;
    }

    legend {
        width: fit-content;
        margin: 0;
        display: block;
        padding: 0.3rem;
        font-size: 0.8rem;
        line-height: inherit;
        color: inherit;
        white-space: normal;
        font-weight: bold;
    }
</style>
<script src="./js/new_bild.js"></script>

<?php require_once('footer.php'); ?>