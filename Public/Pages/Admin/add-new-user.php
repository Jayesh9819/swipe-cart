<!DOCTYPE html>
<html lang="en" dir="ltr">

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
    <title>Fastkart - Add New User</title>

    <?php include './Public/Pages/Admin/common/link.php' ?>

</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start -->
        <?php include './Public/Pages/Admin/common/header.php' ?>
        <!-- Page Header End -->

        <!-- Page Body Start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include './Public/Pages/Admin/common/slider.php' ?>
            <!-- Page Sidebar Ends-->

            <!-- Page Sidebar Start -->
            <div class="page-body">
                <!-- New User start -->
                <?php include './Public/Pages/Admin/pages/all-users/cAdd-new-user.php' ?>
                <!-- New User End -->

                <!-- footer start -->
                <div class="container-fluid">
                <?php include './Public/Pages/Admin/common/footer.php' ?>
                </div>
                <!-- footer end -->
            </div>
            <!-- Page Sidebar End -->
        </div>
    </div>
    <!-- page-wrapper End -->

    <?php include './Public/Pages/Admin/Modals/logout.php' ?>

    <?php include './Public/Pages/Admin/common/scripts.php' ?>

</body>

</html>