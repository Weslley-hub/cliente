<?php

require_once __DIR__ . '/vendor/autoload.php';

require './config/connect.php';
require './app/controllers/ClienteController.php';

use App\Controllers\ClienteController;

$database = new Connect();

$db = $database->connection;

$clienteController = new ClienteController($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $clienteController->create();
}
