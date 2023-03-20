<?php
class Home extends Controller
{

    function __construct()
    {
    }

    function SayHi()
    {
        //model
        //$init = $this->model("ProductModel");
        //echo $init->GetProduct();
        //view
        $this->view("master1");
    }

    function Sum($a, $b)
    {
        $init = $this->model("ProductModel");
        echo $init->Sum($a, $b);
    }
}
