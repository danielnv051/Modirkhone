<body>
    <div class="main_login">
        <div class="logo bg-theme" style="z-index: 1;">
            <img src="img/logo2.png" alt="logo">
            <h1 id="title"><?php echo $title; ?></h1>
        </div>
        <?php require_once('symbol.php'); ?>
        <div class="cont" id="cont1">
            <div class="top-buttons return_keys">
                <a class="btn btn-info-v2 btn-return" href="<?php echo $return_link; ?>"><?php echo $sym_arrow_left; ?> بازگشت </a>
            </div>
            <?php
            if ($return_link == "0") {
                echo '
                <style>
                    .return_keys{
                        display:none;
                    }

                    #cont1{
                        margin-top:1rem;
                    }
                </style>
                ';
            } else {
                echo '
                <style>
                    .return_keys{
                        display:flex;
                    }

                    #cont1{
                        margin-top:2rem;
                    }
                </style>
                ';
            }

            if (isset($_GET['id'])) {
                $_info = get__info('build', 'id', '=', $_GET['id']);
                $_user = get__info('users', 'uid', '=', $_COOKIE['uid']);
            }
            ?>