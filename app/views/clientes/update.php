<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Editar Cliente</h1>
    <?php
    // Verificar se o ID do cliente foi fornecido
    if (isset($_GET['id'])) {
        $clienteId = $_GET['id'];

        // Recuperar os dados do cliente com base no ID
        $cliente = $clienteController->getClienteById($clienteId);

        // Verificar se o cliente existe
        if ($cliente) {
    ?>
            <form method="post" action="../../../public/editar/editarCliente.php">
                <input type="hidden" name="cliente_id" value="<?php echo $cliente->id; ?>">

                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo $cliente->nome; ?>" required><br>

                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $cliente->email; ?>" required><br>

                <label for="senha">Senha:</label>
                <input type="password" name="senha" required><br>

                <input type="submit" value="Atualizar">
            </form>
    <?php
        } else {
            echo 'Cliente não encontrado.';
        }
    } else {
        echo 'ID do cliente não fornecido.';
    }
    ?>
</body>

</html>