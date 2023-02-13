<?php

namespace Source\Controllers;

use Source\Models\Login;

class Web
{
    public function home($data): void
    {
        echo "<h1>Home User</h1>";
        var_dump($data);
        require __DIR__ . "/../Views/User-home/index.php";
    }

    public function login($data): void
    {
        $url = URL_BASE;
        var_dump($data);
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            require __DIR__ . "/../Views/Login/index.php";
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userLogin = (new Login)->login($data["email"], $data["password"]);
            if ($userLogin) {
                header("Location: $url/admin");
            } else {
                header("Location: $url/login");
            }
            exit;
        }
    }

    public function register($data): void
    {
        require __DIR__ . "/../Views/Register/index.php";
    }

    public function contact($data): void
    {

        echo "<h1>loginnn</h1>";
        var_dump($data);
        require __DIR__ . "/../Views/Contact/index.php";
    }

    public function error($data): void
    {
        require __DIR__ . "/../Views/Error-page/index.php";
    }
}