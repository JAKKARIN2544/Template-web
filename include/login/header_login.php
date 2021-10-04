<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../src/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../src/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../src/dist/css/adminlte.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
    .login-box,
    .register-box {
        width: 600px;
    }

    @media (max-width: 550px) {

        .login-box,
        .register-box {
            margin-top: .5rem;
            width: 90%;
        }
    }

    .login-box .card {
        margin-bottom: 40px;
    }

    .login-card-body {
        background-color: #fff;
        color: #666;
        padding: 20px;
        border: 1px;
        border-style: solid;
        border-color: #232323;
    }

    .login-page,
    .register-page {
        font-family: 'Mitr', sans-serif;
        background: url("../src/dist/img/back-2.png") no-repeat center center fixed;
        background-size: cover;


    }

    .toggle_pwd1 {
        font-family: 'Mitr', sans-serif;
        font-size: 15px;
    }

    .logo {
        width: 250px;
    }
    #toggle_pwd1{
        margin-top: -10px;
        margin-left: 70px;
    }
    
    .col-md-5{
        padding-top: 10px;
    }
    </style>
    <style>
.user-image {
    width: 30px;
}

.form-password {
    padding-top: 100px;
}

.lds-facebook {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
}

.lds-facebook div {
    display: inline-block;
    position: absolute;
    left: 8px;
    width: 16px;
    background: #1E1E1E;
    animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}

.lds-facebook div:nth-child(1) {
    left: 8px;
    animation-delay: -0.24s;
}

.lds-facebook div:nth-child(2) {
    left: 32px;
    animation-delay: -0.12s;
}

.lds-facebook div:nth-child(3) {
    left: 56px;
    animation-delay: 0;
}
.loader{
    font-family: 'Mitr', sans-serif;
}

@keyframes lds-facebook {
    0% {
        top: 8px;
        height: 64px;
    }

    50%,
    100% {
        top: 24px;
        height: 32px;
    }

}
.preloader {
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    background-color: #f4f6f9;
    height: 100vh;
    width: 100%;
    transition: height 300ms linear;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 9999;
}

</style>
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <div class="lds-facebook">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="loader">กรุณารอสักครู่</div>
</div>
</head>