<?php $title = 'ساختمان فرهنگیان ';
require_once('header.php');
$return_link = ".";
require_once('page_header.php');
$money_unit = 'ریال';
?>

<style>
    .wallet a {
        direction: ltr;
        color: #fff;
        width: 100%;
        padding-bottom: 5rem;
    }

    .wallet a .box-title {
        line-height: 1.4rem;
        font-size: 0.7rem;
    }

    ._plus {
        background-color: #00897B;
    }

    ._neg {
        background-color: #D81B60;
    }

    ._org {
        background-color: #FB8C00;
    }

    .saken_ {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: stretch;
        flex-wrap: nowrap;
    }

    a.btn.box._plus,
    a.btn.box._neg,
    a.btn.box._org {
        width: 32%;
    }

    a.btn.box._neg:hover {
        background-color: #e53935;
    }

    a.btn.box._org:hover {
        background-color: darkorange;
    }
</style>

<div class="saken_ saken-items-build saken-alone wallet ">

    <a class="btn box _plus" href="#">
        <div class="box-icon"><?php echo $sym_wallet; ?></div>
        <div class="box-title">کیف پول ساختمان<br /><span><?php echo $money_unit . ' ' . sep3($_info['box']); ?></span></div>
    </a>

    <a class="btn box <?php if ($_user['wallet'] > 0) {
                            echo '_plus';
                        } else {
                            echo '_neg';
                        } ?>" href="#">
        <div class="box-icon"><?php echo $sym_wallet; ?></div>
        <div class="box-title">کیف پول من<br /><span><?php echo $money_unit . ' ' . sep3($_user['wallet']); ?></span></div>
    </a>

    <a class="btn box _org _cost_monthly" href="#">
        <div class="box-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
            </svg></div>
        <div class="box-title">هزینه این ماه<br /><span><?php echo $money_unit . ' ' . sep3($_user['wallet']); ?> </span></div>
    </a>

</div>

<div class="saken-items-build saken-alone">
    <!-- <a class="btn box" href="costReport.php?id=1">
        <div class="box-icon"><?php echo $sym_minus_to_wallet_report; ?></div>
        <div class="box-title">هزینه های <br />ساختمان</div>
    </a> -->
    <a class="btn box" href="payReport.php?id=1">
        <div class="box-icon"><?php echo $sym_add_to_wallet_report; ?></div>
        <div class="box-title">واریزی های<br /> من</div>
    </a>

    <a class="btn box" href="homeReport.php?id=1">
        <div class="box-icon"><?php echo $sym_list; ?></div>
        <div class="box-title">صورتحساب <br />ساختمان</div>
    </a>

    <a class="btn box" href="chargeReportUsers.php?id=1">
        <div class="box-icon">
            <?php echo $sym_building_charge_report; ?>
        </div>
        <div class="box-title">گزارش <br />شارژ</div>
    </a>

</div>

<div class="saken-items-build saken-alone">
    <a class="btn box" href="managerInfo.php?id=1">
        <div class="box-icon"><?php echo $sym_info; ?></div>
        <div class="box-title">مشخصات<br />مدیر ساختمان</div>
    </a>
    <a class="btn box" href="message.php?id=1">
        <div class="box-icon"><?php echo $sym_manager; ?></div>
        <div class="box-title">ارسال پیام<br />به مدیر</div>
    </a>
    <a class="btn box" href="support.php?id=1">
        <div class="box-icon"><?php echo $sym_support; ?></div>
        <div class="box-title">درخواست<br />پشتیبانی</div>
    </a>

</div>

<?php require_once('footer.php'); ?>