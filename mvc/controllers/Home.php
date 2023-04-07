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
        //model tương tác db, nhận hoặc gửi data
        //$init = $this->model("ProductModel");
        //echo $init->GetProduct();


        //view, tham số 1 là tên layout, tham số 2 mảng truyền data vào view
        $a = $this->ProductModel->GetAllProduct();
        $a = json_decode($a);
        //print_r($a);
        $this->view("master1", ["page" => "home", "data" => $a]);
    }

    function Sum($a, $b)
    {
        $init = $this->model("ProductModel");
        echo $init->Sum($a, $b);
    }
}
