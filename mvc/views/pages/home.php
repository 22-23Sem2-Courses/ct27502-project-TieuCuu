<?php
// print_r($data["data"]);

$arr = $data["data"];


foreach ($arr as $obj) {
    echo $obj->ProductName;
    echo $obj->ProductImg;
    echo $obj->ProductPrice;
}

?>


<!-- Banner -->
<div class="banner-block position-relative">
    <!-- Banner image -->
    <div class="banner-img">
        <img src="<?php echo BASE_URL_PATH . "assets/img/banner.png" ?>" class="img-fluid " alt="" style="height: 500px; width: 100%; object-fit: cover;">

    </div>

    <!-- Banner title -->
    <div class="banner-desc card bg-transparent border-0" style="max-width: 40rem;">
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <h1 class="banner-title card-title mb-3">Natural & Healthy Vegetables</h1>
                    <h4 class="banner-subtitle card-subtitle mb-2">Bringing the best of the farm to your
                        table!
                    </h4>
                    <p class="banner-text card-text text-muted">
                        Welcome to
                        <span class="fw-bolder fs-4">Dandelion</span>
                        , your source
                        for fresh
                        and organic fruits and vegetables. We are dedicated to providing you with the highest
                        quality produce, hand-picked at the peak of freshness and delivered straight to your
                        door.
                    </p>
                    <a href="#main-products" class="btn btn-dark rounded-pill" style="width: 8rem;">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recommend product -->
<div class="recommend-wrap" id="recommend-products">
    <div class="container">
        <div class="recommend-container">
            <div class="container">
                <!-- Recommend product title -->
                <div class="row">
                    <div class="col">
                        <div class="text-center mt-4 mb-5 recommend-title-block">
                            <h2 class="pt-4">We Recommend</h2>
                            <p class="text-muted">Taste the freshness with our top recommendations</p>
                        </div>
                    </div>
                </div>
                <!-- Recommend product list -->
                <div class="row row-cols-md-3 row-cols-1 justify-content-evenly">
                    <div class="col" style="width: 250px;">
                        <div class="card mb-4">
                            <a href="<?php echo BASE_URL_PATH . "Product/Detail/111" ?>" class="text-reset text-decoration-none">
                                <img src="<?php echo BASE_URL_PATH . "assets/img/strawberry.png" ?>" class="card-img-top img-fluid recommend-img" alt="...">
                                <div class="recommend-heart heart-active">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                        <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="card-body position-relative">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h5 class="card-title mb-0">Strawberry</h5>
                                        <span class="fw-bolder">$1.6</span>
                                    </div>
                                    <p class="card-text">Strawberries, sweet, juicy and packed with Vitamin C,
                                        antioxidants and fiber. Available all year round.
                                    </p>
                                    <div>
                                        <button type="button" class="btn btn-dark cart-btn rounded-circle d-flex justify-content-center align-items-center text-center position-absolute top-100 start-50 translate-middle" style="height: 36px; width: 36px;">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col" style="width: 250px;">
                        <div class="card mb-4">
                            <a href="<?php echo BASE_URL_PATH . "Product/Detail/111" ?>" class="text-reset text-decoration-none">
                                <img src="<?php echo BASE_URL_PATH . "assets/img/strawberry.png" ?>" class="card-img-top img-fluid recommend-img" alt="...">
                                <div class="recommend-heart heart-active">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                        <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="card-body position-relative">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h5 class="card-title mb-0">Strawberry</h5>
                                        <span class="fw-bolder">$1.6</span>
                                    </div>
                                    <p class="card-text">Strawberries, sweet, juicy and packed with Vitamin C,
                                        antioxidants and fiber. Available all year round.
                                    </p>
                                    <div>
                                        <button type="button" class="btn btn-dark cart-btn rounded-circle d-flex justify-content-center align-items-center text-center position-absolute top-100 start-50 translate-middle" style="height: 36px; width: 36px;">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col" style="width: 250px;">
                        <div class="card mb-4">
                            <a href="<?php echo BASE_URL_PATH . "Product/Detail/111" ?>" class="text-reset text-decoration-none">
                                <img src="<?php echo BASE_URL_PATH . "assets/img/strawberry.png" ?>" class="card-img-top img-fluid recommend-img" alt="...">
                                <div class="recommend-heart heart-active">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                        <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="card-body position-relative">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h5 class="card-title mb-0">Strawberry</h5>
                                        <span class="fw-bolder">$1.6</span>
                                    </div>
                                    <p class="card-text">Strawberries, sweet, juicy and packed with Vitamin C,
                                        antioxidants and fiber. Available all year round.
                                    </p>
                                    <div>
                                        <button type="button" class="btn btn-dark cart-btn rounded-circle d-flex justify-content-center align-items-center text-center position-absolute top-100 start-50 translate-middle" style="height: 36px; width: 36px;">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Main products block -->
