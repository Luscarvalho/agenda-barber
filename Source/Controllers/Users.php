<?php

namespace Source\Controllers;

use Source\Models\User;

class Users
{
    public function home(): void
    {
        require __DIR__ . "/../Views/User-home/index.php";
    }
    public function schedules($data): void
    {
        $url = URL_BASE;
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $listtime = (new User)->listTimer();
            $listbarber = (new User)->listBarber();
            $listcorte = (new User)->listCorte();
            require __DIR__ . "/../Views/User-time/index.php";
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {

        }
    }

    public function mySchedule(): void
    {
        require __DIR__ . "/../Views/User-schedule/index.php";
    }

    public function profile(array $data): void
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $fillprofile = (new User)->fillProfile();
            require __DIR__ . "/../Views/User-profile/index.php";
        }
    }
}