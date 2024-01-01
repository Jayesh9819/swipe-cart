<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/taxes.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 12:15:09 GMT -->

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
    <title>Fastkart - Taxes</title>

    <!-- Google font -->
    <?php include './Public/Pages/Admin/common/link.php' ?>

</head>

<body>
    <!-- tap on top start-->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include './Public/Pages/Admin/common/header.php' ?>

        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include './Public/Pages/Admin/common/slider.php' ?>

            <!-- Page Sidebar Ends-->

            <!-- Texes Table Section Start -->
            <div class="page-body">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <!-- Table Start -->
                                <?php include './Public/Pages/Admin/tax/taxtabel.php'?>

                                <!-- Table End -->

                                <!-- Pagination Start -->
                                <?php include './Public/Pages/Admin/common/pagination.php'?>

                                <!-- Pagination End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <?php include './Public/Pages/Admin/common/footer.php'?>

                <!-- footer End-->
            </div>
            <!-- Texes Table Section End -->
        </div>
        <!-- Page Body End-->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    <?php include './Public/Pages/Admin/common/logoutmodel.php'?>

    <!-- Modal End -->

    <!-- Delete Modal Box Start -->
    <?php include './Public/Pages/Admin/common/delete.php'?>


    
    <!-- Delete Modal Box End -->

    <!-- latest js -->
    <?php include './Public/Pages/Admin/common/scripts.php'?>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/taxes.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 12:15:10 GMT -->

</html>