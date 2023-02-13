<?php

namespace Source\Models;

use Source\ConnectDB;

use PDOException;

class User extends ConnectDB
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($userLogin, $userPassword)
    {
        $sqlSelect = $this->connection->query("SELECT email, senha, tipo FROM usuarios
                    WHERE email = '$userLogin' AND senha = '$userPassword'");

        if ($sqlSelect->rowCount() != 0) {
            return $sqlSelect->fetch()["tipo"];
        } else {
            return false;
        }
    }

    public function register($userName, $userEmail, $userPassword, $userRepPassword): bool
    {
        try {
            if ($userPassword == $userRepPassword){
                $this->connection->query("INSERT INTO usuarios (nome, email, senha, repetir_senha, tipo)
                VALUES ('$userName', '$userEmail', '$userPassword', '$userRepPassword', DEFAULT);");
                return true;
            } else{
                return false;
            }
        }catch (PDOException $e){
            echo 'Error!' . $e->getMessage();
            return false;
        }
    }
}
