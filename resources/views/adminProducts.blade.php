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
                        <a href="/adminProducts" class="nav-link active">
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
                        <h1 class="m-0 text-dark">Products</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="admin_dashboard.html">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
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
                                        Add New Product
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="card-body">
                                    <form action="/adminAddProduct" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Product code</label>
                                            <input type="text" name="productCode" class="form-control" placeholder="Enter ..." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="productName" class="form-control" placeholder="Enter ..." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea id="editor1" style="width: 100%" name="productDescription" class="form-control" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Product Type</label>
                                            <select class="form-control" name="productType">
                                                @foreach($productTypes as $pt)
                                                    <option value="{{ $pt->product_type_name }}">{{ $pt->product_type_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Image</label>
                                            <input type="file" accept="image/*" name="productImg" class="form-control" placeholder="Enter ..." required>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="productPrice" class="form-control" placeholder="Enter ..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-block btn-outline-info" value="Add Product">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">All Products</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- text input -->
                            <div class="card-body table-responsive p-0">
                                <div id="reloadSection">
                                <table class="table table-hover">
                                    <tr>
                                        <th>ID</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                    @foreach($products as $p)
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->product_code }}</td>
                                        <td>{{ $p->product_name }}</td>
                                        <td>{{ $p->product_type }}</td>
                                        <td>{!! $p->product_desc !!}</td>
                                        <td><img src="{{ $p->product_img_location }}" style="width: 100px;"></td>
                                        <td>{{ $p->product_price }}</td>
                                        <td><a href=""
                                               data-id="{{ $p->id }}"
                                               data-code="{{ $p->product_code }}"
                                               data-name="{{ $p->product_name }}"
                                               data-desc="{!! $p->product_desc !!}"
                                               data-type="{{ $p->product_type }}"
                                               data-img="{{ $p->product_img_location }}"
                                               data-price="{{ $p->product_price }}"
                                               data-toggle="modal" data-target="#modalEditProduct" title="Edit" class="edit-product edit-link"><i class="fa fa-edit"></i></a>
                                            <a href=""
                                               data-id="{{ $p->id }}"
                                               data-img="{{ $p->product_img_location }}"
                                               data-toggle="modal" data-target="#modalDeleteProduct" title="Delete" class="delete-product delete-link"><i class="fa fa-trash-o"></i></a></td>
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

    <div class="modal fade" id="modalEditProduct" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Product</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="/editProduct" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <img id="displayImg" class="img-fluid" src="dist/img/productsshowers.jpg">
                                    <div title="change/upload image" class="fileUpload btn btn-change btn-default">
                                        <span><i class="fa fa-upload"></i>&nbsp;&nbsp;Change Image</span>
                                        <input type="file" accept="image/*" class="upload" name="newProductImg" id="changeImage"/>
                                    </div>

                                    <div style="margin-top: 5px" class="btn btn-block btn-outline-primary" id="resetImg">Reset Image</div>
                                    <input type="hidden" id="prevImg"  name="prevImg">
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="productId" id="productId" readonly>
                                    <div class="form-group">
                                        <label>Product code</label>
                                        <input type="text" class="form-control" name="productCode" id="productCode" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label>Product name</label>
                                        <input type="text" class="form-control" name="productName" id="productName" placeholder="Enter ..." required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea type="text" id="productDesc" style="width: 100%" class="form-controntrol" name="productDesc" required placeholder="Enter ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Product Type</label>
                                        <select class="form-control" name="productType" id="productType">
                                            @foreach($productTypes as $pt)
                                                <option value="{{ $pt->product_type_name }}">{{ $pt->product_type_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="productPrice" id="productPrice" required placeholder="Enter ...">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-info" value="Save Changes">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDeleteProduct" role="dialog">
        <div class="modal-dialog modal-lg">
            <form id="deleteProduct">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Product</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    Are you sure want to delete the product?
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="productDelId" name="productId">
                        <input type="hidden" id="productDelImg" name="productImg">
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

    <!-- CK Editor -->
    <script src="plugins/ckeditor/ckeditor.js"></script>

    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            ClassicEditor
                    .create(document.querySelector('#editor1'))
                    .then(function (editor) {
                        // The editor instance
                    })
                    .catch(function (error) {
                        console.error(error)
                    })
        })

        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            ClassicEditor
                    .create(document.querySelector('#productDesc'))
                    .then(function (editor) {
                        // The editor instance
                    })
                    .catch(function (error) {
                        console.error(error)
                    })
        })
    </script>

@endsection
