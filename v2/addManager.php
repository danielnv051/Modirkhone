<?php $title = 'افزودن مدیر';
require_once('header.php');
$return_link = "editManager.php?id=1";
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
            <select id="units" class="form-control">
                <option>واحد 1</option>
                <option>واحد 2</option>
                <option>واحد 3</option>
                <option>واحد 4</option>
            </select>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_user; ?> نام</span>
                </div>
                <input type="text" class="form-control" id="debt" value="">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_user; ?> نام خانوادگی</span>
                </div>
                <input type="text" class="form-control" id="debt" value="">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_sim; ?> شماره همراه</span>
                </div>
                <input type="tel" class="form-control" id="debt" value="">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_building_unit_num; ?> شماره واحد</span>
                </div>
                <input type="text" class="form-control" id="debt" value="">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_building_floor_num; ?> شماره طبقه</span>
                </div>
                <input type="number" class="form-control" id="debt" value="">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_money; ?> میزان شارژ</span>
                </div>
                <input type="number" class="form-control" id="debt" value="">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_building_owner; ?> وضعیت</span>
                </div>
                <select id="user_pos" class="form-control" style="border-right: 1px dashed silver;">
                    <option>مالک</option>
                    <option>مستاجر</option>
                </select>
            </div>

        </div>
    </div>
    <div class="items-button">
        <button class="btn btn-info w-100" id="vorood"><?php echo $sym_save; ?> ویرایش</button>
    </div>

</div>

<?php require_once('footer.php'); ?>