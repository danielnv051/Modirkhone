<?php $title = 'صورتحساب ساختمان';
require_once('header.php');
$return_link = "reports.php?id=" . $_GET['id'];
require_once('page_header.php');
?>

<link rel="stylesheet" href="static/css/lib/persian-datepicker.min.css">
<link rel="stylesheet" href="static/css/main.css">
<script src="static/js/lib/jquery-3.2.1.min.js"></script>

<script>
    $(document).ready(function() {

        $('.toggle_from').click(function() {
            $(".range-from-example").toggle(1000);
            $(".range-to-example").hide(1000);
        });

        $('.toggle_to').click(function() {
            $(".range-from-example").hide(1000);
            $(".range-to-example").toggle(1000);
        });

        $('.search').click(function() {
            $(".range-to-example").hide(1000);
            $(".range-from-example").hide(1000);
        });
    });
</script>

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
        font-size: 0.9rem;
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
        width: 12.5rem;
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

    .saken-items-bill {
        box-shadow: none;
    }

    fieldset {
        box-shadow: 0 0 3px #024f59;
        border-radius: 0.3rem;
        margin-bottom: 0.4rem;
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

    #pr_saken_bill {
        padding: 0.5rem;
        margin: 0;
    }

    #debt_desc {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        flex-wrap: nowrap;
    }

    .saken-factor img {
        height: inherit;
        width: inherit;
        cursor: pointer;
    }

    .saken-factor {
        width: 5rem;
        height: 100%;
    }

    h3,
    .h3 {
        font-size: 1rem;
        color: #fff;
    }

    .v3 svg {
        color: #fff;
    }

    .v3 {
        width: 100%;
        height: 2rem;
        margin-bottom: 0.5rem;
        background: #024f59;
        color: #fff;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: flex-start;
        align-items: stretch;
        gap: 0.2rem;
    }

    .show_date {
        display: block;
    }

    .range-from-example,
    .range-to-example {
        display: none;
        margin-bottom: 0.3rem;
    }

    .debt .field_title {
        color: #F44336;
    }

    .pay .field_title {
        color: #00897B;
    }

    div#pr_saken_bill {
        overflow: hidden;
    }

    .saken-build {
        overflow: hidden;
    }

    .filter {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        gap: 2rem;
    }

    .filter input[type="radio"] {
        width: 2rem;
    }
</style>

<div class="saken-items-bill saken-alone">
    <div class="saken-build" style="justify-content: center;box-shadow: 0 0 5px 1px silver;">
        <div class="saken-info">
            <a class="btn btn-info btn-return v3 toggle_from"><?php echo $sym_date_from_to; ?> <h3>تاریخ شروع</h3> </a>

            <div class="range-from-example"></div>

            <a class="btn btn-info btn-return v3 toggle_to"><?php echo $sym_date_from_to; ?> <h3>تاریخ پایان</h3> </a>

            <div class="range-to-example"></div>

            <a class="btn btn-info btn-return v3 search"><?php echo $sym_magnify; ?> <h3>مشاهده گزارش</h3> </a>

            <div class="filter">
                <label for="pay"><input type="radio" name="filter" id="pay" class="form-control">واریزی ها</label>
                <label for="cost"><input type="radio" name="filter" id="cost" class="form-control">هزینه ها</label>
                <label for="all"><input type="radio" name="filter" id="all" class="form-control">همه</label>
            </div>
        </div>
    </div>
</div>

<fieldset class="debt">
    <legend>
        <div class="tarikh">1402/07/19<br />16:15:10</div>
        <span class="input-group-text field_title" style="width:70%"><?php echo $sym_good_pay; ?><span>تاسیسات</span></span>

    </legend>

    <div class="saken-items-bill saken-alone" id="pr_saken_bill">
        <div class="saken-build">
            <div class="saken-info">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $sym_good_pay; ?>مبلغ کل : <span>300,000,000 ریال</span></span>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $sym_good_pay; ?>شرح : <span>تعمیر آسانسور و هزینه پشتیبانی </span></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</fieldset>

<fieldset class="pay">
    <legend>
        <div class="tarikh">1402/07/19<br />16:15:10</div>
        <span class="input-group-text field_title" style="width:70%"><?php echo $sym_good_pay; ?><span>واریزی واحد4</span></span>

    </legend>

    <div class="saken-items-bill saken-alone" id="pr_saken_bill">
        <div class="saken-build">
            <div class="saken-info">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $sym_good_pay; ?>مبلغ کل : <span>1,000,000 ریال</span></span>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $sym_good_pay; ?>شرح : <span>شارژ ماهیانه</span></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</fieldset>



<?php require_once('footer.php'); ?>
<script src="static/js/lib/persian-date.min.js"></script>
<script src="static/js/lib/persian-datepicker.min.js"></script>
<script src="static/js/app.js"></script>
<script>
    var to, from;
    to = $(".range-to-example").persianDatepicker({
        inline: true,
        altField: '.range-to-example-alt',
        altFormat: 'LLLL',
        initialValue: false,
        onSelect: function(unix) {
            to.touched = true;
            if (from && from.options && from.options.maxDate != unix) {
                var cachedValue = from.getState().selected.unixDate;
                from.options = {
                    maxDate: unix
                };
                if (from.touched) {
                    from.setDate(cachedValue);
                }
            }
        }
    });
    from = $(".range-from-example").persianDatepicker({
        inline: true,
        altField: '.range-from-example-alt',
        altFormat: 'LLLL',
        initialValue: false,
        onSelect: function(unix) {
            from.touched = true;
            if (to && to.options && to.options.minDate != unix) {
                var cachedValue = to.getState().selected.unixDate;
                to.options = {
                    minDate: unix
                };
                if (to.touched) {
                    to.setDate(cachedValue);
                }
            }
        }
    });
</script>

<script>
    $('#pay').click(function() {
        $('.pay').show(500);
        $('.debt').hide(500);
    });
    $('#cost').click(function() {
        $('.debt').show(500);
        $('.pay').hide(500);
    });
    $('#all').click(function() {
        $('.debt').show(500);
        $('.pay').show(500);
    });
</script>