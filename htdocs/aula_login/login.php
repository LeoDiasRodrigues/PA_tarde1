<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<form action="processo.php" method="POST">
    <div class="fundo">
        <div class="container flex tudo-centro">
            <div class="quadrado-inicial flex space-between">


                <div class="quadrado-entrar flex tudo-centro coluna"> 
                    <h1 class="flex tudo-centro tamanho-medio">Novo por aqui?</h1>
                    <h1 class="flex tudo-centro tamanho-pequeno">Crie sua conta agora:</h1>
                    <br>
                    <div class="flex quadrado-meio tudo-centro coluna">

    <h1 class="flex tamanho-medio">Crie sua conta</h1>

    <a href="cadastro.php" class="tamanho-botao-criar flex">Criar</a>

</div>
                </div>

                <div class="flex quadrado-meio tudo-centro coluna">
                    <h1 class="flex tamanho-medio">Faça seu login:</h1>
                    <br>
                    
                    <input type="email" placeholder="Email" class="input fonte" name="email">
                    <br>
                    
                    <input type="password" placeholder="Senha" class="input fonte" name="password">

                    <br>
                    <button class="flex tamanho-cadastrar cor-cadastrar">Logar</button>



                </div>



                    
            </div>
        </div>
    </div>
    </form>
</body>
</html>