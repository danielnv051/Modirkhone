<?php
$title = 'مدیریت ساختمان ';
require_once('header.php');
$return_link = ".";
require_once('page_header.php');
require_once('jdf.php');
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

    ._green {
        background-color: #024f59;
        color: #fff;
    }

    a.btn.box._neg:hover {
        background-color: #e53935;
    }

    ._cost_monthly {
        background-color: #E53935;
    }

    ._income_monthly {
        background-color: forestgreen;
    }

    a.btn.box._org:hover {
        background-color: darkorange;
    }
</style>

<div class="saken_ saken-items-build saken-alone wallet ">

    <a class="btn box _plus" href="#">
        <div class="box-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
            </svg></div>
        <div class="box-title">کیف پول ساختمان<br><span>+5/000/000 تومان</span></div>
    </a>

    <a class="btn box _neg" href="#">
        <div class="box-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
            </svg></div>
        <div class="box-title">کیف پول واحدها<br><span>-500/000 تومان</span></div>
    </a>

    <a class="btn box _neg _cost_monthly" href="#">
        <div class="box-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"></path>
            </svg></div>
        <div class="box-title">هزینه این ماه<br><span>12/000/000 تومان</span></div>
    </a>

</div>

<div class="saken-items-build saken-alone">
    <a class="btn box" href="editBuilding.php?id=1">
        <div class="box-icon">
            <?php echo $sym_building_edit; ?>
        </div>
        <div class="box-title">ویرایش ساختمان</div>
    </a>
    <a class="btn box" href="editResidents.php?id=1">
        <div class="box-icon">
            <?php echo $sym_define_users; ?>
        </div>
        <div class="box-title">ویرایش ساکنین</div>
    </a>
    <a class="btn box" href="editManager.php?id=1">
        <div class="box-icon">
            <?php echo $sym_edit_manager; ?>
        </div>
        <div class="box-title">ویرایش مدیر</div>
    </a>

</div>

<div class="saken-items-build saken-alone">
    <a class="btn box" href="incomeRecord.php?id=1">
        <div class="box-icon">
            <?php echo $sym_income_record; ?>
        </div>
        <div class="box-title">ثبت درآمد</div>
    </a>
    <a class="btn box" href="costRecord.php?id=1">
        <div class="box-icon">
            <?php echo $sym_cost_record; ?>
        </div>
        <div class="box-title">ثبت هزینه</div>
    </a>
    <a class="btn box _green" href="chargeRecord.php?id=1">
        <div class="box-icon">
            <?php echo $sym_charge_units; ?>
        </div>
        <div class="box-title">ثبت شارژ</div>
    </a>
</div>

<div class="saken-items-build saken-alone">
    <a class="btn box" href="chargeReport.php?id=1">
        <div class="box-icon">
            <?php echo $sym_building_charge_report; ?>
        </div>
        <div class="box-title">گزارش شارژ </div>
    </a>
    <a class="btn box" href="payReportManager.php?id=1">
        <div class="box-icon">
            <?php echo $sym_income_report; ?>
        </div>
        <div class="box-title">گزارش درآمدها </div>
    </a>
    <a class="btn box" href="homeReportManager.php?id=1">
        <div class="box-icon">
            <?php echo $sym_list; ?>
        </div>
        <div class="box-title">صورتحساب<br />ساختمان</div>
    </a>
</div>

<?php require_once('footer.php'); ?>