<?php $title = 'به مدیر خونه خوش اومدی!!';
require_once('header.php');
$return_link = 0;
require_once('page_header.php');
?>
<style>
    span.name {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-items: flex-start;
        font-size: 0.85rem;
        gap: 0.4rem;
    }

    .saken-info {
        font-size: 0.8rem;
    }

    .saken-pic img {
        border-radius: 0.3rem;
        width: 4rem;
    }
</style>
<div class="main_login">
    <div class="logo bg-theme">
        <img src="img/logo2.png" alt="logo">
        <h1 id="title"><?php echo $title; ?></h1>
    </div>
    <div class="cont" id="cont1">
        <div class="top-buttons">
            <button class="btn btn-info-v2" onclick="new_build()"><?php echo $sym_add_building; ?> ساختمان جدید</button>
        </div>
        <div class="saken-title section"><?php echo $sym_arrow_left; ?> ساکن هستم</div>

        <?php get_saken_list($_COOKIE['uid']); ?>

        <div class="saken-title section"><?php echo $sym_arrow_left; ?> مدیر هستم
        </div>

        <?php get_manager_list($_COOKIE['uid']); ?>


    </div>

    <div class="cont1"></div>
</div>