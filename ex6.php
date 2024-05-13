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
            $mes = (int) $_GET["mes"]; // recebendo um numero que representa o mes


            // armazenando os meses possiveis em um array
            $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

            if(($mes >= 1) && ($mes<=12)) // verifica se o numero digitado é realmente um mes
                echo "O mês $mes é ".$meses[$mes-1]; // ve qual é o mes que representa valor digitado
            else
                echo "O mês $mes não existe."; // mostra caso o numero digitado nao represente um mes

        ?>
        
    </main>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
