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
        <h1>Resultado da Soma</h1>
    </header>
    <main>
        <?php
            $num1 =(int) $_GET["num1"]; 
            $num2 =(int) $_GET["num2"]; // criando as variavels
            $soma = $num1 + $num2; // realizando a soma de num1 com num2
            echo "<p>A Soma dos numero é ".$soma; // mostrando para o a soma dos numeros digitados
            if ($soma > 20) // analisando se o resultado da soma é maior que 20
                echo "<br>Somando mais 8 é ".$soma+8; // caso seja positivo, mostra para o usuario o resultado anterior + 8

            if($soma<=20) 
                echo "<br>Subtraindo mais 5 é ".$soma-5; // caso nao seja maior que 20, mostra para o usuario o resultado anterior - 5
        ?>
        
    </main>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
