<?php

if (empty($data["data"]["resultError"])) {

    $arr = $data["data"]["row"];
    foreach ($arr as $obj) {
        $ProductID = $obj->ProductID;
        $ProductName = $obj->ProductName;
        $ProductPrice = $obj->ProductPrice;
        $ProductQuantity = $obj->ProductQuantity;
        $ProductImg = $obj->ProductImg;
        $ProductShortDesc = $obj->ProductShortDesc;
        $ProductInfo = $obj->ProductInfo;
    }
} else {
    echo $data["data"]["resultError"];
    echo '<h1 class="mt-4 pb-2 ">Oops! Product not found!</h1>';
    exit();
}

?>

<div>
    <h1 class="mt-4 pb-2 border-bottom">Products Table</h1>

    <form action="" id="register" method="POST" class="row g-3">
        <div class="col-md-4">
            <label for="name" class="form-label fw-bold">Product Name</label>
            <input type="text" name="name" value="<?php echo $ProductName ?? $name = 'Error' ?>" id="name" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">
                <?php echo $name ?? ''; ?>
            </div>
        </div>
        <div class="col-md-4">
            <label for="price" class="form-label fw-bold">Product Price</label>
            <input type="number" name="price" value="<?php echo $ProductPrice ?? $price = 'Error' ?>" id="price" min="0" step="0.01" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">
                <?php echo $price ?? ''; ?>
            </div>
        </div>
        <div class="col-md-4">
            <label for="quantity" class="form-label fw-bold">Product Quantity</label>
            <input type="number" name="quantity" value="<?php echo $ProductQuantity ?? $quantity = 'Error' ?>" min="0" id="quantity" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">
                <?php echo $quantity ?? ''; ?>
            </div>
        </div>
        <div class="col-md-4">
            <label for="file" class="form-label fw-bold">ProductImg</label>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="mb-4 w-100">
                    <img id="img" src="<?php echo BASE_URL_PATH . "assets/img/products/" .  $ProductImg ?>" class="rounded" style="width: 100%; height: 200px; object-fit: cover;" />
                </div>
                <div class="">
                    <div class="btn btn-dark rounded-pill btn-sm ">
                        <label class="form-label text-white m-1" for="file">Choose file</label>
                        <input type="file" accept="image/jpeg, image/png" value="" name="file" id="file" class="form-control d-none" />
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-8">
            <label for="desc" class="form-label fw-bold">Product Short Description</label>
            <textarea class="form-control" placeholder="Leave a short description here" value="" id="desc" style="height: 200px" required><?php echo $ProductShortDesc ?? $desc = "Error" ?></textarea>
            <div class="text-danger" style="font-size: 0.8rem;">
                <?php echo $desc ?? ''; ?>
            </div>
        </div>

        <div class="col-md-12">
            <label for="confirmPassword" class="form-label fw-bold">Product Information</label>
            <!-- Editor -->
            <div id="editor-container rounded-3">
                <textarea name="information" id="editor" required><?php echo $ProductInfo ?? $information = "Error" ?></textarea>
            </div>
            <div class="text-danger" style="font-size: 0.8rem;">
                <?php echo $information ?? ''; ?>
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" name="submit_update" class="btn btn-dark w-100 mt-3">Update Product</button>
        </div>
    </form>

</div>

<script src="http://ct275.test/assets/ckeditor5/ckeditor.js"></script>


<!-- Create editor script -->
<script>
    let editor;

    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            editor = editor;
        })
        .catch(error => {
            console.error(error);
        });

    //Preview Img when change
    $(function() {
        const fileInput = $('input:file#file');
        const img = $('#img');

        fileInput.change(function(e) {
            img.prop('src', URL.createObjectURL(e.target.files[0]));
        });
    })
</script>