
<section class="home-section pt-2">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-8 ratio_65">
                    <div class="home-contain h-100">
                        <div class="h-100">
                            <img src="../Other/Home_assets/assets/images/vegetable/banner/1.jpg" class="bg-img blur-up lazyload" alt="">
                        </div>
                        <div class="home-detail p-center-left w-75">
                            <div>
                                <h6>Exclusive offer <span>30% Off</span></h6>
                                <h1 class="text-uppercase">Stay home & delivered your <span class="daily">Daily
                                        Needs</span></h1>
                                <p class="w-75 d-none d-sm-block">Vegetables contain many vitamins and minerals that are
                                    good for your health.</p>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                        class="fa-solid fa-right-long icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 ratio_65">
                    <div class="row g-4">
                        <div class="col-xl-12 col-md-6">
                            <div class="home-contain">
                                <img src="../Other/Home_assets/assets/images/vegetable/banner/2.jpg" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="home-detail p-center-left home-p-sm w-75">
                                    <div>
                                        <h2 class="mt-0 text-danger">45% <span class="discount text-title">OFF</span>
                                        </h2>
                                        <h3 class="theme-color">Nut Collection</h3>
                                        <p class="w-75">We deliver organic vegetables & fruits</p>
                                        <a href="shop-left-sidebar.html" class="shop-button">Shop Now <i
                                                class="fa-solid fa-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-md-6">
                            <div class="home-contain">
                                <img src="../Other/Home_assets/assets/images/vegetable/banner/3.jpg" class="bg-img blur-up lazyload"
                                    alt="">
                                <div class="home-detail p-center-left home-p-sm w-75">
                                    <div>
                                        <h3 class="mt-0 theme-color fw-bold">Healthy Food</h3>
                                        <h4 class="text-danger">Organic Market</h4>
                                        <p class="organic">Start your daily shopping with some Organic food</p>
                                        <a href="shop-left-sidebar.html" class="shop-button">Shop Now <i
                                                class="fa-solid fa-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->
    

    <!-- Banner Section Start -->
<section class="banner-section ratio_60 wow fadeInUp">
    <div class="container-fluid-lg">
        <div class="banner-slider">

            <?php
                                                include "./App/Logic/db_connect.php";

            $sql = "SELECT * FROM slider";
$result = $conn->query($sql);

            // Loop through the banner data and generate HTML
            while ($row = $result->fetch_assoc()) {
                $imagePath = $row['image'];
                $discount = $row['Discount'];
                $title = $row['name'];
                $subtitle = $row['content'];
                $buttonLink = $row['link'];
            ?>

            <div>
                <div class="banner-contain hover-effect">
                    <img src="<?php echo $imagePath; ?>" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-details">
                        <div class="banner-box">
                            <?php if (!empty($discount)) { ?>
                                <h6 class="text-danger"><?php echo $discount; ?> OFF</h6>
                            <?php } ?>
                            <h5><?php echo $title; ?></h5>
                            <h6 class="text-content"><?php echo $subtitle; ?></h6>
                        </div>
                        <a href="<?php echo $buttonLink; ?>" class="banner-button text-white">Shop Now <i
                                class="fa-solid fa-right-long ms-2"></i></a>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
</section>
