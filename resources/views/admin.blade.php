@extends('layouts.adminLayout')

@section('content')

        <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <span class="brand-text font-weight-light">BathroomBuddy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/admin" class="d-block">Admin</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Admin Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/adminOrders" class="nav-link">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/adminProductTypes" class="nav-link">
                        <i class="nav-icon fa fa-columns"></i>
                        <p>
                            Product Types
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/adminProducts" class="nav-link">
                        <i class="nav-icon fa fa-product-hunt"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/adminGallery" class="nav-link">
                        <i class="nav-icon fa fa-product-hunt"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/adminLogout" class="nav-link">
                        <i class="nav-icon fa fa-sign-out text-danger"></i>
                        <p class="text">LOGOUT</p>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-lg-12 col-12">
                    <a href="/adminOrders" class="small-box-footer">
                        <div class="small-box bg-danger-gradient">
                            <div class="inner">
                                <center>
                                    <h4>
                                        <i class="fa fa-shopping-cart"></i>
                                        &nbsp;
                                        Orders
                                    </h4>
                                </center>
                            </div>
                            <!--<div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>-->
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <a href="/adminProductTypes" class="small-box-footer">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <center>
                                    <h4>
                                        <i class="fa fa-columns"></i>
                                        &nbsp;
                                        Product Types
                                    </h4>
                                </center>
                            </div>
                            <!--<div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>-->
                        </div>
                    </a>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <a href="/adminProducts" class="small-box-footer">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <center>
                                    <h4>
                                        <i class="fa fa-product-hunt"></i>
                                        &nbsp;
                                        Products
                                    </h4>
                                </center>
                            </div>
                            <!--<div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>-->
                        </div>
                    </a>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-12 col-12">
                    <a href="/adminGallery" class="small-box-footer">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <center>
                                    <h4>
                                        <i class="fa fa-image"></i>
                                        &nbsp;
                                        Gallery
                                    </h4>
                                </center>
                            </div>
                            <!--<div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>-->
                        </div>
                    </a>
                </div>
                <!-- ./col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
