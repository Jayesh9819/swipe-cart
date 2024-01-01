<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Product Information</h5>
                        </div>


                        <form id="detail1" action="../App/Logic/product.php?action=addproduct" method="post" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-3 mb-0">Product
                                    Name</label>
                                <div class="col-sm-9">
                                    <input name="name" class="form-control" type="text" placeholder="Product Name">
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Seller
                                    ID</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100" name="Seller_id">
                                        <option disabled selected>Select Seller</option>
                                        <?php
                                        include("./App/Logic/db_connect.php");

                                        $query = "SELECT * FROM users WHERE (type = 'seller' OR type = 'admin') AND status = 1";
                                        $result = $conn->query($query);
                                        if (!$result) {
                                            die('Error: ' . $conn->error);
                                        }
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                        }
                                        $result->free_result();
                                        ?>

                                    </select>
                                </div>
                            </div>


                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Product
                                    Type</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100" name="type">
                                        <option disabled>Static Menu</option>
                                        <option value="simple">Simple</option>
                                        <option value="classified">Classified</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Category</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100" name="category">
                                        <option disabled selected>Category Menu</option>
                                        <?php
                                        include("./App/Logic/db_connect.php");

                                        $query = "SELECT * FROM category";
                                        $result = $conn->query($query);
                                        if (!$result) {
                                            die('Error: ' . $conn->error);
                                        }
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                        }
                                        $result->free_result();
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Subcategory</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100" name="subcategory">
                                        <option disabled selected>Subcategory Menu</option>
                                        <?php
                                        // include("./App/Logic/db_connect.php");

                                        $query = "SELECT * FROM subcategary";
                                        $result = $conn->query($query);
                                        if (!$result) {
                                            die('Error: ' . $conn->error);
                                        }
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                        }
                                        $result->free_result();
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">HSN</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100" name="hsn">
                                        <option disabled selected>Select HSN</option>
                                        <?php
                                        include("./App/Logic/db_connect.php");

                                        $query = "SELECT * FROM hsn";
                                        $result = $conn->query($query);
                                        if (!$result) {
                                            die('Error: ' . $conn->error);
                                        }
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                        }
                                        $result->free_result();
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Tax</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100" name="tax">
                                        <option disabled selected>Select Tax</option>
                                        <?php
                                        include("./App/Logic/db_connect.php");

                                        $query = "SELECT * FROM tax";
                                        $result = $conn->query($query);
                                        if (!$result) {
                                            die('Error: ' . $conn->error);
                                        }
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                        }
                                        $result->free_result();
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Manufacturing Country</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100" name="country">
                                        <option disabled selected>Select Country</option>
                                        <?php
                                        include("./App/Logic/db_connect.php");

                                        $query = "SELECT * FROM country";
                                        $result = $conn->query($query);
                                        if (!$result) {
                                            die('Error: ' . $conn->error);
                                        }
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                        }
                                        $result->free_result();
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Brand</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100" name="brand">
                                        <option>No Brand </option>
                                        <?php
                                        include("./App/Logic/db_connect.php");

                                        $query = "SELECT * FROM brand";
                                        $result = $conn->query($query);
                                        if (!$result) {
                                            die('Error: ' . $conn->error);
                                        }
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                        }
                                        $result->free_result();
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Unit</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100" name="Unit">
                                        <option>Unit Menu</option>
                                        <?php
                                        include("./App/Logic/db_connect.php");

                                        $query = "SELECT * FROM unity";
                                        $result = $conn->query($query);
                                        if (!$result) {
                                            die('Error: ' . $conn->error);
                                        }
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                        }
                                        $result->free_result();
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <!--<div class="mb-4 row align-items-center">-->
                            <!--    <label class="col-sm-3 col-form-label form-label-title">Tags</label>-->
                            <!--    <div class="col-sm-9">-->
                            <!--        <div class="bs-example">-->
                            <!--            <input name="tags" type="text" class="form-control" placeholder="Type tag & hit enter" id="#inputTag" data-role="tagsinput">-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Exchangeable</label>
                                <div class="col-sm-9">
                                    <label class="switch">
                                        <input type="checkbox" id="exchangeableCheckbox" onclick="updateCheckboxValue('exchangeableCheckbox', 'exchangeableValue')">
                                        <span class="switch-state"></span>
                                    </label>
                                    <!-- Hidden input to store the checkbox value -->
                                    <input type="hidden" name="exchangeableValue" id="exchangeableValue" value="0">
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Refundable</label>
                                <div class="col-sm-9">
                                    <label class="switch">
                                        <input type="checkbox" id="refundableCheckbox" onclick="updateCheckboxValue('refundableCheckbox', 'refundableValue')">
                                        <span class="switch-state"></span>
                                    </label>
                                    <!-- Hidden input to store the checkbox value -->
                                    <input type="hidden" name="refundableValue" id="refundableValue" value="0">
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">COD</label>
                                <div class="col-sm-9">
                                    <label class="switch">
                                        <input type="checkbox" id="Cod" onclick="updateCheckboxValue('Cod', 'codvalue')">
                                        <span class="switch-state"></span>
                                    </label>
                                    <!-- Hidden input to store the checkbox value -->
                                    <input type="hidden" name="CODValue" id="codvalue" value="0">
                                </div>
                            </div>



                            <script>
                                function updateCheckboxValue(checkboxId, hiddenInputId) {
                                    var checkbox = document.getElementById(checkboxId);
                                    var hiddenInput = document.getElementById(hiddenInputId);

                                    if (checkbox.checked) {
                                        hiddenInput.value = "1"; // Checked, set value to 1
                                    } else {
                                        hiddenInput.value = "0"; // Unchecked, set value to 0
                                    }
                                }
                            </script>
                            <!--</form>-->
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Description</h5>
                        </div>

                        <!--<form id="detail2" action="../App/Logic/product.php/product" method="post" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">-->
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <label class="form-label-title col-sm-3 mb-0">Product
                                        Description</label>
                                    <div class="col-sm-9">
                                        <div id="editor">
                                            <input name="description" class="form-control form-choose" type="text" id="formFileMultiple1" multiple>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--</form>-->
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Product Images</h5>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="col-sm-3 col-form-label form-label-title">Main Images</label>
                            <div class="col-sm-9">
                                <input name="mainimage" class="form-control form-choose" type="file" id="mainImageInput">
                            </div>
                        </div>

                        <!-- Main Image preview section -->
                        <div id="mainImagePreview" class="mt-2">
                            <!-- Main Images will be displayed here -->
                        </div>

                        <div class="row align-items-center mt-4">
                            <label class="col-sm-3 col-form-label form-label-title">Cover Images</label>
                            <div class="col-sm-9">
                                <input name="coverImage[]" class="form-control form-choose" type="file" id="coverImageInput" multiple>
                            </div>
                        </div>

                        <!-- Cover Image preview section -->
                        <div id="coverImagePreview" class="mt-2">
                            <!-- Cover Images will be displayed here -->
                        </div>
                    </div>
                </div>

                <script>
                    // JavaScript for handling file input and image preview
                    document.getElementById('mainImageInput').addEventListener('change', handleFileSelect.bind(null, 'mainImagePreview'));
                    document.getElementById('coverImageInput').addEventListener('change', handleFileSelect.bind(null, 'coverImagePreview'));

                    function handleFileSelect(previewId, event) {
                        const input = event.target;
                        const preview = document.getElementById(previewId);

                        // Clear previous previews
                        preview.innerHTML = '';

                        // Display selected images with delete buttons
                        for (const file of input.files) {
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                const img = document.createElement('img');
                                img.src = e.target.result;
                                img.className = 'preview-image';

                                const deleteButton = document.createElement('button');
                                deleteButton.innerHTML = '&times;';
                                deleteButton.className = 'delete-button';
                                deleteButton.addEventListener('click', function() {
                                    // Remove the image when delete button is clicked
                                    img.remove();
                                });

                                const container = document.createElement('div');
                                container.className = 'image-container';
                                container.appendChild(img);
                                container.appendChild(deleteButton);

                                preview.appendChild(container);
                            };

                            reader.readAsDataURL(file);
                        }
                    }
                </script>

                <style>
                    .preview-image {
                        max-width: 100px;
                        max-height: 100px;
                        margin: 5px;
                    }

                    .delete-button {
                        background-color: #ff0000;
                        color: #fff;
                        border: none;
                        padding: 3px 5px;
                        cursor: pointer;
                    }

                    .image-container {
                        display: inline-block;
                        position: relative;
                    }
                </style>

                <!--<div class="card">-->
                <!--    <div class="card-body">-->
                <!--        <div class="card-header-2">-->
                <!--            <h5>Product Videos</h5>-->
                <!--        </div>-->

                <!--<form id="detail4" action="../App/Logic/product.php/product" method="post" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">-->
                <!--            <div class="mb-4 row align-items-center">-->
                <!--                <label class="col-sm-3 col-form-label form-label-title">Video-->
                <!--                    Provider</label>-->
                <!--                <div class="col-sm-9">-->
                <!--                    <select class="js-example-basic-single w-100" name="video">-->
                <!--                        <option>Youtube</option>-->
                <!--                    </select>-->
                <!--                </div>-->
                <!--            </div>-->

                <!--            <div class="row align-items-center">-->
                <!--                <label class="form-label-title col-sm-3 mb-0">Video-->
                <!--                    Link</label>-->
                <!--                <div class="col-sm-9">-->
                <!--                    <input name="link" class="form-control" type="text" placeholder="Video Link">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--</form>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Product variations</h5>
                        </div>
                        

                        <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Color</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single w-100" name="color">
                                    <option disabled selected> color</option>
                                    <?php

                                    $query = "SELECT * FROM color";
                                    $result = $conn->query($query);
                                    if (!$result) {
                                        die('Error: ' . $conn->error);
                                    }
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                    }
                                    $result->free_result();
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">

                            <label class="form-label-title col-sm-3 mb-0">Size</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single w-100" name="size">
                                    <option disabled selected>Size</option>
                                    <?php

                                    $query = "SELECT * FROM size";
                                    $result = $conn->query($query);
                                    if (!$result) {
                                        die('Error: ' . $conn->error);
                                    }
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                    }
                                    $result->free_result();
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">

                            <label class="form-label-title col-sm-3 mb-0">length</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single w-100" name="length">
                                    <option disabled selected> length</option>
                                    <?php

                                    $query = "SELECT * FROM length";
                                    $result = $conn->query($query);
                                    if (!$result) {
                                        die('Error: ' . $conn->error);
                                    }
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                    }
                                    $result->free_result();
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">

                            <label class="form-label-title col-sm-3 mb-0">Breadth</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single w-100" name="breadth">
                                    <option disabled selected> Breadth</option>
                                    <?php

                                    $query = "SELECT * FROM breadth";
                                    $result = $conn->query($query);
                                    if (!$result) {
                                        die('Error: ' . $conn->error);
                                    }
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                    }
                                    $result->free_result();
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">

                            <label class="form-label-title col-sm-3 mb-0">Height</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single w-100" name="height">
                                    <option disabled selected> Height</option>
                                    <?php

                                    $query = "SELECT * FROM height";
                                    $result = $conn->query($query);
                                    if (!$result) {
                                        die('Error: ' . $conn->error);
                                    }
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                    }
                                    $result->free_result();
                                    ?>

                                </select>
                            </div>

                        </div>
                                                <div class="mb-4 row align-items-center">

                            <label class="form-label-title col-sm-3 mb-0">Style Code</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single w-100" name="style-code">
                                    <option disabled selected> Style-code</option>
                                    <?php

                                    $query = "SELECT * FROM style_code";
                                    $result = $conn->query($query);
                                    if (!$result) {
                                        die('Error: ' . $conn->error);
                                    }
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                    }
                                    $result->free_result();
                                    ?>

                                </select>
                            </div>
                        <div class="mb-4 row align-items-center">
                            <label class="col-sm-3 form-label-title"> Manufacturer Name
                            </label>
                            <div class="col-sm-9">
                                <input name="manufacturer" class="form-control" type="text" placeholder="Enter Manufacturer Name">
                            </div>
                        </div>

                        </div>
                        


                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Shipping Box Details</h5>
                        </div>

                        <!--<form id="detail6" action="../App/Logic/product.php/product" method="post" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">-->
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-3 mb-0">Box Weight
                                (kg)</label>
                            <div class="col-sm-9">

                                <select class="js-example-basic-single w-100" name="weight">
                                    <option disabled selected> Weight</option>
                                    <?php

                                    $query = "SELECT * FROM weight";
                                    $result = $conn->query($query);
                                    if (!$result) {
                                        die('Error: ' . $conn->error);
                                    }
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                    }
                                    $result->free_result();
                                    ?>

                                </select>
                            </div>

                        </div>

                        <div class="row align-items-center">
                            <label class="col-sm-3 col-form-label form-label-title">Box Length
                                (cm)</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single w-100" name="boxlength">
                                    <option disabled selected> Box Length</option>
                                    <?php

                                    $query = "SELECT * FROM length";
                                    $result = $conn->query($query);
                                    if (!$result) {
                                        die('Error: ' . $conn->error);
                                    }
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                    }
                                    $result->free_result();
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <label class="col-sm-3 col-form-label form-label-title">Box Breadth
                                (cm)</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single w-100" name="boxbreadth">
                                    <option disabled selected> Box Breadth</option>
                                    <?php

                                    $query = "SELECT * FROM breadth";
                                    $result = $conn->query($query);
                                    if (!$result) {
                                        die('Error: ' . $conn->error);
                                    }
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                    }
                                    $result->free_result();
                                    ?>

                                </select>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <label class="col-sm-3 col-form-label form-label-title">Box Height
                                (cm)</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single w-100" name="boxheight">
                                    <option disabled selected> Box Height</option>
                                    <?php

                                    $query = "SELECT * FROM height";
                                    $result = $conn->query($query);
                                    if (!$result) {
                                        die('Error: ' . $conn->error);
                                    }
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                    }
                                    $result->free_result();
                                    ?>

                                </select>
                            </div>
                        </div>

                        <!--</form>-->
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Product Price</h5>
                        </div>

                        <!--<form id="detail7" action="../App/Logic/product.php/product" method="post" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">-->
                        <div class="mb-4 row align-items-center">
                            <label class="col-sm-3 form-label-title">MRP</label>
                            <div class="col-sm-9">
                                <input name="MRP" class="form-control" type="number" placeholder="0">
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="col-sm-3 form-label-title"> Special Price
                            </label>
                            <div class="col-sm-9">
                                <input name="price" class="form-control" type="number" placeholder="0">
                            </div>
                        </div>
                        <!--<div class="mb-4 row align-items-center">-->
                        <!--    <label class="col-sm-3 form-label-title">Cost per item</label>-->
                        <!--    <div class="col-sm-5">-->
                        <!--        <input class="form-control" type="number" placeholder="0">-->
                        <!--    </div>-->
                        <!--    <div class="col-sm-2">-->
                        <!--        <label>Margin:</label>-->
                        <!--        <span>25%</span>-->
                        <!--    </div>-->
                        <!--    <div class="col-sm-2">-->
                        <!--        <label>Profit:</label>-->
                        <!--        <span>$5</span>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--</form>-->
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Product Inventory</h5>
                        </div>

                        <!--<form id="detail8" action="../App/Logic/product.php/product" method="post" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">-->
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-3 mb-0">SKU</label>
                            <div class="col-sm-9">
                                <input name="sku" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="col-sm-3 col-form-label form-label-title">Stock
                                Status</label>
                            <div class="col-sm-9">
                                <select class="js-example-basic-single w-100" name="stockstatus">
                                    <option>In Stock</option>
                                    <option>Out Of Stock</option>
                                    <option>On Backorder</option>
                                </select>
                            </div>
                        </div>
                        <style>
                            .hidden {
                                display: none;
                            }
                        </style>

                        <div class="mb-4 row align-items-center" id="quantityBox" class="hidden">
                            <label class="col-sm-3 col-form-label form-label-title">Total Quantity</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="totalQuantity" id="totalQuantity">
                            </div>
                        </div>

                        <script>
                            function toggleQuantityBox() {
                                var stockStatusSelect = document.getElementById('stockStatusSelect');
                                var quantityBox = document.getElementById('quantityBox');

                                if (stockStatusSelect.value === 'In Stock') {
                                    quantityBox.classList.remove('hidden');
                                } else {
                                    quantityBox.classList.add('hidden');
                                }
                            }
                        </script>

                    </div>
                </div>


                <button type="submit">Add Product</button>

                </form>

            </div>
        </div>
    </div>
</div>
