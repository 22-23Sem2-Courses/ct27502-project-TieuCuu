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
        $row = json_decode($this->ProductModel->GetProductByID($id));
        $categoryRows = $this->ProductModel->GetRows("SELECT CATEGORYID, CATEGORYNAME FROM CATEGORIES");

        $data = [
            'row' => '',
            'categoryRows' => $categoryRows,
            'resultError' => ''
        ];


        if ($row) {
            $data['row'] = $row;
        } else {
            $data['resultError'] = showMessage('error', 'Oops! Product not found!');
        }

        $this->view("master3", ["page" => "edit_Product", "data" => $data]);

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_update'])) {
            // echo $_POST['information'];
            // echo $_POST['desc'];
            var_dump($_FILES['fileUpload']);
            // echo $_POST['category'];
            $productName = $_POST["name"];

            //default route public/
            $targetDir =  "assets/img/products/";

            //basename return name of file
            $targetFile = $targetDir . basename($_FILES["fileUpload"]["name"]);
            $hasErrors = false;

            //pathinfo return file path .jpg, .png
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $extensions = array("jpeg", "jpg", "png", "gif");


            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ". ";
            } else {
                echo "File is not an image.";
                $hasErrors = true;
            }

            // Check if file already exists
            if (file_exists($targetFile)) {
                echo "Sorry, file already exists.";
                $hasErrors = true;
            } else {
                echo "file ok";
            }

            // Check file size
            if ($_FILES["fileUpload"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $hasErrors = true;
            }

            // Allow certain file formats
            if (!in_array($imageFileType, $extensions)) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $hasErrors = true;
            }

            if ($hasErrors) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFile)) {
                    echo "The file has been uploaded. <br/>";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    }
}
