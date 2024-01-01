<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.0/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.0/js/buttons.html5.min.js"></script>
    <style>
        .options-container {
            margin-bottom: 10px;
        }

        .options-dropdown {
            display: inline-block;
        }

        .table-responsive {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="options-container">
    <div class="options-dropdown">
        <button class="btn btn-secondary" id="columnToggleDropdown">
            <i class="ri-settings-line"></i> Column Visibility
        </button>
    </div>

    <div class="options-container">
        <label><input type="checkbox" class="column-toggle" data-column="0" checked> Product Image</label>
        <label><input type="checkbox" class="column-toggle" data-column="1" checked> Product Name</label>
        <label><input type="checkbox" class="column-toggle" data-column="2" checked> Category</label>
        <label><input type="checkbox" class="column-toggle" data-column="3" checked> Current Qty</label>
        <label><input type="checkbox" class="column-toggle" data-column="4" checked> Price</label>
        <label><input type="checkbox" class="column-toggle" data-column="5" checked> Status</label>
        <label><input type="checkbox" class="column-toggle" data-column="6" checked> Option</label>
    </div>
</div>

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
                                <li>
                                    <button id="columnToggleBtn" class="btn btn-secondary">Toggle Columns</button>
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

                                // Fetch product data from the database (example query)
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
                                    echo "<td class='status-danger'><span>{$row['status']}</span></td>";
                                    echo "<td><ul><li><a href='order-detail.html'><i class='ri-eye-line'></i></a></li>";
                                    echo "<li><a href='javascript:void(0)'><i class='ri-pencil-line'></i></a></li>";
                                    echo "<li>
                                        <a href='../App/Logic/product.php/delete?id={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this product?')\">
                                            <i class='ri-delete-bin-line'></i>
                                        </a>
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

<script>
    $(document).ready(function() {
        let table = $('#table_id').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        // Column Toggling Dropdown
        $('#columnToggleDropdown').on('click', function() {
            $('.options-container').toggle();
        });

        // Toggle Columns Button
        $('#columnToggleBtn').on('click', function() {
            $('.options-container').toggle();
        });

        // Initialize DataTable with column toggling
        $('#table_id').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

        // Handle checkbox change for column toggling
        $('.column-toggle').on('change', function() {
            let column = table.column($(this).data('column'));
            column.visible(!column.visible());
        });
    });
</script>

</body>
</html>
