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

            $palavra =$_GET["palavra"];
            // Converte a palavra em um array de caracteres
            $palavraArray = str_split($palavra);

            // Loop para imprimir a palavra repetida com mais palavras a cada linha
            for ($i = 1; $i <= 5; $i++) {
                // Inicializa uma string vazia para armazenar a saída
                $saida = "";
                    
            // Loop para construir a string de saída
            for ($j = 0; $j < $i; $j++) {
                // Adiciona a palavra convertida em maiúsculas à string de saída
                $saida .= strtoupper($palavra) . " ";
            }
                    
                // Imprime a string de saída, removendo os espaços em branco no final
                echo trim($saida) . "<br>";
            }
        ?>
        
    </main>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
