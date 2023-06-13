<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form method="post" action="/index.php">
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
