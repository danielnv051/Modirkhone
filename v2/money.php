<?php $title = 'واریز نقدی';
require_once('header.php');
$return_link = "wallet.php?id=" . $_GET['id'];
require_once('page_header.php');
?>
<link rel="stylesheet" href="static/css/lib/persian-datepicker.min.css">
<link rel="stylesheet" href="static/css/main.css">

<style>
    div#plotId,
    input#persianDatapicker {
        font-family: 'iransansfa';
        color: #495057;
    }

    .input-group-text {
        display: flex;
        gap: 0.5rem;
        border: none;
    }

    .saken-info {
        align-items: center;
    }

    .final_pay {
        padding: 1rem 0px;
        font-weight: bold;
        color: #024f59;
    }

    .items-button {
        background-color: transparent;
    }

    .box {
        background-color: #024f59;
        color: #fff;
    }

    .input-group-prepend {
        margin-left: -1px;
        width: 11.5rem;
        border-bottom: 1px dashed silver;
        border-left: none;
        border-radius: 0.2rem;
    }

    .saken-info .input-group {
        margin: 0.3rem auto;
        display: flex;
        align-items: flex-end;
        flex-direction: row;
    }

    .saken-info .input-group input {
        border: 1px dashed #ced4da;
    }
</style>

<div class="saken-items-bill saken-alone">
    <div class="saken-build">
        <div class="saken-info">

            <div class="input-group">
                <div class="input-group-prepend" style="width: 10.5rem;">
                    <span class="input-group-text"><?php echo $sym_good_pay; ?> مقدار شارژ نقدی (تومان)</span>
                </div>
                <input type="text" class="form-control" id="g_p" value="500,000">
            </div>
            <div class="input-group">
                <div class="input-group-prepend" style="width: 12.5rem;">
                    <span class="input-group-text"><?php echo $sym_good_pay; ?> تاریخ پرداخت نقدی</span>
                </div>
                <input type="text" name="persianDatapicker" id="persianDatapicker" />
            </div>

        </div>
    </div>
    <div class="items-button">
        <button class="btn btn-info w-100" id="vorood"><?php echo $sym_online_pay; ?> ثبت واریز نقدی</button>
    </div>

</div>



<?php require_once('footer.php'); ?>

<script src="static/js/lib/jquery-3.2.1.min.js"></script>
<script src="static/js/lib/persian-date.min.js"></script>
<script src="static/js/lib/persian-datepicker.min.js"></script>
<script src="static/js/app.js"></script>