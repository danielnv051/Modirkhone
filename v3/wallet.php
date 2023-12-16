<?php $title = 'کیف پول من ';
require_once('header.php');
$return_link = "build.php?id=" . $_GET['id'];
require_once('page_header.php');
?>

<div class="saken-items-build saken-alone">

    <a class="btn box" href="pg.php?id=1">
        <div class="box-icon"><?php echo $sym_card; ?></div>
        <div class="box-title">واریز آنلاین</div>
    </a>

    <a class="btn box" href="money.php?id=1">
        <div class="box-icon"><?php echo $sym_debt; ?></div>
        <div class="box-title">واریزی نقدی</div>
    </a>
    <a class="btn box" href="card.php?id=1">
        <div class="box-icon"><?php echo $sym_debt; ?></div>
        <div class="box-title">کارت به کارت</div>
    </a>
</div>

<div class="saken-items-build saken-alone">

    <a class="btn box" href="payReport.php?id=1">
        <div class="box-icon"><?php echo $sym_add_to_wallet_report; ?></div>
        <div class="box-title">گزارش واریز</div>
    </a>

    <a class="btn box" href="costReport.php?id=1">
        <div class="box-icon"><?php echo $sym_minus_to_wallet_report; ?></div>
        <div class="box-title">گزارش هزینه</div>
    </a>

</div>


<?php require_once('footer.php'); ?>