<div class="container" id="main-products">
    <div class="row">
        <div class="col">
            <div class="text-center my-3">
                <h2 class="pt-5">Our Products</h2>
                <p class="text-muted">Freshly picked and hand-selected its for you</p>
            </div>
        </div>
    </div>

    <!-- Filter, sort block -->
    <div class="row">
        <div class="col">
            <div class="product__filter-block">
                <div class="rounded p-2 d-flex justify-content-end">
                    <form action="" class="border rounded me-3">
                        <input type="hidden" name="" value="abc" id="" class="">
                        <div class="dropdown w-25">
                            <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 8rem;">
                                <label for="" class="me-5">Fillter</label>
                            </button>
                            <ul class="dropdown-menu dropdown-filter" aria-labelledby="dropdownMenuButton1" style="min-width: 8rem !important;">
                                <li data-value="abc">
                                    <a class="dropdown-item" href="#">Popularity</a>
                                </li>
                                <li data-value="abc">
                                    <a class="dropdown-item" href="#">Availability</a>
                                </li>
                            </ul>
                        </div>
                    </form>
                    <form action="" class="border rounded">
                        <input type="hidden" name="" value="abc" id="" class="">
                        <div class="dropdown w-25">
                            <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="min-width: 8rem;">
                                <label for="" class="me-5">Sort by</label>
                            </button>
                            <ul class="dropdown-menu dropdown-sort" aria-labelledby="dropdownMenuButton1" style="min-width: 8rem !important;">
                                <li data-value="abc">
                                    <a class="dropdown-item" href="#">Price: Low to High</a>
                                </li>
                                <li data-value="abc">
                                    <a class="dropdown-item" href="#">Price: High to Low</a>
                                </li>
                            </ul>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-2 gx-3">
        <!-- Category nav -->
        <div class="col-2">
            <div class="product__category-container bg-body rounded shadow navbar-light mt-3">
                <div class="container border-bottom py-3 px-4">
                    <div class="row ">
                        <div class="col">
                            <div class="fw-bold">
                                <i class="fa-solid fa-list-ul me-2"></i>
                                <span>Category</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container py-3">
                    <div class="row">
                        <div class="col">
                            <nav class="nav navbar-nav">
                                <a class="nav-link active" data-bs-toggle="tab" aria-current="page" href="#">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>All Products</span>
                                </a>
                                <a class="nav-link" data-bs-toggle="tab" aria-current="page" href="#">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>Fruits</span>
                                </a>
                                <a class="nav-link " data-bs-toggle="tab" aria-current="page" href="#">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>Vegetables</span>
                                </a>
                                <a class="nav-link " data-bs-toggle="tab" aria-current="page" href="#">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>Meat</span>
                                </a>
                                <a class="nav-link " data-bs-toggle="tab" aria-current="page" href="#">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>Dairy</span>
                                </a>
                                <a class="nav-link " data-bs-toggle="tab" aria-current="page" href="#">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <span>Drink</span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products list block -->
        <div class="col-10">
            <div class="product-container">
                <div class="container">
                    <!-- List block -->
                    <div class="row row-cols-1 gy-2">
                        <div class="col">
                            <div class="product__list-block pt-3">
                                <div class="row row-cols-md-4">
                                    <?php foreach ($arr as $obj) { ?>
                                        <div class="col">
                                            <div class="card mb-5 border-0 rounded-3">
                                                <a href="<?php echo BASE_URL_PATH . "Product/Detail/" . $obj->ProductID ?>" class="text-reset text-decoration-none ">
                                                    <img src="<?php echo BASE_URL_PATH . "assets/img/products/" . $obj->ProductImg ?>" class="card-img-top img-fluid recommend-img" alt="...">
                                                    <div class="recommend-heart">
                                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                                            <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="card-body position-relative">
                                                        <div class="text-center mb-2">
                                                            <div class="card-title mb-0 product-name"><?php echo $obj->ProductName ?></div>
                                                        </div>
                                                        <div class="text-center">
                                                            <p>
                                                                <span class="fw-bold">$1.6</span>
                                                                /
                                                                <span class="text-muted">500g</span>
                                                            </p>
                                                        </div>
                                                        <div class="product__rating-block d-flex justify-content-between align-items-center py-2">
                                                            <div class="product__rating-icon">
                                                                <i class="fa-regular fa-star product__rating--active"></i>
                                                                <i class="fa-regular fa-star product__rating--active"></i>
                                                                <i class="fa-regular fa-star product__rating--active"></i>
                                                                <i class="fa-regular fa-star product__rating--active"></i>
                                                                <i class="fa-regular fa-star"></i>
                                                            </div>
                                                            <span>81 sold</span>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn btn-dark cart-btn rounded-circle d-flex justify-content-center align-items-center text-center position-absolute top-100 start-50 translate-middle" style="height: 36px; width: 36px;">
                                                                <i class="fa-solid fa-cart-shopping"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php }  ?>

                                    <!-- <div class="col">
                                        <div class="card mb-5 border-0 rounded-3">
                                            <a href="<?php echo BASE_URL_PATH . "Product/Detail/111" ?>" class="text-reset text-decoration-none ">
                                                <img src="<?php echo BASE_URL_PATH . "assets/img/strawberry.png" ?>" class="card-img-top img-fluid recommend-img" alt="...">
                                                <div class="recommend-heart">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                                        <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="card-body position-relative">
                                                    <div class="text-center mb-2">
                                                        <div class="card-title mb-0 product-name">Dandelion
                                                            Strawberry
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <p>
                                                            <span class="fw-bold">$1.6</span>
                                                            /
                                                            <span class="text-muted">500g</span>
                                                        </p>
                                                    </div>
                                                    <div class="product__rating-block d-flex justify-content-between align-items-center py-2">
                                                        <div class="product__rating-icon">
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </div>
                                                        <span>81 sold</span>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-dark cart-btn rounded-circle d-flex justify-content-center align-items-center text-center position-absolute top-100 start-50 translate-middle" style="height: 36px; width: 36px;">
                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-5 border-0 rounded-3">
                                            <a href="<?php echo BASE_URL_PATH . "Product/Detail/111" ?>" class="text-reset text-decoration-none ">
                                                <img src="<?php echo BASE_URL_PATH . "assets/img/strawberry.png" ?>" class="card-img-top img-fluid recommend-img" alt="...">
                                                <div class="recommend-heart">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                                        <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="card-body position-relative">
                                                    <div class="text-center mb-2">
                                                        <div class="card-title mb-0 product-name">Dandelion
                                                            Strawberry
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <p>
                                                            <span class="fw-bold">$1.6</span>
                                                            /
                                                            <span class="text-muted">500g</span>
                                                        </p>
                                                    </div>
                                                    <div class="product__rating-block d-flex justify-content-between align-items-center py-2">
                                                        <div class="product__rating-icon">
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </div>
                                                        <span>81 sold</span>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-dark cart-btn rounded-circle d-flex justify-content-center align-items-center text-center position-absolute top-100 start-50 translate-middle" style="height: 36px; width: 36px;">
                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-5 border-0 rounded-3">
                                            <a href="<?php echo BASE_URL_PATH . "Product/Detail/111" ?>" class="text-reset text-decoration-none ">
                                                <img src="<?php echo BASE_URL_PATH . "assets/img/strawberry.png" ?>" class="card-img-top img-fluid recommend-img" alt="...">
                                                <div class="recommend-heart">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                                        <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="card-body position-relative">
                                                    <div class="text-center mb-2">
                                                        <div class="card-title mb-0 product-name">Dandelion
                                                            Strawberry
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <p>
                                                            <span class="fw-bold">$1.6</span>
                                                            /
                                                            <span class="text-muted">500g</span>
                                                        </p>
                                                    </div>
                                                    <div class="product__rating-block d-flex justify-content-between align-items-center py-2">
                                                        <div class="product__rating-icon">
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </div>
                                                        <span>81 sold</span>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-dark cart-btn rounded-circle d-flex justify-content-center align-items-center text-center position-absolute top-100 start-50 translate-middle" style="height: 36px; width: 36px;">
                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-5 border-0 rounded-3">
                                            <a href="<?php echo BASE_URL_PATH . "Product/Detail/111" ?>" class="text-reset text-decoration-none ">
                                                <img src="<?php echo BASE_URL_PATH . "assets/img/strawberry.png" ?>" class="card-img-top img-fluid recommend-img" alt="...">
                                                <div class="recommend-heart">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                                        <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="card-body position-relative">
                                                    <div class="text-center mb-2">
                                                        <div class="card-title mb-0 product-name">Dandelion
                                                            Strawberry
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <p>
                                                            <span class="fw-bold">$1.6</span>
                                                            /
                                                            <span class="text-muted">500g</span>
                                                        </p>
                                                    </div>
                                                    <div class="product__rating-block d-flex justify-content-between align-items-center py-2">
                                                        <div class="product__rating-icon">
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </div>
                                                        <span>81 sold</span>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-dark cart-btn rounded-circle d-flex justify-content-center align-items-center text-center position-absolute top-100 start-50 translate-middle" style="height: 36px; width: 36px;">
                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-5 border-0 rounded-3">
                                            <a href="<?php echo BASE_URL_PATH . "Product/Detail/111" ?>" class="text-reset text-decoration-none ">
                                                <img src="<?php echo BASE_URL_PATH . "assets/img/strawberry.png" ?>" class="card-img-top img-fluid recommend-img" alt="...">
                                                <div class="recommend-heart">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                                        <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="card-body position-relative">
                                                    <div class="text-center mb-2">
                                                        <div class="card-title mb-0 product-name">Dandelion
                                                            Strawberry
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <p>
                                                            <span class="fw-bold">$1.6</span>
                                                            /
                                                            <span class="text-muted">500g</span>
                                                        </p>
                                                    </div>
                                                    <div class="product__rating-block d-flex justify-content-between align-items-center py-2">
                                                        <div class="product__rating-icon">
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </div>
                                                        <span>81 sold</span>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-dark cart-btn rounded-circle d-flex justify-content-center align-items-center text-center position-absolute top-100 start-50 translate-middle" style="height: 36px; width: 36px;">
                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-5 border-0 rounded-3">
                                            <a href="<?php echo BASE_URL_PATH . "Product/Detail/111" ?>" class="text-reset text-decoration-none ">
                                                <img src="<?php echo BASE_URL_PATH . "assets/img/strawberry.png" ?>" class="card-img-top img-fluid recommend-img" alt="...">
                                                <div class="recommend-heart">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                                        <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="card-body position-relative">
                                                    <div class="text-center mb-2">
                                                        <div class="card-title mb-0 product-name">Dandelion
                                                            Strawberry
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <p>
                                                            <span class="fw-bold">$1.6</span>
                                                            /
                                                            <span class="text-muted">500g</span>
                                                        </p>
                                                    </div>
                                                    <div class="product__rating-block d-flex justify-content-between align-items-center py-2">
                                                        <div class="product__rating-icon">
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </div>
                                                        <span>81 sold</span>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-dark cart-btn rounded-circle d-flex justify-content-center align-items-center text-center position-absolute top-100 start-50 translate-middle" style="height: 36px; width: 36px;">
                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-5 border-0 rounded-3">
                                            <a href="<?php echo BASE_URL_PATH . "Product/Detail/111" ?>" class="text-reset text-decoration-none ">
                                                <img src="<?php echo BASE_URL_PATH . "assets/img/strawberry.png" ?>" class="card-img-top img-fluid recommend-img" alt="...">
                                                <div class="recommend-heart">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                                        <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="card-body position-relative">
                                                    <div class="text-center mb-2">
                                                        <div class="card-title mb-0 product-name">Dandelion
                                                            Strawberry
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <p>
                                                            <span class="fw-bold">$1.6</span>
                                                            /
                                                            <span class="text-muted">500g</span>
                                                        </p>
                                                    </div>
                                                    <div class="product__rating-block d-flex justify-content-between align-items-center py-2">
                                                        <div class="product__rating-icon">
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star product__rating--active"></i>
                                                            <i class="fa-regular fa-star"></i>
                                                        </div>
                                                        <span>81 sold</span>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-dark cart-btn rounded-circle d-flex justify-content-center align-items-center text-center position-absolute top-100 start-50 translate-middle" style="height: 36px; width: 36px;">
                                                            <i class="fa-solid fa-cart-shopping"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination block -->


                    <div class="row">
                        <div class="col">
                            <div class="product__page-block">
                                <div class="row">
                                    <div class="col">
                                        <div class="product__page-item mt-3">
                                            <nav>
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item">
                                                        <a class="btn border rounded-circle d-flex justify-content-center align-items-center mx-1" href="#" aria-label="Previous" style="width: 36px; height: 36px;">
                                                            <span aria-hidden="true">&laquo;</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="btn active border rounded-circle d-flex justify-content-center align-items-center mx-1" href="#" style="width: 36px; height: 36px;">1
                                                        </a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="btn border rounded-circle d-flex justify-content-center align-items-center mx-1" href="#" style="width: 36px; height: 36px;">2
                                                        </a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="btn border rounded-circle d-flex justify-content-center align-items-center mx-1" href="#" style="width: 36px; height: 36px;">3
                                                        </a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="btn border rounded-circle d-flex justify-content-center align-items-center mx-1" href="#" style="width: 36px; height: 36px;">...
                                                        </a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="btn border rounded-circle d-flex justify-content-center align-items-center mx-1" href="#" aria-label="Previous" style="width: 36px; height: 36px;">
                                                            <span aria-hidden="true">&raquo;</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Promotions block -->
<div class="promotion-block my-5">
    <div class="container">
        <div class="position-relative">
            <img src="<?php echo BASE_URL_PATH . "assets/img/promotion.jpg" ?>" class="promotion-img img-fluid shadow-lg" alt="" style="height: 480px; width: 100%; object-fit: cover;">
            <div class="promotion-content text-white d-flex justify-content-center align-items-center flex-column">
                <h3 class="promotion-title text-center fw-bold">Don't Miss Our Latest Promotions!</h3>
                <p class="promotion-tag">Be the first to know about our latest deals and discounts on
                    farm-fresh
                    vegetables
                </p>
                <form action="" id="promotion-submit" class="mt-3">
                    <input type="text" placeholder="Enter your email">
                    <button type="submit">Join Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src=" <?php echo BASE_URL_PATH . "assets/js/index.js" ?>"></script>