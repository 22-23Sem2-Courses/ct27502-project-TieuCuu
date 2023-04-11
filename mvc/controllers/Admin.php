<?php
class Admin extends Controller
{
    public $ProductModel;

    function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
    }

    public function SayHi()
    {

        $products = $this->ProductModel->getRows("SELECT * FROM PRODUCTS");
        $this->view("master3", ["page" => "dashboard", "products" => $products]);
    }

    public function DeleteProduct()
    {

        $result = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            $productID = $_POST['product_id'];

            if ($this->ProductModel->DeleteProduct("DELETE FROM PRODUCTS WHERE PRODUCTID = ?", [$productID])) {
                $result = showMessage('success', 'Product has been deleted successfully!');
            } else {
                $result = showMessage('error', 'Failed to delete product. Please try again later!');
            }
        }

        $products = $this->ProductModel->getRows("SELECT * FROM PRODUCTS");
        $this->view("master3", ["page" => "dashboard", "products" => $products, "result" => $result]);
    }

    public function EditProduct($id)
    {
        $this->view("master3", ["page" => "edit_Product"]);
    }
}
