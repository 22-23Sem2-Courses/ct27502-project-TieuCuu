<?php
class Ajax extends Controller
{
    public $ProductModel;

    function __construct()
    {
        $this->ProductModel = $this->model("ProductModel");
    }

    public function Pagination($category)
    {
        $limit = 8;
        $page = 0;

        $display = "";

        if (isset($_POST['page'])) {
            $page = $_POST['page'];
        } else {
            $page = 1;
        }

        if (empty($cate)) {
            $category = ucfirst($category);
        } else {
            $category = 'All';
        }
        $start_from = ($page - 1) * $limit;

        if ($category == 'All') {
            $products = $this->ProductModel->GetRows("SELECT * FROM PRODUCTS ORDER BY ID LIMIT $start_from, $limit");
            $count_products = $this->ProductModel->GetSum("SELECT COUNT(id) FROM PRODUCTS");
        } else {
            $products = $this->ProductModel->GetRows("SELECT * FROM PRODUCTS WHERE CATEGORYID = ? ORDER BY ID LIMIT $start_from, $limit", [$category]);
            $count_products = $this->ProductModel->GetSum("SELECT COUNT(id) FROM PRODUCTS WHERE CATEGORYID = ?", [$category]);
        }


        if ($count_products > 0) {
            foreach ($products as $product) {
                //print_r($product['ProductName']);
                $display .= '
                <div class="col">
                <div class="card mb-5 border-0 rounded-3">
                    <a href="' . BASE_URL_PATH . 'Product/Detail/' . $product['ProductID'] . '" class="text-reset text-decoration-none ">
                        <img src="' . BASE_URL_PATH . 'assets/img/products/' . $product['ProductImg'] . '" class="card-img-top img-fluid recommend-img" alt="...">
                        <div class="recommend-heart">
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: rgba(0, 0, 0, 0.5); height: 24px; width: 24px; stroke: #fff; stroke-width: 2; overflow: visible;">
                                <path d="m16 28c7-4.733 14-10 14-17 0-1.792-.683-3.583-2.05-4.95-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05l-2.051 2.051-2.05-2.051c-1.367-1.366-3.158-2.05-4.95-2.05-1.791 0-3.583.684-4.949 2.05-1.367 1.367-2.051 3.158-2.051 4.95 0 7 7 12.267 14 17z">
                                </path>
                            </svg>
                        </div>
                        <div class="card-body position-relative">
                            <div class="text-center mb-2">
                                <div class="card-title mb-0 product-name">' . $product['ProductName'] . '</div>
                            </div>
                            <div class="text-center">
                                <p>
                                    <span class="fw-bold">$' . $product['ProductPrice'] . '</span>
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
                ';
            }
        } else {
            $display .= '
                <div>Oops! There is no data found!</div>
            ';
        }
        if ($category == 'All') {
            $total_rows = $this->ProductModel->GetSum("SELECT COUNT(id) FROM PRODUCTS");
        } else {
            $total_rows = $this->ProductModel->GetSum("SELECT COUNT(id) FROM PRODUCTS  WHERE CATEGORYID = ?", [$category]);
        }

        $total_pages = ceil(($total_rows / $limit));

        $displayPage = '';

        if ($page > 1) {
            $previous = $page - 1;

            $displayPage .= '<li class="page-item btn border rounded-circle d-flex justify-content-center align-items-center mx-1" page-id="1" style="width: 36px; height: 36px;"><span style="transform: translateY(-2%);">&laquo;</span></li>';
            //$displayPage .= '<li class="page-item" page-id="' . $previous . '"></li>';
        }

        for ($i = 1; $i <= $total_pages; $i++) {
            $active_class = "";
            if ($i == $page) {
                $active_class = "active";
            }
            $displayPage .= '<li class="page-item btn border rounded-circle d-flex justify-content-center align-items-center mx-1 ' . $active_class . '" page-id="' . $i . '" style="width: 36px; height: 36px;"><span>' . $i . '</span></li>';
        }

        if ($page < $total_pages) {
            $page++;
            // $displayPage .= '<li class="page-item" page-id="' . $page . '">';
            $displayPage .= '<li class="page-item btn border rounded-circle d-flex justify-content-center align-items-center mx-1" page-id="' . $total_pages . '" style="width: 36px; height: 36px;"><span style="transform: translateY(-2%);">&raquo;</span></li>';
        }


        $return = array();
        $html1 = '';
        $html2 = '';

        $html1 .= $display;
        $html2 .= $displayPage;

        $return['html1'] = $html1;
        $return['html2'] = $html2;

        echo json_encode($return);
        exit;
    }
}
