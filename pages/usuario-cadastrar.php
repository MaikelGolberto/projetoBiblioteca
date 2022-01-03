<h1>Adicionar Aluno</h1>
<form action="?page=usuario-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-floating mb-3">
        <input type="text" name="nome_aluno" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Nome do Aluno</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="end_aluno" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Endereço do Aluno</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" name="email_aluno" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Email do Aluno</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="fone_aluno" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Telefone do Aluno</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="data_nasc_aluno" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Data de Nascimento do Aluno - <i>Use: ano-mês-dia</i></label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="genero_aluno" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Gênero do Aluno</label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-dark">Adicionar</button>
        <a href="?page=usuario-listar"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
    </div>
</form>