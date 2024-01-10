<div class="onhover-div">
    <ul class="cart-list">
        <?php
        if (isset($_SESSION['name'])) {
            include './App/Logic/db_connect.php';
            $id = $_SESSION['id'];
            $sql = "SELECT p.*
            FROM cart c
            JOIN product p ON c.product_id = p.id
            WHERE c.user_id = $id";

            $result = $conn->query($sql);

            // Check if the query was successful
            if ($result) {
                // Fetch all rows (if there are multiple products in the cart)
                $cart = $result->fetch_all(MYSQLI_ASSOC);
                print_r($cart);
            } else {
                // Handle the case where the query fails
                echo "Error: " . $conn->error;
            }



            echo '<li class="product-box-contain">
            <div class="drop-cart">
                <a href="product-left-thumbnail.html" class="drop-image">
                    <img src="" class="blur-up lazyload"
                        alt="">
                </a>

                <div class="drop-contain">
                    <a href="product-left-thumbnail.html">
                        <h5>Fantasy Crunchy Choco Chip Cookies</h5>
                    </a>
                    <h6><span>1 x</span> $80.58</h6>
                    <button class="close-button close_button">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>
        </li>
        </ul>

        <div class="price-box">
            <h5>Total :</h5>
            <h4 class="theme-color fw-bold">$106.58</h4>
        </div>
    
        <div class="button-group">
            <a href="./Cart" class="btn btn-sm cart-button">View Cart</a>
            <a href="./Checkout" class="btn btn-sm cart-button theme-bg-color
                                                        text-white">Checkout</a>
        </div>
    </div>';
        } else {
            echo                '    <ul class="cart-list">
 
            <div class="drop-contain">
            <a href="./Login">
                <h5>Login First</h5>
            </a>
        </div>
        </ul>

        ';
        }

        ?>



</div>