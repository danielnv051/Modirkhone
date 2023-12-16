<?php
$title = 'ویرایش مدیر';
require_once('header.php');
$return_link = "manager.php?id=1";
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
        background-color: #004d40;
    }

    ._neg {
        background-color: #b71c1c;
    }

    ._org {
        background-color: darkorange;
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

    #raise_hand {
        height: 20px;
        width: 20px;
    }
</style>

<div class="saken-items-build saken-alone">
    <a class="btn box" href="addManager.php?id=1">
        <div class="box-icon">
            <?php echo $sym_manager_plus; ?>
        </div>
        <div class="box-title">افزودن مدیر</div>
    </a>
    <a class="btn box" href="editManager.php?id=1">
        <div class="box-icon">
            <?php echo $sym_manager_stand; ?>
        </div>
        <div class="box-title">ویرایش مدیر</div>
    </a>
    <a class="btn box" href="editResidents.php?id=1">
        <div class="box-icon">
            <?php echo $sym_manager_stand . ' ' . $sym_manager_raise_hand . ' ' . $sym_manager_stand; ?>
        </div>
        <div class="box-title">لیست مدیران</div>
    </a>


</div>

<?php require_once('footer.php'); ?>