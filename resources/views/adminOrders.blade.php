@extends('layouts.adminLayout')

@section('styling')

    <link rel="stylesheet" href="/dist/css/filestyleBootstrap.css">

@endsection

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
                        <a href="/admin" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                Admin Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/adminOrders" class="nav-link active">
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
                    <h1 class="m-0 text-dark">Orders</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Product Types</li>
                    </ol>
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
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">Oders list</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- text input -->
                        <div class="card-body table-responsive p-0">
                            <div id="reloadSection">
                            <table class="table table-hover">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Amount (AUD)</th>
                                    <th>Date & Time</th>
                                    <th>Payment Id</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($orders as $o)
                                <tr>
                                    <td>{{ $o->order_id }}</td>
                                    <td>{{ $o->cus_name }}</td>
                                    <td>${{ $o->order_total_amount }}</td>
                                    <td>{{ $o->order_date }} - {{ $o->order_time }}</td>
                                    <td>{{ $o->payment_id }}</td>
                                    <td>
                                        <a data-id="{{ $o->order_id }}"
                                           data-cus-name="{{ $o->cus_name }}"
                                           data-cus-email="{{ $o->cus_email }}"
                                           data-cus-phone="{{ $o->cus_phone }}"
                                           data-cus-address="{{ $o->cus_address }}"
                                           data-cus-postcode="{{ $o->cus_postcode }}"
                                           data-cus-state="{{ $o->cus_state }}"
                                           data-cus-country="{{ $o->cus_country }}"
                                           data-order-date="{{ $o->order_date }}"
                                           data-order-time="{{ $o->order_time }}"
                                           data-order-total-amount="{{ $o->order_total_amount }}"
                                           data-payment-id="{{ $o->payment_id }}"
                                           data-cart="{{ json_encode($o->cart->items) }}"
                                           href="" data-toggle="modal" data-target="#modalViewOrder" title="View Order" class="view-order edit-link"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

@section('modal')

    <div class="modal fade" id="modalViewOrder" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Order detail</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <table class="table table-hover">
                            <tr>
                                <th>Order Id</th>
                                <td id="order_id"></td>
                            </tr>
                            <tr>
                                <th>Customer Name</th>
                                <td id="cus_name"></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td id="cus_email"></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td id="cus_phone"></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td id="cus_address"></td>
                            </tr>
                            <tr>
                                <th>Postal Code</th>
                                <td id="cus_postcode"></td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td id="cus_state"></td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td id="cus_country"></td>
                            </tr>
                            <tr>
                                <th>Date & time</th>
                                <td><span id="order_date"></span> - <span id="order_time"></span></td>
                            </tr>
                            <tr>
                                <th>Payment Id</th>
                                <td id="payment_id"></td>
                            </tr>
                            <tr>
                                <th>Total Amount (AUD)</th>
                                <td id="order_total_amount"></td>
                            </tr>
                        </table>
                        <hr>
                        <h4>Cart</h4>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Product Code</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total price</th>
                            </tr>
                            </thead>
                            <tbody id="order-cart">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

    <script src="dist/js/filestyleBootstrap.js"></script>

@endsection
