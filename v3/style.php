<style>
    @font-face {
        font-family: 'iransans';
        src: url(./font/IRANSansWeb.ttf);
    }

    @font-face {
        font-family: 'iransansfa';
        src: url(./font/IRANSansWebFaNum.ttf);
    }

    *,
    ::after,
    ::before {
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
    }

    body {
        background-image: url(./img/bg.png);
        background-position: center;
        direction: rtl;
        font-family: 'iransansfa';
    }

    .main_login {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        margin: 0 calc(100vw/40);
        overflow: hidden;
        align-items: stretch;
    }

    .input-group-text {
        background-color: #fff;
        border-left: none;
        font-size: 0.8rem;
    }

    .input-group>.form-control {
        border-right: none;
    }

    .btn-info-v2 {
        color: #fff;
        background-color: #024f59;
        border-color: #024f59;
        font-size: 0.8rem;

    }

    .section {
        background-color: #405769;
        color: #fff;
        width: 100%;
        margin: 1rem auto;
        padding: 0.35rem;
        border-radius: 0.3rem;
        user-select: none;
    }

    w .btn-click {
        background-color: #969696;
        color: #fff;
        border-color: #969696;
    }

    .label-v2 {
        color: #024f59;
        user-select: none;
        width: 100%;
        text-align: center;
    }

    #btn_login,
    #chk_login {
        margin-top: 2vh;
        width: 100%;
    }

    #tel,
    #sms_code {
        font-family: 'iransansfa';
        text-align: center;
        letter-spacing: 0.4rem;
        color: #024f59;
    }

    #sms {
        display: none;
    }

    .logo {
        width: 100%;
        display: flex;
        align-items: center;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: flex-start;
        background-color: #fff;
        position: fixed;
        top: 0;
        right: 0;
        padding: 0.3rem;
        gap: 1rem;
    }

    .logo img {
        width: 2rem;
    }

    .bg-theme {
        background-color: #024f59;
        overflow: hidden;
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: flex-start;
        align-items: flex-end;
    }

    h1 {
        font-size: 0.8rem;
        color: #fff;
    }

    #cont1 {
        margin-top: 2rem;
        padding: 1rem 0.2rem;
    }

    .cont1 {
        margin-top: calc(100vh/30);
    }

    .top-buttons {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
    }

    .saken-pic img {
        border-radius: 0.3rem;
    }

    .saken-info {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: flex-start;
        width: 100%;
    }

    .saken-build {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: flex-start;
        width: 100%;
        background-color: #fff;
        padding: 0.4rem;
        border-radius: 0.4rem;
    }

    .saken-items {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        border-radius: 0.3rem;
        margin-top: 0.5rem;
        box-shadow: 0 0 3px 0 #405769;
        border-bottom: 3px solid #405769;
    }

    .items-button {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        gap: 0.3rem;
        padding-top: 0.3rem;
        background: #fff;
        border-bottom-right-radius: 0.3rem;
        border-bottom-left-radius: 0.3rem;
        overflow: hidden;
    }

    .items-button button {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        font-size: 0.8rem;
    }

    .del {
        background: darkgray;
    }

    .cont {
        margin-top: calc(100vh/3);
        width: 100%;
    }

    .btn-return {
        background: #ffffff;
        border-color: #17a2b8;
        color: #17a2b8;
    }

    .saken-alone {
        margin-top: 3vh;
    }

    .saken-info .input-group input {
        border-right: 1px dashed silver;
        text-align: center;
        border-bottom: 3px solid #17a2b8;
        font-size: 0.8rem;
    }

    .saken-info .input-group {
        margin: 0.3rem auto;
    }

    .w-100 {
        width: 100%;
    }

    .br-tr {
        border-radius: 0;
        border-top-right-radius: 0.3rem;
    }

    .br-tl {
        border-radius: 0;
        border-top-left-radius: 0.3rem;
    }

    .box {
        background: #fff;
        padding: 0.9rem;
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-items: center;
        gap: 0.6rem;
        border-radius: 0.3rem;
        box-shadow: 0px 0px 6px 0px #818181;
        font-size: 0.8rem;
        cursor: pointer;
        transition: all 0.3s;
        width: 6rem;
        height: 5.5rem;
    }

    .box:hover,
    .box:active {
        background-color: #024f59;
        color: #fff;
    }

    a {
        color: #024f59;
    }

    .saken-items-build {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
        border-radius: 0;
        padding: 1rem 0 0;
        box-shadow: none;
        border: none;
        border-top: 1px solid rgb(2 79 90 / 20%);
        gap: 0.5rem;
        font-size: 0.8rem;
    }

    .saken-items-bill {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        border-radius: 0.3rem;
        margin-top: 0.5rem;
        box-shadow: 0 0 3px 0 #405769;
        border: none;
        padding: 1rem 0.5rem;
        gap: 0.4rem;
    }

    .saken-items-card {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
        border-radius: 0;
        margin-top: 1.5rem;
        padding: 1rem 0;
        box-shadow: none;
        border: none;
        border-top: 1px dashed #024f59;
        gap: 0.4rem;
        font-size: 0.8rem;
        align-items: center;
    }

    .saken-items-card p {
        text-align: justify;
        line-height: 1.5rem;
    }

    #persianDatapicker {
        font-size: 0.8rem;
    }

    h2 {
        font-size: 0.9rem;
    }

    svg {
        height: 20px;
        width: 20px;
    }
</style>