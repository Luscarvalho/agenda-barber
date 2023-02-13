<?php

namespace Source\Controllers;

use Source\Models\Login;
use Source\Models\User;

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
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            require __DIR__ . "/../Views/Login/index.php";
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userLogin = (new User)->login($data["email"], $data["password"]);
            if ($userLogin == "admin") {
                header("Location: $url/admin");
            } elseif ($userLogin == "user") {
                header("Location: $url/");
            } else {
                $_SESSION['msg'] = "Email ou senha errados!";
                $_SESSION['dados'] = ["email" => $data["email"], "senha" => $data["password"]];
                header("Location: $url/login");
            }
        }
    }

    public function register($data): void
    {
        $url = URL_BASE;
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            require __DIR__ . "/../Views/Register/index.php";
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userRegister = (new User)->register($data["nome"], $data["email"], $data["password"], $data["rep-password"]);
            if ($userRegister) {
                header("Location: $url/login");
            } else {
                $_SESSION['msg'] = "As senhas não correspondem!";
                $_SESSION['dados'] = ["nome"=>$data["nome"], "email" => $data["email"]];
                header("Location: $url/register");
            }
            exit;
        }
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