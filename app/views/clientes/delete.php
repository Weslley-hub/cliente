<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/delete.css">
    <title>Excluir Cliente</title>
</head>
<body>
<h1>Excluir Cliente</h1>
    <form method="post" action="../../../public/deletar/deletarCliente.php">
        <label for="cliente_id">ID do Cliente:</label>
        <input type="text" name="cliente_id" required><br>

        <input type="submit" value="Excluir">
    </form>
</body>
</html>



