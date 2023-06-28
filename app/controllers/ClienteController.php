<?php

namespace App\Controllers;

use PDOException;
use App\Models\Cliente;

class ClienteController
{
    protected $db;
    protected $model;

    public function __construct($db)
    {
        $this->model = new Cliente($db);
        $this->db = $db;
    }

    public function create()
    {
        $cliente = new Cliente($this->db);

        $cliente->nome = $_POST['nome'];
        $cliente->email = $_POST['email'];
        $cliente->senha = $_POST['senha'];

        if ($cliente->emailExists()) {
            echo 'Este email já está cadastrado.';
            return;
        }

        try {
            if ($cliente->create()) {
                echo 'Cliente cadastrado com sucesso';
            } else {
                echo 'Falha ao cadastrar o cliente.';
            }
        } catch (PDOException $e) {
            echo 'Erro ao cadastrar o cliente: ' . $e->getMessage();
        }
    }

    public function delete($id)
    {
        $cliente = new Cliente($this->db);
        $cliente->id = $id;

        if ($cliente->delete()) {
            echo 'Cliente excluído com sucesso.';
        } else {
            echo 'Falha ao excluir o cliente.';
        }
    }

    // public function update($id, $nome, $email, $senha)
    // {
    //     $cliente = new Cliente($this->db);
    //     $cliente->id = $id;
    //     $cliente->nome = $nome;
    //     $cliente->email = $email;
    //     $cliente->senha = $senha;

    //     if ($cliente->update()) {
    //         echo 'Dados do cliente atualizados com sucesso.';
    //     } else {
    //         echo 'Falha ao atualizar os dados do cliente.';
    //     }
    // }


    // public function listClientes()
    // {
    //     $clientes = $this->model->list();

    //     return $clientes;
    // }
}
