<?php

namespace Source\Controllers;

use Source\Models\User;

class Admin
{
    public function home(): void
    {
        require __DIR__ . "/../Views/Admin-home/index.php";
    }

    public function schedules(): void
    {
        require __DIR__ . "/../Views/Admin-time/index.php";
    }

    public function schedule(): void
    {
        require __DIR__ . "/../Views/Admin-schedule/index.php";
    }

    public function profile(): void
    {
        require __DIR__ . "/../Views/Admin-profile/index.php";
    }

    public function register($data): void
    {
        $url = URL_BASE;
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            require __DIR__ . "/../Views/Admin-register/index.php";
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userRegister = (new User)->registerAdmin($data["nome"], $data["email"], $data["password"], $data["rep-password"]);
            if ($userRegister) {
                header("Location: $url/admin");
            } else {
                $_SESSION['msg'] = "As senhas não correspondem!";
                $_SESSION['dados'] = ["nome"=>$data["nome"], "email" => $data["email"]];
                header("Location: $url/admin/register");
            }
        }
    }
}