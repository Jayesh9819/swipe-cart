<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from themes.pixelstrap.com/fastkart/back-end/order-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 12:15:08 GMT -->

<head>
    <?php include './Public/Pages/Admin/common/link.php' ?>
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <i data-feather="chevrons-up"></i>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include './Public/Pages/Admin/common/header.php' ?>


        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include './Public/Pages/Admin/common/slider.php' ?>


            <!-- Page Sidebar Ends-->

            <!-- tracking section start -->
            <div class="page-body">
                <!-- tracking table start -->
                <?php include './Public/Pages/Admin/order/trakingTable.php' ?>


                <!-- tracking table end -->
                <?php include './Public/Pages/Admin/common/footer.php' ?>


            </div>
            <!-- tracking section End -->
        </div>
    </div>
    <!-- page-wrapper End -->

    <!-- Modal start -->
    <?php include './Public/Pages/Admin/common/logoutmodel.php' ?>

    <!-- Modal end -->

    <!-- latest js -->
    <?php include './Public/Pages/Admin/common/scripts.php'?>
</body>

</html>