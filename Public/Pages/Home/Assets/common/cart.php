<div class="onhover-div">
    <ul class="cart-list">
        <?php
        if (isset($_SESSION['name'])) {
            include './App/Logic/db_connect.php';
            $id = $_SESSION['id'];
            $sql = "SELECT p.*, c.quantity
                    FROM cart c
                    JOIN product p ON c.product_id = p.id
                    WHERE c.user_id = $id";

            $result = $conn->query($sql);

            // Check if the query was successful
            if ($result) {
                // Fetch all rows (if there are multiple products in the cart)
                $cart = $result->fetch_all(MYSQLI_ASSOC);

                // Initialize total price
                $totalPrice = 0;

                // Iterate over each product in the cart
                foreach ($cart as $product) {
                    echo '<li class="product-box-contain">
                            <div class="drop-cart">
                                <a href="./Cart" class="drop-image">
                                    <img src="' . $product['main_img'] . '" class="blur-up lazyload" alt="">
                                </a>
                                <div class="drop-contain">
                                    <a href="./productpage?id=' . $product['id'] . '">
                                        <h5>' . $product['product_name'] . '</h5>
                                    </a>
                                    <h6><span>' . $product['quantity'] . ' x</span>' . $product['coust_price'] . '</h6>
                                    <a href="javascript:void(0);" class="" onclick="deleteCartItem('.$product['id'].')">
                                    <i class="fa-solid fa-xmark"> hiii</i>
                                </a>
                                                                </div>
                            </div>
                        </li>';

                    // Calculate the price for each product and add it to the total
                    $totalPrice += $product['quantity'] * $product['coust_price'];
                 echo    '<script>
function deleteCartItem(product_id) {
    if (confirm("Are you sure you want to remove this item from the cart?")) {
        // Create an XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Specify the request method and URL
        xhr.open("GET", "../App/Logic/order.php?action=deletecart&product_id=" + product_id, true);

        // Set up the callback function to handle the response
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Handle the response, if needed
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // Update the cart display or perform any other action
                    alert("Item removed from the cart successfully!");
                    // You may want to refresh the cart display or update it dynamically
                    // based on the response.
                } else {
                    alert("Error removing item from the cart: " + response.message);
                }
            }
        };

        // Send the request
        xhr.send();
    }
}
</script>';

                }
            } else {
                // Handle the case where the query fails
                echo "Error: " . $conn->error;
            }
        ?>
    </ul>

    <div class="price-box">
        <h5>Total :</h5>
        <h4 class="theme-color fw-bold"><?php echo '₹' . number_format($totalPrice, 2); ?></h4>
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