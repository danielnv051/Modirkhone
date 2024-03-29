<?php $title = 'ثبت درآمد';
require_once('header.php');
$return_link = "manager.php?id=1";
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
                    <span class="input-group-text"><?php echo $sym_user; ?> عنوان درآمد</span>
                </div>
                <input type="text" class="form-control" id="debt" value="">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_money; ?>مبلغ(تومان)</span>
                </div>
                <input type="number" class="form-control" id="debt" value="">
            </div>
            <div class="input-group" style="display:flex;flex-direction: row;align-items: stretch;">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_desc; ?> توضیحات</span>
                </div>
                <textarea class="form-control" id="debt" style="border: 1px dashed silver;"></textarea>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_building_unit_num; ?> ذینفعان</span>
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
        <button class="btn btn-info w-100" id="vorood"><?php echo $sym_save; ?> ثبت درآمد</button>
    </div>

</div>

<?php require_once('footer.php'); ?>