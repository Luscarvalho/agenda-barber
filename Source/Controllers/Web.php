<?php

namespace Source\Controllers;

class Web
{
    public function home($data)
    {
        echo "<h1>Home User</h1>";
        var_dump($data);
        require __DIR__ . "/../Views/User-home/index.php";
    }

    public function login($data)
    {
        require __DIR__ . "/../Views/Login/index.php";
    }

    public function register($data)
    {
        require __DIR__ . "/../Views/Register/index.php";
    }

    public function contact($data)
    {

        echo "<h1>loginnn</h1>";
        var_dump($data);
        require __DIR__ . "/../Views/Contact/index.php";
    }

    public function error($data)
    {
        require __DIR__ . "/../Views/Error-page/index.php";
    }
}