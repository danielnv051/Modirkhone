<?php $title = 'ساختمان ' . $_GET['name'];
require_once('header.php');
$return_link = "build.php?id=" . $_GET['id'];
require_once('page_header.php');
?>


<div class="saken-items-build saken-alone">

    <a class="btn box" href="bill.php?id=1">
        <div class="box-icon"><?php echo $card; ?></div>
        <div class="box-title">صورتحساب</div>
    </a>

    <a class="btn box" href="my_history.php?id=1">
        <div class="box-icon"><?php echo $history; ?></div>
        <div class="box-title">واریزی من</div>
    </a>

    <a class="btn box" href="all_history.php?id=1">
        <div class="box-icon"><?php echo $history; ?></div>
        <div class="box-title">واریزی ساکنین</div>
    </a>
</div>

<div class="saken-items-build saken-alone">

    <a class="btn box" href="bill.php?id=1">
        <div class="box-icon"><?php echo $card; ?></div>
        <div class="box-title">اجاره مشاعات</div>
    </a>

</div>
<div class="saken-items-build saken-alone">

    <a class="btn box" href="bill.php?id=1">
        <div class="box-icon"><?php echo $card; ?></div>
        <div class="box-title">دفترچه تلفن</div>
    </a>

    <a class="btn box" href="bill.php?id=1">
        <div class="box-icon"><?php echo $card; ?></div>
        <div class="box-title">گفتگو با مدیر</div>
    </a>

    <a class="btn box" href="bill.php?id=1">
        <div class="box-icon"><?php echo $card; ?></div>
        <div class="box-title">اطلاعیه ها</div>
    </a>

</div>

<?php require_once('footer.php'); ?>