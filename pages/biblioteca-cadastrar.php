<h1>Adicionar Biblioteca</h1>
<form action="?page=biblioteca-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-floating mb-3">
        <input type="text" name="nome_biblioteca" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Nome da Biblioteca</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="end_biblioteca" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Endereço da Biblioteca</label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-dark">Adicionar</button>
        <a href="?page=biblioteca-listar"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
    </div>
</form>
