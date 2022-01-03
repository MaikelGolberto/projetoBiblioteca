<h1>Adicionar Livro</h1>
<form action="?page=livro-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">   
        <select name="categoria_id_categoria" class="form-control">
            <option>--Selecione uma categoria--</option>
        <?php
            $sql = "SELECT * FROM categoria";
            $res = $conn->query($sql) or die($conn->error);
            if($res->num_rows > 0){
                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_categoria."'>";
                    print $row->nome_categoria."</option>";
                }
            }else{
                print "Não tem categoria cadastrada";
            }
        ?>
        </select>
    <br>
    <div class="form-floating mb-3">    
        <input type="text" name="titulo_livro" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Titulo do Livro</label>
    </div>
    <div class="form-floating mb-3">    
        <input type="text" name="autor_livro" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Autor do Livro</label>
    </div>
    <div class="form-floating mb-3">    
        <input type="text" name="editora_livro" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Editora do Livro</label>
    </div>
    <div class="form-floating mb-3">    
        <input type="text" name="edicao_livro" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Edição do Livro</label>
    </div>
    <div class="form-floating mb-3">    
        <input type="year" name="ano_livro" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Ano do Livro</label>
    </div>
    <div class="form-floating mb-3">    
        <input type="text" name="localidade_livro" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Localidade do Livro</label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-dark">Adicionar</button>
        <a href="?page=livro-listar"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
    </div>
</form>