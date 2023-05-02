<?php 

    $sexo = "";
    $peso = "";
    $altura = "";
    $imc = "";
    $resultado = "";
    $botao = "";
    $erro = "";

    if(isset($_POST["calculo"])){
        $botao = $_POST["calculo"];

        if(isset($_POST["altura"])){
            $altura = $_POST["altura"];
        }

        if(isset($_POST["peso"])){
            $peso = $_POST["peso"];
        }

        if(isset($_POST["sx"])){
            $sexo = $_POST["sx"];         
        }   
        
        if(is_numeric($altura) && is_numeric($peso) && $sexo == "Masculino" ||
        $sexo == "masculino" || $sexo == "Feminino" || $sexo == "feminino"){

            $imc = round($peso/($altura * $altura), 2);

            if($sexo == "masculino" || "Masculino"){
                if($imc < 20.7){
                    $resultado = "Seu IMC é de ". $imc. ". Você está abaixo do peso.";
                }else if($imc <= 26.4){
                    $resultado = "Seu IMC é de ". $imc. ". Você está no peso ideal.";
                }else if($imc <= 27.8){
                    $resultado = "Seu IMC é de ". $imc. ". Você está marginalmente acima do peso. ";
                }else if($imc <= 31.1){
                    $resultado = "Seu IMC é de ". $imc. ". Você está acima do peso ideal.";
                }else{
                    $resultado = "Seu IMC é de ". $imc. ". Você está obeso.";
                }
            }
            else if($sexo == "feminino" || "Feminino"){
                if($imc < 19.1){
                    $resultado = "Seu IMC é de ". $imc. ". Você está abaixo do peso.";
                }else if($imc <= 25.8){
                    $resultado = "Seu IMC é de ". $imc. ". Você está no peso ideal.";
                }else if($imc <= 27.3){
                    $resultado = "Seu IMC é de ". $imc. ". Você está marginalmente acima do peso. ";
                }else if($imc <= 32.3){
                    $resultado = "Seu IMC é de ". $imc. ". Você está acima do peso ideal.";
                }else{
                    $resultado = "Seu IMC é de ". $imc. ". Você está obeso.";
                }
            }
        }else{
            $erro = "Algo deu errado. Informe as informações adequadamente!!"
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC com infromações do sexo</title>
</head>
<body>
    <form action="ListaExerc1_4.php" method="post">

        <h1>Calcule seu IMC</h1>

        <p>Mensagem: <?php echo $erro?></p>

        <p><label for="sx">Sexo:  <input type="text" name="sx"></label></p>
        <p><label for="peso">Peso:  <input type="text" name="peso"></label></p>
        <p><label for="altura">Altura:  <input type="text" name="altura"></label></p>
        
        <p><input type="submit" value="Calcular" name="calculo"></p>

        <p>Resultado: <?php echo $resultado ?></p>

    </form> 
</body>
</html>