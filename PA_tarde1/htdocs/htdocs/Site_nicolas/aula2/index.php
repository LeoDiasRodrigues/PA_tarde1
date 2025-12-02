<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro</title>
</head>
<body>
    <h2>Cadastro de usuario</h2>
    <form action="process.php" method="POST">
        <input type="email" placeholder="email..." name="email">
        <input type="password" placeholder="senha..." name="password">
        <input type="password" placeholder="confirmar senha.." name="confirm_password">
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>