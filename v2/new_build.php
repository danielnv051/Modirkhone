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
</style>

<div class="saken-items saken-alone" style="display:<?php echo $show_pos1; ?>">
    <form method="POST" enctype="multipart/form-data">
        <div class="saken-build">
            <div class="saken-info">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $building; ?> نوع ساختمان</span>
                    </div>
                    <select name="type" id="type" class="form-control">
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
                    <select name="usage" id="usage" class="form-control">
                        <option value="1">مسکونی</option>
                        <option value="2">تجاری</option>
                        <option value="3">ویلایی</option>
                    </select>

                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $building; ?> نام ساختمان</span>
                    </div>
                    <input type="text" class="form-control" name="esm" required>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $unit; ?> تعداد واحدها</span>
                    </div>
                    <input type="text" class="form-control" name="unit" required>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $charge; ?> مبلغ شارژ ساختمان</span>
                    </div>
                    <input type="text" class="form-control" name="fee" required>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $charge; ?> تصویر ساختمان</span>
                    </div>
                    <input type="file" class="form-control" name="pic">
                </div>
            </div>
        </div>
        <div class="items-button">
            <input class="btn btn-info w-100" type="submit" value="<?php echo $door; ?> ذخیره">
        </div>
    </form>
</div>

<div class="saken-items saken-alone" style="display:<?php echo $show_pos2; ?>">
    <h3 class="text-success"><? echo $sym_check_ok; ?> ساختمان جدید با موفقیت ایجاد شد</h3>
</div>



<?php require_once('footer.php'); ?>