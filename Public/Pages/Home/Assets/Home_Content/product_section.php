<!-- Product Section Start -->
<section class="product-section">
    <div class="container-fluid-lg">
        <div class="row g-sm-4 g-3">
            <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                <div class="p-sticky">
                    <!-- <div class="category-menu">
                        <h3>Category</h3>
                        <ul>

                            <?php
                            include "./App/Logic/db_connect.php";

                            $sql = "SELECT * FROM category";
                            $result = $conn->query($sql);

                            // Loop through the category data and generate HTML
                            while ($row = $result->fetch_assoc()) {
                                $imagePath = $row['image'];
                                $categoryName = $row['name'];
                                //$categoryLink = $row['category_link'];
                            ?>

                            <li>
                                <div class="category-list">
                                    <img src="<?php echo $imagePath; ?>" class="blur-up lazyload" alt="">
                                    <h5>
                                        <a
                                            href="<?php echo "./category=" . $categoryName; ?>"><?php echo $categoryName; ?></a>
                                    </h5>
                                </div>
                            </li>

                            <?php } ?>

                        </ul>

                    </div> -->




                    <!-- </div> -->

                </div>
            </div>


            <div class="title">
                <h2>Bowse by Categories</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
                <p>Top Categories Of The Week</p>
            </div>

            <div class="category-slider-2 product-wrapper no-arrow">
                <?php
                include "./App/Logic/db_connect.php";

                $sql = "SELECT * FROM category";
                $result = $conn->query($sql);

                // Loop through the category data and generate HTML
                while ($row = $result->fetch_assoc()) {
                    $imagePath = $row['image'];
                    $categoryName = $row['name'];
                    //$categoryLink = $row['category_link'];
                ?>

                    <div>
                        <a href="Shop?category=<?php echo $categoryName; ?>" class="category-box category-dark">
                            <div>
                                <img src="<?php echo $imagePath; ?>" class="blur-up lazyload" alt="">
                                <h5><?php echo $categoryName; ?></h5>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>


            <div class="product-border overflow-hidden wow fadeInUp">
                <div class="product-box-slider no-arrow">
                    <?php
                    include "./App/Logic/db_connect.php";

                    $sql = "SELECT * FROM product WHERE status=1 ORDER BY `product`.`id` DESC";
                    $result = $conn->query($sql);

                    // Loop through the category data and generate HTML
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="./productpage?id=<?php echo $row['id']; ?>">
                                                <img src="<?php echo $row['main_img']; ?>" class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-left-thumbnail.html">
                                                <h6 class="name h-100"><?php echo $row['product_name']; ?></h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price"><?php echo $row['coust_price']; ?></span>
                                                <del><?php echo $row['MRP']; ?></del>
                                            </h5>

                                            <div class="product-rating mt-sm-2 mt-1">
                                                <ul class="rating">
                                                    <?php
                                                    $rating = $row['rating'];
                                                    for ($i = 1; $i <= $rating; $i++) {
                                                        echo '<li><i data-feather="star" class="fill"></i></li>';
                                                    }
                                                    ?>
                                                </ul>

                                                <h6 class="theme-color">In Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box">
                                                <button class="btn btn-add-cart addcart-button">Add
                                                    <span class="add-icon">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </span>
                                                </button>
                                                <div class="cart_qty qty-box">
                                                    <div class="input-group">
                                                        <button type="button" class="qty-left-minus" data-type="minus" data-field="">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text" name="quantity" value="0">
                                                        <button type="button" class="qty-right-plus" data-type="plus" data-field="">
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
                    <?php } ?>

                </div>
            </div>

            <div class="section-t-space">
                <div class="banner-contain">
                    <img src="../Other/Home_assets/assets/images/vegetable/banner/15.jpg" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-details p-center p-4 text-white text-center">
                        <div>
                            <h3 class="lh-base fw-bold offer-text">Get $3 Cashback! Min Order of $30</h3>
                            <h6 class="coupon-code">Use Code : GROCERY1920</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-t-space section-b-space">
                <div class="row g-md-4 g-3">
                    <div class="col-xxl-8 col-xl-12 col-md-7">
                        <div class="banner-contain hover-effect">
                            <img src="../Other/Home_assets/assets/images/vegetable/banner/12.jpg" class="bg-img blur-up lazyload" alt="">
                            <div class="banner-details p-center-left p-4">
                                <div>
                                    <h2 class="text-kaushan fw-normal theme-color">Get Ready To</h2>
                                    <h3 class="mt-2 mb-3">TAKE ON THE DAY!</h3>
                                    <p class="text-content banner-text">In publishing and graphic design, Lorem
                                        ipsum is a placeholder text commonly used to demonstrate.</p>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn btn-animation btn-sm mend-auto">Shop Now <i class="fa-solid fa-arrow-right icon"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-12 col-md-5">
                        <a href="shop-left-sidebar.html" class="banner-contain hover-effect h-100">
                            <img src="../Other/Home_assets/assets/images/vegetable/banner/13.jpg" class="bg-img blur-up lazyload" alt="">
                            <div class="banner-details p-center-left p-4 h-100">
                                <div>
                                    <h2 class="text-kaushan fw-normal text-danger">20% Off</h2>
                                    <h3 class="mt-2 mb-2 theme-color">SUMMRY</h3>
                                    <h3 class="fw-normal product-name text-title">Product</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="title d-block">
                <div>
                    <h2>Our best Seller</h2>
                    <span class="title-leaf">
                        <svg class="icon-width">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                        </svg>
                    </span>
                    <p>A virtual assistant collects the products from your list</p>
                </div>
            </div>

            <div class="best-selling-slider product-wrapper wow fadeInUp">
                <div>
                    <ul class="product-list">
                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/11.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Tuffets Whole Wheat Bread</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/12.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Potato</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/13.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Green Chilli</h6>
                                        </a>
                                        <span>200 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/14.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Muffets Burger Bun</h6>
                                        </a>
                                        <span>150 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul class="product-list">
                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/15.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Tuffets Britannia Cheezza</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/16.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Long Life Toned Milk</h6>
                                        </a>
                                        <span>1 L</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/17.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Organic Tomato</h6>
                                        </a>
                                        <span>1 KG</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/18.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Organic Jam</h6>
                                        </a>
                                        <span>150 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul class="product-list">
                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/19.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Good Life Refined Sunflower Oil</h6>
                                        </a>
                                        <span>1 L</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/20.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Good Life Raw Peanuts</h6>
                                        </a>
                                        <span>500 G</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/21.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">TufBest Farms Moong Dal</h6>
                                        </a>
                                        <span>1 KG</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="offer-product">
                                <a href="product-left-thumbnail.html" class="offer-image">
                                    <img src="../Other/Home_assets/assets/images/vegetable/product/22.png" class="blur-up lazyload" alt="">
                                </a>

                                <div class="offer-detail">
                                    <div>
                                        <a href="product-left-thumbnail.html" class="text-title">
                                            <h6 class="name">Frooti Mango Drink</h6>
                                        </a>
                                        <span>160 ML</span>
                                        <h6 class="price theme-color">$ 10.00</h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="section-t-space">
                <div class="banner-contain hover-effect">
                    <img src="../Other/Home_assets/assets/images/vegetable/banner/14.jpg" class="bg-img blur-up lazyload" alt="">
                    <div class="banner-details p-center banner-b-space w-100 text-center">
                        <div>
                            <h6 class="ls-expanded theme-color mb-sm-3 mb-1">SUMMER</h6>
                            <h2 class="banner-title">VEGETABLE</h2>
                            <h5 class="lh-sm mx-auto mt-1 text-content">Save up to 5% OFF</h5>
                            <button onclick="location.href = 'shop-left-sidebar.html';" class="btn btn-animation btn-sm mx-auto mt-sm-3 mt-2">Shop Now <i class="fa-solid fa-arrow-right icon"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="title section-t-space">
                <h2>Featured Blog</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
                <p>A virtual assistant collects the products from your list</p>
            </div>

            <div class="slider-3-blog ratio_65 no-arrow product-wrapper">
                <div>
                    <div class="blog-box">
                        <div class="blog-box-image">
                            <a href="blog-detail.html" class="blog-image">
                                <img src="../Other/Home_assets/assets/images/vegetable/blog/1.jpg" class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>

                        <a href="blog-detail.html" class="blog-detail">
                            <h6>20 March, 2022</h6>
                            <h5>Fresh Vegetable Online</h5>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="blog-box">
                        <div class="blog-box-image">
                            <a href="blog-detail.html" class="blog-image">
                                <img src="../Other/Home_assets/assets/images/vegetable/blog/2.jpg" class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>

                        <a href="blog-detail.html" class="blog-detail">
                            <h6>10 April, 2022</h6>
                            <h5>Fresh Combo Fruit</h5>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="blog-box">
                        <div class="blog-box-image">
                            <a href="blog-detail.html" class="blog-image">
                                <img src="../Other/Home_assets/assets/images/vegetable/blog/3.jpg" class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>

                        <a href="blog-detail.html" class="blog-detail">
                            <h6>10 April, 2022</h6>
                            <h5>Nuts to Eat for Better Health</h5>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="blog-box">
                        <div class="blog-box-image">
                            <a href="blog-detail.html" class="blog-image">
                                <img src="../Other/Home_assets/assets/images/vegetable/blog/1.jpg" class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>

                        <a href="blog-detail.html" class="blog-detail">
                            <h6>20 March, 2022</h6>
                            <h5>Fresh Vegetable Online</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Product Section End -->