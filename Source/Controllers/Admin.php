<?php

namespace Source\Controllers;

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

    public function register(): void
    {
        require __DIR__ . "/../Views/Admin-register/index.php";
    }
}