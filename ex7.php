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
        <h1>Recibo</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"]; // recebendo o nome do usuario
            $livro = $_GET["livro"]; // recebendo o nome do livro emprestado 
            $usuario = $_GET["usuario"]; // recebendo o tipo do usuario que esta emprestando 


            // verificando o tipo do usuario e mostrando em quantos dias ele deve devolver o livro
            if($usuario == "aluno") 
                echo "Aluno: $nome<br>Livro: $livro<br>Devolver o livro daqui <strong>3 dias</strong>";
            else 
                echo "Professor: $nome<br>Livro: $livro<br>Devolver o livro daqui <strong>10 dias</strong>";
                
           
        ?>
        
    </main>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
