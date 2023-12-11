<?php $title = 'لیست مدیران';
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

.title_table {
    border-bottom: 1px solid #beb2b2;
    padding-bottom: 13px
}

.body-table {
    margin-top: 26px;
    font-size: 13px;
}


.operation {
    margin-top: -9px;
    display: flex;
    flex-direction: row;
    margin-top: -9px;
    justify-content: center;
}

.phone-number {
    font-size: 10px;
    text-align: right;
}

.btns {
    align-items: center;
    color: #fff;
}

.admin-name {
    border-bottom: 1px dashed silver;

}

.btn-success {
    background-color: #008080;
}
.btn-danger{
    background-color: #DC143C;
}
</style>

<div class="saken-items-bill saken-alone">
    <div class="saken-build">
        <div class="container-fluid ">
            <div class="row text-center title_table">
                <div class="col-4 ">نام مدیر</div>
                <div class="col-4">شماره واحد</div>
                <div class="col-4">عملیات</div>
                <div class="border"></div>
            </div>

            <div class="row text-center body-table mb-3">
                <div class="col-4 admin-name">
                    <span>سامان مقدم</span>
                    <span class="text-muted phone-number">09053029287</span>
                </div>
                <div class="col-4 m-auto "><?php echo $sym_one; ?></div>
                <div class="col-4 btn-group operation btns ">
                    <a href="./addManager.php?pos=edit" class="btn btn-success btn-sm ml-2"> <?php echo $sym_edit; ?></a>
                    <a onclick="handleTrash()"  class="btn btn-danger btn-sm"> <?php echo $sym_trash ?> </a>
                </div>
            </div>
            <div class="row text-center body-table mb-3">
                <div class="col-4 admin-name">
                    <span>علی محمدی</span>
                    <span class="text-muted phone-number">090329328723</span>
                </div>
                <div class="col-4 m-auto "> <?php echo $sym_dash ?> </div>
                <div class="col-4 btn-group operation btns ">
                    <a href="./addManager.php?pos=edit" class="btn btn-success btn-sm ml-2"> <?php echo $sym_edit; ?></a>
                    <a onclick="handleTrash()" class="btn btn-danger btn-sm"> <?php echo $sym_trash ?> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/managerList.js"></script>
<?php require_once('footer.php'); ?>