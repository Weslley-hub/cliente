<?php
    require_once __DIR__ . '../../../vendor/autoload.php';
    require '../../config/connect.php';
    
    use App\Controllers\ClienteController;
    
    $database = new Connect();
    $db = $database->connection;
    $clienteController = new ClienteController($db);

if (isset($_POST['cliente_id'])) {
    $clienteId = $_POST['cliente_id'];

    $clienteController->delete($clienteId);
}
?>
