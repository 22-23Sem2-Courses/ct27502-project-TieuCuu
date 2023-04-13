<?php
$categories = $data['data']['categoryRows'];
?>

<div>
    <h1 class="mt-4 pb-2 border-bottom">Products Table</h1>

    <form action="" id="add" method="POST" enctype="multipart/form-data" class="row g-3">
        <div class="col-md-3">
            <label for="name" class="form-label fw-bold">Name</label>
            <input type="text" name="name" value="" id="name" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">

            </div>
        </div>
        <div class="col-md-3">
            <label for="price" class="form-label fw-bold">Price</label>
            <input type="number" name="price" value="" id="price" min="0" step="0.01" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">

            </div>
        </div>
        <div class="col-md-3">
            <label for="category" class="form-label fw-bold">Category</label>
            <select class="form-select" id="selectCate">
                <?php
                foreach ($categories as $category) {
                ?>
                    <option value="<?php echo $category['CATEGORYID'] ?>"><?php echo $category['CATEGORYNAME'] ?></option>
                <?php } ?>
            </select>
            <input type="text" name="category" value="<?php echo $categories[0]['CATEGORYID'] ?>" id="category" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">

            </div>
        </div>
        <div class="col-md-3">
            <label for="quantity" class="form-label fw-bold">Quantity</label>
            <input type="number" name="quantity" value="" min="0" id="quantity" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">

            </div>
        </div>
        <div class="col-md-4">
            <label for="file" class="form-label fw-bold">Image</label>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="mb-4 w-100">
                    <img id="img" src="<?php echo BASE_URL_PATH . "assets/img/upload.gif" ?>" class="rounded" style="width: 100%; height: 200px; object-fit: cover;" />
                </div>
                <div class="" id="choose-file">
                    <div class="btn btn-dark rounded-pill btn-sm ">
                        <label class="form-label text-white m-1" for="fileUpload">Choose file</label>
                        <input type="file" accept="image/jpeg, image/png" name="fileUpload" id="fileUpload" class="form-control d-none" />
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-8">
            <label for="desc" class="form-label fw-bold">Short Description</label>
            <textarea name="desc" class="form-control" placeholder="Leave a short description here" value="" id="desc" style="height: 200px" required></textarea>
            <div class="text-danger" style="font-size: 0.8rem;">

            </div>
        </div>

        <div class="col-md-12">
            <label for="confirmPassword" class="form-label fw-bold">Detail Information</label>
            <!-- Editor -->
            <div id="editor-container rounded-3">
                <textarea name="information" id="editor2"></textarea>
            </div>
            <div class="text-danger" style="font-size: 0.8rem;">

            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" name="submit_add" class="btn btn-dark w-100 mt-3">Add Product</button>
        </div>
    </form>

    <div id="message"></div>

</div>

<script src="http://ct275.test/assets/ckeditor5/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor2'))
        .then(editor => {

        })
        .catch(error => {
            console.error(error);
        });


    //Fill input when change option
    $(function() {
        $('select#selectCate').change(function() {
            let value = $(this).val().trim();
            $('#category').val(value);
        })
    })

    //Preview Img when change
    $(function() {
        const fileInput = $('input:file#fileUpload');
        const img = $('#img');

        fileInput.change(function(e) {
            img.prop('src', URL.createObjectURL(e.target.files[0]));
        });
    })


    //Call Ajax add product when submit
    $('#add').submit(function(e) {
        e.preventDefault();

        let form = $('#add')[0];
        let formData = new FormData(form);

        $.ajax({
            url: 'http://ct275.test/Ajax/AddProduct/',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                console.log('ok')
                console.log(data)
            },
            error: function(req, err) {
                console.log(err);
            }
        })

    })
</script>