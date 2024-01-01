<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Slider Information</h5>
                            </div>

                            <form action="../App/Logic/frontend.php?action=addBanner" method="post" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Slider Name</label>
                                    <div class="col-sm-9">
                                        <input name="name" class="form-control" type="text" placeholder="Category Name">
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Slider Image</label>
                                    <div class="form-group col-sm-9">
                                        <div class="dropzone-wrapper">
                                            <div class="dropzone-desc">
                                                <i class="ri-upload-2-line"></i>
                                                <p>Choose an image file or drag it here.</p>
                                            </div>
                                            <input name="img" type="file" class="">
                                        </div>
                                    </div>
                                </div>
                                                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Position of the Banner
                                    </label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100" name="position">
                                        <option disabled selected>Position Menu</option>
                                        <option value="fullScreen">Full Screen</option>
                                        <option value="sideUp">Side-up</option>
                                        <option value="sideDown">Side-Down</option>

                                    </select>
                                </div>
                                                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Discount</label>
                                    <div class="col-sm-9">
                                        <input name="discount" class="form-control" type="number" placeholder="Discount Percent">
                                    </div>
                                </div>
                                                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0"> Button Link</label>
                                    <div class="col-sm-9">
                                        <input name="link" class="form-control" type="text" placeholder=" Button Link">
                                    </div>
                                </div>


                            </div>


                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Slider Info</label>
                                    <div class="col-sm-9">
                                        <textarea name="info" class="textarea" placeholder="Slider Info"></textarea>
                                    </div>
                                </div>

                                <button type="submit" name="submit">Add Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
