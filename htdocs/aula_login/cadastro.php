<?php

include("my_conecction.php");

if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "INSERT INTO login (name ,email, password) VALUES ('$name','$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <form method="POST">
        <div class="fundo">
            <div class="container flex tudo-centro">
                <div class="quadrado-inicial flex space-between">


                    <div class="quadrado-entrar flex tudo-centro coluna">
                        <h1 class="flex tudo-centro tamanho-medio">Bem-vindo de volta</h1>
                        <h1 class="flex tudo-centro tamanho-pequeno">Acesse sua conta agora</h1>
                        <br>
                        <button class="flex tamanho-botao-entrar cor-botao"><a href="login.php">Entrar</a></button>
                    </div>

                    <div class="flex quadrado-meio tudo-centro coluna">
                        <h1 class="flex tamanho-medio">Crie sua conta</h1>
                        <br>

                        <input type="text" placeholder="Nome" class="input fonte" name="name">
                        <br>

                        <input type="email" placeholder="Email" class="input fonte" name="email">
                        <br>

                        <input type="password" placeholder="Senha" class="input fonte" name="password">

                        <br>
                        <input type="password" placeholder=" Confirme sua senha" class="input fonte" name="confirm_password">

                        <br>
                        <button type="submit" class="flex tamanho-cadastrar cor-cadastrar" onclick="cadastrar()">Cadastrar</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>