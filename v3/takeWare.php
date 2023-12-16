<?php $title = 'اجاره دادن انباری';
require_once('header.php');
$return_link = "share.php?id=" . $_GET['id'];
require_once('page_header.php');
?>

<style>
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
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_building; ?> واحد</span>
                </div>
                <input type="text" class="form-control" id="debt" disabled value="<?php echo $_GET['id']; ?>">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_meter; ?> متراژ (متر مربع)</span>
                </div>
                <input type="text" class="form-control" id="g_p" value="" min="1">
            </div>
            <div class=" input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_calender; ?> مدت زمان اجاره (ماه)</span>
                </div>
                <input type="number" class="form-control" id="o_p" value="1" min="1" max="12">
            </div>
            <div class=" input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_calender; ?> مبلغ اجاره (تومان)</span>
                </div>
                <input type="number" class="form-control" id="o_p" value="" min="10000" step="10000">
            </div>
            <div class="final_pay">
                <span> مبلغ اجاره ماهیانه :</span>
                <span id="o_p">350,000</span> تومان
            </div>
        </div>
    </div>
    <div class="items-button">
        <button class="btn btn-info w-100" id="vorood"><?php echo $sym_request; ?> ارسال درخواست</button>
    </div>

</div>



<?php require_once('footer.php'); ?>