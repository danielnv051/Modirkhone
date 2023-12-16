<?php
$title = 'گزارش وضعیت شارژ ساکنین';
require_once('header.php');
$return_link = "reports.php";
require_once('page_header.php');
?>

<style>
    .roof,
    .door {
        width: 100%;
    }

    .roof img,
    .door img {
        width: inherit;
        height: inherit;
    }

    .body {
        width: 100%;
        background: #fafafa;
        height: 0vh;
    }

    .saken-items-build {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-items: stretch;
        justify-content: space-between;
        gap: 0;
    }

    .wall {
        width: 37.6%;
        background: #dce5ec;
        height: 50vh;
        margin: 0 26.2vw;
        border: 2px solid #0f1114;
        border-top: none;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: flex-start;
        align-items: stretch;
        gap: 25%;
    }

    .floor {
        border-bottom: 1px dashed #0f1114;
    }
</style>

<div class="saken-items-build saken-alone saken_map">

    <div class="roof">
        <img src="img/roof.jpg" alt="roof">
    </div>

    <div class="body">
        <div class="wall">
            <div class="floor"></div>
            <div class="floor"></div>
            <div class="floor"></div>
            <div class="floor"></div>
        </div>
    </div>

    <div class="door">
        <img src="img/door.jpg" alt="door">
    </div>

</div>

<?php require_once('footer.php'); ?>