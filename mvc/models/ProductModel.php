<?php
class ProductModel extends ConnectDB
{
    public $PDO;
    public function __construct()
    {
        $this->PDO = $this->connect();
    }

    public function GetAllProduct()
    {
        $sql = "SELECT * FROM PRODUCTS";
        $stmt = $this->PDO->prepare($sql);
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($row);
        }
        return json_encode(false);
    }

    public function GetRecommendProduct()
    {
    }


    public function AddProduct()
    {
    }

    public function EditProduct()
    {
    }

    public function DeleteProduct()
    {
    }

    //ví dụ nhận dữ liệu
    public function Sum($a, $b)
    {
        return $a + $b;
    }
}
