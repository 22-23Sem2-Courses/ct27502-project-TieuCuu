<?php

use Dotenv\Parser\Value;

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
                $result = stackMessageWrapper([showMessage('success', 'Product has been deleted successfully!')]);
            } else {
                $result = stackMessageWrapper([showMessage('error', 'Failed to delete product. Please try again later!')]);
            }
        }

        $products = $this->ProductModel->getRows("SELECT * FROM PRODUCTS");
        $this->view("master3", ["page" => "dashboard", "products" => $products, "result" => $result]);
    }


    public function Product($id)
    {
        $productID = $id;

        $row = json_decode($this->ProductModel->GetProductByID($productID));
        $categoryRows = $this->ProductModel->GetRows("SELECT CATEGORYID, CATEGORYNAME FROM CATEGORIES");

        $data = [
            'row' => '',
            'categoryRows' => $categoryRows,
            'resultError' => ''
        ];


        if ($row) {
            $data['row'] = $row;
        } else {
            $data['resultError'] = stackMessageWrapper([showMessage('error', 'Oops! Product not found!')]);
        }
        //show data into input fileds
        $this->view("master3", ["page" => "edit_Product", "data" => $data]);

        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_update'])) {

        //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);


        //     if (isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["category"]) && isset($_POST["quantity"]) && isset($_POST["desc"]) && isset($_POST["information"])) {

        //         //set default value in database
        //         $name = $row[0]->ProductName;
        //         $price = $row[0]->ProductPrice;
        //         $category = $row[0]->CategoryID;
        //         $quantity = $row[0]->ProductQuantity;
        //         $desc = $row[0]->ProductShortDesc;
        //         $info = $row[0]->ProductInfo;
        //         $img = $row[0]->ProductImg;

        //         $errors = [];

        //         if (!empty($_POST["name"])) {
        //             $name = $_POST["name"];
        //         }

        //         if (!empty($_POST["price"])) {
        //             $price = $_POST["price"];
        //         }

        //         if (!empty($_POST["category"])) {
        //             $category = ucfirst($_POST["category"]);
        //         }

        //         //quantity can be 0
        //         if (!empty($_POST["quantity"] || $_POST["quantity"] == 0)) {
        //             $quantity = $_POST["quantity"];
        //         }

        //         if (!empty($_POST["desc"])) {
        //             $desc = $_POST["desc"];
        //         }

        //         if (!empty($_POST["information"])) {
        //             $info = $_POST["information"];
        //         }

        //         //if file empty $_FILES array return having (error = 4) || (size = 0 & error = 0)
        //         if ($_FILES["fileUpload"]["error"] !== 4 || ($_FILES["fileUpload"]["size"] !== 0 && $_FILES["fileUpload"]["error"] !== 0)) {

        //             //default route public/
        //             $targetDir =  "assets/img/products/";

        //             //basename return name of file
        //             $targetFile = $targetDir . basename($_FILES["fileUpload"]["name"]);
        //             $hasErrors = false;


        //             //pathinfo return file path .jpg, .png
        //             $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        //             $extensions = array("jpeg", "jpg", "png", "gif");

        //             // Check if image file is a actual image or fake image
        //             $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
        //             if ($check === false) {
        //                 array_push($errors, showMessage("error", "File is not an image."));
        //                 $hasErrors = true;
        //             }

        //             // Check if file already exists
        //             if (file_exists($targetFile)) {
        //                 array_push($errors, showMessage("error", "Sorry, file already exists."));
        //                 $hasErrors = true;
        //             } else {
        //                 echo "file ok";
        //             }

        //             // Check file size
        //             if ($_FILES["fileUpload"]["size"] > 5000000) {
        //                 array_push($errors, showMessage("error", "Sorry, your file is too large."));
        //                 $hasErrors = true;
        //             }

        //             // Allow certain file formats
        //             if (!in_array($imageFileType, $extensions)) {
        //                 array_push($errors, showMessage("error", "Sorry, only JPG, JPEG, PNG & GIF files are allowed."));
        //                 $hasErrors = true;
        //             }

        //             if ($hasErrors) {
        //                 array_push($errors, showMessage("error", "Sorry, your file was not uploaded."));
        //             } else {
        //                 if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFile)) {
        //                     $img = basename($_FILES["fileUpload"]["name"]);
        //                 } else {
        //                     array_push($errors, showMessage("error", "Sorry, there was an error uploading your file."));
        //                 }
        //             }
        //         }

        //         // var_dump($name, $price, $category, $quantity, $desc, $info, $img, $productID);

        //         $editResult = $this->ProductModel->EditProduct("
        //             UPDATE PRODUCTS SET PRODUCTNAME = ?, 
        //                                 PRODUCTPRICE = ?, 
        //                                 CATEGORYID = ?, 
        //                                 PRODUCTQUANTITY = ?, 
        //                                 PRODUCTSHORTDESC = ?, 
        //                                 PRODUCTINFO = ?, 
        //                                 PRODUCTIMG = ? WHERE PRODUCTID = ?", [$name, $price, $category, $quantity, $desc, $info, $img, $productID]);
        //         if ($editResult) {
        //             //echo stackMessageWrapper([showMessage("success", "Update successful! The changes have been saved to the database.")]);
        //             // echo '<script>
        //             // setTimeout(function() {
        //             //     window.location.href = "http://ct275.test/Admin/EditProduct/' . $productID . '";
        //             // }, 1500);
        //             //     </script>';
        //         } else {
        //             array_push($errors, showMessage("error", "Failed to update the record. Please try again later."));
        //             echo stackMessageWrapper($errors);
        //         }
        //     }
        // }
    }

    public function NewProduct()
    {
        $categoryRows = $this->ProductModel->GetRows("SELECT CATEGORYID, CATEGORYNAME FROM CATEGORIES");

        $data = ['categoryRows' => $categoryRows];



        // echo $_POST["information"];
        //print_r($_FILES["fileUpload"]);
        $errors = [];
        $nameErr = '';
        // $priceErr = '';
        // $cateErr = '';
        // $quantityErr = '';
        // $imgErr = '';
        // $descErr = '';
        // $infoErr = '';
        $categoryRows = $this->ProductModel->GetRows("SELECT CATEGORYID, CATEGORYNAME FROM CATEGORIES");

        $data = ['categoryRows' => $categoryRows];


        if ($_SERVER["REQUEST_METHOD"] === 'POST' && isset($_POST["submit_add"])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            if (isset($_POST["name"]) && !empty($_POST["name"])) {
                if (strlen($_POST["name"]) >= 25) {
                    $name = $_POST["name"];
                } else {
                    $nameErr .= 'At least 25 characters long!';
                }
            }
        }
        $errors['nameError'] = $nameErr;
        $errors['priceError'] = 'price err';

        if (!array_filter($errors)) {
            echo json_encode('thuc hien chen');
        } else {
            echo ('co loi');
        }

        $this->view("master3", ["page" => "add_Product", "data" => $data, "errors" => $errors]);
    }
}
