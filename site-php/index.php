<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container flex">

    <div class="imagem">
        <img src="https://img.freepik.com/vetores-gratis/abstarct-elegante-e-colorido-fundo-geometrico_1189-297.jpg?semt=ais_hybrid&w=740&q=80" height="105%" alt="Imagem de Cadastro">
    </div>

    <div class="formulario flex">
        <div class="flex tudo-centro quadrado-meio">
            <h1>Cadastro</h1>
            
            <form action="processa.php" method="POST" class="flex botao2">
                
                <input type="text" name="nome" placeholder="Nome completo" class="botao-estilizado" required>
                <br><br>
                <input type="email" name="email" placeholder="E-mail" class="botao-estilizado" required>
                <br><br>
                <input type="password" name="senha" placeholder="Senha" class="botao-estilizado" required>
                <br><br>
                <input type="text" name="cpf" placeholder="CPF" class="botao-estilizado" required>
                <br><br>
                <input type="date" name="data_nasc" class="botao-estilizado" required>
                <br><br>
                
                <button type="submit" class="botao-estilizado">Cadastrar</button>
            </form>
        </div>
    </div>
</div>      

</body>
</html>