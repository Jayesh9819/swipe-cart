<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//  echo $uri;


if ($uri == "/" || $uri == "/index.php") {
    echo '<script type="text/JavaScript"> 
    window.location.replace("./index.php/Welcome");
    </script>';
    die();
} else {

    $prefix = "";
    $root = "/index.php";
    $routes = [

        // ? This is Routes which will automatically routed when index page is loaded....

        //? Home 
        $prefix . $root . '/productpage'                           => './Public/Pages/Home/productpage.php',

        $prefix . $root . '/Welcome'                           => './Public/Pages/Home/home.php',
        $prefix . $root . '/About_Us'                          => './Public/Pages/Home/about_us.php',
        $prefix . $root . '/Contact_Us'                        => './Public/Pages/Home/contact-us.php',
        $prefix . $root . '/Your_Wishlist'                     => './Public/Pages/Home/wishlist.php',
        $prefix . $root . '/Shop'                              => './Public/Pages/Home/shop.php',
        $prefix . $root . '/Cart'                              => './Public/Pages/Home/cart.php',
        $prefix . $root . '/CheckOut'                          => './Public/Pages/Home/checkout.php',
        $prefix . $root . '/Faq'                               => './Public/Pages/Home/faq.php',
        $prefix . $root . '/Order-Success'                     => './Public/Pages/Home/order-success.php',
        $prefix . $root . '/Order-Tracking'                    => './Public/Pages/Home/order-tracking.php',
        $prefix . $root . '/OTP'                               => './Public/Pages/Home/otp.php',
        $prefix . $root . '/User-Dashboard'                    => './Public/Pages/Home/user-dashboard.php',
        $prefix . $root . '/Coming-Soooonnn'                   => './Public/Pages/Home/coming-soon.php',


        //? LOGIN 
        $prefix . $root . '/Login'                             => './Public/Pages/Login/login.php',
        $prefix . $root . '/Forgot-Password'                   => './Public/Pages/Login/forgotpass.php',
        $prefix . $root . '/SignUp'                            => './Public/Pages/Login/signup.php',

        //? ADMIN
        $prefix . $root . '/test'                             => './test.php',

        $prefix . $root . '/admin'                             => './Public/Pages/Admin/index.php',
        $prefix . $root . '/product'                             => './Public/Pages/Admin/products.php',
        $prefix . $root . '/add-new-product'                             => './Public/Pages/Admin/add-new-product.php',
        $prefix . $root . '/category'                             => './Public/Pages/Admin/category.php',
        $prefix . $root . '/add-new-category'                             => './Public/Pages/Admin/add-new-category.php',
        $prefix . $root . '/adduser'                             => './Public/Pages/Admin/add-new-user.php',
        $prefix . $root . '/alluser'                             => './Public/Pages/Admin/all-user.php',
        $prefix . $root . '/coupon-list'                             => './Public/Pages/Admin/coupon-list.php',
        $prefix . $root . '/create-coupon'                             => './Public/Pages/Admin/create-coupon.php',
        $prefix . $root . '/create-role'                             => './Public/Pages/Admin/create-role.php',
        $prefix . $root . '/media'                             => './Public/Pages/Admin/media.php',
        $prefix . $root . '/order-detail'                             => './Public/Pages/Admin/order-detail.php',
        $prefix . $root . '/order-list'                             => './Public/Pages/Admin/order-list.php',
        $prefix . $root . '/order-tracking'                             => './Public/Pages/Admin/order-tracking.php',
        $prefix . $root . '/product-review'                             => './Public/Pages/Admin/product-review.php',
        $prefix . $root . '/profile-setting'                             => './Public/Pages/Admin/profile-setting.php',
        $prefix . $root . '/reports'                             => './Public/Pages/Admin/reports.php',
        $prefix . $root . '/role'                             => './Public/Pages/Admin/role.php',
        $prefix . $root . '/support-ticket'                             => './Public/Pages/Admin/support-ticket.php',
        $prefix . $root . '/takes'                             => './Public/Pages/Admin/takes.php',
        $prefix . $root . '/weight'                             => './Public/Pages/Admin/weight.php',
        $prefix . $root . '/addweight'                             => './Public/Pages/Admin/addweight.php',
        $prefix . $root . '/height'                             => './Public/Pages/Admin/height.php',
        $prefix . $root . '/addheight'                             => './Public/Pages/Admin/addheight.php',
        $prefix . $root . '/hsn'                             => './Public/Pages/Admin/hsn.php',
        $prefix . $root . '/addhsn'                             => './Public/Pages/Admin/addhsn.php',
        $prefix . $root . '/db'                             => './App/Logic/db_connect.php',
        $prefix . $root . '/addbrand'                             => './Public/Pages/Admin/addbrand.php',
        $prefix . $root . '/brand'                             => './Public/Pages/Admin/brand.php',
        $prefix . $root . '/addsize'                             => './Public/Pages/Admin/addsize.php',
        $prefix . $root . '/size'                             => './Public/Pages/Admin/size.php',
        $prefix . $root . '/addcountry'                             => './Public/Pages/Admin/addcountry.php',
        $prefix . $root . '/country'                             => './Public/Pages/Admin/country.php',
        $prefix . $root . '/addseller_id'                             => './Public/Pages/Admin/addseller_id.php',
        $prefix . $root . '/seller_id'                             => './Public/Pages/Admin/seller_id.php',
        $prefix . $root . '/addstyle_code'                             => './Public/Pages/Admin/addstyle_code.php',
        $prefix . $root . '/style_code'                             => './Public/Pages/Admin/style_code.php',
        $prefix . $root . '/addcapacity'                             => './Public/Pages/Admin/addcapacity.php',
        $prefix . $root . '/capacity'                             => './Public/Pages/Admin/capacity.php',
        $prefix . $root . '/addcolor'                             => './Public/Pages/Admin/addcolor.php',
        $prefix . $root . '/color'                             => './Public/Pages/Admin/color.php',
        $prefix . $root . '/addmaterial'                             => './Public/Pages/Admin/addmaterial.php',
        $prefix . $root . '/material'                             => './Public/Pages/Admin/material.php',
        $prefix . $root . '/addunity'                             => './Public/Pages/Admin/addunity.php',
        $prefix . $root . '/unity'                             => './Public/Pages/Admin/unity.php',
        $prefix . $root . '/addSubcategary'                             => './Public/Pages/Admin/addsubcategary.php',
        $prefix . $root . '/subcategary'                             => './Public/Pages/Admin/subcategary.php',
        $prefix . $root . '/addbreadth'                             => './Public/Pages/Admin/addbreadth.php',
        $prefix . $root . '/breadth'                             => './Public/Pages/Admin/breadth.php',
        $prefix . $root . '/addlength'                             => './Public/Pages/Admin/addlength.php',
        $prefix . $root . '/length'                             => './Public/Pages/Admin/length.php',
        $prefix . $root . '/addcountry'                             => './Public/Pages/Admin/addcountry.php',
        $prefix . $root . '/country'                             => './Public/Pages/Admin/country.php',
        $prefix . $root . '/banner'                             => './Public/Pages/Admin/banner.php',
        $prefix . $root . '/Editbanner'                             => './Public/Pages/Admin/editbanner.php',

        $prefix . $root . '/addbanner'                             => './Public/Pages/Admin/addbanner.php',












    ];

    function routeToController($uri, $routes)
    {
        if (array_key_exists($uri, $routes)) {
            require $routes[$uri];
        } else {
            abort();
        }
    }

    function abort()
    {

        require  "./Public/Pages/Error/404.php";
        die();
    }
    routeToController($uri, $routes);
}
