<?php

    $calculo = 0;
    $result = 0;
    $diferenca = 0;
    $n = 0;
    $p = 0;
    $resultN = 1;
    $resultP = 1;
    $resultD = 1;
    $tipoCalc = "";
    $botao = "";
    $msg = "";

    if(isset($_POST["calcule"])){
        $botao = $_POST["calcule"];

        if(isset($_POST["n"])){
            $n = $_POST["n"];
        }
        if(isset($_POST["p"])){
            $p = $_POST["p"];
        }
        if(isset($_POST["tipo_calculo"])){
            $tipoCalc = $_POST["tipo_calculo"];
        }

        if($n != null && $p != null){
            $diferenca = $n-$p;
        }else{
            $msg = "Você não digitou os valores corretamente.";
        }

        while($diferenca > 1){
            $resultD *= $diferenca;
            $diferenca--;
        }

        while($n > 1){
            $resultN *= $n;
            $n--;
        }

        while($p > 1){
            $resultP *= $p;
            $p--;
        }

        function arranjo($resultN, $resultD){
            $valA = 0;
            $valA = $resultN/$resultD;
            return $valA;
        }
        function combinacao($resultN, $resultP, $resultD){
            $valC = 0;
            $valC = $resultN/($resultP * $resultD);
            return $valC;
        }

        if($tipoCalc == "arranjo"){
            $calculo = arranjo($resultN, $resultD);
            $result = $calculo;
        }else if($tipoCalc == "combinacao"){
            $calculo = combinacao($resultN, $resultP, $resultD);
            $result = $calculo;
        }else if($tipoCalc == null){
            $msg = "Selecione algum tipo de calculo.";
        }

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arranjo, combinação e fatorial</title>
</head>
<body>

    <form action="ExercLista2_2.php" method="post">

        <h1>Calcule seu arranjo ou combinação.</h1>

        <h3>Mensagens: <?php echo $msg ?></h3>

        <h4>
            <label for="tipo_calculo">Escolha o tipo de calculo
            que você deseja:</label>
        </h4>

        <p>
            <input type="radio" name="tipo_calculo" value="arranjo">Arranjo <br>
            <input type="radio" name="tipo_calculo" value="combinacao">Combinação
        </p>

        <p>
            <label for="n">n: </label>
            <input type="number" name="n">
        </p>

        <p>
            <label for="n">p: </label>
            <input type="number" name="p">
        </p>

        <p>
            <input type="submit" value="Calcular" name="calcule">
        </p>

        <h3>Resultado: <?php echo $result ?></h3>

    </form> 

</body>
</html>