<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/stylea.css" rel="stylesheet">
    </head>
    <body>
        <h1>Bem Vindo ao Sistema de Administração de bibliotecas - SAB</h1>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card" style="width: 18rem;">
                        <img src="images/biblioteca.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Bibliotecas</h5>
                            <p class="card-text">Veja as bibliotecas cadastradas, edite, exclua ou adicione uma nova</p>
                            <a href="?page=biblioteca-listar" class="btn btn-outline-dark">Clique aqui</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="images/atendente.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Atendentes</h5>
                            <p class="card-text">Veja os atendentes cadastrados, edite, exclua ou adicione um novo</p>
                            <a href="?page=atendente-listar" class="btn btn-outline-dark">Clique aqui</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="images/alunos.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Alunos</h5>
                            <p class="card-text">Veja os alunos cadastrados, edite, exclua ou adicione um novo</p>
                            <a href="?page=usuario-listar" class="btn btn-outline-dark">Clique aqui</a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="card" style="width: 18rem;">
                        <img src="images/categorias.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Categorias</h5>
                            <p class="card-text">Veja as categorias cadastradas, edite, exclua ou adicione uma nova</p>
                            <a href="?page=categoria-listar" class="btn btn-outline-dark">Clique aqui</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="images/livros.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Livros</h5>
                            <p class="card-text">Veja os livros cadastrados, edite, exclua ou adicione um novo</p>
                            <a href="?page=livro-listar" class="btn btn-outline-dark">Clique aqui</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="images/reservas.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Reservas</h5>
                            <p class="card-text">Veja as reservas cadastradas, edite, exclua ou adicione uma nova</p>
                            <a href="?page=reserva-listar" class="btn btn-outline-dark">Clique aqui</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        <script src="../js/bootstrap.bundle.min.js"></script>    
    </body>
</html>