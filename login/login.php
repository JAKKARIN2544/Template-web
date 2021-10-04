<?php include_once '../include/login/header_login.php'; ?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img class="logo" src="../src/dist/img/fix-logo.png">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg text-danger"> <span class="">ล็อกอิน ก่อนเข้าใช้งาน !!!</span></p>

                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="input-group mb-3">
                                <input type="text" style="text-align:center" class="form-control" placeholder="Username"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="input-group mb-3">
                                <input type="password" style="text-align:center" class="form-control"
                                    placeholder="Password" name="password" id="password"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                    <div class="col-md-2">
                        </div>
                        <div class="col-md-3">
                            <div class="icheck-dark ">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    จดจำผู้ใช้งาน
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icheck-dark ">
                            <span id="toggle_pwd1" class="fas fa-eye"><a class="toggle_pwd1 text-dark"> show Password</a></span>
                            </div>
                        </div>


                        <!-----
                        <div class="col-md-5 pwd-tog">
                            <span id="toggle_pwd1" class="fas fa-eye"><a class="toggle_pwd1 text-dark"> show Password</a></span>
                        </div>  -->
                        
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <div class="col-4">
                            <a href="#" class="btn btn-success btn-block">เข้าสู่ระบบ</a>
                        </div>
                        
                    </div>
                </form>
                <br>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                        <a href="../login/forgot_password.php" class="btn btn-info btn-block">ลืมรหัสผ่าน ??</a>
                    </div>
                    <div class="col-md-5">
                        <a href="../login/register.php" class="btn btn-dark btn-block">สมัครสมาชิก</a>
                    </div>
                    <div class="col-md-1">
                    </div>

                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
        <?php include_once '../include/login/footer_login.php'; ?>