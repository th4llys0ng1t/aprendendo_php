<?php 

    $msg = "";
    $result = "";
    $nota1 = "";
    $nota2 = "";
    $nota3 = "";
    $nota4 = "";
    $media = "";
    $botao = "";

    if(isset($_POST["calculo"])){
        $botao = $_POST["calculo"];

        if(isset($_POST["n1"])){
            $nota1 = $_POST["n1"];
        }

        if(isset($_POST["n2"])){
            $nota1 = $_POST["n2"];

        }
        if(isset($_POST["n3"])){
            $nota1 = $_POST["n3"];

        }
        if(isset($_POST["n4"])){
            $nota1 = $_POST["n4"];

        }

        if($_POST["tipo_media"] == "aritmetica"){
            $media = mediaAritmetica($nota1, $nota2, $nota3, $nota4);
        }

    }

    function mediaAritmetica($nota1, $nota2, $nota3, $nota4){

        $mediaArit = "";
        $mediaArit = ($nota1 + $nota2 + $nota3 + $nota4)/4;
        return $mediaArit;

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule sua média IFRN</title>
</head>
<body>
    
    <form action="Atividade_media.php" method="post">

        <h1>Calcule sua média IFRN</h1>

        <h3>Mensagens: <?php echo $msg ?></h3>

        <h4>
            <label for="tipo_media">Escolha o tipo de média 
            antes de calcular:</label>
        </h4>
        
        <p>
            <input type="radio" name="tipo_media" value="aritmetica" checked>Aritmética <br>
            <input type="radio" name="tipo_media" value="ponderada">Ponderada <br>
            <input type="radio" name="tipo_media" value="harmonica">Harmônica
        </p>

        <p>
            <label for="n1">Nota 1:</label> 
            <input type="number" name="n1">
        </p>

        <p>
            <label for="n2">Nota 2:</label> 
            <input type="number" name="n2">
        </p>

        <p>
            <label for="n3">Nota 3:</label>
            <input type="number" name="n3">
        </p>

        <p>
            <label for="n4">Nota 4:</label>
            <input type="number" name="n4">
        </p>

        <p><input type="submit" value="Calcule" name="calculo"></p>

        <h3>Resultado: <?php echo $result ?></h3>

    </form>
    
</body>
</html>