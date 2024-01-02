<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/product-left-thumbnail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jan 2024 13:00:55 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="../Other/Home_assets/assetsimages/favicon/1.png" type="image/x-icon">
    <title>Product </title>

    <!-- Google font -->
    <?php require "./Public/Pages/Home/Assets/common/head.php" ?>

</head>

<body>

    <!-- Loader Start -->
    <!-- Loader End -->

    <!-- Header Start -->
    <?php require "./Public/Pages/Home/Assets/common/header.php"; ?>

    <!-- Header End -->

    <!-- mobile fix menu start -->
    <?php require "./Public/Pages/Home/Assets/common/mobile_view_menu.php"; ?>

    <!-- mobile fix menu end -->

    <!-- Breadcrumb Section Start -->
    <?php
    include "./App/Logic/db_connect.php";
    $id = isset($_GET['id']) ? $_GET['id'] : '';

    $sql = "SELECT * FROM product WHERE id=$id ORDER BY `product`.`id` DESC";
    $result = $conn->query($sql);

    // Loop through the category data and generate HTML
    while ($row = $result->fetch_assoc()) {
    ?>

        <section class="breadscrumb-section pt-0">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="breadscrumb-contain">
                            <h2><?php echo $row['product_name']; ?></h2>
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="./Welcome">
                                            <i class="fa-solid fa-house"></i>
                                        </a>
                                    </li>

                                    <li class="breadcrumb-item active"><?php echo $row['product_name']; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Product Left Sidebar Start -->
        <section class="product-section">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp">
                        <div class="row g-4">
                            <div class="col-xl-6 wow fadeInUp">
                                <div class="product-left-box">
                                    <center>
                                        <div class="row g-2">
                                            <div class="col-12">
                                                <div class="product-main-1 no-arrow" style="height: 600px;">
                                                    <div>
                                                        <div class="slider-image">
                                                            <img src="<?php echo $row['main_img']; ?>" id="img-1" data-zoom-image="<?php echo $row['main_img']; ?>" style="width: 70%; height: 70%; object-fit: cover;" class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="">
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $cover_images = $row['cover_img'];
                                                    $cover_images = str_replace('../', '', $cover_images);
                                                    $cover_images = explode(', ', $cover_images);
                                                    ?>

                                                    <?php foreach ($cover_images as $index => $cover_image) : ?>
                                                        <div>
                                                            <div class="slider-image">
                                                                <img src="<?php echo '../' . $cover_image; ?>" data-zoom-image="<?php echo '../' . $cover_image; ?>" style="width: 70%; height: 70%; object-fit: cover;" class="img-fluid image_zoom_cls-<?php echo $index + 1; ?> blur-up lazyload" alt="">
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>

                                                <div class="col-12">
                                                    <div class="bottom-slider-image left-slider no-arrow slick-top" style="height: 50px;">
                                                        <div>
                                                            <div class="sidebar-image">
                                                                <img src="<?php echo $row['main_img']; ?>" style="width: 70%; height: 70%; object-fit: cover;" class="img-fluid blur-up lazyload" alt="">
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $sidebar_images = $row['cover_img'];
                                                        $sidebar_images = str_replace('../', '', $sidebar_images);
                                                        $sidebar_images = explode(', ', $sidebar_images);
                                                        ?>
                                                        <?php foreach ($sidebar_images as $index => $sidebar_image) : ?>
                                                            <div>
                                                                <div class="sidebar-image">
                                                                    <img src="<?php echo '../' . $sidebar_image; ?>" style="width: 70%; height: 70%; object-fit: cover;" class="img-fluid blur-up lazyload" alt="">
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                            <!-- </div>
                        </div> -->



                            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="right-box-contain">
                                    <h6 class="offer-top"><?php echo $row['Discount']; ?></h6>
                                    <h2 class="name"><?php echo $row['product_name']; ?></h2>
                                    <div class="price-rating">
                                        <h3 class="theme-color price"><?php echo $row['coust_price']; ?> <del class="text-content"><?php echo $row['MRP']; ?></del>
                                            <span class="offer theme-color"></span>
                                        </h3>
                                        <div class="product-rating custom-rate">
                                            <ul class="rating">
                                                <?php
                                                $rating = $row['rating'];
                                                for ($i = 1; $i <= $rating; $i++) {
                                                    echo '<li><i data-feather="star" class="fill"></i></li>';
                                                }
                                                ?>
                                            </ul>
                                            <!-- <span class="review">23 Customer Review</span> -->
                                        </div>
                                    </div>

                                    <!-- <div class="procuct-contain">
                                        <p><?php echo $row['']; ?> </p>
                                    </div> -->


                                    <div class="note-box product-packege">
                                        <div class="cart_qty qty-box product-qty">
                                            <div class="input-group">
                                                <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <button onclick="location.href = 'cart.html';" class="btn btn-md bg-dark cart-button text-white w-100">Add To Cart</button>
                                    </div>

                                    <div class="buy-box">
                                        <a href="wishlist.html">
                                            <i data-feather="heart"></i>
                                            <span>Add To Wishlist</span>
                                        </a>

                                        <a href="compare.html">
                                            <i data-feather="shuffle"></i>
                                            <span>Add To Compare</span>
                                        </a>
                                    </div>

                                    <div class="pickup-box">
                                        <div class="product-title">
                                            <h4>Store Information</h4>
                                        </div>

                                        <!-- <div class="pickup-detail">
                                            <h4 class="text-content">Lollipop cake chocolate chocolate cake dessert
                                                jujubes.
                                                Shortbread sugar plum dessert powder cookie sweet brownie.</h4>
                                        </div> -->

                                        <div class="product-info">
                                            <ul class="product-info-list product-info-list-2">
                                                <li>Type : <a href="javascript:void(0)"><?php echo $row['sub_category']; ?></a></li>
                                                <li>SKU : <a href="javascript:void(0)"><?php echo $row['sku']; ?></a></li>
                                                <!-- <li>MFG : <a href="javascript:void(0)"></a></li> -->
                                                <?php
                                                $stockstatus = $row['stock_status'];
                                                if ($stockstatus == 1) {
                                                    echo '<li>Stock : <a href="javascript:void(0)">' . $row['net_quantity'] . ' Items Left</a></li>';
                                                } else {
                                                    echo '<li>Stock : <a href="javascript:void(0)"> Out of stock</a></li>';
                                                }
                                                ?>
                                                <!-- <li>Tags : <a href="javascript:void(0)">Cake,</a> <a href="javascript:void(0)">Backery</a></li> -->
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="paymnet-option">
                                        <div class="product-title">
                                            <h4>Guaranteed Safe Checkout</h4>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/1.svg" class="blur-up lazyload" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/2.svg" class="blur-up lazyload" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/3.svg" class="blur-up lazyload" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/4.svg" class="blur-up lazyload" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/5.svg" class="blur-up lazyload" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="product-section-box">
                                    <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="false">Additional info</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="care-tab" data-bs-toggle="tab" data-bs-target="#care" type="button" role="tab" aria-controls="care" aria-selected="false">Care Instuctions</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content custom-tab" id="myTabContent">
                                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                            <div class="product-description">
                                                <div class="nav-desh">
                                                    <p><?php echo $row['Description']; ?></p>
                                                </div>
                                            </div>



                                            <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                                                <div class="table-responsive">
                                                    <table class="table info-table">
                                                        <tbody>
                                                            <!-- <tr>
                                                            <td>Specialty</td>
                                                            <td>Vegetarian</td>
                                                        </tr> -->
                                                            <tr>
                                                                <td> Material</td>
                                                                <td><?php echo $row['material']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Brand</td>
                                                                <td><?php echo $row['Brand']; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Form</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Package Information</td>
                                                                <td>Box</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Manufacturer</td>
                                                                <td>Prayagh Nutri Product Pvt Ltd</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Item part number</td>
                                                                <td>LE 014 - 20pcs Crème Bakes (Pack of 2)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Net Quantity</td>
                                                                <td>40.00 count</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>


                                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                                <div class="review-box">
                                                    <div class="row g-4">
                                                        <div class="col-xl-6">
                                                            <div class="review-title">
                                                                <h4 class="fw-500">Customer reviews</h4>
                                                            </div>

                                                            <div class="d-flex">
                                                                <div class="product-rating">
                                                                    <ul class="rating">
                                                                        <?php
                                                                        $rating = $row['rating'];
                                                                        for ($i = 1; $i <= $rating; $i++) {
                                                                            echo '<li><i data-feather="star" class="fill"></i></li>';
                                                                        }
                                                                        ?>
                                                                    </ul>
                                                                </div>
                                                                <!-- <h6 class="ms-3">4.2 Out Of 5</h6> -->
                                                            </div>

                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li>
                                                                        <div class="rating-list">
                                                                            <h5>5 Star</h5>
                                                                            <div class="progress">
                                                                                <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                                    68%
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="rating-list">
                                                                            <h5>4 Star</h5>
                                                                            <div class="progress">
                                                                                <div class="progress-bar" role="progressbar" style="width: 67%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                                    67%
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="rating-list">
                                                                            <h5>3 Star</h5>
                                                                            <div class="progress">
                                                                                <div class="progress-bar" role="progressbar" style="width: 42%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                                    42%
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="rating-list">
                                                                            <h5>2 Star</h5>
                                                                            <div class="progress">
                                                                                <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                                    30%
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="rating-list">
                                                                            <h5>1 Star</h5>
                                                                            <div class="progress">
                                                                                <div class="progress-bar" role="progressbar" style="width: 24%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                                    24%
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6">
                                                            <div class="review-title">
                                                                <h4 class="fw-500">Add a review</h4>
                                                            </div>

                                                            <div class="row g-4">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating theme-form-floating">
                                                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                                                        <label for="name">Your Name</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-floating theme-form-floating">
                                                                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                                                                        <label for="email">Email Address</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-floating theme-form-floating">
                                                                        <input type="url" class="form-control" id="website" placeholder="Website">
                                                                        <label for="website">Website</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-floating theme-form-floating">
                                                                        <input type="url" class="form-control" id="review1" placeholder="Give your review a title">
                                                                        <label for="review1">Review Title</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="form-floating theme-form-floating">
                                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                                                                        <label for="floatingTextarea2">Write Your
                                                                            Comment</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
    <?php } ?>

    <!-- Product Left Sidebar End -->

    <!-- Releted Product Section Start -->
    <section class="product-list-section section-b-space">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Related Products</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-6_1 product-wrapper">
                        <div>
                            <div class="product-box-3 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left.html">
                                            <img src="../Other/Home_assets/assetsimages/cake/product/11.png" class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Cake</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Chocolate Chip Cookies 250 g</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(5.0)</span>
                                        </div>
                                        <h6 class="unit">500 G</h6>
                                        <h5 class="price"><span class="theme-color">$10.25</span> <del>$12.57</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="../Other/Home_assets/assetsimages/cake/product/2.png" class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(4.0)</span>
                                        </div>
                                        <h6 class="unit">250 ml</h6>
                                        <h5 class="price"><span class="theme-color">$08.02</span> <del>$15.15</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="../Other/Home_assets/assetsimages/cake/product/3.png" class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Peanut Butter Bite Premium Butter Cookies 600 g</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(2.4)</span>
                                        </div>
                                        <h6 class="unit">350 G</h6>
                                        <h5 class="price"><span class="theme-color">$04.33</span> <del>$10.36</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="../Other/Home_assets/assetsimages/cake/product/4.png" class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Snacks</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">SnackAmor Combo Pack of Jowar Stick and Jowar Chips</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(5.0)</span>
                                        </div>
                                        <h6 class="unit">570 G</h6>
                                        <h5 class="price"><span class="theme-color">$12.52</span> <del>$13.62</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="../Other/Home_assets/assetsimages/cake/product/5.png" class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Snacks</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Yumitos Chilli Sprinkled Potato Chips 100 g</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(3.8)</span>
                                        </div>
                                        <h6 class="unit">100 G</h6>
                                        <h5 class="price"><span class="theme-color">$10.25</span> <del>$12.36</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="../Other/Home_assets/assetsimages/cake/product/6.png" class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fantasy Crunchy Choco Chip Cookies</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(4.0)</span>
                                        </div>

                                        <h6 class="unit">550 G</h6>

                                        <h5 class="price"><span class="theme-color">$14.25</span> <del>$16.57</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="../Other/Home_assets/assetsimages/cake/product/7.png" class="img-fluid" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(3.8)</span>
                                        </div>

                                        <h6 class="unit">1 Kg</h6>

                                        <h5 class="price"><span class="theme-color">$12.68</span> <del>$14.69</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Releted Product Section End -->

    <!-- Footer Section Start -->
    <footer class="section-t-space">
        <div class="container-fluid-lg">
            <div class="service-section">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="service-contain">
                            <div class="service-box">
                                <div class="service-image">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/product.svg" class="blur-up lazyload" alt="">
                                </div>

                                <div class="service-detail">
                                    <h5>Every Fresh Products</h5>
                                </div>
                            </div>

                            <div class="service-box">
                                <div class="service-image">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/delivery.svg" class="blur-up lazyload" alt="">
                                </div>

                                <div class="service-detail">
                                    <h5>Free Delivery For Order Over $50</h5>
                                </div>
                            </div>

                            <div class="service-box">
                                <div class="service-image">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/discount.svg" class="blur-up lazyload" alt="">
                                </div>

                                <div class="service-detail">
                                    <h5>Daily Mega Discounts</h5>
                                </div>
                            </div>

                            <div class="service-box">
                                <div class="service-image">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/market.svg" class="blur-up lazyload" alt="">
                                </div>

                                <div class="service-detail">
                                    <h5>Best Price On The Market</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-footer section-b-space section-t-space">
                <div class="row g-md-4 g-3">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer-logo">
                            <div class="theme-logo">
                                <a href="index.html">
                                    <img src="../Other/Home_assets/assetsimages/logo/1.png" class="blur-up lazyload" alt="">
                                </a>
                            </div>

                            <div class="footer-logo-contain">
                                <p>We are a friendly bar serving a variety of cocktails, wines and beers. Our bar is a
                                    perfect place for a couple.</p>

                                <ul class="address">
                                    <li>
                                        <i data-feather="home"></i>
                                        <a href="javascript:void(0)">1418 Riverwood Drive, CA 96052, US</a>
                                    </li>
                                    <li>
                                        <i data-feather="mail"></i>
                                        <a href="javascript:void(0)">support@fastkart.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-title">
                            <h4>Categories</h4>
                        </div>

                        <div class="footer-contain">
                            <ul>
                                <li>
                                    <a href="shop-left-sidebar.html" class="text-content">Vegetables & Fruit</a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" class="text-content">Beverages</a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" class="text-content">Meats & Seafood</a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" class="text-content">Frozen Foods</a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" class="text-content">Biscuits & Snacks</a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" class="text-content">Grocery & Staples</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl col-lg-2 col-sm-3">
                        <div class="footer-title">
                            <h4>Useful Links</h4>
                        </div>

                        <div class="footer-contain">
                            <ul>
                                <li>
                                    <a href="index.html" class="text-content">Home</a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" class="text-content">Shop</a>
                                </li>
                                <li>
                                    <a href="about-us.html" class="text-content">About Us</a>
                                </li>
                                <li>
                                    <a href="blog-list.html" class="text-content">Blog</a>
                                </li>
                                <li>
                                    <a href="contact-us.html" class="text-content">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-sm-3">
                        <div class="footer-title">
                            <h4>Help Center</h4>
                        </div>

                        <div class="footer-contain">
                            <ul>
                                <li>
                                    <a href="order-success.html" class="text-content">Your Order</a>
                                </li>
                                <li>
                                    <a href="user-dashboard.html" class="text-content">Your Account</a>
                                </li>
                                <li>
                                    <a href="order-tracking.html" class="text-content">Track Order</a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="text-content">Your Wishlist</a>
                                </li>
                                <li>
                                    <a href="search.html" class="text-content">Search</a>
                                </li>
                                <li>
                                    <a href="faq.html" class="text-content">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer-title">
                            <h4>Contact Us</h4>
                        </div>

                        <div class="footer-contact">
                            <ul>
                                <li>
                                    <div class="footer-number">
                                        <i data-feather="phone"></i>
                                        <div class="contact-number">
                                            <h6 class="text-content">Hotline 24/7 :</h6>
                                            <h5>+91 888 104 2340</h5>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="footer-number">
                                        <i data-feather="mail"></i>
                                        <div class="contact-number">
                                            <h6 class="text-content">Email Address :</h6>
                                            <h5>fastkart@hotmail.com</h5>
                                        </div>
                                    </div>
                                </li>

                                <li class="social-app">
                                    <h5 class="mb-2 text-content">Download App :</h5>
                                    <ul>
                                        <li class="mb-0">
                                            <a href="https://play.google.com/store/apps" target="_blank">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/playstore.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                        <li class="mb-0">
                                            <a href="https://www.apple.com/in/app-store/" target="_blank">
                                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/appstore.svg" class="blur-up lazyload" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sub-footer section-small-space">
                <div class="reserve">
                    <h6 class="text-content">©2022 Fastkart All rights reserved</h6>
                </div>

                <div class="payment">
                    <img src="../Other/Home_assets/assetsimages/payment/1.png" class="blur-up lazyload" alt="">
                </div>

                <div class="social-link">
                    <h6 class="text-content">Stay connected :</h6>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://in.pinterest.com/" target="_blank">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-sm-4 g-2">
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="../Other/Home_assets/assetsimages/product/category/1.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
                                <h4 class="price">$36.99</h4>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="ms-2">8 Reviews</span>
                                    <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                                </div>

                                <div class="product-detail">
                                    <h4>Product Details :</h4>
                                    <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                        Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                        Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                        muffin I love carrot cake sugar plum dessert bonbon.</p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>Black Forest</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Type:</h5>
                                            <h6>White Cream Cake</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
                                    <h4>Cake Size :</h4>
                                    <select class="form-select select-form-size">
                                        <option selected>Select Size</option>
                                        <option value="1.2">1/2 KG</option>
                                        <option value="0">1 KG</option>
                                        <option value="1.5">1/5 KG</option>
                                        <option value="red">Red Roses</option>
                                        <option value="pink">With Pink Roses</option>
                                    </select>
                                </div>

                                <div class="modal-button">
                                    <button onclick="location.href = 'cart.html';" class="btn btn-md add-cart-button icon">Add
                                        To Cart</button>
                                    <button onclick="location.href = 'product-left-2.html';" class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                        View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Box End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../Other/Home_assets/assetsimages/vegetable/product/10.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../Other/Home_assets/assetsimages/vegetable/product/11.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../Other/Home_assets/assetsimages/vegetable/product/12.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="../Other/Home_assets/assetsimages/vegetable/product/13.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Add to cart Modal Start -->
    <div class="add-cart-box">
        <div class="add-iamge">
            <img src="../Other/Home_assets/assetsimages/cake/pro/1.jpg" class="img-fluid" alt="">
        </div>

        <div class="add-contain">
            <h6>Added to Cart</h6>
        </div>
    </div>
    <!-- Add to cart Modal End -->

    <!-- Tap to top start -->
    <div class="theme-option theme-option-2">
        <div class="setting-box">
            <button class="btn setting-button">
                <i class="fa-solid fa-gear"></i>
            </button>

            <div class="theme-setting-2">
                <div class="theme-box">
                    <ul>
                        <li>
                            <div class="setting-name">
                                <h4>Color</h4>
                            </div>
                            <div class="theme-setting-button color-picker">
                                <form class="form-control">
                                    <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                    <input type="color" class="form-control form-control-color" id="colorPick" value="#0da487" title="Choose your color">
                                </form>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>Dark</h4>
                            </div>
                            <div class="theme-setting-button">
                                <button class="btn btn-2 outline" id="darkButton">Dark</button>
                                <button class="btn btn-2 unline" id="lightButton">Light</button>
                            </div>
                        </li>

                        <li>
                            <div class="setting-name">
                                <h4>RTL</h4>
                            </div>
                            <div class="theme-setting-button rtl">
                                <button class="btn btn-2 rtl-unline">LTR</button>
                                <button class="btn btn-2 rtl-outline">RTL</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Sticky Cart Box Start -->
    <div class="sticky-bottom-cart">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="cart-content">
                        <div class="product-image">
                            <img src="../Other/Home_assets/assetsimages/product/category/1.jpg" class="img-fluid blur-up lazyload" alt="">
                            <div class="content">
                                <h5>Creamy Chocolate Cake</h5>
                                <h6>$32.96<del class="text-danger">$96.00</del><span>55% off</span></h6>
                            </div>
                        </div>
                        <div class="selection-section">
                            <div class="form-group mb-0">
                                <select id="input-state" class="form-control form-select">
                                    <option selected disabled>Choose Weight...</option>
                                    <option>1/2 KG</option>
                                    <option>1 KG</option>
                                    <option>1.5 KG</option>
                                </select>
                            </div>
                            <div class="cart_qty qty-box product-qty m-0">
                                <div class="input-group h-100">
                                    <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                    </button>
                                    <input class="form-control input-number qty-input" type="text" name="quantity" value="1">
                                    <button type="button" class="qty-right-plus" data-type="plus" data-field="">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="add-btn">
                            <a class="btn theme-bg-color text-white wishlist-btn" href="wishlist.html"><i class="fa fa-bookmark"></i> Wishlist</a>
                            <a class="btn theme-bg-color text-white" href="cart.html"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sticky Cart Box End -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <?php require "./Public/Pages/Home/Assets/common/js.php" ?>

</body>


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/product-left-thumbnail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jan 2024 13:01:24 GMT -->

</html>