<div class="top-nav top-header sticky-header">
<?php

include './App/Logic/db_connect.php';
$sql = "SELECT * FROM settings";
$result = $conn->query($sql);
global $site;
$site = $result->fetch_assoc();


?>

<div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="navbar-top">
                    <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                        <span class="navbar-toggler-icon">
                            <i class="fa-solid fa-bars"></i>
                        </span>
                    </button>
                    <a href="./Welcome" class="web-logo nav-logo">
                        <img src="<?php echo $site['logo']; ?>" class="img-fluid blur-up lazyload" alt="">
                    </a>

                    <div class="middle-box">
                        <div class="location-box">
                            <button class="btn location-button" data-bs-toggle="modal" data-bs-target="#locationModal">
                                <span class="location-arrow">
                                    <i data-feather="map-pin"></i>
                                </span>
                                <span class="locat-name">Your Location</span>
                                <i class="fa-solid fa-angle-down"></i>
                            </button>
                        </div>

                        <div class="search-box">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="I'm searching for..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn" type="button" id="button-addon2">
                                    <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="rightside-box">
                        <div class="search-full">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i data-feather="search" class="font-light"></i>
                                </span>
                                <input type="text" class="form-control search-type" placeholder="Search here..">
                                <span class="input-group-text close-search">
                                    <i data-feather="x" class="font-light"></i>
                                </span>
                            </div>
                        </div>
                        <ul class="right-side-menu">
                            <li class="right-side">
                                <div class="delivery-login-box">
                                    <div class="delivery-icon">
                                        <div class="search-box">
                                            <i data-feather="search"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="right-side">
                                <a href="./Contact_Us" class="delivery-login-box">
                                    <div class="delivery-icon">
                                        <i data-feather="phone-call"></i>
                                    </div>
                                    <div class="delivery-detail">
                                        <h6>24/7 Delivery</h6>
                                        <h5></h5>
                                    </div>
                                </a>
                            </li>
                            <li class="right-side">
                                <a href="./Your_Wishlist" class="btn p-0 position-relative header-wishlist">
                                    <i data-feather="heart"></i>
                                </a>
                            </li>
                            <?php 
                            include "./App/Logic/db_connect.php";
                            if(isset($_SESSION['id'])) {
                                $userId = $_SESSION['id'];
                            
                                // Fetch the user's cart count from the database
                                $sql = "SELECT COUNT(*) as cart_count FROM user_cart WHERE user_id = $userId";
                                $result = $conn->query($sql);
                            
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $cartCount = $row['cart_count'];
                                } else {
                                    $cartCount = 0;
                                }
                            } else {
                                // If user is not logged in, set cart count to 0
                                $cartCount = 0;
                            }
                            
                            
                            
                            ?>
                            <li class="right-side">
                                <div class="onhover-dropdown header-badge">
                                    <button type="button" class="btn p-0 position-relative header-wishlist">
                                        <i data-feather="shopping-cart"></i>
                                        <span class="position-absolute top-0 start-100 translate-middle badge"><?php echo $cartCount; ?>
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </button>


                                    <!-- cart  -->
                                    <?php require "./Public/Pages/Home/Assets/common/cart.php" ?>



                            <li class="right-side onhover-dropdown">
                                <div class="delivery-login-box">
                                    <div class="delivery-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['name'])) {
                                        echo '<div class="onhover-div onhover-div-login">
                <h6>Hello, ' . $_SESSION['name'] . '</h6>
                <h6><a href="./User-Dashboard">My Account</a></h6>
                <h6><a href="../App/Logic/Login.php?action=logout">Log Out</a></h6>

              </div>';
                                    } else {
                                        echo '<div class="onhover-div onhover-div-login">
                <ul class="user-box-name">
                    <li class="product-box-contain">
                        <i></i>
                        <a href="./Login">Log In</a>
                    </li>

                    <li class="product-box-contain">
                        <a href="./SignUp">Register</a>
                    </li>

                    <li class="product-box-contain">
                        <a href="./Forgot-Password">Forgot Password</a>
                    </li>
                </ul>
            </div>';
                                    }
                                    ?>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>