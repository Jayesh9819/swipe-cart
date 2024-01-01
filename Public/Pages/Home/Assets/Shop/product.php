        <div class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
            <?php
            //echo 
            include("./App/Logic/db_connect.php");
            if ($categoryFilter == null && $sort == null) {
                $sql = "SELECT * FROM product where status =1";
            } else if ($categoryFilter == null && $sort !== null) {
                $sql = "SELECT * FROM `product` WHERE status =1 $sortingCondition";
            } else if ($sort !== null || $categoryFilter !== null) {
                $sql = "SELECT * FROM `product` WHERE status =1 AND category= '$categoryFilter' $sortingCondition";
            }

            //echo $sql;

            // $sql = "SELECT * FROM product where status =1";
            $result = $conn->query($sql);
            // Var_dump($result);

            while ($row = $result->fetch_assoc()) {
            ?>
                <div>
                    <div class="product-box-3 h-100 wow fadeInUp">
                        <div class="product-header">
                            <div class="product-image">
                                <a href="product-left-thumbnail.html">
                                    <img src="<?php echo $row['main_img']; ?>" class="img-fluid blur-up lazyload" alt="">
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
                                <span class="span-name"><?php echo $row['category']; ?></span>
                                <a href="product-left-thumbnail.html">
                                    <h5 class="name"><?php echo $row['product_name']; ?></h5>
                                </a>
                                <p class="text-content mt-1 mb-2 product-content"><?php echo $row['Description']; ?></p>
                                <div class="product-rating mt-2">
                                    <ul class="rating">
                                        <?php
                                        $rating = $row['rating'];
                                        for ($i = 1; $i <= $rating; $i++) {
                                            echo '<li><i data-feather="star" class="fill"></i></li>';
                                        }
                                        ?>
                                    </ul>
                                    <!--<span>(<?php echo $rating; ?>)</span>-->
                                </div>
                                <h6 class="unit"><?php echo $row['unit']; ?></h6>
                                <h5 class="price"><span class="theme-color">₹<?php echo $row['coust_price']; ?></span> <del>₹<?php echo $row['MRP']; ?></del></h5>
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
            <?php
            }
            ?>
        </div>

        <?php
        // Close the database connection
        $conn->close();
        ?>

