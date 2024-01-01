<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/reports.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 12:15:10 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Fastkart - Reports</title>
    <?php include './Public/Pages/Admin/common/link.php'?>

    <!-- Google font-->
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

            <!-- Reports Section Start -->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <!-- Salery Summy star-->
                        <div class="col-xl-8 col-lg-12 col-md-6">
                            <div class="card o-hidden">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Sales Summary</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="saler-summary"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Salery Summy end-->

                        <!-- Employ Salary  start-->
                        <div class="col-xl-4 col-lg-12 col-md-6">
                            <div class="h-100">
                                <div class="card o-hidden">
                                    <div class="card-header border-0 pb-1">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="card-header-title">
                                                <h4>Employees Satisfied</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="pie-chart">
                                            <div id="employ-salary"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Employ Salary end-->

                        <!-- Expenses star-->
                        <div class="col-xl-4 col-lg-12 col-md-6">
                            <div class="card o-hidden">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Expenses</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="expenses-cart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Expenses end-->

                        <!-- Sales / Purchase chart start -->
                        <div class="col-xl-8 col-lg-12 col-md-6">
                            <div class="card">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Sales / Purchase</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="sales-purchase-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Sales / Purchase chart end -->

                        <!-- Sales / Purchase Return star-->
                        <div class="col-12">
                            <div class="card o-hidden">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Sales / Purchase Return</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="sales-purchase-return-cart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Sales / Purchase Return end-->

                        <!-- Booking history start-->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Transfer History</h4>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="user-table list-table table">
                                                <thead>
                                                    <tr>
                                                        <th>Transfer Id</th>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                        <th>Total</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>14783112</td>
                                                        <td>Gray Brody</td>
                                                        <td>20-05-2020</td>
                                                        <td>$369</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.html">
                                                                        <span class="ri-eye-line"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <span class="lnr lnr-pencil"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <span class="lnr lnr-trash"></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>87541221</td>
                                                        <td>Perez Alonzo</td>
                                                        <td>07-12-2020</td>
                                                        <td>$546</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.html">
                                                                        <span class="ri-eye-line"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <span class="lnr lnr-pencil"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <span class="lnr lnr-trash"></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>213514462</td>
                                                        <td>woters maxine</td>
                                                        <td>12-12-2020</td>
                                                        <td>$369</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.html">
                                                                        <span class="ri-eye-line"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <span class="lnr lnr-pencil"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <span class="lnr lnr-trash"></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>235896144</td>
                                                        <td>christian</td>
                                                        <td>16-05-2020</td>
                                                        <td>$4699</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.html">
                                                                        <span class="ri-eye-line"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <span class="lnr lnr-pencil"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <span class="lnr lnr-trash"></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>461178242</td>
                                                        <td>Lane Skylar</td>
                                                        <td>25-10-2020</td>
                                                        <td>$1342</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="order-detail.html">
                                                                        <span class="ri-eye-line"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <span class="lnr lnr-pencil"></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <span class="lnr lnr-trash"></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Booking history  end-->
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <?php include './Public/Pages/Admin/common/footer.php'?>

            </div>
            <!-- Reports Section End -->
        </div>
        <!-- Page Body End-->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    <?php include './Public/Pages/Admin/common/logoutmodel.php'?>

    <!-- Modal End -->

    <!-- latest js -->
    <?php include './Public/Pages/Admin/common/scripts.php'?>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/reports.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 12:15:10 GMT -->
</html>