<?php
class Signin extends Controller
{

    function __construct()
    {
    }

    public function SayHi()
    {
        $this->view("master2", ["page" => "signin"]);
    }
}
