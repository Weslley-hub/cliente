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
         
      } catch (PDOException $e) {
         echo "Error".$e->getMessage();
         die();
      }
   }
}

$testConnection = new Connect();

?>