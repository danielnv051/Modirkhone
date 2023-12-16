<?php $title = 'مشخصات مدیر ساختمان';
require_once('header.php');
$return_link = "reports.php";
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
    <div class="saken-build">
        <div class="saken-info">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $building; ?> نام و نام خانوادگی </span>
                </div>
                <input type="text" class="form-control text-left" name="esm" readonly value="دانیال نواری">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $unit; ?>تلفن همراه</span>
                </div>
                <input type="text" class="form-control text-left" name="unit" readonly value="09105005289">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $charge; ?>شماره کارت</span>
                </div>
                <input type="text" class="form-control text-left" name="fee" id="feeInput" readonly value="6219 8619 2558 6363" style="direction: ltr;">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $charge; ?>شماره شبا</span>
                </div>
                <input type="text" class="form-control text-left" name="fee" id="feeInput" readonly value="1234 5678 9012 3456 7890 1234" style="direction: ltr;">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $charge; ?>شماره واحد</span>
                </div>
                <input type="text" class="form-control text-left" name="fee" id="feeInput" readonly value="1">
            </div>

        </div>
        <!-- end of city and addres -->
    </div>
</div>


<script src="./js/new_bild.js"></script>
<?php require_once('footer.php'); ?>