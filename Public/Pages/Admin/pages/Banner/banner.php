<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>All Category</h5>
                        <form class="d-inline-flex">
                            <a href="./addbanner" class="align-items-center btn btn-theme d-flex">
                                <i data-feather="plus-square"></i>Add New
                            </a>
                        </form>
                    </div>

                    <div class="table-responsive category-table">
                        <div>
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Position</th>
                                        <th> Image</th>
                                                                                <th> Discount</th>
                                                                                                                        <th> link</th>


                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    include "./App/Logic/db_connect.php";
                                    $sql = "SELECT * FROM slider";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['position']; ?></td>
                                                <td>
                                                    <div class="table-image">
                                                        <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                                                    </div>
                                                </td>
                                                <td><?php echo $row['Discount']; ?></td>
                                                <td><?php echo $row['link']; ?></td>

                                                <!--<td><?php echo $row['slug']; ?></td>-->
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                            <a href="../App/Logic/frontend.php?action=deleteBanner&id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this product?')">
                                <i class="ri-delete-bin-line"></i>
                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No products found</td></tr>";
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
<script>
    $(document).ready(function() {
        $(".delete-product").click(function() {
            var productId = $(this).data("product-id");
            if (confirm("Are you sure you want to delete this product?")) {
                // Send an AJAX request to delete-product.php with the product ID
                $.ajax({
                    type: "POST",
                    url: "../App/Logic/category.php/delete", // Create this PHP file
                    data: { id: productId },
                    success: function(response) {
                        // Reload the page or update the table as needed
                        location.reload();
                    },
                    error: function(error) {
                        console.log(error);
                        alert("An error occurred while deleting the product.");
                    }
                });
            }
        });
    });
</script>
<!-- Add this to include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


