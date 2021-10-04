<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">คู่มือการใช้งาน</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link text-blue" data-toggle="dropdown" href="#">
            <img src="../src/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
                Alexander Pierce
                <i class="fas fa-angle-down"></i>
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
                                    <a class="text-dark" href="../backend/change_password.php"><i class="fas fa-lock"></i> <span
                                            class="description">รหัสผ่าน</span></a>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                   
                        <div class="description-block">
                            <a class="text-danger" href="../backend/profile.php"><i class="fas fa-sign-out-alt"></i> <span
                                    class="description">ออกจากระบบ</span></a>
                        </div> 

                        <!-- /.row -->
                    </div>
                    <!-- /.widget-user -->
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="ค้นหา..."
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img class="" src="../src/dist/img/fix-logo.png">
        <!-- <span class="brand-text font-weight-light">แจ้งซ่อมออนไลน์</span> -->
    </a>

    <!--<a href="index3.html" class="brand-link">
      <img class="img-logo" src="../src/dist/img/fix-icon.png" style="height: 60px; width: auto; opacity: .8">
      <img  src="../src/dist/img/fix-logo.png" style="height: 40px; width: auto; ">
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../src/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="profile.php" class="d-block">Alexander Pierce</a>
                <span href="#" class="d-block text-success"><i class="fas fa-circle"></i> Online</span>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" id="mySearch" onkeyup="myFunction()" type="search"
                    placeholder="ค้นหา เมนู" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul id="myMenu" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">หน้าหลัก</li>
                <li class="nav-item">
                    <a href="../backend/dashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../backend/data_member.php" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            แจ้งซ่อม
                            <span class="badge badge-warning right">222 รายการ</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            การซ่อม
                            <i class="fas fa-angle-left right"></i>
                            
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="fas fa-minus nav-icon text-success"></i>
                                <p class="text-success">รับซ่อม</p>
                                <span class="badge badge-success right">6 รายการ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                <i class="fas fa-minus nav-icon text-warning"></i>
                                <p class="text-warning">กำลังซ่อม</p>
                                <span class="badge badge-warning right">6 รายการ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/boxed.html" class="nav-link">
                                <i class="fas fa-minus nav-icon text-danger"></i>
                                <p class="text-danger">ยกเลิกซ่อม</p>
                                <span class="badge badge-danger right">6 รายการ</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">การจัดการ</li>
                <li class="nav-item">
                    <a href="../backend/data_member.php" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            จัดการผู้ใช้งาน
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../backend/data_member.php" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            จัดการเจ้าหน้าที่
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../backend/data_member.php" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            จัดการตำแหน่ง
                        </p>
                    </a>
                </li>
                <li class="nav-header">Report</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            รายงาน
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/forms/general.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>รายงาน1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/advanced.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>รายงาน2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>รายงาน3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/validation.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>รายงาน4</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <br>
                <!-------------------------------------------logout--------------------------------------------------------------
                <li class="text-center">
                    <a href="../backend/dashboard.php" class="nav-link text-danger">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            ออกจากระบบ
                        </p>
                    </a>
                </li>
                -----------------------------------------logout------------------------------------------------------------------>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, p;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>