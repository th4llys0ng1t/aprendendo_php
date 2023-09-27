<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $result;    
        if($_POST["calc"] == "soma"){
            $result = $_POST["num1"] + $_POST["num2"];
            echo "<p> Você escolheu a soma e o resultado foi: " . $result . "</p>";
        }else if($_POST["calc"] == "subtracao"){
            $result = $_POST["num1"] - $_POST["num2"];
            echo "<p> Você escolheu a subtração e o resultado foi: " . $result . "</p>";
        }else if($_POST["calc"] == "mult"){
            $result = $_POST["num1"] * $_POST["num2"];
            echo "<p> Você escolheu a multiplicação e o resultado foi: " . $result . "</p>";
        }else if($_POST["calc"] == "div"){
            $result = $_POST["num1"] / $_POST["num2"];
            echo "<p> Você escolheu a divisão e o resultado foi: " . $result . "</p>";
        }
        
    ?>
</body>
</html>