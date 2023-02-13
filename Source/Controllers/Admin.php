<?php

namespace Source\Controllers;

class Admin
{
    public function home($data)
    {
        echo "<h1>Home Admin</h1>";
        var_dump($data);
        $url = URL_BASE;
        require __DIR__ . "/../Views/Admin-home/index.php";
    }
}