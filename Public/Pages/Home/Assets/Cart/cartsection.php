<section class="cart-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row g-sm-5 g-3">
            <div class="col-xxl-9">
                <div class="cart-table">
                    <div class="table-responsive-xl">
                        <table class="table">
                            <tbody>
                                <?php
                                if (isset($_SESSION['name'])) {
                                    include './App/Logic/db_connect.php';
                                    $id = $_SESSION['id'];
                                    $sql = "SELECT p.*, c.quantity
                    FROM cart c
                    JOIN product p ON c.product_id = p.id
                    WHERE c.user_id = $id";
                                    //hiii

                                    $result = $conn->query($sql);

                                    // Check if the query was successful
                                    if ($result) {
                                        // Fetch all rows (if there are multiple products in the cart)
                                        $cartpage = $result->fetch_all(MYSQLI_ASSOC);

                                        // Initialize total price
                                        $totalPrice = 0;
                                        $totalSum = 0;


                                        // Iterate over each product in the cart
                                        foreach ($cartpage as $cartpage) {



                                ?>
                                            <tr class="product-box-contain">
                                                <td class="product-detail">
                                                    <div class="product border-0">
                                                        <a href="product-left-thumbnail.html" class="product-image">
                                                            <img src="<?php echo $cartpage['main_img']; ?>" class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                        <div class="product-detail">
                                                            <ul>
                                                                <li class="name">
                                                                    <a href="./Productpage"><?php echo $cartpage['product_name']; ?> </a>
                                                                </li>

                                                                <li class="text-content"><span class="text-title">Sold
                                                                        By:</span> <?php echo $cartpage['seller_id']; ?></li>


                                                                <li class="">
                                                                    <h5 class="text-content d-inline-block">Price :</h5>
                                                                    <span class="product-price-<?php echo $cartpage['id']; ?>"><?php $price =  $cartpage['coust_price'];
                                                                                                                                echo $price ?></span>
                                                                    <span class="text-content"><?php $mrp = $cartpage['MRP'];
                                                                                                echo $mrp; ?></span>
                                                                </li>

                                                                <li>
                                                                    <h5 class="saving theme-color">Saving : <?php echo $mrp - $price; ?></h5>
                                                                </li>

                                                                <li class="quantity-price-box">
                                                                    <div class="cart_qty">
                                                                        <div class="input-group">
                                                                            <button type="button" class="btn qty-left-minus" data-type="minus" data-field="">
                                                                                <i class="fa fa-minus ms-0" aria-hidden="true"></i>
                                                                            </button>
                                                                            <input class="form-control input-number qty-input" type="text" name="quantity" value="<?php $quant = $cartpage['quantity'];
                                                                                                                                                                    echo $quant; ?>" data-product-id="<?php echo $cartpage['id']; ?>">
                                                                            <button type="button" class="btn qty-right-plus" data-type="plus" data-field="">
                                                                                <i class="fa fa-plus ms-0" aria-hidden="true"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <h5>Total: <span class="product-total" data-product-id="<?php echo $cartpage['id']; ?>"><?php echo $price * $quant; ?></span></h5>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="price">
                                                    <h4 class="table-title text-content">Price</h4>
                                                    <h5 class=""><?php echo $price; ?> <del class="text-content"><?php echo $mrp; ?></del></h5>
                                                    <h6 class="theme-color">You Save :<?php echo $mrp - $price; ?> </h6>
                                                </td>

                                                <td class="quantity">
                                                    <h4 class="table-title text-content">Qty</h4>
                                                    <div class="quantity-price">
                                                        <div class="cart_qty">
                                                            <div class="input-group">
                                                                <button type="button" class="btn qt-left-minus" data-type="minus" data-field="">
                                                                    <i class="fa fa-minus ms-0" aria-hidden="true"></i>
                                                                </button>
                                                                <input class="form-control input-number qty-input" type="text" name="quantity" value="<?php echo $quant; ?>" data-product-id="<?php echo $cartpage['id']; ?>">
                                                                <button type="button" class="btn qt-right-plus" data-type="plus" data-field="">
                                                                    <i class="fa fa-plus ms-0" aria-hidden="true"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="subtotal">
                                                    <h4 class="table-title text-content">Total</h4>
                                                    <h5>Total: <span class="product-total-<?php echo $cartpage['id']; ?>" data-product-id=""><?php echo $price * $quant; ?></span></h5>
                                                </td>

                                                <td class="save-remove">
                                                    <h4 class="table-title text-content">Action</h4>
                                                    <a class="save notifi-wishlist" href="javascript:void(0)">Save for later</a>
                                                    <a class="remove close_button" href="javascript:void(0)">Remove</a>
                                                </td>
                                            </tr>

                                <?php
                                            // $productTotal = $price * $quant;

                                            // // Update total sum
                                            // $totalSum += $productTotal;
                                        }
                                    } else {
                                        echo "add product";
                                    }
                                }
                                ?>

                                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

                                <script>
                                    $(document).ready(function() {
                                        $('.qt-left-minus').click(function() {
                                            var input = $(this).next('.qty-input');
                                            var qty = parseInt(input.val());
                                            if (qty > 1) {
                                                qty--;
                                                input.val(qty);
                                                updateTotal(input.data('product-id'), qty);
                                            }
                                        });
                                        $('.qt-right-plus').click(function() {
                                            var input = $(this).prev('.qty-input');
                                            var qty = parseInt(input.val());
                                            qty++;
                                            input.val(qty);
                                            // updateTotal(input.data('product-id'), qty);
                                        });
                                    });
                                    // var subtotal = <?php echo $totalSum; ?>;
                                    // console.log(subtotal);
                                    // $('.summery-total').text(subtotal.toFixed(2));
                                    $(document).ready(function() {
                                        // Create an object to store quantities for each product ID
                                        var quantities = {};

                                        $('.qt-left-minus, .qt-right-plus').click(function() {
                                            var input = $(this).closest('.cart_qty').find('.qty-input');
                                            var productId = input.data('product-id');
                                            var qty = parseInt(input.val());

                                            // Update the quantity in the object
                                            quantities[productId] = qty;

                                            updateTotal(productId, qty);
                                        });

                                        function updateTotal(productId, qty) {
                                            var price = parseFloat($('.product-price-' + productId).text());
                                            var total = price * qty;
                                            $('.product-total-' + productId).text(total.toFixed(0));

                                            // Recalculate the subtotal after updating a product's quantity
                                            recalculateSubtotal();
                                        }

                                        function recalculateSubtotal() {
                                            var subtotal = 0;

                                            // Iterate over each product in the cart
                                            $('.qty-input').each(function() {
                                                var productId = $(this).data('product-id');
                                                var price = parseFloat($('.product-price-' + productId).text());

                                                // Check if the product ID exists in the quantities object
                                                if (quantities.hasOwnProperty(productId)) {
                                                    var qty = quantities[productId];
                                                    subtotal += price * qty;
                                                }
                                            });

                                            // Update the subtotal on the frontend
                                            $('.summery-total .price').text(subtotal.toFixed(2));
                                        }
                                    });
                                </script>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-xxl-3">
                <div class="summery-box p-sticky">
                    <div class="summery-header">
                        <h3>Cart Total</h3>
                    </div>

                    <div class="summery-contain">
                        <div class="coupon-cart">
                            <h6 class="text-content mb-2">Coupon Apply</h6>
                            <div class="mb-3 coupon-box input-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Coupon Code Here...">
                                <button class="btn-apply">Apply</button>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <h4>Subtotal</h4>
                                <h4 class="price">0</h4>
                            </li>

                            <li>
                                <h4>Coupon Discount</h4>
                                <h4 class="price">(-) 0.00</h4>
                            </li>

                            <li class="align-items-start">
                                <h4>Shipping</h4>
                                <h4 class="price text-end">$6.90</h4>
                            </li>
                        </ul>
                    </div>

                    <ul class="summery-total">
                        <li class="list-total border-top-0">
                            <h4>Total (USD)</h4>
                            <h4 class="price theme-color">$132.58</h4>
                        </li>
                    </ul>

                    <div class="button-group cart-button">
                        <ul>
                            <li>
                                <button onclick="location.href = 'checkout.html';" class="btn btn-animation proceed-btn fw-bold">Process To Checkout</button>
                            </li>

                            <li>
                                <button onclick="location.href = 'index.html';" class="btn btn-light shopping-button text-dark">
                                    <i class="fa-solid fa-arrow-left-long"></i>Return To Shopping</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>