<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos cadastrados</title>
</head>
<body>
    <h1>Projetos</h1>
    <p><a href="projeto_cadastrar.php">CADASTRAR</a></p>
    <p>Cursos cadastrados:</p>

    <?php 
        include 'conexao.php';
        echo "<br>";

        $sql = 'SELECT * FROM projeto';
        $resultado = $conn -> query($sql);

        if($resultado -> num_rows>0){
            echo "Tem algum projeto.";
        }else{
            echo "Não tem nenhum projeto.";
        }
        
        $conn -> close();
    ?>
</body>
</html>