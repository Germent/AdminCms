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
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/daterangepicker.css') }}" rel="stylesheet">

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
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr class="text-center">
                            <th>Product</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="listBody">
                        </tbody>
                        <tr>
                            <th class="text-center" colspan="3">Total</th>
                            <th id="add_product_total" class="text-center">0</th>
                        </tr>
                        </table>
                        <form action="" method="post">
                        <div class="d-flex align-content-center flex-wrap">
                        @foreach ($products as $product)
                        <div class="card text-center shadow row mt-5 ml-1 mr-5 " style="width: 18rem;">
                            <div class="card-body categoryOf{{ $product->productcategories->id }}" data-product="{{ $product->id }}">
                              <h5 class="card-title">{{ $product->name }}</h5>
                              <p class="card-text">{{ $product->productcategories->category }}</p>
                              <button class="btn btn-primary" type="button" onclick="addPesan('{{ $product->id }}')">Pesan</button>
                            </div>
                          </div>
                          @endforeach
                        </div>
                        </form>

                        <div class="card-body mt-5">
                            <form action="" method="post">
                            <div class="form-group">
                                <label>Customer Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required name="customer_name" autocomplete="off" placeholder="Customer Name" value="{{ isset($transactions) ? $transactions->customer_name : '' }}">
                            </div>
                            <div class="form-group">
                                <label>Customer Email</label>
                                <input type="email" class="form-control" required name="customer_email" autocomplete="off" placeholder="Customer Email" value="{{ isset($transactions) ? $transactions->customer_email : '' }}">
                            </div>
                            <div class="form-group">
                                <label>Customer Phone</label>
                                <input type="text" class="form-control" required name="customer_phone" autocomplete="off" placeholder="Customer Phone" value="{{ isset($transactions) ? $transactions->customer_phone : '' }}">
                            </div>
                            <div class="form-group">
                                <label>Additional Request</label>
                                <input type="text" class="form-control" required name="additional_request" autocomplete="off" placeholder="Additional Request" value="{{ isset($transactions) ? $transactions->additional_request : '' }}">
                            </div>
                            <div class="form-group">
                                <label>Payment Method</label>
                                <input type="text" class="form-control" required name="payment_method" autocomplete="off" placeholder="Payment Method" value="{{ isset($transactions) ? $transactions->payment_method : '' }}">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" required name="total" id="show_total" autocomplete="off" placeholder="Total" value="{{ isset($transactions) ? $transactions->total : '' }}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Total Before Discount</label>
                                <input type="text" class="form-control" required name="sub_total" id="show_sub_total" autocomplete="off" placeholder="Sub Total" value="{{ isset($transactions) ? $transactions->sub_total : '' }}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Select Voucher</label>
                                <select name="" id="voucher" class="form-control" onchange="useVoucher(this)">
                                <option value="0">--- Voucher ---</option>
                                @foreach($vouchers as $voucher)
                                <option value="{{ $voucher->id }}">{{ $voucher->code }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Total Purchase</label>
                                <input type="text" class="form-control" required name="total_purchase" autocomplete="off" onchange="useVoucher()" id="show_purchase_total" placeholder="Total Purchase" value="{{ isset($transactions) ? $transactions->total_purchase : '' }}" readonly>
                            </div>
                            
                            <div class="form-group">
                                <input type="hidden" class="form-control" required name="price_satuan" autocomplete="off" id="show_price_satuan" value="{{ isset($detailtransactions) ? $detailtransactions->price_satuan : '' }}" readonly>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" required name="price_purchase_satuan" autocomplete="off" id="show_price_purchase_satuan" value="{{ isset($detailtransactions) ? $detailtransactions->price_purchase_satuan : '' }}" readonly>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" required name="price_total" autocomplete="off" id="show_price_total" value="{{ isset($detailtransactions) ? $detailtransactions->price_total : '' }}" readonly>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" required name="qty" autocomplete="off" id="show_qty" value="{{ isset($detailtransactions) ? $detailtransactions->qty : '' }}" readonly>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" required name="price_purchase_total" autocomplete="off" id="show_price_purchase_total"  value="{{ isset($detailtransactions) ? $detailtransactions->price_purchase_total : '' }}" readonly>
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" required name="products_id" autocomplete="off" id="show_products_id" value="{{ isset($detailtransactions) ? $detailtransactions->products_id : '' }}" readonly>
                            </div>
                            <div class="text-right">
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
        const addProductTotal = document.querySelector("#add_product_total")
        const tableProductBody = document.querySelector("#listBody")
        const selectvoucher = document.querySelector("#voucher")

        let products = [];
        let vouchers = [];


        
        const getProducts = async () => {
            const response = await fetch("/api/products/all");
            const data = await response.json();
            products = data;
        };
        
        getProducts()

        const getVoucher = async () => {
            const responses = await fetch("/api/vouchers/all");
            const datavoucher = await responses.json();
            vouchers = datavoucher;
            console.log(vouchers);
            
        };
        getVoucher()

        
        
        const addPesan = (id) => {

            let qty = 0;
            let PriceTotal = 0;

            let newProduct = products.find(
                (item) => item.id == parseInt(id)
            );
            

            tableProductBody.innerHTML += `
            <tr>
                <td>
                    <input type="hidden" class="form-control text-center" id="products_id" name="products_id"  value="${newProduct.id}">  
                    <input type="text" class="form-control text-center" id="product_name" name="product_name" value="${newProduct.name}" readonly>
                </td>
                <td>
                    <input type="hidden" class="form-control text-center" id="price_satuan" name="price_satuan" value="${newProduct.price}" readonly>
                    <input type="text" class="form-control" id="price_total" name="price_total" value="${
                        newProduct.price
                    }"></input>
                </td>
                <td>
                    <input type="number" min="0" class="form-control" id="qty" name="qty" onchange="updatePrice(this)" value="${qty}}">
                </td>
                <td>
                    <input type="hidden" class="form-control text-center" name="price_purchase_satuan" id="price_purchase_satuan" name="price_purchase_satuan" value="${newProduct.purchase_price}" readonly>
                    <input type="text" class="form-control" id="price_purchase_total" name="price_purchase_total" name="price_purchase_total" value="${
                        number_format(PriceTotal)
                }" readonly>
                </td>
                <td>
                <button type="button" class="btn btn-danger mb-3 " onclick="removeProduct(this)"><i class="fas fa-trash"></i> Remove</button>
                </td>
                
                
            </tr>
            `
        
            updateTotal();


        };

        const useVoucher = (e) => {
            const totalSub = document.querySelector("#show_sub_total");
            const totalDisc = document.querySelector("#show_purchase_total");
            const isiTableChildren = [...tableProductBody.children]
            
            let total = 0;
            isiTableChildren.forEach((e)=>{
                const priceTotal = e.children[3].children[1]
                total += parseInt(priceTotal.value)
            });
            const selectVoucher = [...e.selectedOptions][0]
            console.log(selectVoucher.value)

            const newVoucher = vouchers.find((voucher)=>voucher.id == selectVoucher.value)
            if(selectVoucher.value == 0){
                totalDisc.value = total
            } else {
                if(parseInt(totalSub.value) !== 0){
                    const subtotal = (newVoucher.type === 1) ? parseInt(totalSub.value) - parseInt(newVoucher.disc_value) : parseInt(totalSub.value) * (parseInt(newVoucher.disc_value)/100)
                    totalDisc.value = subtotal
                }
            }
        
        };

        const updatePrice = (e) => {
                const qty =  parseInt(e.value);
                const priceTotalTabel = e.parentElement.parentElement.children[3].children[1]

                const priceSatuan = parseInt (
                    e.parentElement.parentElement.children[1].children[0].value
                );

                priceTotalTabel.value = priceSatuan * qty

                updateTotal();

            }

        removeProduct = async (e) => {
            e.parentElement.parentElement.remove();

            const id = e.parentElement.parentElement.children[0].children[0].value;

            const response = await fetch(`/api/products/${id}`);
            const data = await response.json();

            products = [...products, data];

            updateTotal()

            };

        const updateTotal = () => {
            const totalInput = document.querySelector("#add_product_total")
            const showtotalInput = document.querySelector("#show_total")
            const showsubtotalInput = document.querySelector("#show_sub_total")
            const showtotalpurchaseInput = document.querySelector("#show_purchase_total")
            const showpriceSatuan = document.querySelector("#show_price_satuan")
            const showpriceTotal = document.querySelector("#show_price_total")
            const showpricepurchaseSatuan = document.querySelector("#show_price_purchase_satuan")
            const showpricepurchaseTotal = document.querySelector("#show_price_purchase_total")
            const showproductsId = document.querySelector("#show_products_id")
            const showQty = document.querySelector("#show_qty")

            let total = 0;
            let totalpricesatuan = 0;

            const isiTableChildren = [...tableProductBody.children]

                isiTableChildren.forEach((e) => {
                    const priceTotal = e.children[3].children[1];
                    total += parseInt(priceTotal.value)
                    const priceSatuan = e.children[1].children[1];
                    totalpricesatuan = parseInt(priceSatuan.value);
                    const productsId = e.children[0].children[0];
                    productsid = parseInt(productsId.value);
                    const qty = e.children[2].children[0];
                    showqty = parseInt(qty.value);
            });

            totalInput.innerText = total;
            showtotalInput.value = total;
            showsubtotalInput.value = total;
            showtotalpurchaseInput.value = total;
            showpriceSatuan.value = totalpricesatuan;
            showpriceTotal.value = total;
            showpricepurchaseSatuan.value = totalpricesatuan;
            showpricepurchaseTotal.value = total;
            showproductsId.value = productsid;
            showQty.value = showqty;
        };
        updateTotal()

    </script>
    </body>
</head>