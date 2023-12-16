<?php $title = 'پشتیبانی برنامه';
require_once('header.php');
$return_link = "reports.php?id=2";
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

    textarea {
        border: 1px dashed #ced4da;
    }
</style>

<div class="saken-items-bill saken-alone">
    <div class="saken-build">
        <div class="saken-info">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_chat; ?>عنوان پیام</span>
                </div>
                <input type="text" class="form-control" id="debt" value="">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><?php echo $sym_chat_desc; ?>توضیحات</span>
                </div>
                <textarea class="form-control" id="debt" style="border: 1px dashed #ced4da;"></textarea>
            </div>

        </div>
    </div>
    <div class="items-button">
        <button class="btn btn-info w-100" id="vorood"><?php echo $sym_chat_send; ?> ارسال پیام به پشتیبانی</button>
    </div>

</div>

<?php require_once('footer.php'); ?>