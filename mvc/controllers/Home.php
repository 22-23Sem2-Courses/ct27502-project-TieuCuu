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

        $this->view("master1", ["page" => "home"]);
    }

    function Sum($a, $b)
    {
    }
}
