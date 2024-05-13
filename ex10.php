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

            // Inicializa as variáveis de soma e contagem
            $somaPositivos = 0;
            $totalNegativos = 0;

            // Loop para ler os valores enviados por GET e calcular a soma dos positivos e o total de negativos
            for ($i = 1; $i <= 20; $i++) {
                // Atribui os valores dos parâmetros GET às variáveis $num1, $num2, ..., $num20
                ${"num$i"} = isset($_GET["num$i"]) ? (int)$_GET["num$i"] : 0;

                // Soma dos números positivos
                if (${"num$i"} > 0) {
                    $somaPositivos += ${"num$i"};
                }
                // Contagem dos números negativos
                elseif (${"num$i"} < 0) {
                    $totalNegativos++;
                }
            }

            // Imprime a soma dos números positivos e o total de números negativos
            echo "<p>A soma dos números positivos é: $somaPositivos</p>";
            echo "<p>O total de números negativos é: $totalNegativos</p>";
        ?>
        
    </main>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
