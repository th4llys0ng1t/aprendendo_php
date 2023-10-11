<?php 
    $codigo = $_GET["codigo"];

    include "conexao.php";

    $sql = "DELETE FROM projeto WHERE 
    codigo = $codigo";

    $resultado = $conn -> query($sql);

    if($resultado){
        $conn -> close();
        header("Location: projetos.php");
        die();
    }
?>