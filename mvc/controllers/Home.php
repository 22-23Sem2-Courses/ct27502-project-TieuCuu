<?php
class Home extends Controller
{

    //public $ExampleModel; nếu các function đều cần gọi model thì tạo biến global
    public $ProductModel;

    function __construct()
    {
        //$this->ExampleModel = $this->model("ExampleModel");
        $this->ProductModel = $this->model('ProductModel');
    }

    function SayHi()
    {

        $rows = $this->ProductModel->GetAllProduct();

        $rows = json_decode($rows);

        $this->view("master1", ["page" => "home", "data" => $rows]);
    }

    function Sum($a, $b)
    {
    }
}
