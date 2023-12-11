<?php $title = 'اجاره مشاعات';
require_once('header.php');
$return_link = "build.php?id=" . $_GET['id'];
require_once('page_header.php');
?>

<div class="saken-items-build saken-alone">

    <a class="btn box" href="#">
        <div class="box-icon"><?php echo $sym_ware_house; ?></div>
        <div class="box-title">انباری</div>
    </a>

    <a class="btn box" href="#">
        <div class="box-icon"><?php echo $sym_parking; ?></div>
        <div class="box-title">پارکینگ</div>
    </a>
</div>

<div class="saken-items-build saken-alone">

    <a class="btn box" href="giveWare.php?id=1">
        <div class="box-icon"><?php echo $sym_ware_house . $sym_give . $sym_money; ?></div>
        <div class="box-title">انباری می خوام</div>
    </a>

    <a class="btn box" href="takeWare.php?id=1">
        <div class="box-icon"><?php echo $sym_ware_house . $sym_take . $sym_money; ?></div>
        <div class="box-title">انباری میدم</div>
    </a>
</div>

<div class="saken-items-build saken-alone">

    <a class="btn box" href="giveParking.php?id=1">
        <div class="box-icon"><?php echo $sym_parking . $sym_give . $sym_money; ?></div>
        <div class="box-title">پارکینگ می خوام</div>
    </a>

    <a class="btn box" href="takeParking.php?id=1">
        <div class="box-icon"><?php echo $sym_parking . $sym_take . $sym_money; ?></div>
        <div class="box-title">پارکینگ میدم</div>
    </a>
</div>



<?php require_once('footer.php'); ?>