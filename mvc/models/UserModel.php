<?php

class UserModel extends ConnectDB
{
    public $PDO;

    public function __construct()
    {
        $this->PDO = $this->connect();
    }


    public function InsertNewUser($firstname, $username, $email, $password)
    {
        $result = false;
        $sql = "INSERT INTO USERS(UserFirstName, Username, UserEmail, UserPassword) VALUES(?, ?, ?, ?)";
        $stmt = $this->PDO->prepare($sql);
        if ($stmt->execute([$firstname, $username, $email, $password])) {
            $result = true;
            echo $result;
            $new_id = $this->PDO->lastInsertId();
        };

        return json_encode($result);
    }

    public function checkUsername($username)
    {
        $result = false;
        $sql = "SELECT UserID from Users WHERE Username = ?";
        $stmt = $this->PDO->prepare($sql);
        if ($stmt->execute([$username]) && $stmt->rowCount() > 0) {
            $result = true;
        };

        return json_encode($result);
    }

    public function findUserByEmail($email)
    {
        $result = false;
        $sql = "SELECT UserID from Users WHERE UserEmail = ?";
        $stmt = $this->PDO->prepare($sql);
        if ($stmt->execute([$email]) && $stmt->rowCount() > 0) {
            $result = true;
        };

        return json_encode($result);
    }
}
