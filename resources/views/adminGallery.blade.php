@extends('layouts.adminLayout')

@section('styling')

    <link rel="stylesheet" href="dist/css/filestyleBootstrap.css">

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
                        <a href="/adminGallery" class="nav-link active">
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
                    <h1 class="m-0 text-dark">Gallery Images</h1>
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
                    <div class="card card-info">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="fa fa-plus"></i> &nbsp;
                                    Add New Gallery Image
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="card-body">
                                <form action="/adminAddGalleryImage" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" accept="image/*" name="galleryImg" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-outline-info" value="Save Image">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">All Gallery Images</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- text input -->
                        <div class="card-body table-responsive p-0">
                            <div id="reloadSection">
                            <table class="table table-hover">
                                <tr>
                                    <th>Image ID</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($galleryImages as $gI)
                                <tr>
                                    <td>{{ $gI->id }}</td>
                                    <td><img src="{{ $gI->img_location }}" style="width: 100px;"></td>
                                    <td>
                                        <a data-id="{{ $gI->id }}" data-img="{{ $gI->img_location }}" href="" data-toggle="modal" data-target="#modalDeleteGalleryImg" title="Delete" class="delete-gallery-img delete-link">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
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

    <div class="modal fade" id="modalDeleteGalleryImg" role="dialog">
        <div class="modal-dialog modal-lg">
            <form id="deleteGalleryImg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Gallery Image</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    Are you sure want to delete the image?
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="galleryImgId" name="galleryImgId">
                        <input type="hidden" id="galleryImg" name="galleryImg">
                        <input type="submit" class="btn btn-danger" value="Yes">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection

@section('scripts')

    <script src="dist/js/filestyleBootstrap.js"></script>

@endsection
