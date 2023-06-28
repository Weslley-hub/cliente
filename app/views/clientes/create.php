<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="../styles/create.css">
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form method="post" action="../../../public/cadastrar/cadastrar.php">
        <input type="hidden" name="action" value="create">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>




