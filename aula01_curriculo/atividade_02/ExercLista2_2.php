<?php

    $calculo = 0;
    $result = 0;
    $n = 0;
    $p = 0;
    $tipoCalc = "";
    $botao = "";


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

        function arranjo($n, $p){

            $manipN = 0;
            $totalN = 0;
            $manipN = $n;

            $manipP = 0;
            $totalP = 0;
            $manipP = $p;

            $arranjo = 0;

            while($manipN > 1){
                $totalN = $manipN;
                $manipN - 1;
                $totalN = $totalN * $manipN;
            }

            while($manipP > 1){
                $totalP = $manipP;
                $manipP - 1;
                $totalP = $totalP * $manipP;
            }

            $arranjo = $totalN/$totalP;

            return $arranjo;

        }

        if($tipoCalc == "arranjo"){
            $calculo = arranjo($n, $p);
            $result = $calculo;
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

        <h3>Mensagens: </h3>

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