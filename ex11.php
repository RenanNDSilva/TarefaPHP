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

            // para cada valor da tabuada, mostra para o usuario o numero digitado multiplicado pelo valor da tabuada
            for($i=1;$i<=10;$i++)
                echo "<br>$num X $i = ".$num*$i;
           
        ?>
        
    </main>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
