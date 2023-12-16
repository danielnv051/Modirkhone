<?php $title = 'واریز آنلاین';
require_once('header.php');
$return_link = "wallet.php?id=" . $_GET['id'];
require_once('page_header.php');
?>

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
        font-size: 0.8rem;
    }

    .saken-info {
        align-items: center;
        overflow: hidden;
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

    input#g_p {
        font-size: 0.9rem;
        font-weight: bold;
    }
</style>

<div class="saken-items-bill saken-alone">
    <div class="saken-build">
        <div class="saken-info">

            <div class="input-group">
                <div class="input-group-prepend" style="width: 18.5rem;">
                    <span class="input-group-text"><?php echo $sym_good_pay; ?> مقدار شارژ کیف پول(تومان)</span>
                </div>
                <input type="text" class="form-control" id="g_p" value="500,000">
            </div>
            <div class="input-group">
                <div class="input-group-prepend" style="width: 18.5rem;">
                    <span class="input-group-text"><?php echo $sym_good_pay; ?> موجودی کیف پول پس از شارژ(تومان)</span>
                </div>
                <input type="text" class="form-control" id="g_p" disabled value="550,000">
            </div>

        </div>
    </div>
    <div class="items-button">
        <button class="btn btn-info w-100" id="vorood"><?php echo $sym_online_pay; ?> پرداخت</button>
    </div>

</div>


<?php require_once('footer.php'); ?>