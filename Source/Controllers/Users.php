<?php

namespace Source\Controllers;

use Source\Models\User;

class Users
{
    public function __construct()
    {
        $url = URL_BASE;
        if (!$_SESSION["logado"]){
            header("Location: $url/login");
        }
    }

    public function home(): void
    {
        require __DIR__ . "/../Views/User-home/index.php";
    }

    public function schedules(): void
    {
        $url = URL_BASE;

        $listtime = (new User)->listTimer();
        $listbarber = (new User)->listBarber();
        $listcorte = (new User)->listCorte();
        require __DIR__ . "/../Views/User-time/index.php";
    }

    public function mySchedule(): void
    {
        require __DIR__ . "/../Views/User-schedule/index.php";
    }

    public function profile(): void
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $fillprofile = (new User)->fillProfile();
            require __DIR__ . "/../Views/User-profile/index.php";
        }
    }
}