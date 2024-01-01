<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Shop Top Filter</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Top Filter</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb Section End -->
<?php
include("./App/Logic/db_connect.php");

// Category Filter
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';

// Sorting
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'pop'; // Default to popularity
print_r($sort);
// Pagination
$itemsPerPage = 12; // Adjust as needed
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $itemsPerPage;

// Category and Sorting SQL Conditions
$categoryCondition = ($categoryFilter !== '') ? " WHERE c.name = '$categoryFilter'" : '';
$sortingCondition = '';
switch ($sort) {
    case 'low':
        $sortingCondition = " ORDER BY product.coust_price ASC";
        break;
    case 'high':
        $sortingCondition = " ORDER BY product.coust_price DESC";
        break;
    case 'rating':
        $sortingCondition = " ORDER BY product.rating DESC";
        break;
    case 'loworder':
        $sortingCondition = " ORDER BY product.product_name ASC";
        break;
    case 'highorder':
        $sortingCondition = " ORDER BY product.product_name DESC";
        break;
    case 'Discount':
        $sortingCondition = " ORDER BY product.Discount DESC";
        break;
    case 'average':
        $sortingCondition = " ORDER BY product.rating DESC";
        break;

        // Add more cases for other sorting options
}
// echo $sortingCondition;
?>
<!-- Shop Section Start -->
<section class="section-b-space shop-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="show-button">
                    <div class="top-filter-menu-2">
                        <div class="sidebar-filter-menu" data-bs-toggle="collapse" data-bs-target="#collapseExample">
                            <a href="javascript:void(0)"><i class="fa-solid fa-filter"></i> Filter Menu</a>
                        </div>

                        <div class="ms-auto d-flex align-items-center">
                            <div class="category-dropdown me-md-3">
                                <h5 class="text-content">Sort By :</h5>
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" name="sort" id="sort" data-bs-toggle="dropdown">
                                        <span>Most Popular</span> <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a href='?sort=pop' class="dropdown-item" id="pop" href="javascript:void(0)">Popularity</a>
                                        </li>
                                        <li>
                                            <a href='?sort=low' class="dropdown-item" id="low" href="javascript:void(0)">Low - High
                                                Price</a>
                                        </li>
                                        <li>
                                            <a href='?sort=high' class="dropdown-item" id="high" href="javascript:void(0)">High - Low
                                                Price</a>
                                        </li>
                                        <li>
                                            <a href='?sort=average' class="dropdown-item" id="rating" href="javascript:void(0)">Average
                                                Rating</a>
                                        </li>
                                        <li>
                                            <a href='?sort=loworder' class="dropdown-item" id="aToz" href="javascript:void(0)">A - Z
                                                Order</a>
                                        </li>
                                        <li>
                                            <a href='?sort=highorder' class="dropdown-item" id="zToa" href="javascript:void(0)">Z - A
                                                Order</a>
                                        </li>
                                        <li>
                                            <a href='?sort=Discount' class="dropdown-item" id="off" href="javascript:void(0)">% Off -
                                                Hight To
                                                Low</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="grid-option grid-option-2">
                                <ul>
                                    <li class="three-grid">
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-3.svg" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li class="grid-btn five-grid d-xxl-inline-block d-none">
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-4.svg" class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                        </a>
                                    </li>
                                    <li class="five-grid d-xxl-inline-block d-none active">
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-5.svg" class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                        </a>
                                    </li>
                                    <li class="list-btn">
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/list.svg" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include("./App/Logic/db_connect.php");

                $query = "SELECT c.name, COUNT(p.id) AS product_count
          FROM category c
          LEFT JOIN product p ON c.name = p.category
          GROUP BY c.name";

                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    echo '<div class="top-filter-category" id="collapseExample">';
                    echo '    <div class="row g-sm-4 g-3">';

                    echo '        <div class="col-xl-3 col-md-6">';
                    echo '            <div class="category-title">';
                    echo '                <h3>Category </h3>';
                    echo '            </div>';
                    echo '            <ul class="category-list custom-padding custom-height">';
                    while ($row = $result->fetch_assoc()) {

                        echo '                <li>';
                        echo '                    <div class="form-check ps-0 m-0 category-list-box">';
                        echo '                        <input class="checkbox_animated" type="checkbox" id="' . strtolower(str_replace(' ', '', $row['name'])) . '">';
                        echo '                        <label class="form-check-label" for="' . strtolower(str_replace(' ', '', $row['name'])) . '">';
                        echo '<span class="name"><a href="?category=' . $row['name'] . '">' . $row['name'] . '</a></span>';
                        echo '                            <span class="number">(' . $row['product_count'] . ')</span>';
                        echo '                        </label>';
                        echo '                    </div>';
                        echo '                </li>';
                    }
                    echo '            </ul>';
                    echo '        </div>';


                    echo '    </div>';
                    //  echo '</div>';
                } else {
                    echo "0 results";
                }

                // Close connection
                //$conn->close();
                ?>

            </div>
        </div>

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

    </div>

    <nav class="custome-pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-disabled="true">
                    <i class="fa-solid fa-angles-left"></i>
                </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="javascript:void(0)">1</a>
            </li>
            <li class="page-item" aria-current="page">
                <a class="page-link" href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0)">
                    <i class="fa-solid fa-angles-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</section>
<!-- Shop Section End -->