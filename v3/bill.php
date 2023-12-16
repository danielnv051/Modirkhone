<?php $title = 'صورتحساب واحد من ';
require_once('header.php');
$return_link = "build.php?id=" . $_GET['id'];
require_once('page_header.php');
?>

<style>
    h2 {
        font-size: 1rem;
    }

    .input-group-text {
        display: flex;
        gap: 0.5rem;
        border: none;
        font-size: 0.8rem;
    }

    .saken-info {
        align-items: center;
        width: inherit;
    }

    .final_pay {
        padding: 1rem 0px;
        font-weight: bold;
        color: #024f59;
        font-size: 0.9rem;
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
        width: 9.5rem;
        border-bottom: 1px dashed silver;
        border-left: none;
        border-radius: 0.2rem;
    }

    fieldset .input-group-prepend {
        border-bottom: none;
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

    #my_debt {
        box-shadow: none;
    }

    fieldset {
        box-shadow: 0 0 3px #024f59;
        border-radius: 0.3rem;
    }

    legend {
        background: #024f59;
        padding: 0.3rem 0.5rem;
        font-size: 0.8rem;
        color: #fff;
        border-radius: 0.3rem;
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
    }

    input#o_p {
        font-size: 0.9rem;
    }

    fieldset .saken-items-bill.saken-alone {
        box-shadow: none;
    }

    .debt_fee span {
        background: transparent;
        text-align: center;
        font-weight: bold;
        box-shadow: none;
    }
</style>

<div class="saken-items-bill saken-alone">
    <div class="saken-build">
        <div class="saken-info">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_debt; ?> جمع کل بدهی واحد</span>
                </div>
                <input type="text" class="form-control" id="debt" disabled value="50,000">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_good_pay; ?> تخفیف خوش حسابی</span>
                </div>
                <input type="text" class="form-control" id="g_p" disabled value="5,000">
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_online_pay; ?> تخفیف پرداخت آنلاین</span>
                </div>
                <input type="text" class="form-control" id="o_p" disabled value="2,000">
            </div>

            <div class="final_pay">
                <span> مبلغ قابل پرداخت :</span>
                <span id="o_p">43,000</span> تومان
            </div>

        </div>
    </div>
    <div class="items-button">
        <button class="btn btn-info w-100" id="vorood"><?php echo $sym_online_pay; ?> پرداخت</button>
    </div>

</div>

<div class="saken-items-bill saken-alone" id="my_debt">
    <div class=" saken-build" style="justify-content: center;">
        <div class="saken-info">
            <h2>لیست بدهی های من</h2>
        </div>
    </div>

</div>
<fieldset>
    <legend>
        <div class="tarikh">1402/07/17</div>
        <div class="zaman">21:10:45</div>
    </legend>
    <div class="saken-items-bill saken-alone">
        <div class="saken-build">
            <div class="saken-info">

                <div class="debt">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $sym_pay_debt_no; ?> شارژ مرداد</span>
                        </div>
                    </div>
                    <div class="debt_fee">
                        <span class="form-control" id="o_p">100,000 تومان</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</fieldset>

<?php require_once('footer.php'); ?>