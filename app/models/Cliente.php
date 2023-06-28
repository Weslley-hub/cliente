<?php

namespace App\Models;

use PDO;

class Cliente
{
    private $connection;
    private $table = 'clientes';

    public $id;
    public $nome;
    public $email;
    public $senha;

    public function __construct($db)
    {
        $this->connection = $db;
    }

    public function create()
    {
        $query = 'INSERT INTO ' . $this->table . ' (nome, email, senha) VALUES (:nome, :email, :senha)';

        $stmt = $this->connection->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        // $stmt->bindParam(':senha', $this->senha);

        $senhaHash = password_hash($this->senha, PASSWORD_DEFAULT);
        $stmt->bindParam(':senha', $senhaHash);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function emailExists()
    {
        $query = 'SELECT COUNT(*) as count FROM ' . $this->table . ' WHERE email = :email';

        $stmt = $this->connection->prepare($query);

        $this->email = htmlspecialchars(strip_tags($this->email));

        $stmt->bindParam(':email', $this->email);

        $stmt->execute();

        $row = $stmt->fetch(\PDO::FETCH_ASSOC);

        $count = $row['count'];

        return $count > 0;
    }

    public function delete() 
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';

        $stmt = $this->connection->prepare($query);

        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }

    return false;
    }

    // public function update() {
    // $query = 'UPDATE ' . $this->table . ' SET nome = :nome, email = :email, senha = :senha WHERE id = :id';

    // $stmt = $this->connection->prepare($query);

    // $stmt->bindParam(':id', $this->id);
    // $stmt->bindParam(':nome', $this->nome);
    // $stmt->bindParam(':email', $this->email);
    // $stmt->bindParam(':senha', $this->senha);

    // if ($stmt->execute()) {
    //     return true;
    // }

    // return false;
    //  }

    
    // public function list()
    // {
    //     $query = 'SELECT * FROM' . $this->table;

    //     $stmt = $this->connection->prepare($query);

    //     $stmt->execute();

    //     $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //     return $clientes;
    // }




}
