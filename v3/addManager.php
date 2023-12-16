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

.text-title {
    font-size: 14px;
    color: #495057;
}

.alert-warning {
    color: #856404;
    background-color: #fffae7;
    border-color: #FFECB3;
}
</style>

<div class="alert alert-warning mt-3">
    <p class="text-title">آیا مدیر جدید , از ساکنین ساختمان شماست ؟ </p>
    <div class=" list-group d-flex flex-row justify-content-center ">
        <a class="list-group-item ml-1" href="#tabOne" data-toggle="list">بله</a>
        <a class="list-group-item " href="#tabtwo" data-toggle="list">خیر</a>
    </div>
</div>

<div class="tab-content">
    <!-- tab one -->
    <div id="tabOne" class="saken-items-bill saken-alone tab-pane fade show ">
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
                    <input disabled="true" type="text" class="form-control" id="debt" value="">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $sym_user; ?> نام خانوادگی</span>
                    </div>
                    <input disabled="true" type="text" class="form-control" id="debt" value="">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $sym_sim; ?> شماره همراه</span>
                    </div>
                    <input disabled="true" type="tel" class="form-control" id="debt" value="">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $sym_building_unit_num; ?> شماره واحد</span>
                    </div>
                    <input disabled="true" type="text" class="form-control" id="debt" value="">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo $sym_building_floor_num; ?> شماره طبقه</span>
                    </div>
                    <input disabled="true" type="number" class="form-control" id="debt" value="">
                </div>

            </div>
        </div>
        <div class="items-button">
            <button class="btn btn-info w-100" id="vorood"><?php echo $sym_save; ?> ثبت مدیر </button>
        </div>

    </div>
    <!-- tab two -->
    <div id="tabtwo" class="saken-items-bill saken-alone tab-pane fade show ">
        <div>
            <div class="saken-build">
                <div class="saken-info">

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $sym_user; ?> نام</span>
                        </div>
                        <input  type="text" class="form-control" id="debt" value="">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $sym_user; ?> نام خانوادگی</span>
                        </div>
                        <input  type="text" class="form-control" id="debt" value="">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $sym_sim; ?> شماره همراه</span>
                        </div>
                        <input  type="tel" class="form-control" id="debt" value="">
                    </div>


                </div>
            </div>
            <div class="items-button">
                <button class="btn btn-info w-100" id="vorood"><?php echo $sym_save; ?> ثبت مدیر </button>
            </div>
        </div>


    </div>

    <!-- <script src="./js/addManager.js"></script> -->
    <?php require_once('footer.php'); ?>