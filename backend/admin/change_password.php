<?php include_once '../include/admin/header_admin.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar &  Main Sidebar Container-->
        <?php include_once '../include/admin/menu_admin.php'; ?>
        <!-- /.navbar &  Main Sidebar Container-->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 form-password">
                    <!-- general form elements -->
                    <div class="card card-dark">
                        <div class="card-header">
                            <h4 class="text-center">เปลี่ยนรหัสผ่าน</h4>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputpasswordold">รหัสผ่านเก่า <span class="text-danger">*</span> </label>
                                    <input type="Password" class="form-control" id="exampleInputoldpassword"
                                        placeholder="Old Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputpasswordnew1">รหัสผ่านใหม่ <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="New Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputpasswordnew2">ยืนยัน รหัสผ่านใหม่ <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="exampleInputPassword2"
                                        placeholder="Confirm New Password">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">เปลี่ยนรหัสผ่าน</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                    <div class="col-md-4"></div>
                </div>
            </div><!-- /.container-fluid -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once '../include/admin/footer_admin.php'; ?>