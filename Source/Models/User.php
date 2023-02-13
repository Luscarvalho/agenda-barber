<?php

namespace Source\Models;

use Source\ConnectDB;

class User extends ConnectDB
{
    protected $table = "usuarios";

    public function __construct()
    {
        parent::__construct();
        $this->tableUsuarios = "usuarios";
    }


    public function addUser($id, $nome, $email, $senha, $repetir_Senha, $tipo): bool
    {
        try {
            $sqlInsertPessoa = $this->connection->query("INSERT INTO $this->tablePessoa (id, nome, email, senha, repetir_Senha, tipo) VALUES ('João da Silva', 'joao.silva@exemplo.com', 'senha123', DEFAULT)");
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
}
