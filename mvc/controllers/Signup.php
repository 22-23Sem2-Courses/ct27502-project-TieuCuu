<?php
class Signup extends Controller
{

    function __construct()
    {
    }

    public function SayHi()
    {
        $this->view("master2", ["page" => "signup"]);
    }
}
