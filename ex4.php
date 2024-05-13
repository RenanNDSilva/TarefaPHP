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
            $num1 = (int) $_GET["num1"]; // recebendo o primeiro numero
            $num2 = (int) $_GET["num2"]; // recebendo o segundo numero
            $num3 = (int) $_GET["num3"]; // recebendo o terceiro numero

            $decrescente = [$num1 , $num2, $num3]; // armazenando os tres numero digitados em um array

            rsort($decrescente); // utilizando a funcao rsort para ordenar os tres numeros de forma decrescente
            
            // mostrando para o usuario os numeros digitados por ele de forma decrescente
            echo "Em ordem decrescente é "; 
            foreach ($decrescente as $numero) {
                echo "$numero ";
            }
           
        ?>
        
    </main>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
