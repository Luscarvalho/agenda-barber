<?php

namespace Source\Controllers;

use Source\Models\User;

class Web
{
    public function login($data): void
    {
        $url = URL_BASE;
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            require __DIR__ . "/../Views/Login/index.php";
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userLogin = (new User)->login($data["email"], $data["password"]);
            if ($userLogin == "admin") {
                $_SESSION["logado"] = true;
                header("Location: $url/admin");
            } elseif ($userLogin == "user") {
                $_SESSION["logado"] = true;
                header("Location: $url/");
            } else {
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
                header("Location: $url/register");
            }
        }
    }

    public function logout(): void
    {
        $url = URL_BASE;
        $_SESSION["logado"] = false;
        header("Location: $url/login");
    }

    public function error($data): void
    {
        require __DIR__ . "/../Views/Error-page/index.php";
    }
}