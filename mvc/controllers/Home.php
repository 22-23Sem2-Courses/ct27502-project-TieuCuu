<?php
class Home extends Controller
{

    function __construct()
    {
    }

    function SayHi()
    {
        //model tương tác db, nhận hoặc gửi data
        //$init = $this->model("ProductModel");
        //echo $init->GetProduct();


        //view, tham số 1 là tên layout, tham số 2 mảng truyền data vào view
        $this->view("master1", ["page" => "home"]);
    }

    function Sum($a, $b)
    {
        $init = $this->model("ProductModel");
        echo $init->Sum($a, $b);
    }
}
