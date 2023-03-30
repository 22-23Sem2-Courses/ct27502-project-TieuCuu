<?php
class Product extends Controller
{

    function __construct()
    {
    }

    function SayHi()
    {
    }

    public function Category($type)
    {
        echo "Home - Category " . $type;
    }

    public function Detail($id)
    {
        //echo "ok" . $id;
        $this->view("master1", ["page" => "detail"]);
    }
}
