<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 12:14:59 GMT -->
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
    <title>Fastkart - Order List</title>

    <!-- Google font-->
    <?php include './Public/Pages/Admin/common/link.php'?>

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
        <?php include './Public/Pages/Admin/common/header.php'?>

        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include './Public/Pages/Admin/common/slider.php'?>

            <!-- Page Sidebar Ends-->

            <!-- Order section Start -->
            <div class="page-body">
                <!-- Table Start -->
                <?php include './Public/Pages/Admin/order/orderlist.php'?>

                <!-- Table End -->

                <!-- footer start-->
                <?php include './Public/Pages/Admin/common/footer.php'?>

            </div>
            <!-- Order section End -->
        </div>
        <!-- Page Body End-->
    </div>
    <!-- page-wrapper End -->

    <!-- Modal start -->
    <?php include './Public/Pages/Admin/common/logoutmodel.php'?>

    <!-- Modal end -->

    <!-- Delete Modal Box Start -->
    <?php include './Public/Pages/Admin/common/delete.php'?>

    <!-- Delete Modal Box End -->

    <!-- Offcanvas Box Start -->
    <!-- Offcanvas Box End -->

    <!-- latest js -->
    <?php include './Public/Pages/Admin/common/scripts.php'?>
</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 12:15:01 GMT -->
</html>