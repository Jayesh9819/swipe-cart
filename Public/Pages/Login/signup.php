<!DOCTYPE html>
<html lang="en">

<?php require "./Public/Pages/Home/Assets/common/head.php" ?>

<body class="bg-effect">

    <!-- Loader Start -->
    <!-- <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div> -->
    <!-- Loader End -->

    <!-- Header Start -->
    <?php require "./Public/Pages/Home/Assets/common/header.php"; ?>
    
    <!-- Header End -->

    <!-- mobile fix menu start -->
    <?php require "./Public/Pages/Home/Assets/common/mobile_view_menu.php"; ?>
    <!-- mobile fix menu end -->


    <?php require "Public/Pages/Login/Assets/SignUp/signup.php";?>


    <!-- Footer Section Start -->
    <?php require "./Public/Pages/Home/Assets/common/footer.php"; ?>
    <!-- Footer Section End -->

    <!-- Quick View Modal Box Start -->
    <?php require "./Public/Pages/Home/Assets/common/modals.php"; ?>
    <!-- Tap to top end -->
    

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <?php require "./Public/Pages/Home/Assets/common/js.php" ?>
</body>


</html>