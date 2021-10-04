<?php include_once '../include/admin/header_admin.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar &  Main Sidebar Container-->
        <?php include_once '../include/admin/menu_admin.php'; ?>
        <!-- /.navbar &  Main Sidebar Container-->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 ">
                            <h1 class="m-0 ">Dashboard Overview</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card table-responsive">
                            <table class="table table-hover" id="MyTable">
                                <thead class="">
                                    <tr>
                                        <th class="text-center" scope="col">ลำดับที่</th>
                                        <th class="text-center" scope="col">รหัสแจ้งซ่อม</th>
                                        <th class="text-center" scope="col">ชื่อ - นามสกุล</th>
                                        <th class="text-center" scope="col">วันที่แจ้งซ่อม</th>
                                        <th class="text-center" scope="col">สถานะ</th>
                                        <th class="text-center" scope="col">จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <?php   $int= mt_rand(1262055681,1262055681);
                                                    $string = date("d-M-Y",$int);
                                                   
                                            ?>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">RP<?php echo (rand(100000, 999999)); ?></td>
                                        <td class="text-center">Mark</td>
                                        <td class="text-center"><?php echo $string; ?></td>
                                        <td class="text-center"> <small class="badge badge-success">กำลังซ่อม</small>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn1 btn btn-info" data-toggle="modal"
                                                data-target="#modal-xl"><i class="fas fa-info"></i> ดูข้อมูล</a>
                                            <a class="btn1 btn btn-warning" href=""
                                                target="_blank"><i class="fas fa-check"></i> แก้ไขข้อมูล</a>
                                            <a class="btn1 btn btn-danger" href="#" target=""><i
                                                    class="fas fa-times"></i> ลบผู้ใช้งาน</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once '../include/admin/footer_admin.php'; ?>