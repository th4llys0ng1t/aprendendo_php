<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">Teste</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cursos.php">Cursos</a>
              </li>

              <?php 
                if(session_id() == ''){
                  session_start();
                }
                
                if(isset($_SESSION["usuario"])){
              ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-user"></i> Perfil
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                      <a class="dropdown-item" href="perfil_dados.html">Meus Dados</a>
                      <a class="dropdown-item" href="perfil_inscricoes.html">Inscrições</a>
                      <a class="dropdown-item" href="perfil_cursos.html">Cursos</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sessao/desconectar.php"><i class="fa fa-sign-out"></i> Logout</a>
                  </li>
                  
              <?php 
                }else{
              ?>
                  <li class="nav-item">
                    <a class="nav-link" href="cadastro.php"><i class="fa fa-floppy-o"></i> Cadastro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i> Autenticação</a>
                  </li>
              <?php 
                }
              ?>

            </ul>
          </div>
        </div>
</nav>