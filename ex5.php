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
             $lado1 = (int) $_GET["lado1"]; // recebendo o primeiro lado de um triangulo
             $lado2 = (int) $_GET["lado2"]; // recebendo o segundo lado do triangulo
             $lado3 = (int) $_GET["lado3"]; // recebendo o terceiro lado do triangulo


            // verifica se os numeros digitados realmente formam um triangulo
            if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) { 
                if ($lado1 == $lado2 && $lado2 == $lado3) { // verifica se o triangulo é equilatero
                    echo "O triângulo é equilátero (todos os lados são iguais).";
                } 
                elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) { // verifica se o triangulo é isosceles
                    echo "O triângulo é isósceles (dois lados são iguais).";
                } 
                else { // se nenhuma das outras verificacoes deram negativo, se sim, o triangulo é escaleno
                    echo "O triângulo é escaleno (todos os lados são diferentes).";
                }
            } 
            
            else { 
                echo "Os valores informados não formam um triângulo válido.";
            }
           
        ?>
        
    </main>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
