<h1>Adicionar Atendente</h1>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">   
        <select name="biblioteca_id_biblioteca" class="form-control">
            <option>--Selecione uma biblioteca--</option>
        <?php
            $sql = "SELECT * FROM biblioteca";
            $res = $conn->query($sql) or die($conn->error);
            if($res->num_rows > 0){
                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_biblioteca."'>";
                    print $row->nome_biblioteca."</option>";
                }
            }else{
                print "Não tem biblioteca cadastrada";
            }
        ?>
        </select>
    <br>
    <div class="form-floating mb-3">    
        <input type="text" name="nome_atendente" class="form-control" id="floatingInput" placeholder=" ">
        <label for="floatingInput">Nome do Atendente</label>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-outline-dark">Adicionar</button>
        <a href="?page=atendente-listar"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
    </div>
</form>