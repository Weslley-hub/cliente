<?php 
    require_once __DIR__ . '../../../vendor/autoload.php';

    require '../../config/connect.php';
    require '../../app/controllers/ClienteController.php';
    
    use App\Controllers\ClienteController;
    
    $database = new Connect();
    
    $db = $database->connection;
    
    $clienteController = new ClienteController($db);

    $clientes = $clienteController->listClientes();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Clientes</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Listagem de Clientes</h1>

    <?php if (!empty($clientes)): ?>
        <table>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?php echo $cliente['nome']; ?></td>
                    <td><?php echo $cliente['email']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Não existem clientes cadastrados.</p>
    <?php endif; ?>

    <!-- Restante do código HTML -->
</body>
</html>