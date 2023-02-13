<?php

namespace Source\Controllers;

use Source\Models\User;

class Users
{
    public function home(): void
    {
        require __DIR__ . "/../Views/User-home/index.php";
    }
    public function schedules(): void
    {
        require __DIR__ . "/../Views/User-time/index.php";
    }

    public function schedule(): void
    {
        require __DIR__ . "/../Views/User-schedule/index.php";
    }

    public function profile(): void
    {
        require __DIR__ . "/../Views/User-profile/index.php";
    }
}