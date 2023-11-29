<h1>Página de Perfil</h1>
<p>Olá 
    <?php 
        session_start();
        echo $_SESSION["usuario"];
    ?>
</p>