<?php include_once '../include/login/header_register.php'; ?>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <img class="logo" src="../src/dist/img/fix-logo.png">
        </div>
        <!-- /.register-logo -->
        <div class="card">
            <div class="card-body register-card-body">
                <form action="#" method="POST">
                    <label>E-mail</label>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="E-mail">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-at"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label>ชื่อ - นามสกุล</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Frist name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Last name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label>ชื่อผู้ใช้งาน <span class="error1">คำแนะนำ* ควรตั้งเป็นภาษาอังกฤษเท่านั้น A-Z
                            0-9</span></label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username"
                                    onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label>รหัสผ่าน</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Confrim Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label>คุณเป็นเพศ</label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-check text-blue">
                                <input class="form-check-input text-blue" type="radio" name="radio1">
                                <label class="form-check-label"> <i class="fas fa-male"></i> ชาย</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check text-pink">
                                <input class="form-check-input text-pink" type="radio" name="radio1">
                                <label class="form-check-label"> <i class="fas fa-female"></i> หญิง</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <label>เบอร์โทรศัพท์</label>
                    <div class="row">
                    <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <img src="../src/dist/img/thailand.png" alt="" width="20" height="20">
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Phone Number">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label>วันเกิด</label>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" disabled selected hidden>Date</option>
                                    <?php
                                        $x = 1;
                                            while($x <= 31) {
                                                echo "<option>$x</option>";
                                                $x++;
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" disabled selected hidden>Month</option>
                                    <option>มกราคม</option>
                                    <option>กุมภาพันธ์</option>
                                    <option>มีนาคม</option>
                                    <option>เมษายน</option>
                                    <option>พฤษภาคม</option>
                                    <option>มิถุนายน</option>
                                    <option>กรกฎาคม</option>
                                    <option>สิงหาคม</option>
                                    <option>กันยายน</option>
                                    <option>ตุลาคม</option>
                                    <option>พฤศจิกายน</option>
                                    <option>ธันวาคม</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Year">

                        </div>
                    </div>
                    <label>ที่อยู่</label>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="บ้านเลขที่">
                                <div class="input-group-append">
                                    <div class="input-group-text">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" disabled selected hidden>หมู่</option>
                                    <?php
                                        $x = 1;
                                            while($x <= 10) {
                                                echo "<option>$x</option>";
                                                $x++;
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ถนน">
                                <div class="input-group-append">
                                    <div class="input-group-text">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ซอย">
                                <div class="input-group-append">
                                    <div class="input-group-text">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ตรอก">
                                <div class="input-group-append">
                                    <div class="input-group-text">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" disabled selected hidden>จังหวัด</option>
                                    <option>มกราคม</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" disabled selected hidden>อำเภอ</option>
                                    <option>มกราคม</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="" disabled selected hidden>ตำบล</option>
                                    <option>มกราคม</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                                <label for="customCheckbox2"
                                    class="custom-control-label">ยินดีรับข้อมูลข่าวอัพเดทและโปรโมชั่น</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6">
                            <a href="../login/register.php" class="btn btn-primary btn-block">สมัครสมาชิก</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6">
                            <a href="../login/login.php" class="btn btn-dark btn-block">เข้าสู่ระบบ</a>
                        </div>

                    </div>
                </form>
                <br>

                <!-- /.register-card-body -->
            </div>
        </div>
        <!-- /.register-box -->
        <?php include_once '../include/login/footer_register.php'; ?>