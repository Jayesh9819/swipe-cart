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
?>

<div class="section-b-space">
    <div class="product-border border-row overflow-hidden">
        <div class="product-box-slider no-arrow">
            <div class="row m-0">
                <?php
                include("./App/Logic/db_connect.php");

                if ($categoryFilter == null && $sort == null) {
                    $sql = "SELECT * FROM product WHERE status = 1";
                } else if ($categoryFilter == null && $sort !== null) {
                    $sql = "SELECT * FROM `product` WHERE status = 1 $sortingCondition";
                } else if ($sort !== null || $categoryFilter !== null) {
                    $sql = "SELECT * FROM `product` WHERE status = 1 AND category = '$categoryFilter' $sortingCondition";
                }

                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card mb-3">
                            <img src="<?php echo $row['main_img']; ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                                <p class="card-text">
                                    <span class="theme-color price"><?php echo $row['coust_price']; ?></span>
                                    <del><?php echo $row['MRP']; ?></del>
                                </p>
                                <div class="product-rating mt-sm-2 mt-1">
                                    <ul class="rating">
                                        <?php
                                        $rating = $row['rating'];
                                        for ($i = 1; $i <= $rating; $i++) {
                                            echo '<li><i data-feather="star" class="fill"></i></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="stock-status">
                                    <?php
                                    $stockStatus = $row['stock_status'];
                                    $stock = $row['net_quantity'];
                                    if ($stockStatus == 0) {
                                        echo '<h6 class="theme-color">In Stock</h6>';
                                    } else {
                                        echo '<h6 class="theme-color">Out of Stock</h6>';
                                    }
                                    ?>
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
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
