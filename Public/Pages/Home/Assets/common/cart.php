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
                                    <a href="javascript:void(0);" class="delete-button" onclick="deleteCartItem(' . $product['id'] . ')">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                </div>
                            </div>
                        </li>';

                    // Calculate the price for each product and add it to the total
                    $totalPrice += $product['quantity'] * $product['coust_price'];
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

<script>
function deleteCartItem(product_id) {
  if (confirm("Are you sure you want to remove this item from the cart?")) {
    // Create an XMLHttpRequest object
    const xhr = new XMLHttpRequest();

    // Specify the request method and URL (using POST for data modification)
    xhr.open("POST", "../App/Logic/order.php?action=deletecart", true);

    // Set up the content type for sending data
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Send the product_id and action as POST data
    xhr.send("product_id=" + product_id);

    // Handle the response
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          // Parse the response
          const response = JSON.parse(xhr.responseText);
          if (response.success) {
            alert("Item removed from the cart successfully!");
            location.reload();

            // Update the cart display or perform other actions
          } else {
            alert("Error removing item from the cart mm: " + response.message);
          }
        } else {
          // Handle other HTTP status codes (e.g., 400, 404, 500)
          alert("Error: " + xhr.statusText);
        }
      }
    };
  }
}
</script>
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
