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

    public function DeleteProduct($query, $params = [])
    {
        try {
            $stmt = $this->PDO->prepare($query);
            $stmt->execute($params);
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
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

    //getting one row
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

    public function GetSum($query, $params = [])
    {
        try {
            $stmt = $this->PDO->prepare($query);
            $stmt->execute($params);

            return intval($stmt->fetchColumn());
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
}
