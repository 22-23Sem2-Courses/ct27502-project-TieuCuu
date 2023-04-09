<?php



class ProductModel extends ConnectDB
{
    public $PDO;
    public function __construct()
    {
        $this->PDO = $this->connect();
    }

    public function GetProductByID($id)
    {
        $sql = "SELECT * FROM PRODUCTS WHERE ProductID = ?";
        $stmt = $this->PDO->prepare($sql);
        if ($stmt->execute([$id]) && $stmt->rowCount() > 0) {
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($rows);
        }
        return json_encode(false);
    }

    //getting all rows
    public function GetRows($query, $params = [])
    {
        try {
            $stmt = $this->PDO->prepare($query);
            $stmt->execute($params);

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    //getting one rows
    public function GetRow($query, $params = [])
    {
        try {
            $stmt = $this->PDO->prepare($query);
            $stmt->execute($params);

            return $stmt->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function GetSum($query)
    {
        try {
            $stmt = $this->PDO->prepare($query);
            $stmt->execute();

            return intval($stmt->fetchColumn());
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
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
