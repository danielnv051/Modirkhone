<?php $title = 'ثبت هزینه';
require_once('header.php');
$return_link = "manager.php?id=2";
require_once('page_header.php');
?>

<link rel="stylesheet" href="static/css/lib/persian-datepicker.min.css">
<link rel="stylesheet" href="static/css/main.css">
<script src="static/js/lib/jquery-3.2.1.min.js"></script>

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
        width: 8rem;
        border-bottom: 1px dashed silver;
        border-left: none;
        border-radius: 0.2rem;
    }

    .saken-info .input-group {
        margin: 0.3rem auto;
        display: flex;
        align-items: stretch;
        flex-direction: row;
    }

    .saken-info .input-group input {
        border: 1px dashed #ced4da;
    }

    .ig-desc {
        display: flex;
        flex-direction: row;
        align-items: stretch;
    }
</style>

<div class="saken-items-bill saken-alone">
    <div class="saken-build">
        <div class="saken-info">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_user; ?> عنوان هزینه</span>
                </div>
                <input type="text" class="form-control" id="debt" value="">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_money; ?>مبلغ</span>
                </div>
                <input type="number" class="form-control" id="debt" value="">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_date_from_to; ?>تاریخ</span>
                </div>
                <input type="text" class="form-control" id="from_date" value="">
                <div class="range-from-example" style="display:none;width: 100%; margin-top: 0.6rem;"></div>
            </div>
            <div class="input-group" style="display:flex;flex-direction: row;align-items: stretch;">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_desc; ?> توضیحات</span>
                </div>
                <textarea class="form-control" id="debt" style="border: 1px dashed silver;"></textarea>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_building_unit_num; ?> پرداخت کننده ها</span>
                </div>
                <select class="form-control" id="how_pay" style="border: 1px dashed silver;">
                    <option value="1">همه واحد ها</option>
                    <option value="2">واحد های خاص</option>
                </select>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_building_unit_num; ?> انتخاب واحد</span>
                </div>
                <select multiple class="form-control" id="how_pay" style="border: 1px dashed silver;">
                    <option value="1">واحد 1</option>
                    <option value="2">واحد 2</option>
                    <option value="3">واحد 3</option>
                    <option value="4">واحد 4</option>
                </select>


            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_money; ?>سهم واحد(تومان)</span>
                </div>
                <input type="number" class="form-control" id="debt" value="">
            </div>

        </div>
    </div>
    <div class="items-button">
        <button class="btn btn-info w-100" id="vorood"><?php echo $sym_save; ?> ثبت هزینه</button>
    </div>

</div>

<?php require_once('footer.php'); ?>
<script src="static/js/lib/persian-date.min.js"></script>
<script src="static/js/lib/persian-datepicker.min.js"></script>
<script src="static/js/app.js"></script>
<script>
    var from;
    from = $(".range-from-example").persianDatepicker({
        inline: true,
        altField: '.range-from-example-alt',
        altFormat: 'LLLL',
        initialValue: false,
        onSelect: function(unix) {
            var rooz = from.getState().selected.date;
            var mah = from.getState().selected.month;
            var saal = from.getState().selected.year;
            var x = saal + '/' + mah + '/' + rooz;
            $('#from_date').val(x);

            $('.table-days td').click(function() {
                $('.range-from-example').css('display', 'none');
            });

            $('.month-item ').click(function() {
                $('.range-from-example').css('display', 'inline');
            });

        }
    });

    $('#from_date').click(function() {
        $('.range-from-example').css('display', 'inline');
    });
</script>