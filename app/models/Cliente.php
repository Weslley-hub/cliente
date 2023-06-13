<?php 

namespace App\Models;

class Cliente {
    private $conn;
    private $table = 'clientes';

    public $id;
    public $nome;
    public $email;
    public $senha;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = 'INSERT INTO ' . $this->table . ' (nome, email, senha) VALUES (:nome, :email, :senha)';

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->senha = htmlspecialchars(strip_tags($this->senha));

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>