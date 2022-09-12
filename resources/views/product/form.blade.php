<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

    <body id="page-top">

        <div id="wrapper">

            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin <sup>Transaction</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Login
            </div>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/transaction">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Transaction</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Product</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Product :</h6>
                        <a class="collapse-item" href="/product">Product</a>
                        <a class="collapse-item" href="/categories">Categories</a>
                    </div>
                </div>
            </li>



            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/voucher">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Voucher</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
                <div div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Germent Basri</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <a class="dropdown-item" href="/login">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Product</h1>


                <div class="card shadow">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">
                        <a href="/product" class="btn btn-secondary btn-sm"><i class="fas fa-chevron-left"></i></a> 
                        {{ isset($products) ? 'Edit' : 'Add' }} Product
                      </h6>
                    </div>
                    <div class="card-body">
                      <form action="" method="post" class="row">
                        <div class="form-group col-md-6">
                          <label>Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="name" required autocomplete="off" value="{{ isset($products) ? $products->name : '' }}">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Code <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="code" required autocomplete="off" value="{{ isset($products) ? $products->code : '' }}">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Menu <span class="text-danger">*</span></label>
                          <select name="product_categories_id" class="form-control">
                            <option value="0">--- Select Menu ---</option>
                            @foreach ($categories as $categori)
                              <option value="{{ $categori->id }}" {{ (isset($products) && $products->product_categories_id == $categori->id) ? 'selected' : '' }}>{{ $categori->category }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Status</label>
                          <div class="form-check">
                            @if (isset($products))
                              <input class="form-check-input" type="checkbox" value="true" name="status" id="cbxStatus" {{ ($products->status) ? 'checked' : '' }}>
                            @else
                              <input class="form-check-input" type="checkbox" value="true" name="status" id="cbxStatus" checked>
                            @endif
                            <label class="form-check-label" for="cbxStatus">
                              Aktif
                            </label>
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Price <span class="text-danger">*</span></label>
                          <input type="number" class="form-control" required autocomplete="off" name="price" value="{{ isset($products) ? $products->price : '' }}">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Purchase Price <span class="text-danger">*</span></label>
                          <input type="number" class="form-control" required autocomplete="off" name="purchase_price" value="{{ isset($products) ? $products->purchase_price : '' }}">
                        </div>
                        <div class="form-group text-center col-md-4">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" name="new_product" id="cbxNew" {{ (isset($products->new_product) && $products->new_product) ? 'checked' : '' }}>
                            <label class="form-check-label" for="cbxNew">
                              New Product
                            </label>
                          </div>
                        </div>
                        <div class="form-group text-center col-md-4">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" name="best_seller" id="cbxBest" {{ (isset($products->best_seller) && $products->best_seller) ? 'checked' : '' }}>
                            <label class="form-check-label" for="cbxBest">
                              Best Seller
                            </label>
                          </div>
                        </div>
                        <div class="form-group text-center col-md-4">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" name="featured" id="cbxFeatured" {{ (isset($products->featured) && $products->featured) ? 'checked' : '' }}>
                            <label class="form-check-label" for="cbxFeatured">
                              Featured
                            </label>
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Short Description</label>
                          <textarea name="short_description" class="form-control" rows="8">{{ (isset($products) ? $products->short_description : '') }}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Description</label>
                          <textarea name="description" class="form-control" rows="8">{{ (isset($products) ? $products->description : '') }}</textarea>
                        </div>
                        <div class="col-12 text-right">
                          <button class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
                        </div>
                      </form>
                    </div>
                  </div>

                </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

        </div>







            <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>



    <script>
      
    </script>
     
    </body>

</head>