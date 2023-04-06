<?php
class Ajax extends Controller
{
    public $UserModel;

    function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }

    //Ajax, gọi hàm checkUserName bên UserModel trả về boolean
    public function checkUserName()
    {
        // $username = $_POST['username'];
        // echo $this->UserModel->checkUserName($username);
    }

    public function checkUserEmail()
    {
        // $email = $_POST['email'];
        // echo $this->UserModel->checkUserEmail($email);
    }
}
