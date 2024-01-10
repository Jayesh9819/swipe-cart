<div class="onhover-div">
    <ul class="cart-list">
        <?php
        if (isset($_SESSION['name'])) {
            include './App/Logic/db_connect.php';
            $id = $_SESSION['id'];
            $sql = "SELECT p.*,c.quantity
            FROM cart c
            JOIN product p ON c.product_id = p.id
            WHERE c.user_id = $id";

            $result = $conn->query($sql);

            // Check if the query was successful
            if ($result) {
                // Fetch all rows (if there are multiple products in the cart)
                $cart = $result->fetch_all(MYSQLI_ASSOC);
print_r($cart);
                // Iterate over each product in the cart
                foreach ($cart as $product) {
                    echo '<li class="product-box-contain">
                            <div class="drop-cart">
                                <a href="product-left-thumbnail.html" class="drop-image">
                                    <img src="' . $product['main_img'] . '" class="blur-up lazyload" alt="">
                                </a>
                                <div class="drop-contain">
                                    <a href="./productpage?id=' . $product['id'] . '">
                                        <h5>' . $product['product_name'] . '</h5>
                                    </a>
                                    <h6><span> x</span>' . $product['coust_price'] . '</h6>
                                    <button class="close-button close_button">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                            </div>
                        </li>';
                }
            } else {
                // Handle the case where the query fails
                echo "Error: " . $conn->error;
            }
        ?>
    </ul>

    <div class="price-box">
        <h5>Total :</h5>
        <h4 class="theme-color fw-bold">$106.58</h4>
    </div>

    <div class="button-group">
        <a href="./Cart" class="btn btn-sm cart-button">View Cart</a>
        <a href="./Checkout" class="btn btn-sm cart-button theme-bg-color text-white">Checkout</a>
    </div>
</div>

<?php
        } else {
            echo '<ul class="cart-list">
            <div class="drop-contain">
                <a href="./Login">
                    <h5>Login First</h5>
                </a>
            </div>
          </ul>';
        }
?>