<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            
            $idade = (int) $_GET["idade"]; // recebendo a idade do usuario
            $nome =$_GET["nome"]; // recebendo o nome do usuario
            $sexo =$_GET["sexo"]; // recebendo o sexo do usuario

            if(($sexo == "f") && ($idade < 25) ) // verificando se o sexo do usuario seja feminino e a idade seja menor que 25
                echo "A $nome de $idade anos foi <strong>ACEITA</strong>."; // caso positivo, mostra que o usuario foi aceito
            else 
                echo "$nome de $idade anos <strong> NÃO FOI ACEITO</strong>."; // caso a antiga verificacao seja negativa, mostra que o usuario nao foi aceito
        ?>
        
    </main>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
