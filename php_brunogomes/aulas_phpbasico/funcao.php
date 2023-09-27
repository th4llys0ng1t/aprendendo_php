<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
</head>
<body>
    <?php 

        //não retorna nada
        function impressao(){
            echo "<p>IFRN</p>";
        }

        impressao();

        //retorna alguma coisa
        function nome(){
            return "<h1>Canguaretama</h1>";
        }

        echo nome();

        //Parâmetros
        function instituto($nome){
            echo $nome;
        }

        instituto("Zezinho");

        function soma($valor1, $valor2){
            return $valor1 + $valor2;
        }

        echo "<p>" . soma(5, 6) . "</p>";
    ?>
</body>
</html>