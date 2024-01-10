<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/fastkart/front-end/product-left-thumbnail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jan 2024 13:00:55 GMT -->

<head>

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
        <php private $category; ?>
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
                                                    <div class="product-main-1 no-arrow" style="height: 500px; width: 250px; object-fit: contain;">
                                                        <div>
                                                            <div class="slider-image">
                                                                <img src="<?php echo $row['main_img']; ?>" id="img-1" data-zoom-image="<?php echo $row['main_img']; ?>" style="width: 300px; height: 500px; object-fit: contain; display: block;" class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="">
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
                                                                    <img src="<?php echo '../' . $cover_image; ?>" data-zoom-image="<?php echo '../' . $cover_image; ?>" style="width: 300px; height: 500px; object-fit: contain; display: block;" class="img-fluid image_zoom_cls-<?php echo $index + 1; ?> blur-up lazyload" alt="">
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="bottom-slider-image left-slider no-arrow slick-top" style="height: 100px;">
                                                            <div>
                                                                <div class="sidebar-image">
                                                                    <img src="<?php echo $row['main_img']; ?>" style="width: 100px; height: 100px; object-fit: contain;" class="img-fluid blur-up lazyload" alt="">
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
                                                                        <img src="<?php echo '../' . $sidebar_image; ?>" style="width: 100px; height: 100px; object-fit: contain;" class="img-fluid blur-up lazyload" alt="">
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
                                        <h6 class="offer-top"><?php echo $row['Discount']; ?>% OFF</h6>
                                        <h2 class="name"><?php echo $row['product_name']; ?></h2>
                                        <div class="price-rating">
                                            <h3 class="theme-color price">₹.<?php echo $row['coust_price']; ?> <del class="text-content">₹.<?php echo $row['MRP']; ?></del>
                                                <span class="offer theme-color"><?php echo $row['Discount']; ?>% OFF</span>
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
                                                    <button type="button" class="qty-btn qty-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text" id="quantity" name="quantity" value="1">
                                                    <button type="button" class="qty-btn qty-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <?php
                                            if (isset($_SESSION['name'])) {
                                                $uid = $_SESSION['id'];
                                                // echo '<a href="../App/Logic/order.php?action=addtocart&uid=' . $uid . '&pid=' . $id . '&quantity=" class="btn btn-md bg-dark cart-button text-white w-100" id="addToCartBtn">Add To Cart</a>';

                                                echo '<a href="javascript:void(0);" class="btn btn-md bg-dark cart-button text-white w-100" onclick="addToCart(' . $uid . ',' . $id . ',0)" id="addToCartBtn">Add To Cart</a>';
                                            } else {
                                                echo '<a href="./Login" class="btn btn-md bg-dark cart-button text-white w-100">Login</a>';
                                            }
                                            ?>
                                        </div>

                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                // Initial quantity value
                                                var quantityValue = 1;

                                                $(".qty-btn").on("click", function() {
                                                    var inputField = $("#quantity");
                                                    var currentVal = parseInt(inputField.val());

                                                    if ($(this).data("type") === "plus") {
                                                        inputField.val(currentVal + 1);
                                                        quantityValue = currentVal + 1;
                                                    } else if ($(this).data("type") === "minus" && currentVal > 1) {
                                                        inputField.val(currentVal - 1);
                                                        quantityValue = currentVal - 1;
                                                    }
                                                });

                                                // Update the quantity in the URL when "Add To Cart" is clicked
                                                $("#addToCartBtn").on("click", function(e) {
                                                    e.preventDefault(); // Prevent the default action of the link
                                                    var addToCartUrl = $(this).attr("href");
                                                    addToCartUrl += "&quantity=" + quantityValue;
                                                    $(this).attr("href", addToCartUrl);
                                                    addToCart(<?php echo $uid; ?>, <?php echo $id; ?>, quantityValue); // Call addToCart function
                                                });
                                            });
                                        </script>

                                        <script>
                                            function addToCart(uid, pid, quantity) {
                                                // Create an XMLHttpRequest object
                                                const xhr = new XMLHttpRequest();

                                                // Specify the request method and URL (using POST for data modification)
                                                xhr.open("POST", "../App/Logic/order.php?action=addToCart", true);

                                                // Set up the content type for sending data
                                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                                                // Send the product_id and action as POST data
                                                xhr.send("uid=" + uid + "&pid=" + pid + "&quantity=" + quantity);

                                                // Handle the response
                                                xhr.onreadystatechange = function() {
                                                    if (xhr.readyState === 4) {
                                                        if (xhr.status === 200) {
                                                            // Parse the response
                                                            const response = JSON.parse(xhr.responseText);
                                                            if (response.success) {
                                                                alert("Item added to the cart successfully!");
                                                                location.reload();
                                                                // Update the cart display or perform other actions
                                                            } else {
                                                                alert("Error adding item to the cart: " + response.message);
                                                            }
                                                        } else {
                                                            // Handle other HTTP status codes (e.g., 400, 404, 500)
                                                            alert("Error: " + xhr.statusText);
                                                        }
                                                    }
                                                };
                                            }
                                        </script>



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
                                                    <li>Type : <a href="javascript:void(0)"><?php echo $row['sub_category']; ?></a>
                                                    </li>
                                                    <li>SKU : <a href="javascript:void(0)"><?php echo $row['sku']; ?></a>
                                                    </li>
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
                                                                <td>Category</td>
                                                                <td><?php echo $row['category']; ?></td>
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
                                                                <?php $category = $row['category']; ?>

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
                            <?php echo $category; ?>
                            <?php
                            include './App/Logic/db_connect.php';
                            $sql = "SELECT * FROM product WHERE status = 1 AND category='$category'";
                            // echo $sql;
                            $result = $conn->query($sql);
                            // print_r($result);
                            while ($row = $result->fetch_assoc()) {


                            ?>
                                <div>
                                    <div class="product-box-3 wow fadeInUp">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="product-left.html">
                                                    <img src="<?php echo $row['main_img']; ?>" class="img-fluid blur-up lazyload" alt="">
                                                </a>

                                            </div>
                                        </div>

                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <span class="span-name"><?php echo $row['category']; ?></span>
                                                <a href="product-left-thumbnail.html">
                                                    <h5 class="name"><?php echo $row['product_name']; ?></h5>
                                                </a>
                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <?php
                                                        $rating = $row['rating'];
                                                        for ($i = 1; $i <= $rating; $i++) {
                                                            echo '<li><i data-feather="star" class="fill"></i></li>';
                                                        }
                                                        ?>
                                                    </ul>

                                                    <span>(5.0)</span>
                                                </div>
                                                <h6 class="unit"><?php echo $row['unit']; ?></h6>
                                                <h5 class="price"><span class="theme-color">₹.<?php echo $row['coust_price']; ?></span>
                                                    <del>₹.<?php echo $row['MRP']; ?></del>
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
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Releted Product Section End -->

        <!-- Footer Section Start -->
        <?php require "./Public/Pages/Home/Assets/common/footer.php" ?>

        <!-- Footer Section End -->

        <!-- Quick View Modal Box Start -->
        <!-- Quick View Modal Box End -->

        <!-- Location Modal Start -->
        <?php require "./Public/Pages/Home/Assets/common/modals.php" ?>

        <!-- Location Modal End -->

        <!-- Deal Box Modal Start -->
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
        <!-- Sticky Cart Box End -->

        <!-- Bg overlay Start -->
        <div class="bg-overlay"></div>
        <!-- Bg overlay End -->

        <!-- latest jquery-->
        <?php require "./Public/Pages/Home/Assets/common/js.php" ?>
        </div>

</body>



</html>