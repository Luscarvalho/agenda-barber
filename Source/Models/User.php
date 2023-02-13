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
            if ($userPassword == $userRepPassword) {
                $this->connection->query("INSERT INTO usuarios (nome, email, senha, repetir_senha, tipo)
                VALUES ('$userName', '$userEmail', '$userPassword', '$userRepPassword', DEFAULT);");
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo 'Error!' . $e->getMessage();
            return false;
        }
    }

    public function registerAdmin($userName, $userEmail, $userPassword, $userRepPassword): bool
    {
        try {
            if ($userPassword == $userRepPassword) {
                $this->connection->query("INSERT INTO usuarios (nome, email, senha, repetir_senha, tipo)
                VALUES ('$userName', '$userEmail', '$userPassword', '$userRepPassword', 'admin');");
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo 'Error!' . $e->getMessage();
            return false;
        }
    }

    public function listBarber(): false|array
    {
        $sqlSelect = $this->connection->query("SELECT nome FROM usuarios WHERE tipo = 'admin';");
        if ($sqlSelect->rowCount() != 0) {
            return $sqlSelect->fetchAll();
        } else {
            return false;
        }
    }

    public function listCorte(): false|array
    {
        $sqlSelect = $this->connection->query("SELECT nome, valor FROM tipos_de_corte;");
        if ($sqlSelect->rowCount() != 0) {
            return $sqlSelect->fetchAll();
        } else {
            return false;
        }
    }

    public function listTimer(): false|array
    {
        $sqlSelect = $this->connection->query("SELECT nome FROM tipos_de_corte;");
        if ($sqlSelect->rowCount() != 0) {
            return $sqlSelect->fetchAll();
        } else {
            return false;
        }
    }

    public function fillProfile(): false|array
    {
        $sqlSelect = $this->connection->query("SELECT nome, email, senha, repetir_senha FROM usuarios where nome='lusca';");
        if ($sqlSelect->rowCount() != 0) {
            return $sqlSelect->fetchAll();
        } else {
            return false;
        }
    }
}
