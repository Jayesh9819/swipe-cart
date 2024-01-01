<style>
    .status-danger {
    color: red;
}

.status-success {
    color: green;
}

</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title d-sm-flex d-block">
                        <h5>Products List</h5>
                        <div class="right-options">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">import</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Export</a>
                                </li>
                                <li>
                                    <a class="btn btn-solid" href="./add-new-product">Add Product</a>
                                </li>
                                 
                            </ul>
                        </div>
                    </div>

                    
                        <div class="table-responsive">
                            <table class="table all-package theme-table table-product" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Current Qty</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <tbody>
<?php
include "./App/Logic/db_connect.php";

// Check if the form is submitted for status toggle

$query = "SELECT * FROM product";
$result = $conn->query($query);

// Check for errors
if (!$result) {
    die("Error in SQL query: " . $conn->error);
}

// Loop through the retrieved data and display each row as a table row
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td><div class='table-image'><img src='{$row['main_img']}' class='img-fluid' alt=''></div></td>";
    echo "<td>{$row['product_name']}</td>";
    echo "<td>{$row['category']}</td>";
    echo "<td>{$row['net_quantity']}</td>";
    echo "<td class='td-price'>{$row['coust_price']}</td>";

    // Display status as 'Pending' or 'Approved' with conditional styling
    $statusText = $row['status'] == 0 ? 'Pending' : 'Approved';
    $statusClass = $row['status'] == 0 ? 'status-danger' : 'status-success';
    echo "<td class='$statusClass'><span>{$statusText}</span></td>";

    echo "<td><ul><li><a href='order-detail.html'><i class='ri-eye-line'></i></a></li>";
    echo "<li><a href='javascript:void(0)'><i class='ri-pencil-line'></i></a></li>";
                                            echo "<li>
                                                <a href='../App/Logic/product.php?action=delete&id={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this product?')\">
                                                    <i class='ri-delete-bin-line'></i>
                                                </a>
                                            </li>";

echo "<li>
        <a href='../App/Logic/product.php?action=status&id={$row['id']}' onclick=\"return confirm('Are you sure you want to change the status of the product?')\">
            <i class='ri-toggle-line'></i>
        </a>
      </li>";
echo "<li>
        <form action='../App/Logic/product.php?action=adminPrice' method='post' onsubmit=\"return confirm('Are sure you want to change the price?')\">
            <input type='hidden' name='id' value='{$row['id']}' />
            <input type='number' name='admin_price' placeholder='Admin Price'  />
            <button type='submit'>
                <i class='ri-toggle-line'></i>
            </button>
        </form>
      </li>";

    echo "</ul></td></tr>";
}
?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
