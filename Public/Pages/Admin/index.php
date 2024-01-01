<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
$commmonlink = './Public/Pages/Admin/Public/Pages/Admin/';
?>

<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 12:14:56 GMT -->
<head>
    <!-- Google font-->
    <?php include './Public/Pages/Admin/common/link.php'?>

</head>

<body>
    
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include './Public/Pages/Admin/common/header.php'?>

        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include './Public/Pages/Admin/common/slider.php'?>

            <!-- Page Sidebar Ends-->

            <!-- index body start -->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <!-- chart caard section start -->
                        <?php include './Public/Pages/Admin/index/cout.php'?>

                        <!-- chart card section End -->


                        <!-- Earning chart star-->
                        <div class="col-xl-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Revenue Report</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="report-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Earning chart  end-->


                        <!-- Best Selling Product Start -->
                        <div class="col-xl-6 col-md-12">
                            <div class="card o-hidden card-hover">
                                <div class="card-header card-header-top card-header--2 px-0 pt-0">
                                    <div class="card-header-title">
                                        <h4>Best Selling Product</h4>
                                    </div>

                                    <div class="best-selling-box d-sm-flex d-none">
                                        <span>Short By:</span>
                                        <div class="dropdown">
                                            <button class="btn p-0 dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true">Today</button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="best-selling-table w-image
                                            w-image
                                            w-image table border-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-image">
                                                                    <img src="assets/images/product/1.png"
                                                                        class="img-fluid" alt="Product">
                                                                </div>
                                                                <div class="product-name">
                                                                    <h5>Aata Buscuit</h5>
                                                                    <h6>26-08-2022</h6>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>$29.00</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Orders</h6>
                                                                <h5>62</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Stock</h6>
                                                                <h5>510</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Amount</h6>
                                                                <h5>$1,798</h5>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-image">
                                                                    <img src="assets/images/product/2.png"
                                                                        class="img-fluid" alt="Product">
                                                                </div>
                                                                <div class="product-name">
                                                                    <h5>Aata Buscuit</h5>
                                                                    <h6>26-08-2022</h6>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>$29.00</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Orders</h6>
                                                                <h5>62</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Stock</h6>
                                                                <h5>510</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Amount</h6>
                                                                <h5>$1,798</h5>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-image">
                                                                    <img src="assets/images/product/3.png"
                                                                        class="img-fluid" alt="Product">
                                                                </div>
                                                                <div class="product-name">
                                                                    <h5>Aata Buscuit</h5>
                                                                    <h6>26-08-2022</h6>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>$29.00</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Orders</h6>
                                                                <h5>62</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Stock</h6>
                                                                <h5>510</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Amount</h6>
                                                                <h5>$1,798</h5>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Best Selling Product End -->


                        <!-- Recent orders start-->
                        <div class="col-xl-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header card-header-top card-header--2 px-0 pt-0">
                                    <div class="card-header-title">
                                        <h4>Recent Orders</h4>
                                    </div>

                                    <div class="best-selling-box d-sm-flex d-none">
                                        <span>Short By:</span>
                                        <div class="dropdown">
                                            <button class="btn p-0 dropdown-toggle" type="button"
                                                id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true">Today</button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="best-selling-table table border-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-name">
                                                                    <h5>Aata Buscuit</h5>
                                                                    <h6>#64548</h6>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Date Placed</h6>
                                                                <h5>5/1/22</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>$250.00</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Order Status</h6>
                                                                <h5>Completed</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Payment</h6>
                                                                <h5 class="text-danger">Unpaid</h5>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-name">
                                                                    <h5>Aata Buscuit</h5>
                                                                    <h6>26-08-2022</h6>
                                                                </div>
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Date Placed</h6>
                                                                <h5>5/1/22</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>$250.00</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Order Status</h6>
                                                                <h5>Completed</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Payment</h6>
                                                                <h5 class="theme-color">Paid</h5>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-name">
                                                                    <h5>Aata Buscuit</h5>
                                                                    <h6>26-08-2022</h6>
                                                                </div>
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Date Placed</h6>
                                                                <h5>5/1/22</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>$250.00</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Order Status</h6>
                                                                <h5>Completed</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Payment</h6>
                                                                <h5 class="theme-color">Paid</h5>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-name">
                                                                    <h5>Aata Buscuit</h5>
                                                                    <h6>26-08-2022</h6>
                                                                </div>
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Date Placed</h6>
                                                                <h5>5/1/22</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>$250.00</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Order Status</h6>
                                                                <h5>Completed</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Payment</h6>
                                                                <h5 class="theme-color">Paid</h5>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Recent orders end-->

                        <!-- Earning chart star-->
                        <div class="col-xl-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0 mb-0">
                                    <div class="card-header-title">
                                        <h4>Earning</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="bar-chart-earning"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Earning chart end-->


                        <!-- Transactions start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0">
                                    <div class="card-header-title">
                                        <h4>Transactions</h4>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="user-table transactions-table table border-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="transactions-icon">
                                                                <i class="ri-shield-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Wallets</h6>
                                                                <p>Starbucks</p>
                                                            </div>
                                                        </td>

                                                        <td class="lost">-$74</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-1">
                                                            <div class="transactions-icon">
                                                                <i class="ri-check-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Bank Transfer</h6>
                                                                <p>Add Money</p>
                                                            </div>
                                                        </td>

                                                        <td class="success">+$125</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-2">
                                                            <div class="transactions-icon">
                                                                <i class="ri-exchange-dollar-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Paypal</h6>
                                                                <p>Add Money</p>
                                                            </div>
                                                        </td>

                                                        <td class="lost">-$50</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-3">
                                                            <div class="transactions-icon">
                                                                <i class="ri-bank-card-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Mastercard</h6>
                                                                <p>Ordered Food</p>
                                                            </div>
                                                        </td>

                                                        <td class="lost">-$40</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-4 pb-0">
                                                            <div class="transactions-icon">
                                                                <i class="ri-bar-chart-grouped-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Transfer</h6>
                                                                <p>Refund</p>
                                                            </div>
                                                        </td>

                                                        <td class="success pb-0">+$90</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Transactions end-->

                        <!-- visitors chart start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="h-100">
                                <div class="card o-hidden card-hover">
                                    <div class="card-header border-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="card-header-title">
                                                <h4>Visitors</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="pie-chart">
                                            <div id="pie-chart-visitors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- visitors chart end-->


                        <!-- To Do List start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0">
                                    <div class="card-header-title">
                                        <h4>To Do List</h4>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <ul class="to-do-list">
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Pick up kids from school</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault1">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Prepare or presentation.</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault2">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Create invoice</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault3">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Meeting with Alisa</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>

                                        <li class="to-do-item">
                                            <form class="row g-2">
                                                <div class="col-8">
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Enter Task Name">
                                                </div>
                                                <div class="col-4">
                                                    <button type="submit" class="btn btn-primary w-100 h-100">Add
                                                        task</button>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- To Do List end-->


                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <?php include './Public/Pages/Admin/common/footer.php'?>

                <!-- footer End-->
            </div>
            <!-- index body end -->

        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    <?php include './Public/Pages/Admin/common/logoutmodel.php'?>

    <!-- Modal End -->

    <!-- latest js -->
    <?php include './Public/Pages/Admin/common/scripts.php'?>

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 12:14:56 GMT -->
</html>