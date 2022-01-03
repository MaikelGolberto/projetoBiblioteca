<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylea.css" rel="stylesheet">
    <title>Bibliotecas</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SAB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Início</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Selecione
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="?page=biblioteca-listar">Biblioteca</a></li>
                  <li><a class="dropdown-item" href="?page=atendente-listar">Atendente</a></li>
                  <li><a class="dropdown-item" href="?page=usuario-listar">Alunos</a></li>
                  <li><a class="dropdown-item" href="?page=categoria-listar">Categoria</a></li>
                  <li><a class="dropdown-item" href="?page=livro-listar">Livro</a></li>
                  <li><a class="dropdown-item" href="?page=reserva-listar">Reserva</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mt-5">
          <div class="row">
              <div class="col-lg-12">
                <?php
                    include("config.php");
                    switch (@$_REQUEST["page"]){
                        case 'biblioteca-listar':
                            include("pages/biblioteca-listar.php");
                            break;
                        case 'biblioteca-cadastrar':
                            include("pages/biblioteca-cadastrar.php");
                            break;
                        case 'biblioteca-editar':
                            include("pages/biblioteca-editar.php");
                            break;
                        case 'biblioteca-salvar':
                            include("pages/biblioteca-salvar.php");
                            break;
                        case 'atendente-listar':
                            include("pages/atendente-listar.php");
                            break;
                        case 'atendente-cadastrar':
                            include("pages/atendente-cadastrar.php");
                            break;
                        case 'atendente-editar':
                            include("pages/atendente-editar.php");
                            break;
                        case 'atendente-salvar':
                            include("pages/atendente-salvar.php");
                            break;
                        case 'usuario-listar':
                            include("pages/usuario-listar.php");
                            break;
                        case 'usuario-cadastrar':
                            include("pages/usuario-cadastrar.php");
                            break;
                        case 'usuario-editar':
                            include("pages/usuario-editar.php");
                            break;
                        case 'usuario-salvar':
                            include("pages/usuario-salvar.php");
                            break;
                        case 'categoria-listar':
                            include("pages/categoria-listar.php");
                            break;
                        case 'categoria-cadastrar':
                            include("pages/categoria-cadastrar.php");
                            break;
                        case 'categoria-editar':
                            include("pages/categoria-editar.php");
                            break;
                        case 'categoria-salvar':
                            include("pages/categoria-salvar.php");
                            break;
                        case 'livro-listar':
                            include("pages/livro-listar.php");
                            break;
                        case 'livro-cadastrar':
                            include("pages/livro-cadastrar.php");
                            break;
                        case 'livro-editar':
                            include("pages/livro-editar.php");
                            break;
                        case 'livro-salvar':
                            include("pages/livro-salvar.php");
                            break;
                        case 'reserva-listar':
                            include("pages/reserva-listar.php");
                            break;
                        case 'reserva-cadastrar':
                            include("pages/reserva-cadastrar.php");
                            break;
                        case 'reserva-editar':
                            include("pages/reserva-editar.php");
                            break;
                        case 'reserva-salvar':
                            include("pages/reserva-salvar.php");
                            break;
                        default:
                            include("pages/main.php");
                          break;
                    }
                ?>
              </div>
          </div>
      </div>
      <div class="foot">
        <footer><p>&copy; 2021 Todos os Direitos Reservados :: Desenvolvido por: Maikel Golberto Gontijo</p></footer>
      </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>