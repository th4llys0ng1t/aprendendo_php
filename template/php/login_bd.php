<?php 

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    //Criptografar senha
    $senha_cripto = md5($senha);

    //Conectar banco de dados
    include"../conexao/conexao.php";
    $conn = conectar();

    $sql = "SELECT * FROM usuario 
    WHERE usuario= '$usuario' and senha = '$senha_cripto';";

    //Executar a consulta
    $resultado = $conn->query($sql);

    //Verificar se retornou algo
    if($resultado->num_rows > 0){
        //Retornou e pode autenticar
        //Retornar o nome do usuário 
        while($row = $resultado->fetch_assoc){
            session_start();
            $_SESSION["usuario"] = $row["nome"];
        }
        desconectar($conn);
        header("Location: ../perfil.php");
        die();
    }else{
        //Não retornou nada
        desconectar($conn);
        header("Location: ../login.php");
        die();
    }

?>