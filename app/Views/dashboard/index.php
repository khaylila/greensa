<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GreenSA Hotel | Dashboard Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Checkboxes -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/AdminLTE/dist/css/adminlte.min.css">
    <!-- ourStyles -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/etc/styles.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light position-sticky">
            <!-- Left navbar links -->
            <ul class="navbar-nav d-flex justify-content-between w-100">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <div class="input-group rounded-pill overflow-hidden border">
                        <input type="text" class="form-control border-0" placeholder="Cari Ruangan/Kamar">
                        <span class="input-group-append">
                            <button type="button" class="btn border-0">
                                <i class="fas fa-search"></i>
                            </button>
                        </span>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-green sidebar-dark-success elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url(); ?>assets/AdminLTE/index3.html" class="brand-link">
                <img src="<?= base_url(); ?>assets/AdminLTE/dist/img/AdminLTELogo.png" alt="GreenSA Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>GreenSA</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url(); ?>assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Agustian Pratama</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item menu-is-opening menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Monitoring
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>assets/AdminLTE/index.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ruang Kamar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>assets/AdminLTE/index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ruang Meeting</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>assets/AdminLTE/index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Makanan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-money-bill"></i>
                                <p>
                                    Atur Harga
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>assets/AdminLTE/index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ruang Kamar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>assets/AdminLTE/index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ruang Meeting</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>assets/AdminLTE/index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Makanan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>users" class="nav-link">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    Kelola Akun
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content p-4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-weight-bold">FILTER</h5>
                                <div class="overflow-auto" style="max-height: 70vh;">
                                    <h6 class="mb-2">FASILITAS</h6>
                                    <div class="card mb-1">
                                        <div class="card-body p-1">
                                            <div class="pretty p-default p-curve p-thick">
                                                <input type="checkbox" />
                                                <div class="state p-success">
                                                    <label class="text-secondary font-weight-normal"><i class="fas fa-snowflake mr-1"></i>Air Cond.</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body p-1">
                                            <div class="pretty p-default p-curve p-thick">
                                                <input type="checkbox" />
                                                <div class="state p-success">
                                                    <label class="text-secondary font-weight-normal"><i class="fas fa-wifi mr-1"></i>WiFi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h7 class="mb-2">
                                        HARGA
                                    </h7>
                                    <div class="input-group mb-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input-price-min">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Min" aria-describedby="input-price-min">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="input-price-max">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Max" aria-describedby="input-price-max">
                                    </div>
                                    <hr>
                                    <h7 class="mb-2">
                                        STATUS KAMAR
                                    </h7>
                                    <div class="card mb-1">
                                        <div class="card-body p-1">
                                            <div class="pretty p-default p-curve p-thick">
                                                <input type="checkbox" />
                                                <div class="state p-success">
                                                    <label class="text-success font-weight-normal">Available</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-1">
                                        <div class="card-body p-1">
                                            <div class="pretty p-default p-curve p-thick">
                                                <input type="checkbox" />
                                                <div class="state p-secondary">
                                                    <label class="text-secondary font-weight-normal">Reserved</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body p-1">
                                            <div class="pretty p-default p-curve p-thick">
                                                <input type="checkbox" />
                                                <div class="state p-danger">
                                                    <label class="text-danger font-weight-normal">Maintance</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h7 class="mb-2">
                                        FREE TEXT
                                    </h7>
                                    <div class="form-group">
                                        <textarea class="form-control" style="resize: none;" id="freeText" rows="3" placeholder="Enter text..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-weight-bold">DAFTAR KAMAR</h5>
                                <div class="overflow-auto" style="max-height: 70vh;">
                                    <div class="position-relative">
                                        <div class="card bg-gray-200">
                                            <div class="card-body min-h-150 p-2">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="<?= base_url(); ?>img/image1.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <div class="col-md-5 px-4">
                                                        <h2><u class="underline-offset-4">Suites Room</u></h2>
                                                        <div class="border-top border-bottom border-slate-300 line-clamp-2 pt-1 pb-1 small">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eos alias sint autem! Molestias, odit? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, expedita.
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-snowflake mr-1"></i>Air Conditioner</small>
                                                            </div>
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-wifi mr-1"></i>Wifi</small>
                                                            </div>
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-bath mr-1"></i>Bath Tube</small>
                                                            </div>
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-bed mr-1"></i>King Size</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 border-left border-slate-300 text-green-800 d-flex align-items-center justify-content-center">
                                                        <div class="text-center">
                                                            <h3 class="mb-0">Rp999,999,999</h3>
                                                            <small>for 1 night</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ribbon-wrapper-left ribbon-lg">
                                            <div class="ribbon-left bg-success text-lg">
                                                Available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative">
                                        <div class="card bg-gray-200">
                                            <div class="card-body min-h-150 p-2">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="<?= base_url(); ?>img/image1.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <div class="col-md-5 px-4">
                                                        <h2><u class="underline-offset-4">Suites Room</u></h2>
                                                        <div class="border-top border-bottom border-slate-300 line-clamp-2 pt-1 pb-1 small">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eos alias sint autem! Molestias, odit? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, expedita.
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-snowflake mr-1"></i>Air Conditioner</small>
                                                            </div>
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-wifi mr-1"></i>Wifi</small>
                                                            </div>
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-bath mr-1"></i>Bath Tube</small>
                                                            </div>
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-bed mr-1"></i>King Size</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 border-left border-slate-300 text-green-800 d-flex align-items-center justify-content-center">
                                                        <div class="text-center">
                                                            <h3 class="mb-0">Rp999,999,999</h3>
                                                            <small>for 1 night</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ribbon-wrapper-left ribbon-lg">
                                            <div class="ribbon-left bg-success text-lg">
                                                Available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative">
                                        <div class="card bg-gray-200">
                                            <div class="card-body min-h-150 p-2">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="<?= base_url(); ?>img/image1.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                    <div class="col-md-5 px-4">
                                                        <h2><u class="underline-offset-4">Suites Room</u></h2>
                                                        <div class="border-top border-bottom border-slate-300 line-clamp-2 pt-1 pb-1 small">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eos alias sint autem! Molestias, odit? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, expedita.
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-snowflake mr-1"></i>Air Conditioner</small>
                                                            </div>
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-wifi mr-1"></i>Wifi</small>
                                                            </div>
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-bath mr-1"></i>Bath Tube</small>
                                                            </div>
                                                            <div class="col-6">
                                                                <small class="text-secondary"><i class="fas fa-bed mr-1"></i>King Size</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 border-left border-slate-300 text-green-800 d-flex align-items-center justify-content-center">
                                                        <div class="text-center">
                                                            <h3 class="mb-0">Rp999,999,999</h3>
                                                            <small>for 1 night</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ribbon-wrapper-left ribbon-lg">
                                            <div class="ribbon-left bg-success text-lg">
                                                Available
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2023 <a href="https://uinsby.ac.id">Greensa</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>

</html>