<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="../src/index3.html" class="navbar-brand">
            <img src="../src/dist/img/fix-logo-2.png" alt="" class="img-logo">

        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index3.html" class="nav-link">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">แจ้งซ่อม</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="nav-link dropdown-toggle">รายการ <span class="badge badge-info right">22 รายการ</span></a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">รับซ่อม <span class="badge badge-success right">22 รายการ</span></a></li>
                        <li><a href="#" class="dropdown-item">กำลังซ่อม <span class="badge badge-warning right">22 รายการ</span></a></li>
                        <li><a href="#" class="dropdown-item">ยกเลิกซ่อม <span class="badge badge-danger right">22 รายการ</span></a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">เกี่ยวกับเรา</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">วิธีใช้งาน</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
           
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->

            <li class="nav-item dropdown">
                <a class="nav-link text-blue" data-toggle="dropdown" href="#">
                <img src="../src/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
                    <span class="text-dark">Alexander Pierce</span> 
                    <i class="fas fa-angle-down text-dark"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- Widget: user widget style 1 -->
                    <div class=" card-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header text-white"
                            style="background: url('../src/dist/img/photo1.png') center center;">
                            <h3 class="widget-user-username text-center">Alexander Pierce</h3>
                            <span class="widget-user-desc text-center text-warning">STATUS : ADMIN</span>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="../src/dist/img/user2-160x160.jpg" alt="User Avatar">
                        </div>
                        <div class="card-footer">
                            <span class="dropdown-item dropdown-header">จัดการข้อมูลส่วนตัว</span>
                            <div class="dropdown-divider"></div>
                            <div class="row">
                                <div class="col-sm-6 border-right">
                                    <div class="description-block">
                                        <a class="" href="../backend/profile.php"><i class="fas fa-users-cog"></i> <span
                                                class="description">แก้ไขข้อมูล</span></a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6 ">
                                    <div class="description-block">
                                        <a class="text-dark" href="../backend/change_password.php"><i
                                                class="fas fa-lock"></i> <span class="description">รหัสผ่าน</span></a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>

                            <div class="description-block">
                                <a class="text-danger" href="../backend/profile.php"><i class="fas fa-sign-out-alt"></i>
                                    <span class="description">ออกจากระบบ</span></a>
                            </div>

                            <!-- /.row -->
                        </div>
                        <!-- /.widget-user -->
                    </div>
                </div>
            </li>

        </ul>
    </div>
</nav>