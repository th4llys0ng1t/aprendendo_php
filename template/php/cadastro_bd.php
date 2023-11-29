<?php 

    //Recebe os dados do usuário
    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    //Criptografa a sennha
    $senha_cripto = md5($senha);

    //Inclui a página de conexão com o banco de dados
    include "../conexao/conexao.php";

    //Conexão com o banco de dados
    $conn = conectar();

    //String de inserção dos dados no banco
    $sql = "INSERT INTO usuario (nome, usuario, senha) 
    VALUES ('$nome', '$usuario', '$senha_cripto');";

    //Execução do insert
    $resultado = $conn -> query($sql);

    //Verificação de acerto
    if($resultado){
        //Desconexão do banco
        desconectar($conn);
        //Redirecionamento para a página "login"
        header("Location: ../login.php");
        die();
    }else{
        //Deu errado
        desconectar($conn);
        echo "<p>Deu errado man, nem tenta</p>";
    }

?>