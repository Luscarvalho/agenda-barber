<?php

namespace Source\Models;

use Source\ConnectDB;

class Login extends ConnectDB
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($userLogin, $userPassword): bool
    {
        $sqlSelect = $this->connection->query("SELECT email, senha FROM usuarios WHERE email = '$userLogin' AND senha = '$userPassword'");

        if ($sqlSelect->rowCount() != 0) {
            return true;
        } else {
            return false;
        }
    }
}