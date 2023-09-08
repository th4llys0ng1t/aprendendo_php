<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width", initial-scale=1.0">
    <title>Estruturas</title>
</head>
<body>
    <?php 
        $numero=10;
        if($numero >= 0){
            echo "<p>O número $numero é positivo</p>";
        }else{
            echo "<p>O número $numero é negativo</p>";
        }

        if($numero>0){
            echo "<p>O número $numero é positivo</p>";
        }else{
            if($numero==0){
                echo "<p>O número $numero é zero</p>";
            }else{
                echo "<p>O número $numero é negativo</p>";
            }
        }

        if($numero>0){

        }else if($numero==0){
            echo "<p>O número $numero é zero</p>";
        }else{
            echo "<p>O número $numero é negativo</p>";
        }

        for($i=1; $i<=10; $i++){
            echo "<p>$i</p>";
        }

        $j = 1;
        while($j<=10){
            echo "<p>$j</p>";
            $j++;
        }
        
    ?>
</body>
</html>