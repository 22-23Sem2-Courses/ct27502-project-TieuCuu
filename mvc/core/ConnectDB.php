<?php
class DB
{
    protected $con;
    protected $servername = "localhost";
    protected $username = "admin";
    protected $passsword = "orcl";
    protected $dbname = "mvc";

    function __construct()
    {
        $this->con = mysqli_connect($this->servername, $this->username, $this->passsword);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
}