<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    

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

            <!-- Container-fluid starts-->
            <div class="page-body">
                <?php include './Public/Pages/Admin/pages/Products/cProduct.php' ?>
                <!-- Container-fluid Ends-->

                <div class="container-fluid">
                    <!-- footer start-->
                    <?php include './Public/Pages/Admin/common/footer.php' ?>

                </div>
            </div>
        </div>
    </div>
    <!-- page-wrapper End-->

    <?php include './Public/Pages/Admin/Modals/logout.php' ?>

    <?php include './Public/Pages/Admin/Modals/delete.php' ?>

    <?php include './Public/Pages/Admin/common/scripts.php' ?>

</body>

</html>