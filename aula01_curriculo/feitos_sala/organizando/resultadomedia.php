<html>
<body>

    <?php 
        echo $_POST["nome"]. "</h1> <br>";
        echo $_POST["nota1"]. "</h2> <br>";
        echo $_POST["nota2"]. "</h2> <br>";

        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];

        $media = ($nota1 + $nota2)/2;

        echo "Resultado: ". $media;
    ?>
    
</body>
</html>