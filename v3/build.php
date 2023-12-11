<?php $title = 'ساختمان ' . $_GET['name'];
require_once('header.php');
$return_link = ".";
require_once('page_header.php');
?>

<!-- first -->
<div class="saken-items-build saken-alone">

    <!-- <a class="btn box" href="bill.php?id=1">
        <div class="box-icon"><?php echo $sym_card; ?></div>
        <div class="box-title">صورتحساب</div>
    </a> -->

    <!-- <a class="btn box" href="wallet.php?id=1">
        <div class="box-icon"><?php echo $sym_wallet; ?></div>
        <div class="box-title">کیف پول</div>
    </a> -->

    <a class="btn box" href="reports.php?id=1">
        <div class="box-icon"><?php echo $sym_report; ?></div>
        <div class="box-title">گزارشات </div>
    </a>
</div>

<!-- second -->
<!-- <div class="saken-items-build saken-alone">

    <a class="btn box" href="share.php?id=1">
        <div class="box-icon"><?php echo $sym_div; ?></div>
        <div class="box-title">اجاره مشاعات</div>
    </a>

</div> -->

<!-- third -->
<!-- <div class="saken-items-build saken-alone">

    <a class="btn box" href="profile.php?id=1">
        <div class="box-icon"><?php echo $sym_user; ?></div>
        <div class="box-title">پروفایل</div>
    </a>

    <a class="btn box" href="bill.php?id=1">
        <div class="box-icon"><?php echo $sym_contact; ?></div>
        <div class="box-title">ارتباط با مدیر</div>
    </a>

    <a class="btn box" href="bill.php?id=1">
        <div class="box-icon"><?php echo $sym_speaker; ?></div>
        <div class="box-title">اطلاعیه ها</div>
    </a>

</div>
 -->

<?php require_once('footer.php'); ?>