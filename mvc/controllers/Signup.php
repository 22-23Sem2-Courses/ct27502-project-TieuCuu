<?php
class Signup extends Controller
{
    public $UserModel;

    function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }

    public function SayHi()
    {
        $this->view("master2", ["page" => "signup"]);
    }

    public function NewReg()
    {
        //1. get data KH nhập
        if (isset($_POST["btnSignup"])) {
            $firstname = $_POST["firstname"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $password_confirm = $_POST["password_confirm"];
            $terms = $_POST["terms"];

            // echo $firstname;
            // echo "<br>";
            // echo $username;
            // echo "<br>";
            // echo $email;
            // echo "<br>";
            // echo $password;
            // echo "<br>";
            // echo $password_confirm;
            // echo "<br>";
            // echo $terms;
        }
        //2. insert vào bảng database
        $kq = $this->UserModel->InsertNewUser($firstname, $username, $email, $password);
        echo $kq;
        //3. Show "OK/Fail" ra màn hình
    }
}
