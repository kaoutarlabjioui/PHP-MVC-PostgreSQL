<?php
namespace app\Controllers;


class ErrorController{



    public function index()
    {
        $this->error();
    }

    public function error()
    {
        // $path= $_SERVER['HTTP_REFERER'];
        include_once '../app/Views/404.php';
        // header("location: $path");

    }

}