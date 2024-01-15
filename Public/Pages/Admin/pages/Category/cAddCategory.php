<div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-8 m-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Category Information</h5>
                                            </div>

<form action="../App/Logic/category.php?action=acategory" method="post" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">
    <div class="mb-4 row align-items-center">
        <label class="form-label-title col-sm-3 mb-0">Category Name</label>
        <div class="col-sm-9">
            <input name="name" class="form-control" type="text" placeholder="Category Name">
        </div>
    </div>

    <div class="mb-4 row align-items-center">
        <label class="col-sm-3 col-form-label form-label-title">Category Image</label>
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
    
    <button type="submit" name="submit">Add Product</button>
</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>