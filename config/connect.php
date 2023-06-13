<?php

define('HOST', 'bd');
define('DATABASENAME', 'pg');
define('USER', 'root');
define('PASSWORD', 'root');

class Connect {
   public $connection;

   function __construct() {
      $this->connectDatabase();
   }

   function connectDatabase() {
      try {
         $this->connection = new PDO('pgsql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
         echo 'Sucesso, conectado ao banco de dados';
      } catch (PDOException $e) {
         echo "Error".$e->getMessage();
         die();
      }
   }
}

$testConnection = new Connect();

// $db_name = 'pg';
// $db_host = 'bd';
// $db_user = 'root';
// $db_password = 'root';
 
//  try {

//     $pdo = new PDO("pgsql:host=$db_host;port=5432;dbname=$db_name", $db_user, $db_password);

//     echo "Conectado no banco de dados";

//  } catch (PDOException $e) {

//     echo "Falha ao conectar. <br/>";
//     die($e->getMessage());

//  }
