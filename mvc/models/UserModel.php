<?php

class UserModel extends ConnectDB
{
    public function __construct()
    {
    }

    public function InsertNewUser($firstname, $username, $email, $password)
    {
        //$qr = "INSERT INTO USERS(UserFirstName, Username, UserEmail, UserPassword) VALUES('$firstname', '$username', '$email', '$password')";
        //$qr = $this->conn->prepare("INSERT INTO USERS(UserFirstName, Username, UserEmail, UserPassword) VALUES VALUES (?, ?, ?, ?)");

        $PDO = $this->connect();
        $result = false;
        $sql = "INSERT INTO USERS(UserFirstName, Username, UserEmail, UserPassword) VALUES(?, ?, ?, ?)";
        $stmt = $PDO->prepare($sql);
        if ($stmt->execute([$firstname, $username, $email, $password])) {
            $result = true;
            $new_id = $PDO->lastInsertId();
            echo $new_id;
        };

        return json_encode($result);
    }
}
