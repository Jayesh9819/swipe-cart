<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Edit Slider Information</h5>
                            </div>

                            <?php
                            include "./App/Logic/db_connect.php";
                            $id = isset($_GET['id']) ? $_GET['id'] : '';

                            $sql = "SELECT * FROM slider where id=$id";
                            $result = $conn->query($sql);

                            $row = $result->fetch_assoc();

                            ?>

                            <form action="../App/Logic/frontend.php?action=updateBanner" method="post" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">
                                <input type="hidden" name="banner_id" value="<?php echo $row['id']; ?>">

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Slider Name</label>
                                    <div class="col-sm-9">
                                        <input name="name" class="form-control" type="text" placeholder="Category Name" value="<?php echo $row['name']; ?>">
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Current Slider Image</label>
                                    <div class="form-group col-sm-9">
                                        <img src="<?php echo $row['image']; ?>" alt="Current Image" class="img-fluid mb-2">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="img" name="img">
                                            <label class="custom-file-label" for="img">Choose new image</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Remove Current Image</label>
                                    <div class="col-sm-9">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="removeImage" name="removeImage">
                                            <label class="custom-control-label" for="removeImage">Remove Image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Discount</label>
                                    <div class="col-sm-9">
                                        <input name="discount" class="form-control" type="number" value="<?php echo $row['Discount']; ?>" placeholder="">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0"> Button Link</label>
                                    <div class="col-sm-9">
                                        <input name="link" class="form-control" type="text" value="<?php echo $row['link']; ?>" placeholder=" Button Link">
                                    </div>
                                </div>


                                <!-- ... (similar structure for other fields) -->

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Slider Info</label>
                                    <div class="col-sm-9">
                                        <textarea name="info" class="textarea" placeholder="Slider Info"><?php echo $row['content']; ?></textarea>
                                    </div>
                                </div>

                                <button type="submit" name="submit">Update Banner</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>