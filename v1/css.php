<style>
    @font-face {
        src: url('font/IRANSansWeb.ttf');
        font-family: 'iransans';
    }

    @font-face {
        src: url('font/bnazanin.ttf');
        font-family: 'bnazanin';
    }

    ::before,
    ::after {
        padding: 0;
        margin: 0;
        outline: none;
        box-sizing: border-box;
    }

    body {
        direction: rtl;
    }

    .main {
        height: 100vh;
        width: 100%;
        position: relative;
        background: #FCFCFC;
    }

    .logo {
        width: fit-content;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-content: center;
        justify-content: center;
        align-items: center;
        position: absolute;
        left: 30%;
        top: 17%;
    }

    .icon {
        position: absolute;
        bottom: 0;
        left: 0;
    }

    .login {
        position: absolute;
        top: 14rem;
        width: 90%;
        margin-right: 1.1rem;
        padding: 0.5rem;
        font-family: iransans;
        font-size: 0.7rem;
        text-align: center;
    }

    .login btn {
        border-radius: 2rem;
    }

    .login span {
        font-family: 'bnazanin';
        font-size: 0.8rem;
        color: #797979;
    }

    #tel {
        margin-bottom: 1rem;
        text-align: center;
        font-family: 'bnazanin';
        font-weight: bold;
        letter-spacing: 0.5rem;
        border: 1px solid #8d8c8c;
        border-radius: 0.5rem;
    }

    .login button {
        margin: 2rem auto 1rem;
        width: 100%;
    }

    #act {
        margin-bottom: 1rem;
    }

    .active_code {
        display: flex;
        flex-direction: row-reverse;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        margin-bottom: 2rem;
    }

    .active_code input[type=tel] {
        width: 3rem;
        text-align: center;
        margin-left: 1.5rem;
    }

    .top_menu {
        width: 100vw;
        height: 3rem;
        position: fixed;
        top: 0;
        right: 0;
        background-color: #fff;
        box-shadow: 0px 3px 6px silver;
    }

    .logo_top {
        text-align: center;
    }

    .logo_top img {
        width: 6rem;
        margin-top: 0.2rem;
    }

    .panel {
        position: absolute;
        width: 100vw;
        height: 91vh;
        top: 3rem;
    }

    .users,
    .managers {
        padding: 0.5rem;
    }

    .users_title {
        background-color: #FAFAFA;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
        padding: 0.5rem;
        width: 100%;
        margin: 0 auto;
        margin-bottom: 0.7rem;
        border-radius: 0.3rem;
        font-family: iransans;
        color: #757575;
        text-align: center;
    }

    .build {
        padding: 0.5rem;
        font-family: 'bnazanin';
        line-height: 1rem;
        background-color: #EFEFEF;
        border: 1px solid silver;
        border-radius: 0.4rem;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-content: center;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .build_info {
        width: 65vw;
        cursor: pointer;
        user-select: none;
    }

    .build_pic img {
        background-color: #fff;
        padding: 0.4rem;
        border-radius: 0.5rem;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
    }

    .btn-info {
        background-color: #732960;
        border-color: #732960;
    }

    .top_btn {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-evenly;
        align-items: center;
        width: 96vw;
        margin: 3.7rem auto;
        gap: 1rem;
    }
</style>