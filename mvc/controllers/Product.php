<?php
class Product
{

    function __construct()
    {
    }

    public function Category($type)
    {
        echo "Home - Category " . $type;
    }

    public function Detail($id)
    {
        echo "Home - Category " . $id;
    }
}
