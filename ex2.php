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
            $num = (int) $_GET["num"]; // recebendo um numero

            if ($num % 10 == 0) // verificando se o resto da divisao desse numero por 10 é 0 
                echo "$num é divisível por 10.<br>"; // caso de positivo, o numero é divisivel por 10
            if ($num % 5 == 0) // verificando se o resto da divisao desse numero por 5 é 0
                echo "$num é divisível por 5.<br>"; // caso de positivo, o numero é divisivel por 5
            if ($num % 2 == 0) // verificando se o resto da divisao desse numero por 2 é 0
                echo "$num é divisível por 2.<br>"; // caso de positivo, o numero é divisivel por 2
            if(($num % 10 != 0) && ($num % 5 != 0) && ($num % 2 != 0)) // verificando se nenhuma das verificacoes anteriores seja verdadeira
                echo "O $num não é divisível por nenhum deles"; // mostrando o resultado caso nenhuma seja verdadeira
        ?>
        
    </main>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
