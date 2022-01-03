<h1>Adicionar Categoria</h1>
<form action="?page=categoria-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-floating mb-3">
        <input type="text" name="nome_categoria" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Categoria</label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-dark">Adicionar</button>
        <a href="?page=categoria-listar"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
    </div>
</form>