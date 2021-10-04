<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../src/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../src/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../src/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../src/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../src/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../src/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../src/plugins/summernote/summernote-bs4.min.css">
    <!-- Font -->
    <link rel="stylesheet" href="../../src/font/font.css">
    <!-- Style -->
    <link rel="stylesheet" href="../../src/style/style.css">
    
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../src/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../../src/plugins/toastr/toastr.min.css">
    <!-- data table -->
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
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