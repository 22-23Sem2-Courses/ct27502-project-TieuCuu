<div>

    <h1 class="mt-4 pb-2 border-bottom">Products Table</h1>
    <form action="/SignUp/NewReg" id="register" method="POST" class="row g-3">
        <div class="col-md-4">
            <label for="name" class="form-label fw-bold">Product Name</label>
            <input type="text" name="name" value="" id="name" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">

            </div>
        </div>
        <div class="col-md-4">
            <label for="price" class="form-label fw-bold">Product Price</label>
            <input type="number" name="price" value="" id="price" min="0" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">

            </div>
        </div>
        <div class="col-md-4">
            <label for="quantity" class="form-label fw-bold">Product Quantity</label>
            <input type="number" name="quantity" value="" min="0" id="quantity" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">

            </div>
        </div>
        <div class="col-md-12">
            <label for="img" class="form-label fw-bold">ProductImg</label>
            <input type="file" name="img" id="img" value="" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">

            </div>
        </div>
        <div class="col-md-12">
            <label for="desc" class="form-label fw-bold">Product Short Description</label>
            <textarea class="form-control" placeholder="Leave a short description here" name="desc" id="desc" style="height: 100px"></textarea>
            <div class="text-danger" style="font-size: 0.8rem;">
            </div>
        </div>

        <div class="col-md-12">
            <label for="confirmPassword" class="form-label fw-bold">Product Information</label>
            <input type="password" name="confirmPassword" value="" class="form-control form-control input-color " required>
            <div class="text-danger" style="font-size: 0.8rem;">
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" name="submit_update" class="btn btn-dark w-100 mt-3">Update Product</button>
        </div>
    </form>

</div>