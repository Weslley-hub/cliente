<?php 

namespace App\Controllers;

use PDOException;
use App\Models\Cliente;

class ClienteController {
    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create() {
        $cliente = new Cliente($this->db);

        $cliente->nome = $_POST['nome'];
        $cliente->email = $_POST['email'];
        $cliente->senha = $_POST['senha'];

        try {
            if ($cliente->create()) {
                echo 'Cliente cadastrado com sucesso!';
            } else {
                echo 'Falha ao cadastrar o cliente.';
            }
        } catch (PDOException $e) {
            echo 'Erro ao cadastrar o cliente: ' . $e->getMessage();
        }
    }
}

echo '<br/> sucesso controllers';